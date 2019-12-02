<?php
	include('db/conexion.php');
	//include('session.php');
$nombre = $_POST['nombre'];
//INSERT INTO curso (nombre) VALUES ('Estrutura de datos');
mysqli_query($connection,"insert into curso (nombre) values('$nombre)")or die(mysqli_error());
//mysqli_query($connection,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Add Class $class_name')")or die(mysqli_error());
?>