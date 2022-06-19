<?php include "./header.php" ?>

<body onload="onLoadDatosPersonales()" class="body_datos_personales">

<div id="menu_datos_personales" class='container-fluid navbar p-0 m-0'>
</div>

<div class="d-flex flex-column justify-content-center h-100" style="padding-top: 90px">
    <form action="" class="container border border-danger rounded w-75 p-2 bg-white">
        <label class="col-3" for="">Username: &nbsp; </label><input class="col-9 bg-light text-dark type="text" name="" id="username" disabled>
        <br>
        <label class="col-3" for="">Nombre: &nbsp; </label><input class="col-9 bg-light text-dark" type="text" name="" id="nombre" disabled>
        <br>
        <label class="col-3" for="">Apellidos: &nbsp; </label><input class="col-9 bg-light text-dark" type="text" name="" id="apellidos" disabled>
        <br>
        <label class="col-3" for="">Fecha de Nacimiento: &nbsp; </label><input class="col-9 bg-light text-dark" type="text" name="" id="fechNac" disabled>
        <br>
        <label class="col-3" for="">DNI: &nbsp; </label><input class="col-9 bg-light text-dark" type="text" name="" id="dni" disabled>
        <br>
        <label class="col-3" for="">Dirección: &nbsp; </label><input class="col-9 bg-light text-dark" type="text" name="" id="dir" disabled>
        <br>
        <label class="col-3" for="">Código Postal: &nbsp; </label><input class="col-9 bg-light text-dark" type="text" name="" id="codPos" disabled>
        <br>
        <label class="col-3" for="">Localidad: &nbsp; </label><input class="col-9 bg-light text-dark" type="text" name="" id="local" disabled>
        <br>
        <label class="col-3" for="">Comunidad Autónoma: &nbsp; </label><input class="col-9 bg-light text-dark" type="text" name="" id="comAuto" disabled>
        <br>
        <label class="col-3" for="">Nacionalidad: &nbsp; </label><input class="col-9 bg-light text-dark" type="text" name="" id="nac" disabled>
        <br>
        <label class="col-3" for="">Email: &nbsp; </label><input class="col-9 bg-light text-dark" type="text" name="" id="mail" disabled>
        <br>
        <label class="col-3" for="">Teléfono Móvil: &nbsp; </label><input class="col-9 bg-light text-dark" type="text" name="" id="telMov" disabled>
        <br>
        <label class="col-3" for="">Teléfono Fijo: &nbsp; </label><input class="col-9 bg-light text-dark" type="text" name="" id="telFij" disabled>
        <br>
        <div class="d-flex flex-row justify-content-end">
            <button>Solicitar cambio de los datos</button>
        </div>
    </form>
</div>

<?php include "./footer.php" ?>