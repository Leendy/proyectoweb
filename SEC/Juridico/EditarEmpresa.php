<?php
  
session_start();
 $varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = ''){
   echo'Usted no tiene autorizacion';
   die();
}
  $consulta=ConsultarProducto($_GET['id_empresas']);

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


  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="copyright" content="Leendy Kasandra Escamilla Cardona &copy; 2024">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/AgregarEmpresa.css">
    <link rel="stylesheet" href="../css/vistasec.css">
    <link rel="stylesheet" href="../css/info.css">
    <title>Editar Empresa</title>
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
        
            <a href="#" ><?php echo $_SESSION['usuario']; ?></a></li>
            <a class="navegacion__enlace navegacion__enlace--activo"  href="../cerrar_sesion.php" class="menu__link">Cerrar sesion</a></li>
            <a class="navegacion__enlace navegacion__enlace--activo"  href="Vista.php" class="menu__link">Volver</a></li>
    </nav>
    </div>


    <img class="wave" src="../img/drawline.png">
    <div class="container1">
        <div class="img">
            <img src="../img/undraw_sync_files_xb3r.svg">
        </div>

        <div id="contenido">
            <div class="login-content">
                <form action="modificar.php" method="POST">
                    <h2 class="title">Modificar Empresa</h2>
        
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                             <input type="hidden" name="idE" value="<?php echo $_GET['id_empresas']?>">
                             <h5>Fecha</h5>
                                 <input type="date" id="fechaconvenio" class="input" name="fechaconvenio" value="<?php echo $consulta[33] ?>"><br>
                        </div>
                    </div>
                    <br><br>
                    <label for="nota">Si se realizo una modificación al convenio inicial, porfavor describa a continuación:</label><br>
	<br>
        <textarea class="oves" id="comentarioaj" name="comentarioaj" rows="4" cols="50" style="height: 174px; width: 384px;" ><?php echo $consulta[34] ?></textarea>
                       

                      <br><br>
                    
                       


                    <br>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
            </div>

        </div>



    </div>
    <!--Pie de Pagina></-->
    <footer class="main-footer">
        <div class="container container--flex">
            <div class="column column--33">
              

            </div>
            <p class="copy">© 2019 Finsa | Todos los derechos reservados</p>
        </div>

    </footer>



    <script src="../js/menu.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>

</body>

</html>
