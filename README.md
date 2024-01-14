# Proyecto Tienda de Mascotas "Pulgoso"

## Características
El objetivo de este proyecto fue poner en práctica el manejo de sesiones y la validación de datos ingresados en un formulario con los datos de una base de datos en MariaDB.

La base de datos cuenta con una sola tabla llamada 'usuario' compuesta por los siguientes campos:

 - id (AUTOINCREMENT)
 - nombreusr (TEXT)
 - claveusr (TEXT)
 - email (TEXT)
 - rol (TEXT)
 - fecha_creacion (TIMESTAMP)

 Además, se realizaron las siguientes acciones:

  * Verificar los datos del usuario con los datos almacenados en la tabla 'usuario'.
  * En caso que las credenciales sean incorrectas, se redirige al usuario a la pagina principal.
  * Usar consultas preparadas como forma de prevenir ataques de inyección SQL usando 'mysqli_prepare()'.
