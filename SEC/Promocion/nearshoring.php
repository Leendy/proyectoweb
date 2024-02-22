<?php
ob_start();
header('Content-Type: application/json');
require '../conexion.php';

$nearshoringObject = array();


$sql = "SELECT * FROM nearshoring";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $nearshoringObject[$row["nearshoring"]] = $row["nearshoring"];
    }
} else {
    echo "0 results";
}

echo json_encode($nearshoringObject); // Cambiar esta línea
?>