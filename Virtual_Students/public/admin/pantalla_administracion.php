<?php include "./header.php" ?>

<div class="container-fluid navbar p-0 m-0">
    <ul class="d-flex flex-row justify-content-around align-items-center w-100 h-100 p-0 m-0">
        <a class="enlaces-principales h-100 rounded" href="#"><li class="list-unstyled p-0 m-0 h-100 home d-flex justify-content-center align-items-center"><i class="fa fa-home" aria-hidden="true"></i></li></a>
        <a class="enlaces-principales h-100 rounded" href="./login.php"><li class="inicio-sesion list-unstyled p-0 m-0 h-100 d-flex justify-content-center align-items-center">Iniciar Sesión</li></a>
    </ul>
</div>
<div class="funcionalidades container d-flex flex-column align-items-center justify-content-around pb-2">
    <button class="botones-admin w-50" data-toggle="modal" data-target="#alta-usuarios">Alta Usuarios</button>
    <button class="botones-admin w-50" data-toggle="modal" data-target="#alta-profesores">Alta Profesores</button>
    <button class="botones-admin w-50" data-toggle="modal" data-target="#alta-usuarios">Matriculación Alumnos</button>
    <button class="botones-admin w-50" data-toggle="modal" data-target="#alta-usuarios">Alta Centros</button>
    <button class="botones-admin w-50" data-toggle="modal" data-target="#alta-usuarios">Alta Ciclos</button>
    <button class="botones-admin w-50" data-toggle="modal" data-target="#alta-usuarios">Alta Modulos</button>
    <button class="botones-admin w-50" data-toggle="modal" data-target="#alta-usuarios">Crear Grupos</button>
    <button class="botones-admin w-50" data-toggle="modal" data-target="#alta-usuarios">Añadir Horarios</button>
    <button class="botones-admin w-50" data-toggle="modal" data-target="#alta-usuarios">Modificación de Datos</button>
</div>

<div class="modal fade w-100 h-100" id="alta-usuarios">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">

            <div class="modal-header d-flex flex-row align-items-center">
                <h4 class="modal-title">Nuevo Usuario</h4>
            </div>

            <div class="addUser modal-body">
                <form action="" class="p-1 m-0 d-flex flex-row justify-content-around rounded border border-dark bg-light w-100 h-100">
                    <div class="bloque1 d-flex flex-column justify-content-around h-100 col-6">
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Username: &nbsp;</label><input type="text" name="" id="user" class="datos-user col-7"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Nombre: &nbsp;</label><input type="text" name="" id="name" class="datos-user col-7"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Primer Apellido: &nbsp;</label><input type="text" name="" id="lastname1" class="datos-user col-7"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Segundo Apellido: &nbsp;</label><input type="text" name="" id="lastname2" class="datos-user col-7"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Fecha de Nacimiento: &nbsp;</label><input type="date" name="" id="birthday" class="datos-user col-7"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">DNI: &nbsp;</label><input type="text" name="" id="dni" class="datos-user col-7"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Dirección: &nbsp;</label><input type="text" name="" id="dir" class="datos-user col-7"></div>
                    </div>
                    <div class="bloque2 d-flex flex-column justify-content-around h-100 col-6">        
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Código Postal: &nbsp;</label><input type="text" name="" id="postCode" class="datos-user col-7" minlength="5" maxlength="5"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Localidad: &nbsp;</label><input type="text" name="" id="local" class="datos-user col-7"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Comunidad Autónoma: &nbsp;</label><input type="text" name="" id="comAuto" class="datos-user col-7"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Nacionalidad: &nbsp;</label><input type="text" name="" id="nacio" class="datos-user col-7"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Email: &nbsp;</label><input type="text" name="" id="mail" class="datos-user col-7" onchange="comprobarEmail()"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Teléfono Móvil: &nbsp;</label><input type="text" name="" id="mobile" class="datos-user col-7"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Teléfono Fijo:</label><input type="text" name="" id="phone" class="datos-user col-7"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Rol: &nbsp;</label>
                        <select name="" id="role" class="datos-user col-7">
                            <option value="">Estudiante</option>
                            <option value="">Profesor</option>
                            <option value="">Admin</option>
                        </select></div>
                    </div>
                </form>
            </div>

            <div class="modal-footer d-flex flex-row align-content-center">
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="addUser()">Añadir</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade w-100 h-100" id="alta-profesores">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">

            <div class="modal-header d-flex flex-row align-items-center">
                <h4 class="modal-title">Nuevo Profesor</h4>
            </div>

            <div class="addTeacher modal-body">
                <form action="" class="d-flex flex-column justify-content-center align-items-around h-100">
                    <div class="d-flex flex-row justify-content-around"><label for="" class="col-3">Seleccione un Usuario: &nbsp;</label><select class="col-9" name="" id=""></select></div>
                    <div class="d-flex flex-row justify-content-around"><label for="" class="col-3">NRP: &nbsp;</label><input class="col-9" type="text" name="" id=""></div>
                    <div class="d-flex flex-row justify-content-around"><label for="" class="col-3">Salario (opcional): &nbsp;</label><input class="col-9" type="text" name="" id=""></div>
                    <div class="d-flex flex-row justify-content-around"><label for="" class="col-3">Email Docente: &nbsp;</label><input class="col-9" type="text" name="" id=""></div>
                </form>
            </div>

<div class="modal-footer d-flex flex-row align-content-center">
    <button type="button" class="btn btn-success" data-dismiss="modal">Añadir</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>

</div>
</di