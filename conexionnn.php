   <?php
   $host = "your_host"; // Reemplaza con tu host de Railway
   $usuario = "your_user"; // Reemplaza con tu usuario de Railway
   $contrasena = "your_password"; // Reemplaza con tu contraseña de Railway
   $basededatos = "your_database"; // Reemplaza con el nombre de tu base de datos de Railway
   $puerto = 3306; // Puerto por defecto para MySQL

   // Crear conexión
   $conn = new mysqli($host, $usuario, $contrasena, $basededatos, $puerto);

   // Verificar conexión
   if ($conn->connect_error) {
       die("Conexión fallida: " . $conn->connect_error);
   }
   echo "Conexión exitosa";

   // Cierra la conexión cuando ya no sea necesaria
   $conn->close();
   ?>
