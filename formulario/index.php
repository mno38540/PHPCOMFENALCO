<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contador5040</title>
</head>
<body>
    <form action="index.php" method = "Post">
        name *:  <input type="text" name="fname" >
        Age  *: <input type="number" name="age" >
        <input type="submit">

    </form>
    <?php
     include "conexion.php";
     $rsql = 'SELECT * FROM clinica';
     $result = mysqli_query($conectar , $rsql);

if ($_POST){
    $fname= $_POST["fname"];
    $age= $_POST["age"];
   
    $sql = 'INSERT INTO paciente (idpaciente,fname , age) VALUE("",$fname , $age)';
    $stmt= $conectar->prepare ($sql);
    $stmt->bind_param("", $fname,$age);
    if($stmt->execute()){
        header("location:index.php");
    }
    $stmt->close();
    $conectar->close();
    }

?>
</body>
</html>

