<?php
    require_once('sesion.php');
    $function=$_POST['function'];
    $id_usuario=out_usuario_id();
    function cabecera(){
        global $id_usuario;
        global $db;
        $modulos = $db -> prepare("call modulos(?)");
        $modulos -> bindParam(1, $id_usuario, PDO::PARAM_STR, 255);
        $modulos -> execute();
        $modulos_array=[];
        while($modulo = $modulos->fetch()){
            $moduloAr = [
                "id_modulo" => $modulo["id_modulo"],
                "nombre" => $modulo["nombre_modulo"]
            ];
    
            $modulos_array.array_push($moduloAr);
        }
        null_error();
        return $modulos_array;
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
        case "cabecera":
            echo cabecera();
            break;
        case "cuerpo":
            echo cuerpo();
            break;
    }
?>