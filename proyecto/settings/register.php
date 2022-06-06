<?php
    try
    {
        //introducción objeto sesión
        include "sesion.php";
        if(sesion_usuario()==null)
        {
            in_error("Ya estas con una cuenta conectado, por favor cierre antes de iniciar o crear otra");
        }else if (get_rol()=='profesor'||get_rol()=='administrador')
        {
                $funcion = $_POST['funcion'];
                // acceso a la base de datos ($bd)
                include 'ConexionDB.php';
                // función para añadir usuarios
                /**
                         * introducir los datos del usuario para su registro
                         * 
                         * @return void
                         * 
                         */
                    function addUsuario(){
                        global $bd;
                            $username = $_POST['username'];
                            $nombre = $_POST['nombre']; 
                            $apellido1 = $_POST['apellido1'];
                            $apellido2 = $_POST['apellido2'];
                            $fechNac = $_POST['fechNac'];
                            $dni = $_POST['dni']; 
                            $address = $_POST['address'];
                            $postCode = $_POST['postCode'];
                            $localidad = $_POST['localidad']; 
                            $comunidad_autonoma = $_POST['comunidad_autonoma'];
                            $nacionalidad = $_POST['nacionalidad'];
                            $email = $_POST['email'];
                            $movil = $_POST['movil']; 
                            $fijo = $_POST['fijo'];
                            $rol = $_POST['rol'];
                            
                            $insertarUsuario = $bd -> prepare("call insertarUser(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                            $insertarUsuario -> bindParam(1, $username, PDO::PARAM_STR, 255);
                            $insertarUsuario -> bindParam(2, $nombre, PDO::PARAM_STR, 255);
                            $insertarUsuario -> bindParam(3, $apellido1, PDO::PARAM_STR, 255);
                            $insertarUsuario -> bindParam(4, $apellido2, PDO::PARAM_STR, 255);
                            $insertarUsuario -> bindParam(5, $fechNac, PDO::PARAM_STR);
                            $insertarUsuario -> bindParam(6, $dni, PDO::PARAM_STR, 12);
                            $insertarUsuario -> bindParam(7, $address, PDO::PARAM_STR, 255);
                            $insertarUsuario -> bindParam(8, $postCode, PDO::PARAM_INT, 5);
                            $insertarUsuario -> bindParam(9, $localidad, PDO::PARAM_STR, 255);
                            $insertarUsuario -> bindParam(10, $comunidad_autonoma, PDO::PARAM_STR, 255);
                            $insertarUsuario -> bindParam(11, $nacionalidad, PDO::PARAM_STR, 255);
                            $insertarUsuario -> bindParam(12, $email, PDO::PARAM_STR, 255);
                            $insertarUsuario -> bindParam(13, $movil, PDO::PARAM_INT, 9);
                            $insertarUsuario -> bindParam(14, $fijo, PDO::PARAM_INT, 9);
                            $insertarUsuario -> bindParam(15, $rol, PDO::PARAM_STR, 255);
                            
                            $insertarUsuario -> execute();
                            null_error();
                            return "Usuario insertado con éxito";
                        };
                        /**
                         * mostrar datos de profesorer
                         * @return $profesores_arr
                         */
                        function cargarProfesores(){
                            global $bd, $profesores_arr;
                        
                            $profesores = $bd -> prepare("call recogerUsuariosByRol(?)");
                            $profesores -> bindParam(1, "Profesor", PDO::PARAM_STR, 255);
                            $profesores -> execute();
                        
                            while($datosProf = $profesores -> fetch()){
                        
                                $datos = [
                                    "id_user" => $datosProf["id_user"],
                                    "nombre" => $datosProf["nombre_usuario"]
                                ];
                        
                                $profesores_arr.array_push($datos);
                                
                            }
                            null_error();
                            return $profesores_arr;
                        
                        
                        };
                         
                        
                        switch($funcion){
                            case "cargar profesores": echo json_encode(cargarProfesores()); 
                            break;
                            case "añadir usuario": echo addUsuario();
                            break; 
                        }
        }else
        {
            in_error( "solo puede si es profesor o administrador del sitio ");
        }
    }catch(PDOException $e)
    {
        in_error( "el usuario ".$user_name." ya esta siendo usado, por favor use otro nombre");
    }
?>
