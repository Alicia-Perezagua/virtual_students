<?php
    require_once('sesion.php');
    require_once('ConexionDB.php');
    $function=$_POST['funcion'];
    $modulos_array = Array();
    $bd = new ConexionDB();
    $id_usuario=get_id();
    function getModulos(){
        global $id_usuario;
        global $bd;
        global $modulos_array;

        $sql = "SELECT matriculaciones.id_modulo_fk, modulos.nombre_modulo FROM matriculaciones INNER JOIN modulos ON matriculaciones.id_modulo_fk = modulos.id_modulo WHERE matriculaciones.id_user_fk = " . $id_usuario . ";";
        $res = $bd -> search($sql);
        $modulos = count($res);
        for($i = 0; $i < $modulos; $i++){
            $moduloAr = [
                "id_modulo" => $res[$i]["id_modulo_fk"],
                "nombre" => $res[$i]["nombre_modulo"]
            ];
            array_push($modulos_array, array($moduloAr));
        }
        null_error();
        return $modulos_array;
    }

    function getModulosById(){
        global $bd;

        $id_modulo = $_POST["idModulo"]; 

        $sql = "SELECT nombre_modulo FROM modulos WHERE id_modulo = ". $id_modulo. ";";
        $res = $bd -> search($sql);

        return $res;
    }
    function cuerpo(){
        global $id_usuario;
        global $db;
        $id_modulo=$_POST['id_modulo'];
        $tareas = $db -> prepare("call tareas(?)");
        $tareas -> bindParam(1, $id_modulo, PDO::PARAM_STR, 255);
        $tareas -> execute();
        $tarea_array=[];
        while($tarea = $tareas->fetch()){
            $modulo = [
                "id_tarea" => $tarea["id_modulo"],
                "nombre" => $tarea["nombre_modulo"]
            ];
    
            $tarea_array.array_push($modulo);
        }
        null_error();
        return $tarea_array;
    }
    switch ($function){
        case "getModulos":
            echo json_encode(getModulos());
            break;
        case "getModulosById": 
            echo json_encode(getModulosById());
            break;
        case "cuerpo":
            echo cuerpo();
            break;
    }
?>