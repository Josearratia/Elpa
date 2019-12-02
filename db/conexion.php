 <?php 
$connection = mysqli_connect('localhost','root','','inscripciones_cnadn');
if (!$connection) {
	die("Connection failed" . mysqli_connect_error());
}

$host='localhost';
$user='root';
$pass='';
$bd='inscripciones_cnadn';

try 
{
	$conn = new PDO('mysql: host=localhost; dbname=inscripciones_cnadn','root','');
	
}
 catch (PDOException $e) 
{
	echo "Error al conectar a la base de datos".$e->getMessage();	
}

?>