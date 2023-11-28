<?php

// Configuración de la conexión a PostgreSQL
$host = "localhost";
$port = "5432";
$dbname = "FinanJov";
$user = "postgres";
$password = "admin";

// Conexión a la base de datos
$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . pg_last_error());
}

// Recibir datos del formulario (asegúrate de validar y sanitizar los datos en un entorno de producción)
$username = $_POST['username'];
$email = $_POST['email'];
$contrasena = ($_POST['contrasena']); // Se utiliza password_hash para almacenar contraseñas de forma segura
echo "Registro exitoso. ¡Bienvenido, $username!";
// Sentencia SQL para insertar datos en la tabla usuarios
$sql = "INSERT INTO users (username, email, contrasena) VALUES ($1, $2, $3)";

// Preparar y ejecutar la sentencia
$resultado = pg_query_params($conexion, $sql, array($username, $email, $contrasena));

// Verificar si la inserción fue exitosa
if ($resultado) {
  header("Location: prestamos.php");
  exit(); 
} else {
    echo "Error al registrar la cuenta: " . pg_last_error();
}

// Cerrar la conexión
pg_close($conexion);

?>
