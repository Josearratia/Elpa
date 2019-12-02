<?php
include('db/conexion.php');
$nombre = filter_var(ucwords(strtolower($_POST['nombre'])),FILTER_SANITIZE_STRING);
$apellidos = filter_var(ucwords(strtolower($_POST['apellidos'])),FILTER_SANITIZE_STRING);
$sexo = $_POST['sexo'];
$email = filter_var($_POST['correo'],FILTER_VALIDATE_EMAIL);
$cel =filter_var($_POST['telefono'],FILTER_SANITIZE_NUMBER_INT);
$password= $_POST['password'];
$password2= $_POST['password2'];

$password= hash('sha512',$password);
$password2= hash('sha512',$password2);
$iguales = true;

if($password!=$password2){
	echo "Las contraseñas no son iguales. ";
	$iguales = false;
	return $iguales;
}

$statement= "SELECT * FROM usuarios";
$NoExiste = true;

foreach ($conn->query($statement) as $row){
	if( $row['correo'] == $email){
		echo "El usuario ya existe";
		$NoExiste = false;
	break;
	}
}

if($NoExiste && $iguales){
	$guardar="insert into usuarios(nombre, apellidos, sexo, correo, telefono,password) values('$nombre','$apellidos','$sexo','$email','$cel','$password')";
	mysqli_query($connection, $guardar);
}
?>
