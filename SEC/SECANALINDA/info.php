<?php
  
session_start();
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = ''){
 echo'Usted no tiene autorizacion';
  die();
}
  $consulta=ConsultarProducto($_GET['id']);

  function ConsultarProducto( $idE )
  {
   include '../conexion.php';
   $sentencia="SELECT * FROM pgj WHERE id_empresas='".$idE."' ";
   $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
        $fila["fecha"],
        $fila["Nombre"],
        $fila["pais"],
        $fila["sector"],
        $fila["empleos"],
        $fila["inversion"],
        $fila["año"],
        $fila["region"],
        $fila["ciudad"],
        $fila["producto"],
        $fila["tipo"],
        $fila["nearshoring"],
        $fila["anuncio"],
        $fila["primerap"],
        $fila["inaugruacion"],
        $fila["proyecto"],
        $fila["convenio"],
        $fila["memo"],
        $fila["fenvio"],
        $fila["envioinfo"],
        $fila["acinfo"],
        $fila["fechaulact"],
        $fila["nombrereprel"],
        $fila["numeroreprelfijo"],
        $fila["numeroreprelcel"],
        $fila["nombrecontacto"],
        $fila["numerocontactofijo"],
        $fila["numerocontactocel"],
        $fila["cargocontacto"],
        $fila["estimulos"],
        $fila["claseestimulos"],
        $fila["valorestimulos"],
        $fila["comentarioag"],
        $fila["fechaconvenio"],
        $fila["comentarioaj"],
       ]; 


   $sql = "SELECT * FROM pgj WHERE id = 1";
   $result = $conexion->query($sql);
   
   
   if ($result->num_rows > 0) {
   
       $consulta = $result->fetch_assoc();
   
    
       if (isset($consulta[34]) && !empty($consulta[34])) {
     
           echo '<textarea name="" id="" cols="30" rows="10" value="' . $consulta[34] . '" readonly>' . $consulta[34] . '</textarea>';
       } else {
           // Mostrar un valor predeterminado o un mensaje de error
           echo '<textarea name="" id="" cols="30" rows="10" value="" readonly>No se encontró ningún valor</textarea>';
       }
   } else {
       echo "0 results";
   }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="copyright" content="Leendy Kasandra Escamilla Cardona &copy; 2024">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fotter.css">
    <link rel="stylesheet" href="../css/info.css">
    <title>Información</title>
</head>
<body>
    <header class="header">
        <a href="index.html">
            <img class="header__logo" src="../img/WEQ.png" alt="Logotipo">
            <img class="header__logos" src="../img/dsgsd.png" alt="Logotipo">
        </a>
    </header>


<div class="nav-bg">
    <nav class="navegacion-principal contenedor">
        <span class="icon-menu" id="btnmenu"></span>
            
            <a href="#"><?php echo $_SESSION['usuario']; ?></a></li>

            <a class="navegacion__enlace navegacion__enlace--activo"  href="../cerrar_sesion.php" class="menu__link">Notas de Gestion</a></li>
            <a class="navegacion__enlace navegacion__enlace--activo"  href="../cerrar_sesion.php" class="menu__link">Notas de Juridico</a></li>
            <a class="navegacion__enlace navegacion__enlace--activo"  href="vistasec.php" class="menu__link">Volver</a></li>
            <a class="navegacion__enlace navegacion__enlace--activo"  href="../cerrar_sesion.php" class="menu__link">Cerrar sesion</a></li>
    </nav>
    </div>
    <br>
    <br>
    <h2 class="titulo">Promoción</h2>
    <br>
