<?php
require '../conexion.php';
// establecer y realizar consulta. guardamos en variable.
$consulta = "SELECT id_Rol, Rol FROM roles ORDER BY Rol";
$resultado = mysqli_query( $conexion, $consulta )or die( "Algo ha ido mal en la consulta a la base de datos" );
$consultaT = "SELECT id_Departamento, Departamento FROM departamentos ORDER BY Departamento";
$resultadoT = mysqli_query( $conexion, $consultaT )or die( "Algo ha ido mal en la consulta a la base de datos" );
session_start();
$varsesion = $_SESSION[ 'usuario' ];

if ( $varsesion == null || $varsesion = '' ) {
  echo 'Usted no tiene autorizacion';
  die();
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Registrar Usuario</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/new.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<link rel="stylesheet" href="../css/headFoot.css">
<link rel="stylesheet" href="../css/AgregarEmpresa.css">
    <link rel="stylesheet" href="../css/vistasec.css">
    <link rel="stylesheet" href="../css/info.css">

</head>

<body>
<nav class="main-nav">
  <div class="container container--flex"> <span class="icon-menu" id="btnmenu"></span>
    <ul class="menu" id="menu">
      <li class="menu__item"><a href="#" class="menu__link">Bienvenido a Finsa:</a></li>
      <li class="menu__item"><a href="#" class="menu__link menu__link__select"><?php echo $_SESSION['usuario']; ?></a></li>
      <li class="menu__item"><a href="TablaUsuarios.php" class="menu__link">Ver Usuarios</a></li>
      <li class="menu__item"><a href="TablaProgramas.php" class="menu__link">Ver Programas</a></li>
      <li class="menu__item"><a href="../cerrar_sesion.php" class="menu__link">Cerrar sesion</a></li>
      <li class="menu__item"><a href="menu.php" class="menu__link">Volver</a></li>
    </ul>
  </div>
</nav>
<img class="wave" src="../img/drawline.png">
<div class="container1">
  <div class="img"> <img src="../img/undraw_sync_files_xb3r.svg"> </div>
  <div class="login-content">
    <form id="form" action="insertusuarios.php" method="post">
      <h2 class="title">Registrar Usuario</h2>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user" ></i> </div>
        <div class="div">
          <h5>Nombre</h5>
          <input required type="text" class="input" id="nombre" name="Nombre" >
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <h5>Apellido Paterno</h5>
          <input type="text" class="input" id="apellidop" name="ApellidoPaterno">
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <h5>Apellido Materno</h5>
          <input type="text" class="input" id="apellidom" name="ApellidoMaterno">
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <h5>Usuario</h5>
          <input required type="text" class="input" id="nickname" name="NombreUsuario">
        </div>
      </div>
      <div class="input-div pass">
        <div class="i"> <i class="fas fa-lock"></i> </div>
        <div class="div">
          <h5>Contraseña</h5>
          <input required type="password" class="input" id="pass" name="Password1">
        </div>
      </div>
      <div class="input-div pass">
        <div class="i"> <i class="fas fa-lock"></i> </div>
        <div class="div">
          <h5>Repetir Contraseña</h5>
          <input required type="password" class="input" id="pass2" name="Password2">
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <h5>Selecionar Rol</h5>
          <select  class="input" name="Rol" id="rol" required>
            <option value=""></option>
            <?php while($row = $resultado->fetch_assoc()) { ?>
            <option value="<?php echo $row['id_Rol']; ?>"><?php echo $row['Rol']; ?></option>
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <h5>Seleccionar Departamento</h5>
          <select  class="input" name="Departamento" id="departamento" required>
            <option value=""></option>
            <?php while($rowT = $resultadoT->fetch_assoc()) { ?>
            <option value="<?php echo $rowT['id_Departamento']; ?>"><?php echo $rowT['Departamento']; ?></option>
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="input-div one">
        <div class="i"> <i class="fas fa-user"></i> </div>
        <div class="div">
          <input type="date" class="input" id="fecha" name="Date" required>
        </div>
      </div>
      <input type="submit" class="btn" value="Registrar">
    </form>
  </div>
</div>

<!--Pie de Pagina></-->
<footer class="main-footer">
  <div class="container container--flex">
    <div class="column column--33">
      <h2 class="column__title">¿Por qué trabajar con nosotros?</h2>
      <p class="column__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, ea, facere! Nemo iste modi officiis, hic qui, sint autem consectetur voluptate sunt fuga quam aliquam eius eveniet doloribus, blanditiis sapiente!</p>
    </div>
    <div class="column column--33">
      <h2 class="column__title">Contactanos</h2>
      <p class="column__txt">Calle ... ..., Col. ...., Saltillo, Coahuila.</p>
      <p class="column__txt">Telefono 000-000-00-00</p>
      <p class="column__txt">luiscastillo@gmail.com</p>
    </div>
    <div class="column column--33">
      <h2 class="column__title">Siguenos en nuestras redes</h2>
      <p class="column__txt"><a href="" class="icon-facebook">Facebook</a></p>
    </div>
    <p class="copy">© 2019 Finsa | Todos los derechos reservados</p>
  </div>
</footer>
<script src="../js/menu.js"></script> 
	
<script type="text/javascript" src="../js/main.js"></script> 
	<!-- Libreria para funciones mas avanzadas -->
<script type="text/javascript" src="/js/jquery-3.5.1.min.js"></script> 
<script type="text/javascript">
		//Detectamos el evento cuando se quiere registrar
		$("#form").submit(function(event){
			//Obtenemos el primer password y el segundo
			var pass1 = $("#pass").val();
			var pass2 = $("#pass2").val();	
			
			//Comparamos las variables
			//Si son diferentes se para el registro 
			if(pass1 != pass2){
				//Con esto se evita continuar con el registro
				event.preventDefault();
				//Se cambia de color para remarcar el error 
				$("#pass2").css("background-color","rgba(255,100,100,.5)");
				$("#pass").css("background-color","rgba(255,100,100,.5)");
			}
			
		});
	</script>
</body>
</html>
