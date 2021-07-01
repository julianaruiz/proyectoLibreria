<?php

include_once 'user.php';
include_once 'user_session.php';
include_once 'DB.php';

$db = new BD;
$enlace = $db->connection();
$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    echo "En sesión";
    $user->setUser($userSession->get_current_user);
    echo $user->getNombre();
    include_once 'prueba.php';
}
elseif(isset($_POST['user']) && isset($_POST['pass'])){
    $userForm = $_POST['user'];
    $passForm = $_POST['pass'];
    $resultado = $user->userExist($userForm, $passForm, $enlace);
    if ($resultado != 0){
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm, $enlace);
        echo $user->getNombre();
        include_once 'login.php';
    }
    else{
        $errorLogin = "Correo electrónico y/o contraseña incorrecta";
        include_once 'login.php';
    }
    
}
else{
    include_once 'login.php';
}
?>