<!DOCTYPE html>
<html>
<head>
	<title>PREGUNTA 10</title>
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
            margin-bottom: 30px;
        }
        span{
            display: inline-block;
            padding: 5px;
            font-weight: bold;
            background-color: teal;
            margin: 5px;
            font-size: 20px;
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
	<h2>PREGUNTAS ALEATORIAS</h2>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
	<input type="submit" name="preguntar" value="preguntar">
</form>
<?php  

if(isset($_POST["preguntar"]))

{
$preguntadas = array(); // declaramos una variable que usaremos de contenedor para las preguntas ya realizadas

$array=array('¿Cómo empezó la vida?','¿Estamos solos en el universo?','¿Qué es la conciencia?','¿Cómo se puede obtener mas energia del sol?','¿Las computadoras pueden ser mas veloces?','¿Alguna vez se podra encontrar la cura para el cancer?','¿Cuándo sera posible tener un mayordomo robot?','¿Se puede saber que hay en el fondo del mar?','¿Se puede vivir hasta la edad de 120 años?','¿Es posible viajar a traves del tiempo?');

$items=count($array)-1;

 

for ($i=1; $i<=3; $i++){

    $var=rand( 0 , $items );

    if (in_array($array[$var], $preguntadas)){ // Buscamos si la pregunta ya se habia hecho

        $i--;  // restamos 1 para reutilizar el indice de la pregunta repetida  

    }else{

        echo "<span>".$i.') '.$array[$var].'</span><br>';  // Mostramos la pregunta

        $preguntadas[].=$array[$var];  // y la agregamos a las que ya se hicieron        

    }

}
}
?>
<p><a href="index.html">
	indice
</a></p>
</body>
</html>