<?php 

require "./ConexionDB.php";

$recogerDatos = $bd -> prepare("call recogerDocumentos");
$recogerDatos -> execute();

while($datos = $recogerDatos -> fetch()){
        $nombre = $datos['nombre'];
        $archivo = $datos['archivo'];
}

$recogerDatos -> closeCursor();

header("Content-type: application/pdf"); 
header("Content-Disposition: atachment; filename='" . $nombre .".pdf'");

echo $archivo;

