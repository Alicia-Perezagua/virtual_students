<?php
require_once('config.php');
require_once('conexionDB.php');
require_once("sesion.php");
require_once("BS.php");

$function = $_POST['funcion'];

if(isset($_POST['funcion'])){

    $mysql = new ConexionDB();


        function hayClave(){

            global $mysql;

            $user_name=$_POST["user"];

            $sql ="SELECT * FROM usuarios WHERE username='".$user_name. "'";
            $res = $mysql->search($sql);

            if(sesion_usuario()=="null"){
                if($res!=null){
                    if ($res[0]["_password"]==null || $res[0]["_password"]==''){
                        return "false";
                    } else {
                        return "true";
                    }
                }else{
                    return "No se reconoce al usuario";
                    // 
                }
            } else {
                // echo "Ya tienes sesión iniciada";
                // header('Location: ../public/admin/index.php');
            } 
        }
        
                
                    /**
                     * cambio de contraseña por ser la primera vez
                     * 
                     * @return false;
                     */
        function cambio_contra_1aVez(){
            global $mysql;
            
            $user_name=$_POST["user"];

            if($_POST['pass']==$_POST['repPass'] ){
                $has_contra=hash_change($_POST['pass']);

                $sql ="UPDATE usuarios SET _password ='" . $has_contra . "' WHERE username='".$user_name."'";
                $mysql->search($sql);

                $sql2 = "SELECT * FROM usuarios WHERE username ='" . $user_name . "';";
                $res = $mysql -> search($sql2);
                
                null_error();
                abrir_sesion($res[0]["id_user"],$res[0]["rol"]);
                return "true";
            }else{
                $error='Las contraseñas no coinciden';
                in_error($error);
                return in_error($error);
            }
        };
                

        function comprobarClave(){

            global $mysql;

            $user_name=$_POST["user"];

            $sql = "SELECT * FROM usuarios WHERE username = '" . $user_name . "'";
            $res = $mysql -> search($sql);


            if(password_verify($_POST['pass'],$res[0]["_password"])){
                null_error();
                abrir_sesion($res[0]["id_user"],$res[0]["rol"]);
                return "true";

            }else{
                return in_error("La contraseña es incorrecta");
            }
        }
                
        

    /**
     * al inicar un usuario su cunta por primera vez tendra que decidir su contraseña
     * @return void
     */

    switch($function){
        case 'cambion':
            echo cambio_contra_1aVez();
            break; 
        case "insertarPass": 
            echo comprobarClave();
            break;
        case "comprobarClave": 
            echo hayClave();
            break;
    }
}
?>