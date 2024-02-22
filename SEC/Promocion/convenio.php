<?php
ob_start();
header('Content-Type: application/json');
require '../conexion.php';

$convenioObject = array();


$sql = "SELECT * FROM convenio";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $convenioObject[$row["convenio"]] = $row["convenio"];
    }
} else {
    echo "0 results";
}

echo json_encode($convenioObject); // Cambiar esta línea
?>