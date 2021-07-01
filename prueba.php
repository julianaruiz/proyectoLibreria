<?php
$userSession = new UserSession;
session_start();
$user = $userSession->getCurrentUser();
include_once 'DB.php';
echo "bienvenido ".$user;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <h1>Buscar clave de usuario por id</h1>
        <label for="id">ID</label>
        <input type="password" name="id">
        <label for="passOld">Contraseña vieja</label>
        <input type="password" name="passOld">
        <label for="passNew">Nueva contraseña</label>
        <input type="password" name="passNew">
        <label for="passNewRep">Repetir nueva contraseña</label>
        <input type="password" name="passNewRep">
        <input type="submit" name="buscar">
    </form>
</body>
</html>

<?php
    $db = new BD();
    $enlace = $db->connection();
    
    if(isset($_POST['cambio'])){
        $id = $_POST['id'];
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
                        echo "hola carola </br>";
                        $sql = "UPDATE suscriptores SET clave_sus = '$passnew' WHERE id_sus = $id";
                        $resultado = mysqli_query($enlace,$sql);
                        if(!$resultado)
                            die("Error al actualizar los datos: ".$enlace->error);
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