<?php
include 'conexion.php'
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="Leendy Kasandra Escamilla Cardona &copy; 2024">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/avatar.css">


</head>

<body>
    <img class="wave" src="img/imagen2.png">
    <div class="container">
        <div class="img">
            
        </div>
        <div class="login-content">
           
            <form method="post" action="login.php" >
                <img class="avatar" src="img/WEQ.png">
                <h2 class="title">Bienvenido</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Usuario</h5>
                        <input type="text" class="input" name="usuario"> 
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" name="clave" class="input">
                    </div>
                </div>
                <input type="submit" class="btn" value="Login">
            </form>
     
        </div>
    </div>
<script type="text/javascript" src="js/main.js"></script>
<script src="js/validation.js"></script>
</body>

</html>