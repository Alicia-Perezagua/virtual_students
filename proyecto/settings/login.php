<?php
require_once('config.php');
require_once('conexionDB.php');
require_once("sesion.php");

$user_name=$_GET["name"];
$password=$_GET["password"];

$mysql = new ConexionDB();
$sql ="SELECT * FROM usuarios WHERE username='".$user_name."'";
$res = $mysql->search($sql);
if(sesion_usuario()==null){
    if($res!=null){
        if(password_verify($password,$res[0]["_password"])){
            echo"felicidades ha iniciado sesion con exito";
            null_error();
            abrir_sesion($user_name);
            header("Location:../public/admin/index.php");
        }else{
            in_error("la contraseña es incorrecta verificque que no tenga las mayusculas activadas o que no haya repetido caracteres");
            header("Location:../public/admin/login.php");
        }
    }else{
        in_error("te hace falta una cuenta o has introducido mal el nombre");
        header("Location:../public/admin/login.php");
    }
}else{
    in_error("ya tienes sesion iniciada");
        header("Location:../public/admin/login.php");
}

?>