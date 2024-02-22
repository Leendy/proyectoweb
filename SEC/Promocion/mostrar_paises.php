<?php
ob_start();
header('Content-Type: application/json');
require '../conexion.php';

$countryObject = array();


$sql = "SELECT * FROM pais";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $countryObject[$row["pais"]] = $row["pais"];
    }
} else {
    echo "0 results";
}

echo json_encode($countryObject);
?>