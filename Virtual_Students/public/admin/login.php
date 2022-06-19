<?php include "./header.php" ?>

<body class="body-login p-0 m-0" onload="onload()">
    <div class="container-fluid navbar p-0 m-0 w-100">
        <ul class="d-flex flex-row justify-content-around align-items-center w-100 h-100 p-0 m-0">
            <a class="enlaces-principales h-100 rounded" href="./index.php"><li class="list-unstyled p-0 m-0 h-100 home d-flex justify-content-center align-items-center"><i class="fa fa-home" aria-hidden="true"></i></li></a>
        </ul>
    </div>

    <div class="contenedor-formulario container-fluid p-0 m-0 d-flex flex-column justify-content-center align-items-center w-100 h-0">
    <div class="alert alert-info" id="alert_sesion">
        <strong>¡Ya tienes un sesión iniciada!</strong> Redirigiendo...
    </div>
    
        <div class="formulario-login h-50 d-flex flex-column justify-content-center align-items-center mt-3" id="formulario-login">
            <label class="login-label" for="">Username: </label>
            <input class="login-input" type="text" id="username" onchange="comprobarDatos()">
            <button id="siguiente" class="button-entrar" onclick="comprobarClave()">Siguiente</button>
            <p class='mensajes' id='mensajes' style='display: none;'></p>
        </div>
    </div>