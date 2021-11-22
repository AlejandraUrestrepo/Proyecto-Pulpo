<?php 
$sql = SELECT * FROM alumnos;
$consultaSQL = SELECT * FROM alumnos;

$sentencia = $conexion->prepare($consultaSQL);
$sentencia->execute();

$alumnos = $sentencia->fetchAll();


 ?>