<div class="vista contenedor">
   
                <div class="mismo  " >
                <div class="div-2">
                            <input type="hidden" name="idE" value="<?php echo $_GET['id']?>">
                            <h4>Fecha de Confirmación</h4>
                     <input type="date" class="loves" id="date" disabled name="fecha" value="<?php echo $consulta[0] ?>"><br>
                     </div>
                  
                    <div class="div-2">
                            <input type="hidden" name="idE" value="<?php echo $_GET['id']?>">
                            <h4>Nombre</h4>
                     <input type="text" class="love" id="nombre" disabled name="nombre" value="<?php echo $consulta[1] ?>"><br>
                     </div>
                     <div class="div-3">
                            <h4>País de Origen </h4>
                    <input type="text" id="pais" class="lovs" autocomplete="off" disabled name="pais"  value="<?php echo $consulta[2] ?>"><br>
                    </div>
                    <div class="div-4">
                            <h4>Sector Scian</h4>
                    <input type="text" disabled class="love" id="sector" name="sector" value="<?php echo $consulta[3] ?>"><br>
                    </div>
                   
                    <div class="div-5">
                            <h4>Empleos</h4>
                    <input type="number" id="empleos" class="lovs" disabled name="empleos" value="<?php echo $consulta[4] ?>"><br>
                    </div> 
                  
                    <div class="div-6">
                            <h4>Inversión MDD</h4>
                    <input type="number" id="inversion" class="lovs" disabled name="inversion" value="<?php echo $consulta[5] ?>"><br>
                    </div>
                  
                    <div class="div-8">
                            <h4>Region</h4>
                    <input type="text" id="region" class="lovs" name="region" disabled value="<?php echo $consulta[7] ?>"><br>
                    </div>
                    <div class="div-9">
                            <h4>Ciudad</h4>
                    <input type="text" id="ciudad" class="lovs" name="ciudad" disabled value="<?php echo $consulta[8] ?>"><br>
                    </div>
                    <div class="div-10">
                            <h4>Descripción del Producto</h4>
                    <input type="text" id="producto" class="lovs" name="producto" disabled value="<?php echo $consulta[9] ?>"><br>
                    </div>
                    <div class="div-11">
                            <h4>Tipo de Proyecto</h4>
                    <input type="text" id="tipo" name="tipo" class="lovs" disabled value="<?php echo $consulta[10] ?>"><br>
                    </div>
                    <div class="div-12">
                            <h4>Nearshoring</h4>
                    <input type="text" id="nearshoring" class="lovs" name="nearshoring" disabled value="<?php echo $consulta[11] ?>"><br>
                    </div>
                  
                    <div class="div-13">
                            <h4>Anuncios de Inversión</h4>
                    <input type="text" id="anuncio" class="lovs" name="anuncio" disabled value="<?php echo $consulta[12] ?>"><br>
                    </div>
                 
                    <div class="div-14">
                            <h4>Primera Piedra</h4>
                    <input type="text" id="primerap" class="lovs" name="primerap" disabled value="<?php echo $consulta[13] ?>"><br>
                    </div>
                    <div class="div-14">
                            <h4>Inaugruación</h4>
                    <input type="text" id="inaugruacion" class="lovs" name="inaugruacion" disabled value="<?php echo $consulta[14] ?>"><br>
                    </div>
                </div>   
           
