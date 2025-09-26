<?php
// Array con los campos a mostrar
$campos = ["Nombre", "Apellido", "Empresa", "Domicilio", "Ciudad", "Pais", "Telefono", "Email"];

// --- 4. Preparar la consulta SQL dinámicamente ---
$sql = "SELECT " . implode(", ", $campos) . " FROM clientes";
$resultado = $conexion->query($sql);

// --- 5. Generar la tabla HTML dinámicamente ---
if ($resultado && $resultado->num_rows > 0) {
  echo "<table>";
  
  // Cabecera de la tabla
  echo "<thead><tr>";
  foreach ($campos as $campo) {
    echo "<th>" . htmlspecialchars($campo) . "</th>";
  }
  echo "</tr></thead>";
  
  // Cuerpo de la tabla
  echo "<tbody>";
  // Recorrer columnas 
  while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>";
    // Recorrer campos por columna
    foreach ($campos as $campo) {
      echo "<td>" . htmlspecialchars($fila[$campo]) . "</td>";
    }
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
} else {
  echo "<div class='error-message'> No se encontraron registros en la tabla 'clientes'.</div>";
}
// --- 6. Cerrar la conexión a la base de datos ---
$conexion->close();
?>
