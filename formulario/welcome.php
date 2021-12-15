

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
</head>
<body>
    <center><h1>Su registro se ha hecho satisfactoriamente </h1></center>
    <?php
    include "insercion.php";
    if ($_POST["fname"] && $_POST["age"] != " " ){
        
    $name = $_POST["fname"];
    $age = $_POST["age"];
    echo  " Welcome " . $name . "  cibernauta   " ;
    echo "Your age is : ".  $age . " Years old" ;
    }
    else{
        echo "Los campos con * son requeridos";
    }
    ?>


</body>
</html>