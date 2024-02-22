<?php
ob_start();
header('Content-Type: application/json');
require '../conexion.php';

$proyectoObject = array();


$sql = "SELECT * FROM proyecto";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $proyectoObject[$row["proyecto"]] = $row["proyecto"];
    }
} else {
    echo "0 results";
}

echo json_encode($proyectoObject); // Cambiar esta línea
?>