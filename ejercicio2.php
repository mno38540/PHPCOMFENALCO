<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 10;
    $b = 5;
    $c = 6;
    $d = 4;
    $e = 2;
    $suma = $a+$b+$c+$d+$e;
    $promedio = $suma/5; //promedio de los numeros
    
    if ($promedio > 10)
        echo("La suma de los datos ingresados es : ". $suma . "El promedio de los numeros ingresados es ". $promedio ." Mayor a 10")
    ;

    else 
    echo("El promedio de los numeros ingresados es ". $promedio ." Menor a 10");
    

    
        
     ?>
</body>
</html>