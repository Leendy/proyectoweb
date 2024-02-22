<?php
ob_start();
header('Content-Type: application/json');
require '../conexion.php';

$ScianObject = array();


$sql = "SELECT * FROM sector";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $ScianObject[$row["sector"]] = $row["sector"];
    }
} else {
    echo "0 results";
}

echo json_encode($ScianObject); // Cambiar esta línea
?>