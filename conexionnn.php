   <?php
   $host = "mysql-shaib18.alwaysdata.net"; // Reemplaza con tu host de Railway
   $usuario = "shaib18"; // Reemplaza con tu usuario de Railway
   $contrasena = "Amel-1126"; // Reemplaza con tu contraseña de Railway
   $basededatos = "shaib18_testdb"; // Reemplaza con el nombre de tu base de datos de Railway
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
