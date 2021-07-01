<?php

include_once 'logica/DB.php';
$db = new BD();
$conexion = $db->connection();

session_start();
$id = $_SESSION['id'];
$user = $_SESSION['username'];

$q = "SELECT * FROM suscriptores WHERE id_sus = $id";
$consulta = mysqli_query($conexion, $q);
while($row = $consulta->fetch_assoc()){
    $nombre = $row['nombre_sus'];
    $apellido = $row['apellido'];
    $celular = $row['celular_sus'];
    $direccion = $row['direccion_sus'];
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/cuenta-general.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Cuenta</title>
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
                        <a href="#">Carrito de compra</a>
                        <i class='fas fa-user' id="btn-usuario-secu"></i>
                        <div class='usuario' id='usuario-secu'>
                            <ul>
                                <li><a href='cuenta.php'>Cuenta</a></li>
                                <li><a href='logica/logout.php'>Salir</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </nav>
            <div class="contenedor-perfil">
                <div class="menu-perfil">
                    <a href="cuenta.php" class="btn-perfil">Vista general</a>
                    <a href="cambio_clave.php" class="btn-perfil">Cambio de contraseña</a>
                </div>
                <div class="perfil">
                    <h1>Vista general</h1>
                    <div class="contenedor-usuario">
                        <div class="informacion-usuario">
                            <p>Nombre</p>
                            <p>Apellido</p>
                            <p>Correo electrónico</p>
                            <p>Celular</p>
                            <p>Dirección</p>
                        </div>
                        <div class="carga-informacion">
                            <p><?php echo $nombre; ?></p>
                            <p><?php echo $apellido; ?></p>
                            <p><?php echo $user; ?></p>
                            <p><?php echo $celular; ?></p>
                            <p><?php echo $direccion; ?></p>
                        </div>

                    </div>
                    <div class="contenedor-editar">
                        <a href="editar_usuario.php" class="boton-editar">EDITAR</a>
                    </div>
                </div>
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
