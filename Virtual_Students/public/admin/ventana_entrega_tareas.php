<?php include "./header.php" ?>

<style type="text/css">
    #drop-zone{
        height: 150px; 
        width: 100%;
        margin: auto;
        border: 2px solid black;
        background-color: white;
    }
</style>

<form action="" class="p-3 m-3">
    <label for="">Selecciona el archivo que quieres subir:&nbsp;</label>
    <input type="file" name="archivo-nuevo" id="archivo-nuevo" multiple onchange="mostrarValor()"/>
    <label for="">O también puedes soltar aquí tu archivo <i class="fa fa-arrow-down" aria-hidden="true"></i></label>
    <div class="mb-2 d-flex flex-row align-items-center justify-content-center" id="drop-zone" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeave(event)"><p id="mensaje">Arrastra aquí tus archivos</p></div>
    <div id="info-archivos"></div>
</form>