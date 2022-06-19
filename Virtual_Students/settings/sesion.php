<?php
$ajax=$_POST['funcion'];
    // usuario
    session_start();
    function abrir_sesion($id,$rol)
    {
        $_SESSION['id']=$id;
        $_SESSION['rol']=$rol;
    }
    //log out
    function cerrar_sesion()
    {
        $_SESSION=Array();
        session_destroy();
        header("location:../index.php");
    }
    function sesion_usuario(){
        if(isset($_SESSION['id'])){
            $fin = $_SESSION['id'];
        }else{
            $fin = "null";
        }
        return $fin;
    }
    function get_rol(){
        return $_SESSION['rol'];
    }
    function get_id(){
        return $_SESSION['id'];
    }
    function out_usuario_rol(){
        return $_SESSION['rol'];
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
    function null_error(){
        $_SESSION['error']=null;
    }
    // ajax

    switch($ajax){
        case "recogerRol":
            echo get_rol();
            break;
        case "recogerId":
            echo get_id();
            break;
        case "recogerError":
            echo out_error();
            break;
        case "recogerSesion": 
            echo sesion_usuario();
            break;
    }
?>