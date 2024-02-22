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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/inicioj.css">
    <link rel="stylesheet" href="../css/info.css">

    <title>Gestion</title>
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
          
            <a href="#" class="menu__link menu__link__select"><?php echo $_SESSION['usuario']; ?></a></li>
            <a class="navegacion__enlace navegacion__enlace--activo"  href="../cerrar_sesion.php" class="menu__link">Cerrar sesion</a></li>
            <a class="navegacion__enlace navegacion__enlace--activo"  href="Agregarnota.php" class="menu__link">Agregar Notas</a></li>
            <a class="navegacion__enlace navegacion__enlace--activo"  href="tablag.php" class="menu__link">Volver</a></li>
    </nav>
    </div>
<br>
<div class="container-fluid">
  <form class="d-flex">
      <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
      placeholder="Buscar Empresa">
      <hr>
      </form>
  </div>
    <br>
    <div>
<table  class="table table-striped table-dark table_id">
            <thead>
                <th class="orden">No.</th>
                <th class="orden">  Proyecto confirmados    </th>
                <th class="orden"> Representante Legal</th>
                <th class="orden"> Telefono del Representante Legal Fijo </th>
                <th class="orden"> Telefono del Representante Legal Celular </th>
                <th class="orden"> Nombre del Contacto </th>
                <th class="orden"> Telefono del Contacto Fijo</th>
                <th class="orden"> Telefono del Contacto Celular</th>
                <th class="orden"> Cargo  del Contacto </th>
                <th class="orden"> Cuenta con Estimulos </th>
                <th class="orden"> Tipo de Estimulos</th>
                <th class="orden"> Valor del Estimulo</th>
                <th class="orden">Agregar Informacion</th>
                
         

            </thead>
            
            <?php
    include '../conexion.php';
        $sentecia="SELECT * FROM pgj ";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
                
        while($fila=$resultado->fetch_assoc())
        {
          echo "<tr>";
            echo "<td>"; echo $fila['id_empresas']; echo "</td>";
            echo "<td>"; echo $fila['Nombre']; echo "</td>";
            echo "<td>"; echo $fila['nombrereprel']; echo "</td>";
            echo "<td>"; echo $fila['numeroreprelfijo']; echo "</td>";
            echo "<td>"; echo $fila['numeroreprelcel']; echo "</td>";
            echo "<td>"; echo $fila['nombrecontacto']; echo "</td>";
            echo "<td>"; echo $fila['numerocontactofijo']; echo "</td>";
            echo "<td>"; echo $fila['numerocontactocel']; echo "</td>";
            echo "<td>"; echo $fila['cargocontacto']; echo "</td>";
            echo "<td>"; echo $fila['estimulos']; echo "</td>";
            echo "<td>"; echo $fila['claseestimulos']; echo "</td>";
            echo "<td>"; echo $fila['valorestimulos']; echo "</td>";
             echo "<td><a href='EditarEmpresa.php?id_empresas=".$fila['id_empresas']."'> <button type='button' class='butn'>
                    <i class='fa fa-edit'></i></button> </a></td>";         
          
                   ;
        }

       ?>
        
                    </table>
                </div>
            </div>
          
     
            <footer class="footer">
        <p class="footer__texto">Secretaría de Economía - Todos los derechos Reservados 2024.</p>
    </footer>
    <script src="../js/buscador.js"></script>
    <script src="../js/menu.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    </body>
    </html>