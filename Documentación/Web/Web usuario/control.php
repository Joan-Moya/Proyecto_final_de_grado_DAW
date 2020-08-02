<?php
$usuario = $_POST['usuario'];
$password = $_POST['pass'];

    if(($usuario=='admin') && ($password=="123")){
        session_start();
        $_SESSION['login']="SI";
        $_SESSION['acceso']= time();
        header("Location: WebAdministrador/panel.php");
    }else {
        header("Location: registro.php?errorusuario=si");
}
?>      