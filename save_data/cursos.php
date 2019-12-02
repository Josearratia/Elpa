<?php
include('db/conexion.php');
	//include('session.php');
$nombre = $_POST['nombre'];
$horario = $_POST['horario'];
$fecha = $_POST['fecha'];
$cantidad_docentes=$_POST['cant_doc'];

mysqli_query($connection,"insert into cursos (nombre,horario,fecha,cantidad_docentes)
 values('$nombre','$horario','$fecha',$cantidad_docentes)")or die(mysqli_error());
//mysqli_query($connection,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Add Class $class_name')")or die(mysqli_error());
?>