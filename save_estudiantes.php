<?php
include('db/conexion.php');
$nombre = filter_var(ucwords(strtolower($_POST['nombre'])),FILTER_SANITIZE_STRING);
$apellidos = filter_var(ucwords(strtolower($_POST['apellido'])),FILTER_SANITIZE_STRING);
$sexo = $_POST['sexo'];
$email = filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL);
$cel =filter_var($_POST['telefono'],FILTER_SANITIZE_NUMBER_INT);

$statement= "SELECT * FROM estudiantes";
$NoExiste = true;
foreach ($conn->query($statement) as $row) {
	if( $row['correo'] == $email){
		echo "El usuario ya existe";
		$NoExiste = false;
	break;
	}
}
if($NoExiste){
	$guardar="insert into estudiantes(nombre, apellidos, sexo, correo, telefono) values('$nombre', '$apellidos', '$sexo','$email','$cel')";
	mysqli_query($connection, $guardar);
}
?>
