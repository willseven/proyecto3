<!DOCTYPE html>
<html>
<head>
    <title>PREGUNTA 9</title>
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
    <h2>Calculo semanal de salario</h2>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">

    costo por hora que se le paga: <input type="text" name="numero">
 <input type="submit" value="CALCULAR">
</form>
<?php

if(isset($_POST["numero"]))

{

$hora= $_POST["numero"];
$total = $hora*8*7;
echo "<span>el salario semanal es: ".$total."</span>";

}

?>
<p><a href="index.html">inicio</a></p>
</body>
</html>
 



















 

