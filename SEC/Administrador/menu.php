<?php

 session_start();
 $varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = ''){
    echo'Usted no tiene autorizacion';
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="copyright" content="Leendy Kasandra Escamilla Cardona &copy; 2024">
	<title>Menu</title>
	<link rel="stylesheet" href="../css/usuarios.css">
	<link rel="stylesheet" href="../css/headFoot.css">
    <link rel="stylesheet" href="../css/AgregarEmpresa.css">
    <link rel="stylesheet" href="../css/vistasec.css">
    <link rel="stylesheet" href="../css/info.css">
</head>
<body>
	   <!--Menu></-->
    
    <nav class="main-nav">
        <div class="container container--flex">
            <span class="icon-menu" id="btnmenu"></span>
            <ul class="menu" id="menu">
           <li class="menu__item"><a href="#" class="menu__link">Bienvenido a Finsa:</a></li>
                <li class="menu__item"><a href="#" class="menu__link menu__link__select"><?php echo $_SESSION['usuario']; ?></a></li>
              <li class="menu__item"><a href="TablaUsuarios.php" class="menu__link">Ver Usuarios</a></li>
              <li class="menu__item"><a href="TablaProgramas.php" class="menu__link">Ver Programas</a></li>
                <li class="menu__item"><a href="../cerrar_sesion.php" class="menu__link">Cerrar sesion</a></li>
                <li class="menu__item"><a href="SeguridadYPrevencion.php" class="menu__link">Volver</a></li>
            </ul>
        </div>
    </nav>
	
	 <!-- /contenido -->    
     <section class="group today-special">
            <h2 class="opt">Opciones de Administrador</h2>
            <div class="container container--flex">
          
            	<a href="RegistrarUsuario.php"  class="column column--50-25">
                    <div class="today-special__title">Usuarios</div>
            	</a>
               
            </div>
        </section>        
    <!-- /contenido -->
    
     <!--Pie de Pagina></-->
    <footer class="main-footer">
        <div class="container container--flex">
         

            </div>
            <p class="copy">© 2019 Finsa | Todos los derechos reservados</p>
        </div>

    </footer>
</body>
</html>