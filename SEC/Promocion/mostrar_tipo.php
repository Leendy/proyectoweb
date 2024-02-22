<?php
ob_start();
header('Content-Type: application/json');
require '../conexion.php';

$tipoObject = array();


$sql = "SELECT * FROM tipo";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $tipoObject[$row["tipo"]] = $row["tipo"];
    }
} else {
    echo "0 results";
}

echo json_encode($tipoObject); // Cambiar esta línea
?>