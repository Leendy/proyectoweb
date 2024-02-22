<?php
require '../conexion.php';

session_start();
$varsesion = $_SESSION[ 'usuario' ];

if ( $varsesion == null || $varsesion = '' ) {
 echo 'Usted no tiene autorizacion';
 die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="copyright" content="Leendy Kasandra Escamilla Cardona &copy; 2024">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/AgregarEmpresa.css">
    <link rel="stylesheet" href="../css/info.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    
    <title>Agregar Empresa</title>
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
      
            <a href="#"><?php echo $_SESSION['usuario']; ?></a></li>

            <a class="navegacion__enlace navegacion__enlace--activo"  href="../cerrar_sesion.php" class="menu__link">Cerrar sesion</a></li>

            <a class="navegacion__enlace navegacion__enlace--activo" href="Vista.php" class="menu__link">Volver</a></li>
          </nav>
   </div>


<img class="wave" src="../img/drawline.png">
<div class="container1">
  <div class="img"> <img src="../img/undraw_sync_files_xb3r.svg"> </div>
  <div class="login-content">
    <form id="form" action="insertusuarios.php" method="post">
      <h2 class="title">Registrar Empresa</h2>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
        <h5>Fecha Confirmación</h5>
          <input type="date" class="input" id="fecha" name="fecha" required>
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user" ></i> </div>
        <div class="div">
          <h5>Proyecto</h5>
          <input required type="text" class="input" id="nombre" name="nombre" >
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <h5>País Origen de Inversión</h5>
          <select class="input" name="pais"  id="countrSel">
    <option value=""></option>
  </select>
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <h5>Sector Scian</h5>
          <select class="input" name="sector"  id="ScianSel">
    <option value=""></option>
  </select>
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <h5>Empleos</h5>
          <input type="text" class="input" id="empleos" name="empleos">

        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <h5>Inversión MDD</h5>
          <input type="text" class="input" id="inversion" name="inversion">
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <h5>Año</h5>
          <select class="input" name="año"  id="añoSel">
    <option value=""></option>
  </select>

        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <h5>Región</h5>
          <select class="input"name="region" id="regionSel">
          <option value=""></option>
          </select>
        </div>
      </div>

      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <h5>Ciudad</h5>
          <select class="input"name="ciudad" id="citySel"></select>
        </div>
      </div>

      <div class="input-div pass">
        <div class="i"> <i class="fas fa-lock"></i> </div>
        <div class="div">
          <h5>Descripción del producto y/o servicio </h5>
          <input  type="text" class="input" id="producto" name="producto">
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <h5>Tipo de Proyecto</h5>
          <select  class="input" name="tipo" id="tipoSel" required>
            <option value=""></option>
         
          </select>
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <h5>Nearshoring </h5>
          <select  class="input" name="nearshoring" id="NearshoringSel" >
            <option value=""></option>
          </select>
        </div>
      </div>
 
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <h5>Anuncio de Invercion </h5>
          <input  type="text" class="input" id="anuncio" name="anuncio">
    </select>
    </div>
        </div>

        
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user" ></i> </div>
        <div class="div">
          <h5>Primera Piedra</h5>
          <input required type="text" class="input" id="primerap" name="primerap" >
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user" ></i> </div>
        <div class="div">
          <h5>Inaugruación</h5>
          <input required type="text" class="input" id="inaugruacion" name="inaugruacion" >
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <h5>Proyecto de : </h5>
          <select class="input"name="proyecto" id="proyectoSel">
          <option value=""></option>
          </select>
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <h5>Requiere Convenio</h5>
          <select class="input"name="convenio" id="convenioSel">
          <option value=""></option>
          </select>
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <h5>Envia memorandum a:</h5>
          <select class="input"name="memo" id="memoSel">
          <option value=""></option>
          </select>
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
        <h5>Fecha Envío  </h5>
          <input type="date" class="input" id="fenvio" name="fenvio" required>
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <h5>Envío de información completo </h5>
          <select class="input"name="envioinfo" id="infoSel">
          <option value=""></option>
          </select>
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
        <h5>Actualización Información Empresa </h5>
          <input type="date" class="input" id="acinfo" name="acinfo" required>
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
        <h5>Fecha de Última Actualización </h5>
          <input type="date" class="input" id="fechaulact" name="fechaulact" required>
        </div>
      </div>
      <input type="submit" class="btn" value="Registrar">
    </form>
  </div>
</div>
<br>
<br>
<br>
<!--Pie de Pagina></-->
<footer class="main-footer">
  <div class="container container--flex">

    </div>
    <p class="copy">© 2019 Finsa | Todos los derechos reservados</p>
  </div>
  <script src="../js/pp.js"></script>
</footer>
<script src="../js/menu.js"></script> 



<script type="text/javascript" src="../js/main.js"></script> 
	<!-- Libreria para funciones mas avanzadas -->
<script type="text/javascript" src="/js/jquery-3.5.1.min.js"></script> 
<script type="text/javascript"></script>


<script src="../js/script.js"></script>
<script src="../js/pp.js"></script>
</body>
</html>
