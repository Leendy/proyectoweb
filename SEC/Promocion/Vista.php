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
    <link rel="stylesheet" href="../css/vistasec.css">
    <link rel="stylesheet" href="../css/info.css">

    <title>Promocion</title>
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
            <a class="navegacion__enlace navegacion__enlace--activo" href="AgregarEmpresa.php" class="menu__link">Agregar Proyecto</a></li>
            <a class="navegacion__enlace navegacion__enlace--activo"  href="../cerrar_sesion.php" class="menu__link">Cerrar sesion</a></li>
            <a class="navegacion__enlace navegacion__enlace--activo" href="Vista.php" class="menu__link">Volver</a></li>
            <a class="navegacion__enlace navegacion__enlace--activo" href="../includes/excel.php">Excel</a>
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
        <table class="table table-striped table-dark table_id">
            <thead>
                <th class="orden">No.</th>
                <th class="orden">	Fecha Confirmación	</th>
                <th class="orden">	Proyecto 	</th>
                <th class="orden">	País Origen de Inversión	</th>
                <th class="orden">	Sector Scian	</th>
                <th class="orden">	Empleos	</th>
                <th class="orden">	Inversión MDD	</th>
                <th class="orden">	Año	</th>
                <th class="orden">	Región	</th>
                <th class="orden">	Ciudad	</th>
                <th class="orden">	Producto	</th>
                <th class="orden">	Tipo de Proyecto	</th>
                <th class="orden">	Nearshoring	</th>
                <th class="orden">  Anuncio de inversiónn </th>
                <th class="orden">  Primera Piedra  </th>
                <th class="orden">  Inaugruación  </th>
                <th class="orden">  Proyecto de   </th>
                <th class="orden">  Requiere Convenio   </th>
                <th class="orden">  Envio Memorandum a   </th>
                <th class="orden">  Fecha de Envio  </th>
                <th class="orden">  Envio de Información   </th>
                <th class="orden">  Actualización de Información   </th>
                <th class="orden">  Fecha Última de Actualización   </th> 
                <th class="orden">  Editar </th> 
                
            </thead>
            
            <?php
    include '../conexion.php';
        $sentecia="SELECT * FROM pgj
      
     

     "; 
        
                
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));

      
   
                
        while($fila=$resultado->fetch_assoc())
        {
          echo "<tr>";
            echo "<td>"; echo $fila['id_empresas']; echo "</td>";
            echo "<td>"; echo $fila['fecha']; echo "</td>";
            echo "<td>"; echo $fila['Nombre']; echo "</td>";
            echo "<td>"; echo $fila['pais']; echo "</td>";
            echo "<td>"; echo $fila['sector']; echo "</td>";
            echo "<td>"; echo $fila['empleos']; echo "</td>";
            echo "<td>"; echo $fila['inversion']; echo "</td>";
            echo "<td>"; echo $fila['año']; echo "</td>";
            echo "<td>"; echo $fila['region']; echo "</td>";
            echo "<td>"; echo $fila['ciudad']; echo "</td>";
            echo "<td>"; echo $fila['producto']; echo "</td>";
            echo "<td>"; echo $fila['tipo']; echo "</td>";
            echo "<td>"; echo $fila['nearshoring']; echo "</td>";
            echo "<td>"; echo $fila['anuncio']; echo "</td>";
            echo "<td>"; echo $fila['primerap']; echo "</td>";
            echo "<td>"; echo $fila['inaugruacion']; echo "</td>";
            echo "<td>"; echo $fila['proyecto']; echo "</td>";
            echo "<td>"; echo $fila['convenio']; echo "</td>";
            echo "<td>"; echo $fila['memo']; echo "</td>";
            echo "<td>"; echo $fila['fenvio']; echo "</td>";
            echo "<td>"; echo $fila['envioinfo']; echo "</td>";
            echo "<td>"; echo $fila['acinfo']; echo "</td>";
            echo "<td>"; echo $fila['fechaulact']; echo "</td>";
            echo "<td><a href='EditarEmpresa.php?id_empresas=".$fila['id_empresas']."'> <button type='button' class='butn'>
            <i class='fa fa-edit'></i></button> </a></td>";
           
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