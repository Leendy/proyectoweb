<?php
include 'conexion.php';

$user = $_POST['usuario'];
$clave = $_POST['clave'];
session_start();
$_SESSION['usuario'] = $user;

$sql = "SELECT Usuario, Password, Rol FROM trabajador WHERE Usuario = ? AND Password = ? AND Rol IN (1, 2, 3, 4, 5)";

if ($stmt = $conexion->prepare($sql)) {
    $stmt->bind_param("ss", $user, $clave);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user, $clave, $rol);
        $stmt->fetch();

        switch ($rol) {
            case 1:
                echo '<script> alert("Se ha conectado el Administrador");
				window.location.href="Administrador/menu.php";
			</script>';
                break;
            case 2:
                echo '<script> alert("Se ha conectado el usuario Promocion");
				window.location.href="Promocion/Vista.php";
			</script>';
                break;
            case 3:
                echo '<script> alert("Se ha conectado el usuario Gestion");
				window.location.href="Gestion/tablag.php";
			</script>';
                break;
            case 4:
                echo '<script> alert("Se ha conectado el usuario Juridico");
				window.location.href="Juridico/vista.php";
			</script>';
                break;
            case 5:
                echo '<script> alert("Se ha conectado el usuario SECANALINDA");
				window.location.href="SECANALINDA/vistasec.php";
			</script>';
                break;
        }
    } else {
        echo '<script> alert("El usuario o la contraseña son incorrectos");
			window.history.go(-1);
		</script>';
    }

    $stmt->close();
}

mysqli_close($conexion);
?>