<?php
ob_start();
header('Content-Type: application/json');
require '../conexion.php';

$infoObject = array();


$sql = "SELECT * FROM envioinfo";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $infoObject[$row["envioinfo"]] = $row["envioinfo"];
    }
} else {
    echo "0 results";
}

echo json_encode($infoObject); // Cambiar esta línea
?>