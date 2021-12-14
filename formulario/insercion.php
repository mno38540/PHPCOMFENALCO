<?php
if ($_POST){
    $fname= $_POST["fname"];
    $age= $_POST["age"];
    include "conexion.php";
    $sql = 'INSERT INTO paciente (idpaciente,fname , age) value(" ",$fname , $age)';
    $result = mysqli_query($conectar , $sql) or die ('error en la base de datos valide los campos'. mysqli_error($conexion));
    }

?>