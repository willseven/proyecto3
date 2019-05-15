<!DOCTYPE html>
<html>
<head>
	<title>PREGUNTA 1</title>
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
		table{
			background-color: teal;
			padding: 4px;
			margin: auto;
		}
		tr td{
			padding: 20px;
			background-color: black;
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
	<h2>Introduzca un numero n para generar la tabla nxn</h2>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	<input type="text" name="numero" placeholder="introduzca numero"><br>
	<input type="submit" name="enviar" value="enviar">
</form>
<table>
	<tbody>
<?php 
if(isset($_POST["numero"])){
$variable = $_POST['numero'];
	$increm = 0;
while ($increm < $variable) {
			$increm2=0;
			?>
	<tr>
		<?php 
			while($increm2<$variable){
				?>
					<td></td>
				<?php
				$increm2=$increm2+1;
	}
		?>
	</tr>
			<?php
			$increm= $increm+1;
		}} ?>

		</tbody>
</table>
<p><a href="index.php">inicio</a></p>
</body>
</html>