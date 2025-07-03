<?php
// bd_configuracion.php

define('DB_SERVER', 'localhost'); // Usualmente localhost
define('DB_USERNAME', 'root'); // Tu usuario de la base de datos
define('DB_PASSWORD', ''); // Tu contraseña de la base de datos (vacio si no tienes)
define('BD_NAME', 'sindical_db'); // El nombre de la base de datos que creaste 

// Intentar conexión a la base de datos
$conn = new mysqli(BD_SERVER, DB_USERNAME, DB_PASSWORD, BD_NAME);

// Verificar conexión
if ($conn->connect-error) {
    die("ERROR: No se pudo conectar a la base de datos . " . $conn->connect_error);

}
?>