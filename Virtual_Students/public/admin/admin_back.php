<?php 

$funcion = $_POST['funcion'];

require_once "./ConexionDB.php";

$profesores_arr = Array();

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

    return "Usuario insertado con éxito";
};

function cargarProfesores(){
    global $bd, $profesores_arr;

    $parametro = "Profesor";

    $profesores = $bd -> prepare("call recogerUsuariosByRol(?)");
    $profesores -> bindParam(1, $parametro, PDO::PARAM_STR, 255);
    $profesores -> execute();

    while($datosProf = $profesores -> fetch()){

        $datos = [
            "id_user" => $datosProf["id_user"],
            "nombre" => $datosProf["nombre_usuario"], 
            "primer_apellido" => $datosProf['primer_apellido'],
            "segundo_apellido" => $datosProf['segundo_apellido']
        ]; 

        array_push($profesores_arr, array($datos));

    }

    return $profesores_arr;


};

function altaProfesores(){
    global $bd;

    
    $nrp = $_POST['nrp'];
    $salario = $_POST['salary'];
    $emailDocente = $_POST['email'];
    $id_user = $_POST['id_user'];

    $datos = $bd -> prepare("call altaProfesores(?, ?, ?, ?)");
    $datos -> bindParam(1, $nrp, PDO::PARAM_INT);
    $datos -> bindParam(2, $salario, PDO::PARAM_INT);
    $datos -> bindParam(3, $emailDocente, PDO::PARAM_STR, 255);
    $datos -> bindParam(4, $id_user, PDO::PARAM_INT);

    $datos -> execute();

    return "Profesor dado de alta";
}

switch($funcion){
    case "cargar profesores": echo json_encode(cargarProfesores()); 
    break;
    case "añadir usuario": echo addUsuario();
    break;
    case "alta profesor": echo altaProfesores();
    break; 
}

?>

