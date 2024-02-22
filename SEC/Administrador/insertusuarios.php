<?php
include '../conexion.php';

$nombre = $_POST["Nombre"];
$paterno = $_POST["ApellidoPaterno"];
$materno = $_POST["ApellidoMaterno"];
$user = $_POST["NombreUsuario"];
$pass = $_POST["Password1"];
$rol = $_POST["Rol"];
$dep = $_POST["Departamento"];
$fecha = $_POST["Date"];





$verificar_usuario = mysqli_query($conexion,"SELECT * FROM trabajador WHERE Usuario = '$user'");
if (mysqli_num_rows($verificar_usuario) > 0) {
echo '<script> alert("El ya se ha registrado");
				window.history.go(-1);
</script>';
exit;
}

$insertar = "INSERT INTO trabajador
 VALUES ('','$nombre','$paterno','$materno','$user','$pass','$rol','$dep','$fecha')";

$resultado = mysqli_query($conexion,$insertar);





if (!$resultado) {
    echo '<script> alert("Error al registrar el programa");
window.location.href="Usuario/RegistroProgramasUsuario.php";
</script>';
}else{
    
echo '<script> alert("Programa registrado correctamente");
window.location.href="RegistrarUsuario.php";
</script>';
}
mysqli_close($conexion);
?>