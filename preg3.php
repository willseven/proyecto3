<!DOCTYPE html>
<html>
<head>
	<title>PREGUNTA 3</title>
	<style type="text/css">
		body{
			font-family: verdana;
			background-color: rgba(0,0,0,.2);
		}
		h2{
			text-align: center;
		}
		[type=text]{
			padding: 5px;
			border-radius: 5px;
			border:1px solid silver;
			margin-bottom: 5px;
		}
		[type=submit]{
			padding: 5px 10px;
		}
		span{
			display: block;
			padding: 5px;
			font-weight: bold;
		}
		p a{
    color: white;
    background-color: black;
    text-decoration: none;
    padding: 10px;
    font-weight: bold;
}
	</style>
</head>
<body>
	<h2>Introduzca un numero n para determinar si es perfecto o no</h2>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	<input type="text" name="numero" placeholder="introduzca numero"><br>
	<input type="submit" name="enviar" value="enviar">
</form>
<?php 
if(isset($_POST["numero"])){
$n=$_POST['numero'];
$s=0;
$d=1;
do {
	if ($n%$d==0) {
		$s=$s+$d;
	}
	$d=$d+1;
} while ( $d < $n);
if ($s==$n) {
	echo "<span>".$n." es perfecto!</span>";
}else{
	echo "<span>".$n." no es perfecto!</span>";
}
}
?>
<p><a href="index.html">inicio</a></p>
</body>
</html>