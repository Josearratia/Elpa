<?php
include('db/conexion.php');
$nombre = filter_var(ucwords(strtolower($_POST['nombre'])),FILTER_SANITIZE_STRING);

$statement= "SELECT * FROM curso";
$NoExiste = true;

foreach ($conn->query($statement) as $row){
	if( $row['nombre'] == $nombre){
		echo "El curso ya existe";
		$NoExiste = false;
	break;
	}
}

if($NoExiste){
	$guardar="insert into curso(nombre) values('$nombre')";
	mysqli_query($connection, $guardar);
}
?>
