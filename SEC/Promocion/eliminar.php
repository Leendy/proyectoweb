<?php
	EliminarUsuario($_GET['id_empresas']);
	function EliminarUsuario($id_e)
	{
		include '../conexion.php';
		$sentencia="DELETE FROM pgj WHERE id_empresas ='".$id_e."'";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("Empresa Eliminada!!");
    window.location.href="Vista.php";
	
</script>
