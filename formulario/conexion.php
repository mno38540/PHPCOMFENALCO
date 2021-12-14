<?php
$servidor= "localhost";
$usuario = "root";
$clave="";
$bd ="clinica";


$conectar = mysqli_connect ($servidor, $usuario , $clave, $bd)or die ( mysqli_error($conectar));
?>