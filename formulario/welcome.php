

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
</head>
<body>
    <h1>Su registro se ha hecho satisfactoriamente </h1>
    <?php
    if ($_POST){
        $fname= $_POST["fname"];
        $age= $_POST["age"];
        include "conexion.php";
        $sql = 'INSERT INTO paciente (idpaciente,fname , age) value(" ",$fname , $age)';
        $result = mysqli_query($conectar , $sql) or die ('error en la base de datos valide los campos'. mysqli_error($conectar));
        }
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