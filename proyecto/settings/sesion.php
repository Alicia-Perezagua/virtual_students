<?php
    // cuando se registra o se loguea
    session_start();
    function abrir_sesion($usuario)
    {
        $_SESSION['usuario']=$usuario;
    }
    // log out
    function cerrar_sesion()
    {
        $_SESSION=Array();
        session_destroy();
        header("location:../index.php");
    }
    function sesion_usuario(){
        if(isset($_SESSION['usuario'])){
            $fin=$_SESSION['usuario'];
        }else{
            $fin=null;
        }
        return $fin ;
    }
    //error
    function in_error($error)
    {
        $_SESSION['error']=$error;
    }
    function out_error(){
        if(isset($_SESSION['error'])){
            $fin=$_SESSION['error'];
        }else{
            $fin=null;
        }
        return $fin ;
    }
?>