<?php
    require_once('./sesion.php');
    if(get_rol()=='admin'||get_rol()=='administrador'){
        $function=$_POST['function'];
        function darDatosUsuario(){
            global $db;
            $id_usuario=$_POST['id_usuario'];
            $datos = $db -> prepare("call datosUsario(?)");
            $datos -> bindParam(1, $id_usuario, PDO::PARAM_STR, 255);
            $datos -> execute();
            $datos_array=[];
            while($dato = $datos->fetch()){
                $datoAr = [
                    'id_usuario'=>$dato['id_usuario'],
                    'username'=>$dato['username'],
                    '_password'=>$dato['_password'],
                    'nombre_usuario'=>$dato['nombre_usuario'],
                    'primer_apellido'=>$dato['primer_apellido'],
                    'segundo_apellido'=>$dato['segundo_apellido'],
                    'fecha_de_nacimiento'=>$dato['fecha_de_nacimiento'],
                    'dni'=>$dato['dni'],
                    'direccion'=>$dato['direccion'],
                    'postal_code'=>$dato['postal_code'],
                    'localidad'=>$dato['localidad'],
                    'com_auto'=>$dato['com_auto'],
                    'nacionalidad'=>$dato['nacionalidad'],
                    'email'=>$dato['email'],
                    'telefono_movil'=>$dato['telefono_movil'],
                    'telefono_fijo'=>$dato['telefono_fijo'],
                    'categoria'=>$dato['categoria']
                ];
        
                $datos_array.array_push($datoAr);
            }
            $datos_array.array_push($datos);
            null_error();
            return $datos_array;
        }
        function ejecutarCambioUsuario(){
            global $db;
            $id_usuario=$_POST['id_usuario'];
            $username=$_POST['username'];
            $_password=$_POST['_password'];
            $nombre_usuario=$_POST['nombre_usuario'];
            $primer_apellido=$_POST['primer_apellido'];
            $segundo_apellido=$_POST['segundo_apellido'];
            $fecha_de_nacimiento=$_POST['fecha_de_nacimiento'];
            $dni=$_POST['dni'];
            $direccion=$_POST['direccion'];
            $postal_code=$_POST['postal_code'];
            $localidad=$_POST['localidad'];
            $com_auto=$_POST['com_auto'];
            $nacionalidad=$_POST['nacionalidad'];
            $email=$_POST['email'];
            $telefono_movil=$_POST['telefono_movil'];
            $telefono_fijo=$_POST['telefono_fijo'];
            $categoria=$_POST['categoria'];

            $datos = $db -> prepare("call cambioDatos(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $datos -> bindParam(1, $id_usuario, PDO::PARAM_STR, 255);
            $datos -> bindParam(1, $username, PDO::PARAM_STR, 255);
            $datos -> bindParam(1, $_password, PDO::PARAM_STR, 255);
            $datos -> bindParam(1, $nombre_usuario, PDO::PARAM_STR, 255);
            $datos -> bindParam(1, $primer_apellido, PDO::PARAM_STR, 255);
            $datos -> bindParam(1, $segundo_apellido, PDO::PARAM_STR, 255);
            $datos -> bindParam(1, $fecha_de_nacimiento, PDO::PARAM_STR, 255);
            $datos -> bindParam(1, $dni, PDO::PARAM_STR, 255);
            $datos -> bindParam(1, $direccion, PDO::PARAM_STR, 255);
            $datos -> bindParam(1, $postal_code, PDO::PARAM_STR, 255);
            $datos -> bindParam(1, $localidad, PDO::PARAM_STR, 255);
            $datos -> bindParam(1, $com_auto, PDO::PARAM_STR, 255);
            $datos -> bindParam(1, $nacionalidad, PDO::PARAM_STR, 255);
            $datos -> bindParam(1, $email, PDO::PARAM_STR, 255);
            $datos -> bindParam(1, $telefono_movil, PDO::PARAM_STR, 255);
            $datos -> bindParam(1, $telefono_fijo, PDO::PARAM_STR, 255);
            $datos -> bindParam(1, $categoria, PDO::PARAM_STR, 255);
            $datos -> execute();
            null_error();
        }
        switch ($function){
            case "darDatos":
                echo darDatosUsuario();
                break;
            case "ejecutarCambioUsuario":
                echo ejecutarCambioUsuario();
                break;
        }
    }else{
        in_error('Esta página es de uso único para administradores');
    }
?>