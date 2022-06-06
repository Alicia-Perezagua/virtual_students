<?php
require_once('config.php');
require_once('conexionDB.php');
require_once("sesion.php");
require_once("BS.php");
$function= $_POST['funcion'];
$user_name=$_POST["name"];
$password=$_POST["password"];

$mysql = new ConexionDB();
$sql ="SELECT * FROM usuarios WHERE username='".$user_name."'";
$res = $mysql->search($sql);
if(sesion_usuario()==null){
    if($res!=null){
        if ($res[0]["_password"]==null || $res[0]["_password"]==''){
            /**
             * cambio de contraseña por ser la primera vez
             * 
             * @return filetes
             */
            function cambio_contra_1aVez(){
                global $bd;
                global $user_name;
                if($_POST['password']==$_POST['password_conf'] ){
                    $has_contra=hash_change($_POST['password']);
                    
                $cambioContra = $bd -> prepare("call cambioContra(?,?)");
                $cambioContra -> bindParam(1, $user_name, PDO::PARAM_STR, 255);
                $cambioContra -> bindParam(2, $has_contra, PDO::PARAM_STR, 255);
                $cambioContra -> execute();
                null_error();
                return true;
                }else{
                    $error='la contraseña no es igual';
                    in_error($error);
                    return false;
                }
            };

        }
        else if(password_verify($password,$res[0]["_password"])){
            echo"felicidades ha iniciado sesion con exito";
            null_error();
            abrir_sesion($res[0]["id_user"],$res[0]["rol"]);
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
/**
 * al inicar un usuario su cunta por primera vez tendra que decidir su contraseña
 * @return void
 */

switch($function){
    case 'cambion':
        cambio_contra_1aVez();
        break;
}
?>