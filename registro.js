const { Client } = require('pg');

// Configuración de la conexión a PostgreSQL
const config = {
  user: 'postgres',
  host: 'localhost',
  database: 'FinanJov',
  password: 'admin',
  port: 5432,
};

// Crear un nuevo cliente de PostgreSQL
const client = new Client(config);

// Conectar a la base de datos
client.connect()
  .then(() => {
    // Recibir datos del formulario (asegúrate de validar y sanitizar los datos en un entorno de producción)
    const username = 'usuario'; // Reemplaza con el valor real del formulario
    const email = 'correo@ejemplo.com'; // Reemplaza con el valor real del formulario
    const contrasena = 'contrasena'; // Reemplaza con el valor real del formulario

    // Sentencia SQL para insertar datos en la tabla usuarios
    const sql = 'INSERT INTO users (username, email, contrasena) VALUES ($1, $2, $3) RETURNING *';

    // Ejecutar la consulta
    return client.query(sql, [username, email, contrasena]);
  })
  .then((result) => {
    // Verificar si la inserción fue exitosa
    if (result.rowCount > 0) {
      console.log(`Registro exitoso. ¡Bienvenido, ${username}!`);
      // Redirigir a prestamos.php
      window.location.href = 'prestamos.php';
    } else {
      console.error('Error al registrar la cuenta.');
    }
  })
  .catch((error) => console.error('Error de conexión:', error))
  .finally(() => {
    // Cerrar la conexión
    client.end();
  });