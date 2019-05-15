<!DOCTYPE html>
<html>
<head>
    <title>PREGUNTA 8</title>
    <style type="text/css">
        body{
            font-family: verdana;
            background-color: rgba(0,0,0,.2);
        }
        h2{
            text-align: center;
        }
        [type=text]{
            display: none;
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
    <h2>SIMULACION DEL LANZAMIENTO DE DOS DADOS</h2>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
<input type="text" name="numero" value="2">
    <input type="submit" value="TIRAR DADOS">
</form>
<?php

if(isset($_POST["numero"]) && $_POST["numero"]>=2)
{
    $numeros=array();
    for($i=0;$i<$_POST["numero"];$i++)
    {
        $numeros[]=rand(1,6);
    }
    $pares=0;
    foreach($numeros as $numero)
    {
        if($numero%2==0)
            $pares++;
    }

 

    echo "<br>Los numeros que han salido son: <span>".implode(", ",$numeros)."</span>";

    echo "<br>La suma de los ".$_POST["numero"]." dados es: ".array_sum($numeros);
}

?>
<p><a href="index.html">inicio</a></p>
</body>
</html>
 
