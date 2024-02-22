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
    <link rel="stylesheet" href="../css/info.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    

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

        <?php
    include '../conexion.php';
        $sentecia="SELECT * FROM pgj

     ";

?>
        <div id="contenido">
            <div class="login-content">
                <form action="modificar.php" method="POST">
                    <h2 class="title">Modificar Empresa</h2>
                    <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
        <h5>Fecha Confirmación</h5>
          <input type="date" class="input" id="fecha" name="fecha" required value="<?php echo $consulta[0] ?>">
        </div>
      </div>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                             <input type="hidden" name="idE" value="<?php echo $_GET['id_empresas']?>">
                             <h5>Proyecto</h5>
                                 <input type="text" id="nombre" class="input" name="nombre" value="<?php echo $consulta[1] ?>"><br>
                        </div>
                    </div>
                    
                      <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                            <h5>País Origen de Inversión</h5>
                            <select class="input" name="pais"  id="countrSel">
    <option value=""><?php echo $consulta[2] ?></option>
  </select>
                                            </div>
                    </div>
                       <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                            <h5>Sector Scian</h5>
                            <select class="input" name="sector"  id="ScianSel">
    <option value=""><?php echo $consulta[3] ?></option>
  </select>
                    
                        </div>
                    </div>
                    
                        <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                            <h5>Empleos</h5>
                    <input type="number" id="empleos" class="input" name="empleos" value="<?php echo $consulta[4] ?>"><br>
                        </div>
                    </div>
                    
                        <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                            <h5>Inversión MDD</h5>
                    <input type="number" id="inversion" class="input" name="inversion" value="<?php echo $consulta[5] ?>"><br>
                        </div>
                    </div>
                    
                        <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                            <h5>Año</h5>
                            <select  class="input" name="año" id="añoSel"  value="<?php echo $consulta[6] ?>">
                            <option value="<?php echo $consulta[6] ?>"><?php echo $consulta[6] ?></option>
                    </select>
                        </div>
                    </div>
                        <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                            <h5>Region</h5>
                            <select class="input"name="region" id="regionSel">
          <option value=""><?php echo $consulta[7] ?></option>
          </select>
                  
                        </div>
                    </div>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                            <h5>Ciudad</h5>
                            <select class="input"name="region" id="citySel">
          <option value=""><?php echo $consulta[8] ?></option>
          </select>
                 
                        </div>
                    </div>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                            <h5>Descripción del producto y/o servicio</h5>
                    <input type="text" id="producto" name="producto" class="input" value="<?php echo $consulta[9] ?>"><br>
                        </div>
                    </div>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                            <h5>Tipo de Proyecto</h5>
                            <select  class="input" name="tipo" id="tipoSel" required>
            <option value=""><?php echo $consulta[10] ?></option>
         
          </select>
                   
                        </div>
                    </div>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                            <h5>Nearshoring</h5>
                            <select  class="input" name="nearshoring" id="NearshoringSel" >
            <option value=""><?php echo $consulta[11] ?></option>
          </select>
                   
                        </div>
                    </div>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                            <h5>Anuncios de Inverción</h5>
                    <input type="text" id="anuncio" name="anuncio" class="input" value="<?php echo $consulta[12] ?>"><br>
                        </div>
                    </div>
                    
                    <div class="input-div one">
                    <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
        <h5>Primera Piedra</h5>
          <input type="text" class="input" id="primerap" name="primerap" required value="<?php echo $consulta[13] ?>">
        </div>
      </div>
      
      <div class="input-div one">
      <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
        <h5>Inaugruación</h5>
          <input type="text" class="input" id="inaugruacion" name="inaugruacion" required value="<?php echo $consulta[14] ?>">
        </div>
      </div>

                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                            <h5>Proyecto de :</h5>
                            <select class="input"name="proyecto" id="proyectoSel">
          <option value=""><?php echo $consulta[15] ?></option>
          </select>
                   
                        </div>
                    </div>

                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                            <h5>Requiere Convenio</h5>
                            <h5>Requiere Convenio</h5>
          <select class="input"name="convenio" id="convenioSel">
          <option value=""><?php echo $consulta[16] ?></option>
          </select>
                   
                        </div>
                    </div>

                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                            <h5>Envia memorandum a:</h5>
                            <select class="input"name="memo" id="memoSel">
          <option value=""><?php echo $consulta[17] ?></option>
          </select>
                   
                        </div>
                    </div>

                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                            <h5>Fecha Envío</h5>
                    <input type="date" id="fenvio" name="fenvio" class="input" value="<?php echo $consulta[18] ?>"><br>
                        </div>
                    </div>

                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                            <h5>Envío de información completo</h5>
                            <select class="input"name="envioinfo" id="infoSel">
          <option value=""><?php echo $consulta[19] ?></option>
          </select>
                   
                        </div>
                    </div>

                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                            <h5>Actualización Información Empresa</h5>
                    <input type="date" id="acinfo" name="acinfo" class="input" value="<?php echo $consulta[20] ?>"><br>
                        </div>
                    </div>

                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div  class="div">
                            <h5>Fecha de Última Actualización </h5>
                    <input type="date" id="fechaulact" name="fechaulact" class="input" value="<?php echo $consulta[21] ?>"><br>
                        </div>
                    </div>


                    <br>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
            </div>

        </div>
<br>
<br>
<br>


    </div>
    <!--Pie de Pagina></-->
    <footer class="main-footer">
    

            </div>
            <p class="copy">© 2019 Finsa | Todos los derechos reservados</p>
        </div>

    </footer>



    <script src="../js/menu.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    

<script src="../js/script.js"></script>
<script src="../js/pp.js"></script>

</body>

</html>
