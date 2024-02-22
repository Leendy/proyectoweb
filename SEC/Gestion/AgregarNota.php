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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/agregarnota.css">
    <link rel="stylesheet" href="../css/info.css">

    <title>Agregar Nota</title>
    
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
            <a class="navegacion__enlace navegacion__enlace--activo"  href="tablag.php" class="menu__link">Volver</a></li>
    </nav>
    </div>
    <div class="container">
        <h1>Agregar Nota</h1>
        <?php
        // Verificar si se ha enviado el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            header("Location: agregar_nota.php");
            exit();
        }
        ?>
        <form action="agregar_nota.php" method="post">
            <label for="id_empresas">ID Empresa:</label>
            <input type="text" id="id_empresas" name="id_empresas" required>

            <label for="nota">Nota:</label>
            <textarea id="nota" name="nota" rows="4" cols="50" required></textarea>
<br><br><br>
            <button type="submit">Agregar Nota</button>
        </form>

        <h2>Notas Existentes</h2>
        <table>
            <thead>
                <tr>
                    <th>ID Empresa</th>
                    <th>Nota</th>
                </tr>
            </thead>
            <tbody>
            <?php
    include '../conexion.php';

    // Consulta para obtener las notas existentes
    $query = "SELECT * FROM agregar_nota";
    $result = mysqli_query($conexion, $query);

    // Check if the query was successful
    if ($result === false) {
        // Query execution failed, display error message
        die('Error executing query: ' . mysqli_error($conexion));
    }

    // Iterar sobre los resultados y mostrar cada nota en una fila de la tabla
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id_empresas"] . "</td>";
        echo "<td>" . $row["nota"] . "</td>";
        echo "</tr>";
    }
    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
?>
            </tbody>
        </table>
    </div>
</body>
</html>