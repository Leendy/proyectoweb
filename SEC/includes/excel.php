<?php
include '../conexion.php';
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=Reporte.xls");
?>


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
                <th class="orden">  Anuncio  </th>
                <th class="orden">  Primera Piedra  </th>
                <th class="orden">  Inaugruación  </th>
                <th class="orden">  Proyecto de   </th>
                <th class="orden">  Requiere Convenio   </th>
                <th class="orden">  Envio Memorandum a   </th>
                <th class="orden">  Fecha de Envio  </th>
                <th class="orden">  Envio de Información   </th>
                <th class="orden">  Actualización de Información   </th>
                <th class="orden">  Fecha Última de Actualización   </th> 
                
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
            echo "<td><a href='EditarEmpresa.php?id_empresas=".$fila['id_empresas']."'> <button type='button' class='butn'>Modificar</button> </a></td>";
            echo "<td><a href='eliminar.php?id_empresas=".$fila['id_empresas']."'> <button type='button' class='butn'>Eliminar</button> </a></td>";
          echo "</tr>";
        }
        
      ?>

        



