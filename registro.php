
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/footer.css">

    <title>Registro</title>
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
    
            <div class="contenedor-cuerpo">
                <div class="contenedor-cuerpo imagen">
                    <img src="imagenes/registro.png" alt="mujer con libros"> 
                </div>
                <div class="contenedor-cuepro registro">
            
                    <form action="" method="POST" class=" formulario">
                        <h1>Registro</h1>
                        <label for="nombre" class="texto">Nombre:</label>
                        <input type="text" id="nombre" class="ingreso-texto" name="nombre" autofocus required>
                        <label for="apellido" class="texto">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" class="ingreso-texto" required>
                        <label for="celular" class="texto">Celular:</label>
                        <input type="number" id="celular" name="celular" class="ingreso-texto" required>
                        <label for="direccion" class="texto">Dirección:</label>
                        <input type="text" id="direccion" name="direccion" class="ingreso-texto" required>
                        <label for="email" class="texto">Correo electrónico:</label>
                        <input type="email" id="email" name="email" class="ingreso-texto" required>
                        <label for="clave" class="texto">Contraseña:</label>
                        <input type="password" id="clave" name="clave" class="ingreso-texto" required>
                        <div class="contenedor-cuepro botones">
                            <input type="submit" value="Enviar" class="boton" name="registrar">
                            <input type="reset" value="Borrar" class="boton">
                        </div>
                    </form>
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

<?php
    include_once 'logica/DB.php';
    $db = new BD();
    $conexion = $db->connection();

    if(isset($_POST['registrar'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];     
        $celular = $_POST['celular'];
        $direccion = $_POST['direccion'];
        $email = $_POST['email'];
        $clave = $_POST['clave'];

        $cargar_datos = "INSERT INTO suscriptores (nombre_sus,apellido,celular_sus,direccion_sus,email_sus,clave_sus) VALUES(
                                                    '".$nombre."',
                                                    '".$apellido."',
                                                    '".$celular."',
                                                    '".$direccion."',
                                                    '".$email."',
                                                    '".$clave."')";
                    
        $insertar_datos = mysqli_query($conexion,$cargar_datos);
        if($insertar_datos)
            echo "<script language='javascript'>alert('Registro exitoso')</script>";
        else
        echo "<script language='javascript'> alert('No se pudo realizar el registro')</script>";
    }

?>