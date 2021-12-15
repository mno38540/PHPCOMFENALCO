<?php
if ($_POST){
    include "conexion.php";
    $fname= $_POST["fname"];
    $age= $_POST["age"];
    
    $sql = "INSERT INTO paciente (idpaciente,fname , age) 
                    VALUES(' ','$fname' , '$age')";
    $result = mysqli_query($conectar , $sql) or die ('error en la base de datos valide los campos'.mysqli_error($conectar));
    }

?>