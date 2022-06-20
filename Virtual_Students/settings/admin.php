<?php
    require_once('./ConexionDB.php');
    require_once('./sesion.php');
    // if(get_rol()=='admin'||get_rol()=='administrador'){
        $function=$_POST['funcion'];
        $profesores_arr = Array();
        $profesores_arr_2 = Array();
        $alumnos_arr = Array();
        $centros_arr = Array();
        $grupos_arr = Array();
        $ciclos_arr = Array();
        $modulos_arr = Array();
        $ciclosByCentro_arr = Array();
        $modulosByCicloCurso_arr = Array();
        $bd = new ConexionDB();
        // function darDatosUsuario(){
        //     global $db;
        //     $id_usuario=$_POST['id_usuario'];
        //     $datos = $db -> prepare("call datosUsario(?)");
        //     $datos -> bindParam(1, $id_usuario, PDO::PARAM_STR, 255);
        //     $datos -> execute();
        //     $datos_array=[];
        //     while($dato = $datos->fetch()){
        //         $datoAr = [
        //             'id_usuario'=>$dato['id_usuario'],
        //             'username'=>$dato['username'],
        //             '_password'=>$dato['_password'],
        //             'nombre_usuario'=>$dato['nombre_usuario'],
        //             'primer_apellido'=>$dato['primer_apellido'],
        //             'segundo_apellido'=>$dato['segundo_apellido'],
        //             'fecha_de_nacimiento'=>$dato['fecha_de_nacimiento'],
        //             'dni'=>$dato['dni'],
        //             'direccion'=>$dato['direccion'],
        //             'postal_code'=>$dato['postal_code'],
        //             'localidad'=>$dato['localidad'],
        //             'com_auto'=>$dato['com_auto'],
        //             'nacionalidad'=>$dato['nacionalidad'],
        //             'email'=>$dato['email'],
        //             'telefono_movil'=>$dato['telefono_movil'],
        //             'telefono_fijo'=>$dato['telefono_fijo'],
        //             'categoria'=>$dato['categoria']
        //         ];
        
        //         $datos_array.array_push($datoAr);
        //     }
        //     $datos_array.array_push($datos);
        //     null_error();
        //     return $datos_array;
        // }
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

                if($fijo === ""){
                    $fijo = 0;
                }

                $sql = "INSERT INTO usuarios VALUES(null, '" . $username . "', null, '"  . $nombre . "', '" . $apellido1 . "', '" . $apellido2 . "', '" . $fechNac . "', '" . $dni . "', '" . $address . "', " . $postCode . ", '" . $localidad . "', '" . $comunidad_autonoma . "', '" . $nacionalidad . "', '" . $email . "', " . $movil . "," . $fijo . ", '" . $rol . "')";
                $bd -> search($sql);
                null_error();
                return "Usuario insertado con éxito";
        }

        function cargarProfesores(){
            global $bd, $profesores_arr;
        
            $parametro = "Profesor";
        
            $sql = "SELECT * FROM usuarios WHERE rol = '" . $parametro . "'";
            $res = $bd -> search($sql);
            $profesores = count($res);
        
            for($i = 0; $i < $profesores; $i++){
        
                $datos = [
                    "id_user" => $res[$i]["id_user"],
                    "nombre" => $res[$i]["nombre_usuario"], 
                    "primer_apellido" => $res[$i]['primer_apellido'],
                    "segundo_apellido" => $res[$i]['segundo_apellido']
                ]; 
        
                array_push($profesores_arr, array($datos));
        
            }
        
            return $profesores_arr;
        
        }

        function cargarProfesores2(){
            global $bd, $profesores_arr_2;

            $sql = "SELECT profesores.id_profesor, usuarios.nombre_usuario, usuarios.primer_apellido, usuarios.segundo_apellido FROM usuarios INNER JOIN profesores ON usuarios.id_user = profesores.id_user_fk";
            $res = $bd -> search($sql);
            $profesores = count($res);
        
            for($i = 0; $i < $profesores; $i++){
        
                $datos = [
                    "id_profesor" => $res[$i]["id_profesor"],
                    "nombre" => $res[$i]["nombre_usuario"],
                    "primer_apellido" => $res[$i]["primer_apellido"],
                    "segundo_apellido" => $res[$i]["segundo_apellido"],  
                ]; 
        
                array_push($profesores_arr_2, array($datos));
        
            }
        
            return $profesores_arr_2;


        }

        function cargarAlumnos(){
            global $bd, $alumnos_arr;
        
            $parametro = "Alumno";
        
            $sql = "SELECT * FROM usuarios WHERE rol = '" . $parametro . "'";
            $res = $bd -> search($sql);
            $alumnos = count($res);
        
            for($i = 0; $i < $alumnos; $i++){
        
                $datos = [
                    "id_user" => $res[$i]["id_user"],
                    "nombre" => $res[$i]["nombre_usuario"], 
                    "primer_apellido" => $res[$i]['primer_apellido'],
                    "segundo_apellido" => $res[$i]['segundo_apellido']
                ]; 
        
                array_push($alumnos_arr, array($datos));
        
            }
        
            return $alumnos_arr;
        
        }

        function cargarCiclos(){
            global $bd, $ciclos_arr;
        
            $sql = "SELECT id_ciclo, nombre_ciclo FROM ciclos_formativos";
            $res = $bd -> search($sql);
            $ciclos = count($res);
        
            for($i = 0; $i < $ciclos; $i++){
        
                $datos = [
                    "id_ciclo" => $res[$i]["id_ciclo"],
                    "nombre_ciclo" => $res[$i]["nombre_ciclo"], 
                ]; 
        
                array_push($ciclos_arr, array($datos));
        
            }
        
            return $ciclos_arr;
        
        }

        function cargarModulos(){
            global $bd, $modulos_arr;
        
            $sql = "SELECT id_modulo, nombre_modulo FROM modulos";
            $res = $bd -> search($sql);
            $modulos = count($res);
        
            for($i = 0; $i < $modulos; $i++){
        
                $datos = [
                    "id_modulo" => $res[$i]["id_modulo"],
                    "nombre_modulo" => $res[$i]["nombre_modulo"], 
                ]; 
        
                array_push($modulos_arr, array($datos));
        
            }
        
            return $modulos_arr;
        
        }

        function cargarCentros(){
            global $bd, $centros_arr;
        
            $sql = "SELECT id_centro, nombre_centro FROM centros_educativos";
            $res = $bd -> search($sql);
            $centros = count($res);
        
            for($i = 0; $i < $centros; $i++){
        
                $datos = [
                    "id_centro" => $res[$i]["id_centro"],
                    "nombre_centro" => $res[$i]["nombre_centro"], 
                ]; 
        
                array_push($centros_arr, array($datos));

            }

            return $centros_arr;
        }

            function cargarGrupos(){
                global $bd, $grupos_arr;
            
                $sql = "SELECT id_grupo, denominacion FROM grupos_alumnos";
                $res = $bd -> search($sql);
                $grupos = count($res);
            
                for($i = 0; $i < $grupos; $i++){
            
                    $datos = [
                        "id_grupo" => $res[$i]["id_grupo"],
                        "denominacion" => $res[$i]["denominacion"], 
                    ]; 
            
                    array_push($grupos_arr, array($datos));
            
                }
        
            return $grupos_arr;
        
        }



        function altaProfesores(){
            global $bd;
        
           try{ 
            $nrp = $_POST['nrp'];
            $salario = $_POST['salary'];
            $emailDocente = $_POST['email'];
            $id_user = $_POST['id_user'];

            if($salario === ""){
                $salario = 0;
            }
        
            $sql = "INSERT INTO profesores VALUES(null, " . $nrp . ", " . $salario . ", '" . $emailDocente . "', " . $id_user. ")";
            $bd -> search($sql);

            return "Profesor dado de alta";
           } catch(PDOException $e) {
        
            $e = "Ya existe el profesor";
            return $e;
           }
        }

        function altaCentros(){
            global $bd; 

            $nombreC = $_POST["nombreC"];
            $direccionC = $_POST["direccionC"];
            $codPostC = $_POST["codPostC"];
            $localidadC = $_POST["localidadC"];
            $provinciaC = $_POST["provinciaC"];
            $comAutoC = $_POST["comAutoC"];
            $paisC = $_POST["paisC"];

            $sql = "INSERT INTO centros_educativos VALUES(null, '" . $nombreC . "', '" . $direccionC . "', '" . $codPostC . "', '" . $localidadC . "', '" . $provinciaC . "', '" . $comAutoC . "', '" . $paisC . "')";
            $bd -> search($sql); 

            return "Centro dado de alta con éxito"; 
        }

        function altaCiclos(){
            global $bd; 

            $nombreCiclo = $_POST["nombreCiclo"];
            $descripcion = $_POST["descripcion"];
            $numCursos = $_POST["numCursos"];
            $horasTotales = $_POST["horasTotales"];
            $famProf = $_POST["famProf"];


            $sql = "INSERT INTO ciclos_formativos VALUES(null, '" . $nombreCiclo . "', '" . $descripcion . "', '" . $numCursos . "', '" . $horasTotales . "', '" . $famProf . "')";
            $bd -> search($sql); 

            return "Ciclo dado de alta con éxito"; 
        }

        function altaModulos(){
            global $bd; 

            $nombreModulo = $_POST["nombreModulo"];
            $descripcionM = $_POST["descripcionM"];
            $horasTotalesM = $_POST["horasTotalesM"];
            $horasSemanales = $_POST["horasSemanales"];
            $curso = $_POST["curso"];


            $sql = "INSERT INTO modulos VALUES(null, '" . $nombreModulo . "', '" . $descripcionM . "', '" . $horasTotalesM . "', '" . $horasSemanales . "', '" . $curso . "')";
            $bd -> search($sql); 

            return "Módulo registrado con éxito"; 
        }

        function altaGrupos(){
            global $bd; 

            $denominacion = $_POST["denominacion"];


            $sql = "INSERT INTO grupos_alumnos VALUES(null, '" . $denominacion . "')";
            $bd -> search($sql); 

            return "Grupo registrado con éxito"; 
        }

        function ciclosCentros(){
            global $bd; 

            $idCentro = $_POST["idCentro"];
            $idCiclo = $_POST["idCiclo"];

            $sql = "INSERT INTO correspondencia_ciclos_centros VALUES(" . $idCiclo . ", " . $idCentro . ")";
            $bd -> search($sql);

            return "Asignación Completada";
        }

        function modulosCiclos(){
            global $bd; 

            $idCiclo = $_POST["idCiclo"];
            $idModulo = $_POST["idModulo"];

            $sql = "INSERT INTO correspondecia_ciclos_modulos VALUES(" . $idModulo . ", " . $idCiclo . ")";
            $bd -> search($sql);

            return "Asignación Completada";
        }

        function modulosGruposProfesor(){
            global $bd; 

            $idGrupo = $_POST["idGrupo"];
            $idModulo = $_POST["idModulo"];
            $idProfesor = $_POST["idProfesor"];

            $sql = "INSERT INTO correspondencia_profesores_modulos_grupos VALUES(" . $idProfesor . ", " . $idModulo . ", " .  $idGrupo . ")";
            $bd -> search($sql);

            return "Asignación Completada";
        }

        function getCiclosByIdCentro(){
            global $bd, $ciclosByCentro_arr; 

            $idCentro = $_POST["idCentro"];

            $sql = "SELECT correspondencia_ciclos_centros.id_ciclo_fk, ciclos_formativos.nombre_ciclo  FROM correspondencia_ciclos_centros INNER JOIN ciclos_formativos ON correspondencia_ciclos_centros.id_ciclo_fk = ciclos_formativos.id_ciclo WHERE id_centro_fk = " . $idCentro. ";";
            $res = $bd -> search($sql);
                $ciclos = count($res);
            
                for($i = 0; $i < $ciclos; $i++){
            
                    $datos = [
                        "id_ciclo" => $res[$i]["id_ciclo_fk"],
                        "nombre_ciclo" => $res[$i]["nombre_ciclo"], 
                    ]; 
            
                    array_push($ciclosByCentro_arr, array($datos));
            
                }
        
            return $ciclosByCentro_arr;
        
        }

        function getModulosByIdCicloCurso(){
            global $bd, $modulosByCicloCurso_arr; 

            $idCiclo = $_POST["idCiclo"];
            $curso = $_POST["curso"];

            $sql = "SELECT correspondecia_ciclos_modulos.id_modulo_fk, modulos.nombre_modulo  FROM correspondecia_ciclos_modulos INNER JOIN modulos ON correspondecia_ciclos_modulos.id_modulo_fk = modulos.id_modulo WHERE correspondecia_ciclos_modulos.id_ciclo_fk = " . $idCiclo. " AND modulos.curso = '" . $curso . "';";
            $res = $bd -> search($sql);
            $modulos = count($res);
            
                for($i = 0; $i < $modulos; $i++){
            
                    $datos = [
                        "id_modulo" => $res[$i]["id_modulo_fk"],
                        "nombre_modulo" => $res[$i]["nombre_modulo"], 
                    ]; 
            
                    array_push($modulosByCicloCurso_arr, array($datos));
            
                }
        
            return $modulosByCicloCurso_arr;
        
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
            case "altaUsuario": 
                echo addUsuario();
                break;
            case "cargarProfesores": 
                echo json_encode(cargarProfesores());
                break;
            case "cargarProfesores2": 
                echo json_encode(cargarProfesores2());
                break;
            case "cargarAlumnos": 
                echo json_encode(cargarAlumnos());
                break;
            case "cargarCiclos":
                echo json_encode(cargarCiclos());
                break;
            case "cargarModulos": 
                echo json_encode(cargarModulos());
                break;
            case "cargarCentros": 
                echo json_encode(cargarCentros());
                break;
            case "cargarGrupos":
                echo json_encode(cargarGrupos());
                break;
            case "altaProfesores": 
                echo altaProfesores();
                break;
            case "darDatos":
                echo darDatosUsuario();
                break;
            case "altaCentros": 
                echo altaCentros();
                break;
            case "altaCiclos": 
                echo altaCiclos();
                break;
            case "altaModulos":
                echo altaModulos();
                break;
            case "altaGrupos":
                echo altaGrupos();
                break;
            case "ciclosCentros": 
                echo ciclosCentros();
                break;
            case "modulosCiclos": 
                echo modulosCiclos(); 
                break;
            case "modulosGruposProfesor": 
                echo modulosGruposProfesor();
                break;
            case "getCiclosByIdCentro": 
                echo json_encode(getCiclosByIdCentro());
                break;
            case "getModulosByIdCicloCurso": 
                echo json_encode(getModulosByIdCicloCurso());
                break;
            case "ejecutarCambioUsuario":
                echo ejecutarCambioUsuario();
                break;
        }
    // }else{
    //     in_error('Esta página es de uso único para administradores');
    // }
?>