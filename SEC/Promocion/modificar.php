<?php
	
	ModificarProducto($_POST['idE'], $_POST["fecha"],
	$_POST["nombre"],
	$_POST["pais"],
	$_POST["sector"],
	$_POST["empleos"],
	$_POST["inversion"],
	$_POST["año"],
	$_POST["region"],
	$_POST["ciudad"],
	$_POST["producto"],
	$_POST["tipo"],
	$_POST["nearshoring"],
	$_POST["anuncio"],
	$_POST["primerap"],
	$_POST["inaugruacion"],
	$_POST["proyecto"],
	$_POST["convenio"],
	$_POST["memo"],
	$_POST["fenvio"],
	$_POST["envioinfo"],
	$_POST["acinfo"],
	$_POST["fechaulact"] );

	function ModificarProducto($idE, $fecha, $nombre, $pais, $sector, $empleos, $inversion, $año, $region
	, $ciudad, $producto, $tipo, $nearshoring, $anuncio, $primerap, $inaugruacion, $proyecto, $convenio, $memo, $fenvio, $envioinfo, $acinfo
	, $fechaulact)
	{
		include '../conexion.php';
            
		echo $sentencia = "UPDATE pgj SET fecha='".$fecha."', nombre='".$nombre."', pais='".$pais."', sector='".$sector."', empleos='".$empleos."', inversion='".$inversion."' , año='".$año."',
		region='".$region."', ciudad='".$ciudad."',producto='".$producto."',tipo='".$tipo."',nearshoring='".$nearshoring."', 
		anuncio='".$anuncio."',primerap='".$primerap."',inaugruacion='".$inaugruacion."',proyecto='".$proyecto."',convenio='".$convenio."',memo='".$memo."',
		fenvio='".$fenvio."',envioinfo='".$envioinfo."',acinfo='".$acinfo."',fechaulact='".$fechaulact."' WHERE id_Empresas ='".$idE."'";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Empresa Actualicada!!");
    window.location.href="Vista.php";
</script>


