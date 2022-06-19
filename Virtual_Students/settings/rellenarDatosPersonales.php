<?php 

$id_user = $_POST["id_user"];

require "ConexionDB.php";

$mysql = new ConexionDB();

$sql = "SELECT * FROM usuarios WHERE id_user =" .$id_user;
$resultados = $mysql -> search($sql);
        $usuario = [
                "username" => $resultados[0]["username"],
                "nombre" => $resultados[0]["nombre_usuario"],
                "primerApellido" => $resultados[0]["primer_apellido"],
                "segundoApellido" => $resultados[0]["segundo_apellido"],
                "fechaNacimiento" => $resultados[0]["fecha_de_nacimiento"],
                "dni" => $resultados[0]["dni"],
                "direccion" => $resultados[0]["direccion"],
                "codigoPostal" => $resultados[0]["postal_code"],
                "localidad" => $resultados[0]["localidad"],
                "comunidadAutonoma" => $resultados[0]["com_auto"],
                "nacionalidad" => $resultados[0]["nacionalidad"],
                "email" => $resultados[0]["email"],
                "movil" => $resultados[0]["telefono_movil"],
                "telefonoFijo" => $resultados[0]["telefono_fijo"],
        ];

echo json_encode($usuario);

