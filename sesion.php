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
$contrasena = $_POST['contrasena'];

// Sentencia SQL para buscar usuario y contraseña en la tabla users
$sql = "SELECT * FROM users WHERE username = $1 AND contrasena = $2";

// Preparar y ejecutar la sentencia


// Preparar y ejecutar la sentencia
$resultado = pg_query_params($conexion, $sql, array($username, $contrasena ));

// Verificar si se encontró el usuario
if ($fila = pg_fetch_assoc($resultado)) {
    // Mostrar los datos del usuario
    header("Location: prestamos.php");
    exit(); 
} else {
    echo "No se encontraron datos del usuario.";
}

// Verificar si se encontró un usuario con las credenciales proporcionadas


// Cerrar la conexión
pg_close($conexion);

?>
