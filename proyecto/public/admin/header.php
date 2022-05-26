<?php require_once('lib/data.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./css/styles.css">
<link rel="stylesheet" href="./css/login_styles.css">
<link rel="stylesheet" href="./css/moduleScreenStyles.css">
<link rel="stylesheet" href="./css/menus_styles.css">
<link rel="stylesheet" href="./css/modulosC_Styles.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="./js/funciones_pantalla_modulo.js"></script>
<script src="./js/funciones_entrega_tareas.js"></script>
  <title>Administrador CMS</title>
  </head>
  <body class="p-0 m-0">
<div class="container-fluid navbar p-0 m-0">
    <ul class="d-flex flex-row justify-content-around align-items-center w-100 h-100 p-0 m-0">
      <a class="h-100 rounded" href="./index.php"><li class="list-unstyled p-0 m-0 h-100 home d-flex justify-content-center align-items-center"><i class="fa fa-home" aria-hidden="true"></i></li></a>
      <?php
      if(sesion_usuario()==null){
        echo'<a class="h-100 rounded" href="./login.php"><li class="inicio-sesion list-unstyled p-0 m-0 h-100 d-flex justify-content-center align-items-center">Iniciar Sesión</li></a>';
      }else{
        echo'<a class="h-100 rounded" href="../../settings/logout.php"><li class="inicio-sesion list-unstyled p-0 m-0 h-100 d-flex justify-content-center align-items-center">Cerrar Sesión</li></a>';
      }
      ?>
    </ul>
  </div>