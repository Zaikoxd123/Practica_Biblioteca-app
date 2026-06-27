<?php   
//configuracion de la base de datos
$host = "localhost"; // nombre del servidor
$user = "Mikuxd";    // nombre de usuario
$password = "P3nt4g0n_0m"; //contraseña
$database = "bibliotecadb"; //Nombre de la base de datos

//crear conexion 
$conn = new mysqli ($host, $user, $password, $database);

//verificar conexion
if ($conn->connect_error) {
    die("connection falied: " . $conn->connect_error);
}

//establecer conexion
$conn->set_charset("utf8mb4");
echo "La conexion a la base de datos de la biblioteca ha sido establecida de forma exitosa :)";

?>