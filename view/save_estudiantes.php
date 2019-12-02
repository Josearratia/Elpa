<?php 
include('/conexion.php');

if (isset($_POST["nombre"], $_POST["apellidos"], $_POST["sexo"]) and $_POST["email"] !=""){

$nombre = filter_var(ucswords(strtolower($_POST['nombre'])),FILTER_SANITIZE_STRING);
$apellidos = filter_var(ucswords(strtolower($_POST['paterno'])),FILTER_SANITIZE_STRING);
$sexo = $_POST['sexo'];
$email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
$cel = filter_var($_POST['telefono'],FILTER_SANITIZE_NUMBER_INT);

//$password = $_POST['password'];
//$password = $_POST['password2'];

//$password=hash('sha512',$password);
//$password2=hash('sha512',$password2);

//$status='';
//if ($password!=$password2){
//	echo "las contraseñas no son iguales";
//}

$statment =$conn->prepare('INSERT INTO `usuarios`(`nombre`, `apellidos`, `sexo`, `correo`, `telefono`) 
	VALUES(:nombre,:apellidos,:sexo,:email,:cel)');
       
$statment -> execute(array(':nombre'=>$nombre,':apellidos'=>$apellidos,':sexo'=>$sexo,':sexo'=>$sexo,':email'=>$email));




	//$guardar=$conn->prepare();

/*$statement->execute (array('email'=>$email));

$resultado= $statement->fetch();



if($resultado != false)
{
	echo "el correo ya existe";
}

else{*/

}else{
	echo '<p>Por favor, complete el <a href="estudiantes.html">estudiantes</a></p>';

}

if (mysql_query($consulta) ){
echo "<p>Registro agregado.</p>";
} else {
echo "<p>No se agregó...</p>";
}
