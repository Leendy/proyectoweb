<?php
ob_start();
header('Content-Type: application/json');
require '../conexion.php';

$añoObject = array();


$sql = "SELECT * FROM año";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $añoObject[$row["año"]] = $row["año"];
    }
} else {
    echo "0 results";
}

echo json_encode($añoObject); // Cambiar esta línea
?>