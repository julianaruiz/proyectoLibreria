<?php

include_once 'logica/DB.php';
session_start();
$id = $_SESSION['id'];

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
    <link rel="stylesheet" href="css/cambio_clave.css">
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
                        <a href="registro.php">Registro</a>
                        <a href="#">Carrito de compra</a>
                    </div>
                </div>
            </nav>

            <div class="contenedor-perfil">
                <div class="menu-perfil">
                    <a href="cuenta.php" class="btn-perfil">Vista general</a>
                    <a href="cambio_clave.php" class="btn-perfil">Cambio de contraseña</a>
                </div>
                <div class="contenedor-cambio-clave">
                    <form action="" method="POST" class="cambio-clave">
                        <h1>CAMBIO DE CONTRASEÑA</h1>
                        <label for="passOld" class="label">Ingrese su contraseña</label>
                        <input type="password" class="texto" name="passOld" required autofocus>
                        <label for="passNew" class="label">Ingrese la nueva contraseña</label>
                        <input type="password" class="texto" name="passNew" required>
                        <label for="passNewRep" class="label">Repita la nueva contraseña</label>
                        <input type="password" class="texto" name="passNewRep" required>
                        <div class="botones">
                            <input type="submit" class="boton-guardar" value="Guardar" name="cambio">
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
    $db = new BD();
    $enlace = $db->connection();

    if(isset($_POST['cambio'])){
        $sql = "SELECT * FROM suscriptores WHERE id_sus=$id";
        $resultado = mysqli_query($enlace,$sql);
        if($resultado->num_rows == 0){
            echo "<script language='javascript'>alert('id no registrado')</script>";
        }
        else{
            $passnew = $_POST['passNew'];
            $passNewRep = $_POST['passNewRep'];
            if($passNewRep == $passnew){
                $passOld = $_POST['passOld'];
                $sql = "SELECT clave_sus FROM suscriptores WHERE id_sus=$id";
                $resultado = mysqli_query($enlace,$sql);
                while($row = $resultado->fetch_assoc()){
                    $passDB = $row['clave_sus'];
                    if($passDB == $passOld){
                        $sql = "UPDATE suscriptores SET clave_sus = '$passnew' WHERE id_sus = $id";
                        $resultado = mysqli_query($enlace,$sql);
                        if(!$resultado)
                            die("Error al actualizar los datos: ".$enlace->error);
                        else
                            echo "<script language='javascript'>alert('Contraseña actulaizada correctamente')</script>";
                    }
                    else
                        echo "<script language='javascript'>alert('contraseña inválida')</script>";
            }
        }
        else
            echo "<script language='javascript'>alert('las contraseñas no coinciden')</script>";
        }
    }

?>