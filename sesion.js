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
    const contrasena = 'contrasena'; // Reemplaza con el valor real del formulario

    // Sentencia SQL para buscar usuario y contraseña en la tabla users
    const sql = 'SELECT * FROM users WHERE username = $1 AND contrasena = $2';

    // Ejecutar la consulta
    return client.query(sql, [username, contrasena]);
  })
  .then((result) => {
    // Verificar si se encontró el usuario
    if (result.rows.length > 0) {
      // Mostrar los datos del usuario
      console.log('Usuario encontrado');
    } else {
      console.log('No se encontraron datos del usuario.');
    }
  })
  .catch((error) => console.error('Error de conexión:', error))
  .finally(() => {
    // Cerrar la conexión
    client.end();
  });