<?php
	
	ModificarProducto($_POST['idE'], 
	$_POST['fechaconvenio'],
	$_POST['comentarioaj']);

	function ModificarProducto($idE,  $fechaconvenio,$comentarioaj)
	{
		include '../conexion.php';
            
		echo $sentencia = "UPDATE pgj SET 
		fechaconvenio='".$fechaconvenio."' , 	comentarioaj='".$comentarioaj."' WHERE id_Empresas ='".$idE."'";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Empresa Actualicada!!");
    window.location.href="Vista.php";
</script>



