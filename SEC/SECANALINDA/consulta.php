<?php
include 'conexion.php';

$sql = "SELECT * FROM pgj WHERE id = ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    $consulta = $result->fetch_assoc();

 
    if (isset($consulta[28]) && !empty($consulta[28])) {
  
        echo '<textarea name="" id="" cols="30" rows="10" value="' . $consulta[28] . '" readonly>' . $consulta[28] . '</textarea>';
    } else {
        // Mostrar un valor predeterminado o un mensaje de error
        echo '<textarea name="" id="" cols="30" rows="10" value="" readonly>No se encontró ningún valor</textarea>';
    }
} else {
    echo "0 results";
}

// Cerrar la conexión
$conn->close();
?>