<?php
include '../conexion.php';



$fecha = $_POST["fecha"];
$nombre= $_POST["nombre"];
$pais= $_POST["pais"];
$sector= $_POST["sector"];
$empleos= $_POST["empleos"];
$inversion= $_POST["inversion"];
$año= $_POST["año"];
$region= $_POST["region"];
$ciudad= $_POST["ciudad"];
$producto= $_POST["producto"];
$tipo= $_POST["tipo"];
$nearshoring= $_POST["nearshoring"];
$anuncio= $_POST["anuncio"];
$primerap= $_POST["primerap"];
$inaugruacion= $_POST["inaugruacion"];
$proyecto= $_POST["proyecto"];
$convenio= $_POST["convenio"];
$memo= $_POST["memo"];
$fenvio= $_POST["fenvio"];
$envioinfo= $_POST["envioinfo"];
$acinfo= $_POST["acinfo"];
$fechaulact= $_POST["fechaulact"];




$verificar_empresa = mysqli_query($conexion,"SELECT * FROM pgj WHERE nombre = '$nombre'");
if (mysqli_num_rows($verificar_empresa) > 0) {
echo '<script> alert("La empresa ya se ha registrado");
				window.history.go(-1);
</script>';
exit;
}

$insertar = "INSERT INTO pgj
 VALUES ('','$fecha','$nombre','$pais','$sector','$empleos','$inversion','$año','$region','$ciudad','$producto','$tipo'
,'$nearshoring','$anuncio','$primerap','$inaugruacion','$proyecto','$convenio','$memo','$fenvio','$envioinfo','$acinfo'
,'$fechaulact','','','','','','','','','','','','','')";



$resultado = mysqli_query($conexion,$insertar);

if (!$resultado) {
    echo '<script> alert("Error al registrar el programa");
window.location.href="Promocion/Vista.php";
</script>';
}else{
    
echo '<script> alert("Programa registrado correctamente");
window.location.href="AgregarEmpresa.php";
</script>';
}


mysqli_close($conexion);
?>