<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <div class="contenedor">
        <main>
            
            <nav class="contendor-menu-secuandario">
                <button id="boton-barras-secu" class="boton-barras"><i class="fas fa-bars"></i></button>
                <div class="menu-secundario">

                    <div class="logo">
                        <img src="imagenes/book2.png">
                    </div>
                    <div class=" enlaces-categorias">
                        <a href="index.php">Inicio</a>
                        <a href="registro.php">Registro</a>
                        <a href="#">Carrito de compra</a>
                    </div>
                </div>
            </nav>

            <div class="contenedor-login">
                <form action="logica/sesiones.php" method="POST" class="login">
                    <h1>Inicio de sesión</h1>
                    <label for="user">Correo electrónico</label>
                    <input type="email" name="usuario" class="text" autofocus required>
                    <label for="pass">Contraseña</label>
                    <input type="password" name="clave" class="text" required>
                    <?php
                        if(isset($errorLogin))
                            echo "<p class='errorLogin'> $errorLogin </p>";
                    ?>
                    <div class="boton">
                        <input type="submit" name="ingresar" value="Ingresar" class="ingresar">
                    </div>
                </form>
            </div>
            <footer class="contenedor informacion">
                <div class="legal">
                    <h3>Información</h3>
                    <h2>321 6548970</h2>
                    <h2>Calle 21 # 50 - 42</h2>
                    <h2>Medellín - Colombia</h2>
                    <h2>Lunes a sábado de 9:00 a.m. a 6:00 p.m.</h2>
                </div>
                <div class="corporativo">
                    <h3>Corporativo</h3>
                    <a href="#">
                        <h2>Quiénes somos</h2>
                    </a>
                </div>
                <div class="redes">
                    <h3>Redes sociales</h3>
                    <a href="https://es-la.facebook.com/"><img src="imagenes/facebook.png" alt="Facebook"></a>
                    <a href="https://www.instagram.com/"><img src="imagenes/instagram.png" alt="Instagram"></a>
                </div>
            </footer>

        </main>
    </div>


    <script src="https://kit.fontawesome.com/b4d4ac8378.js" crossorigin="anonymous"></script>
    <!--iconos font awesome-->
    <script src="js/menu.js"></script>
</body>
</html>