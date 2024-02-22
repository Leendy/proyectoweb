<?php
ob_start();
header('Content-Type: application/json');
require '../conexion.php';

$memoObject = array();


$sql = "SELECT * FROM memo";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $memoObject[$row["memo"]] = $row["memo"];
    }
} else {
    echo "0 results";
}

echo json_encode($memoObject); // Cambiar esta línea
?>