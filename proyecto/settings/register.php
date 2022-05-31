<?php
    try
    {
        //introducción objeto sesión
        include "sesion.php";
        if(sesion_usuario()!=null)
        {
            in_error("Ya estas con una cuenta conectado, por favor cierre antes de iniciar o crear otra");
        }else
        {
            // nombre del nuevo usuario
            $user_name=$_REQUEST["name"];
            //contraseña del nuevo usuario
            $user_password=$_REQUEST["password"];
            // confirmación de la contraseña anterior
            $user_password_conf=$_REQUEST["passwordConfi"];
            $rol=$_REQUEST['rol'];
            // si algun campo de los anteriores es nulo no podra registrarse
            if($user_name!="" && $user_password!="" && $user_password_conf!="" )
            {
                // la contrasña y su condirmación deben de ser indenticas(disminución factor error humano)
                if($user_password==$user_password_conf)
                {
                    // acceso a la base de datos ($bd)
                    include 'ConexionDB.php';
                    // transforma la contraseña en un hash(contrasennaHash)
                    include 'BS.php';
                    // preparación y introduccion de datos  de una consulta
                    $password_hash=hash_change($user_password);
                    $register=$bd->prepare("call setUsuarioYContrasenna(?,?)");
                    $register->bindParam(1,$user_name,PDO::PARAM_STR,50);
                    $register->bindParam(2,$password_hash,PDO::PARAM_STR,255);
                    try
                        {
                            //ejecución de la consulta anterior
                            $register->execute();
                            //creación objeto sesión con el nombre del usuario(permisos)
                            abrir_sesion($user_name,$rol);
                            null_error();
                            header("location:../public/admin/index.php");
                            
                        }catch(PDOException $e)
                        {
                            in_error( "el usuario ".$user_name." ya esta siendo usado, por favor use otro nombre");
                        }
                    }else
                    {
                        in_error("debe de confirmar la contraseña correctamente");
                    }
                }else
                {
                    in_error( "debe rellenar todos los parametros ");
                }
            }
    }catch(PDOException $e)
    {
        in_error( "el usuario ".$user_name." ya esta siendo usado, por favor use otro nombre");
    }
?>
