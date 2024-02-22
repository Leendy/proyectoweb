

<?php
ob_start();
header('Content-Type: application/json');
require '../conexion.php';

$sql = "SELECT * FROM regiones";
$result = $conexion->query($sql);

// Inicializar el arreglo de regiones
$regiones = [];

// Iterar sobre los resultados de la consulta y llenar el arreglo de regiones
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $regiones[$row["nombre"]] = [];
    }
} else {
    echo "0 results";
}

// Consultar las ciudades
$sql = "SELECT ciudades.nombre, ciudades.region_id, regiones.nombre as region_nombre FROM ciudades INNER JOIN regiones ON ciudades.region_id = regiones.id";
$result = $conexion->query($sql);

// Iterar sobre los resultados de la consulta y llenar el arreglo de regiones con las ciudades
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $regiones[$row["region_nombre"]][] = $row["nombre"];
    }
} else {
    echo "0 results";
}

// Convertir el arreglo en formato JSON
$json = json_encode($regiones);

// Verificar si el JSON es válido
if (json_last_error() === JSON_ERROR_NONE) {
    // Si el JSON es válido, enviarlo como respuesta
    header('Content-Type: application/json');
    echo $json;
} else {
    // Si el JSON no es válido, mostrar un mensaje de error
    http_response_code(500);
    echo json_last_error_msg();
}
if (!$result) {
    http_response_code(500);
    echo "Error: " . $conexion->error;
}
// Cerrar la conexión
$conexion->close();
?>