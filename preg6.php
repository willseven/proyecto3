<!DOCTYPE html>
<html>
<head>
	<title>PREGUNTA 6</title>
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
	<h2>Introduzca una fecha</h2>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	<input type="text" name="fecha" placeholder="introduzca fecha"><br>
	<input type="submit" name="enviar" value="enviar">
</form>
<?php  
if(isset($_POST["fecha"])){
$fechanum=$_POST['fecha'];
setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
$fecha = strftime("%d de %B de %Y", strtotime($fechanum));
echo "<span>".$fecha."</span>";
}
?>
<p><a href="index.html">inicio</a></p>
</body>
</html>