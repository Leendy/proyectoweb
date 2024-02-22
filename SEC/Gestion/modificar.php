<?php
	// Establecer el nivel de errores
error_reporting(E_ALL);

// Establecer el directorio del registro de errores
ini_set('error_log', 'error_log.txt');

	ModificarProducto($_POST["idE"], 
	$_POST["nombrereprel"] ,
	$_POST["numeroreprelfijo"],
	$_POST["numeroreprelcel"],
	$_POST["nombrecontacto"],
	$_POST["numerocontactofijo"],
	$_POST["numerocontactocel"],
	$_POST["cargocontacto"],
	$_POST["estimulos"],
	$_POST["claseestimulos"],
	$_POST["valorestimulos"],
 	$_POST["comentarioag"]);

	function ModificarProducto($idE,  $nombrereprel, $numeroreprelfijo, $numeroreprelcel, $nombrecontacto, 
	$numerocontactofijo,$numerocontactocel,$cargocontacto, $estimulos, $claseestimulos, $valorestimulos, $comentarioag)
	
	{
		include '../conexion.php';
            
		echo $sentencia = "UPDATE pgj SET 
		nombrereprel='".$nombrereprel."',numeroreprelfijo='".$numeroreprelfijo."',numeroreprelcel='".$numeroreprelcel."',
		nombrecontacto='".$nombrecontacto."',numerocontactofijo='".$numerocontactofijo."',numerocontactocel='".$numerocontactocel."',cargocontacto='".$cargocontacto."',
		estimulos='".$estimulos."',claseestimulos='".$claseestimulos."',valorestimulos='".$valorestimulos."',comentarioag='".$comentarioag."' WHERE id_Empresas ='".$idE."'";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
	// Agregar la nota al registro de errores

?>

<script type="text/javascript">
	alert("Empresa Actualicada!!");
    window.location.href="tablag.php";
</script>





