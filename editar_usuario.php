<?php

include_once 'logica/DB.php';
$db = new BD();
$conexion = $db->connection();

session_start();
$id = $_SESSION['id'];
$email = $_SESSION['username'];

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
    <link rel="stylesheet" href="css/editar_usuario.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Document</title>
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
                        <i class='fas fa-user' id="btn-usuario-secu">User</i>
                        <div class='usuario' id='usuario-secu'>
                            <ul>
                                <li><a href='cuenta.php'>Cuenta</a></li>
                                <li><a href='logica/logout.php'>Salir</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </nav>
            <div class="contenedor-formulario">
                <form action="" method="POST" class="cambio_usuario">
                    <div class="datos-usuario">
                    <div class="contenedor-label">
                        <label for="nombre_sus" class="label">Nombre</label>
                        <label for="apellido" class="label">Apellido</label>
                        <label for="email_sus" class="label">Correo electrónico</label>
                        <label for="celular_sus" class="label">Celular</label>
                        <label for="direccion_sus" class="label">Dirección</label>
                    </div>
                    <div class="contenedor-texto">
                        <input type="text" name="nombre_sus" placeholder="<?php echo $nombre; ?>" class="texto">
                        <input type="text" name="apellido" placeholder="<?php echo $apellido; ?>" class="texto">                                
                        <input type="email" name="email_sus" placeholder="<?php echo $email; ?>" class="texto">
                        <input type="number" name="celular_sus" placeholder="<?php echo $celular; ?>" class="texto">                    
                        <input type="text" name="direccion_sus" placeholder="<?php echo $direccion; ?>" class="texto">
                    </div>
                </div>
                    <div class="btn-guardar">
                        <input type="submit" value="Guardar" name="guardar" class="guardar">
                    </div>
                </form>
            </div>
            <footer class="informacion">
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

<?php

if (isset($_POST['guardar'])){
    $array = ['nombre_sus', 'apellido', 'email_sus', 'celular_sus', 'direccion_sus'];
    foreach($array as $name){
        $valor = $_POST[$name];
        if($valor != NULL){
            $q = "UPDATE suscriptores SET $name = '$valor' WHERE id_sus = $id";
            $cambio = mysqli_query($conexion, $q);

            if(!$cambio)
                die("Error al actualizar los datos: ".$conexion->error);
            else
                header("location: cuenta.php");  
        }   
    }
     
}

?>