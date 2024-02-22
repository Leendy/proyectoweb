<?php
// Conexión a la base de datos
include '../conexion.php';

// Obtener los datos enviados desde el formulario
$id_empresas = $_POST["id_empresas"];
$nota = $_POST["nota"];

// Insertar los datos en la tabla "agregar_nota"
$query = "INSERT INTO agregar_nota (id_empresas, nota) VALUES ('$id_empresas', '$nota')";
if (mysqli_query($conexion, $query)) {
    echo "Nota agregada exitosamente";
} else {
    echo "Error: " . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);

// Redireccionar a la página de agregar nota
header("Location: AgregarNota.php");
exit();
?>
