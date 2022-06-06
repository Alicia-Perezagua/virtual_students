<?php 

require "./ConexionDB.php";

$usuario = array();
$id_user = 1;

$recogerDatos = $bd -> prepare("call recogerUsuarioById(?)");
$recogerDatos -> bindParam(1, $id_user, PDO::PARAM_INT);
$recogerDatos -> execute();

while($datos = $recogerDatos -> fetch()){
        $usuario = [
                "username" => $datos["username"],
                "nombre" => $datos["nombre_usuario"],
                "primerApellido" => $datos["primer_apellido"],
                "segundoApellido" => $datos["segundo_apellido"],
                "fechaNacimiento" => $datos["fecha_de_nacimiento"],
                "dni" => $datos["dni"],
                "direccion" => $datos["direccion"],
                "codigoPostal" => $datos["postal_code"],
                "localidad" => $datos["localidad"],
                "comunidadAutonoma" => $datos["com_auto"],
                "nacionalidad" => $datos["nacionalidad"],
                "email" => $datos["email"],
                "movil" => $datos["telefono_movil"],
                "telefonoFijo" => $datos["telefono_fijo"],
        ];
}

echo json_encode($usuario);

