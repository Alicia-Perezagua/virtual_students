<?php
require_once("./sesion.php");
cerrar_sesion();
header("Location:../public/admin/index.php");
?>