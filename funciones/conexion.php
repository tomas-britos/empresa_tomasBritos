<?php
// --- 1. Parámetros de conexión a la base de datos ---
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "empresa_db";

// --- 2. Establecer la conexión usando MySQLi ---
$conexion = new mysqli($db_host, $db_user, $db_pass, $db_name);

// --- 3. Verificar si la conexión fue exitosa ---
if ($conexion->connect_error) {
  die("<div class='error-message'>❌ Error de conexión: " . $conexion->connect_error . "</div>");
}

// Para asegurar que los caracteres (acentos, ñ) se muestren correctamente
$conexion->set_charset("utf8mb4");
?>