</div>
<br><br>
<h2 class="titulo">Gestión</h2>
<br>
        <div class="vista contenedor">
                <div class="mismo">
                    <div class="div-2">
                            <input type="hidden" name="idE" value="<?php echo $_GET['id']?>">
                            <h4>Nombre del Representante Legal</h4>
                     <input type="text" class="lovs" id="nombrereprel" disabled name="nombrereprel" value="<?php echo $consulta[22] ?>"><br>
                     </div>
                     <div class="div-3">
                            <h4>Telefono del representante Legal</h4>
                    <input type="tel" id="numeroreprelfijo" class="lovs" autocomplete="off" disabled name="telefono"  value="<?php echo $consulta[23] ?>"><br>
                    </div>
                    <div class="div-3">
                            <h4>Celular del representante Legal</h4>
                    <input type="tel" id="numeroreprelcel" class="lovs" autocomplete="off" disabled name="telefono"  value="<?php echo $consulta[24] ?>"><br>
                    </div>
                    <div class="div-4">
                            <h4>Nombre del contacto</h4>
                    <input type="text" disabled class="love" id="nombrecontacto" name="nombrecontacto" value="<?php echo $consulta[25] ?>"><br>
                    </div>
                   
                    <div class="div-5">
                            <h4>Telefono del Contacto</h4>
                    <input type="tel" id="numerocontactofijo" class="loves" disabled name="numerocontacto" value="<?php echo $consulta[26] ?>"><br>
                    </div> 
                    <div class="div-5">
                            <h4>Celular del Contacto</h4>
                    <input type="tel" id="numerocontactocel" class="loves" disabled name="numerocontacto" value="<?php echo $consulta[27] ?>"><br>
                    </div> 
                    <div class="div-5">
                            <h4>Cargo del Contacto</h4>
                    <input type="text" id="cargocontacto" class="loves" disabled name="numerocontacto" value="<?php echo $consulta[28] ?>"><br>
                    </div> 
                  
                    <div class="div-6">
                            <h4>Cuenta con Estimulos</h4>
                    <input type="text" id="estimulos" class="lovs" disabled name="estimulos" value="<?php echo $consulta[29] ?>"><br>
                    </div>
                 
                    <div class="div-7">
                            <h4>Tipo de Estimulos</h4>
                    <input type="text" id="claseestimulos" name="claseestimulos" class="lovs" disabled value="<?php echo $consulta[30] ?>"><br>
                    </div>
                    <div class="div-7">
                            <h4>Valor del estimulo</h4>
                    <input type="text" id="valorestimulos" name="valorestimulos" class="lovs" disabled value="<?php echo $consulta[31] ?>"><br>
                    </div>
                    </div>
 </div><br>
 <div class="mismos">
 <div class="div-8">
                            <h4>Comentario Adicional</h4>
  
<textarea name="comentarioag" id="comentarioag"  disabled cols="" rows="5"><?php echo $consulta[32] ?></textarea>
<script>
    // Seleccionar el textarea
    var textarea = document.getElementById('textarea');

    // Escuchar el evento de cambio de tamaño del textarea
    textarea.addEventListener('input', function() {
        // Establecer el ancho y alto del textarea al tamaño del texto
        textarea.style.width = (textarea.scrollWidth) + 'px';
        textarea.style.height = (textarea.scrollHeight) + 'px';
    });
</script>
         </div>
</div> </div>

<br>
<br>
<h2 class="titulo">Juridico</h2>
<br>
<div class="vista contenedor">  

                <div class="mismo">
                   
                
                    <div class="div-2">
                            <input type="hidden" name="idE" value="<?php echo $_GET['id']?>">
                            <h4>Fecha de Convenio</h4>
                     <input type="text" class="lovs" id="fechaconvenio" disabled name="fechaconvenio" value="<?php echo $consulta[33] ?>"><br>
                     </div>
                     <div class="div-3">
                            <h4>Comentario Adicional </h4>
                            <textarea name="comentarioag" id="comentarioag"  disabled cols="" rows="5"><?php echo $consulta[34] ?></textarea>
<script>
    // Seleccionar el textarea
    var textarea = document.getElementById('textarea');

    // Escuchar el evento de cambio de tamaño del textarea
    textarea.addEventListener('input', function() {
        // Establecer el ancho y alto del textarea al tamaño del texto
        textarea.style.width = (textarea.scrollWidth) + 'px';
        textarea.style.height = (textarea.scrollHeight) + 'px';
    });
</script>
                   
                    </div>
                   
                </div>
  </div>          


 <br><br>
    <!--Pie de Pagina></-->
    <footer class="footer">
        <p class="footer__texto">Secretaría de Economía - Todos los derechos Reservados 2024.</p>
    </footer>



    <script src="../js/menu.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script src="../js/area.js"></script>

</body>

</html>
