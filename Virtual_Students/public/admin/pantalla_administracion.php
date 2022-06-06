<?php include "./header.php" ?>

<body onload="onLoadBody()">

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
    <button class="botones-admin w-50" data-toggle="modal" data-target="#alta-centros">Alta Centros</button>
    <button class="botones-admin w-50" data-toggle="modal" data-target="#alta-usuarios">Alta Ciclos</button>
    <button class="botones-admin w-50" data-toggle="modal" data-target="#alta-usuarios">Alta Modulos</button>
    <button class="botones-admin w-50" data-toggle="modal" data-target="#alta-usuarios">Asignar Modulos</button>
    <button class="botones-admin w-50" data-toggle="modal" data-target="#alta-usuarios">Crear Grupos</button>
    <button class="botones-admin w-50" data-toggle="modal" data-target="#alta-usuarios">Añadir Horarios</button>
    <button class="botones-admin w-50" data-toggle="modal" data-target="#alta-usuarios">Modificación de Datos</button>
</div>

<div class="modal fade w-100 h-100" id="alta-usuarios">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">

            <div class="modal-header d-flex flex-row align-items-center bg-light">
                <h4 class="modal-title">Nuevo Usuario</h4>
            </div>

            <div class="addUser modal-body">
                <form action="" class="p-1 m-0 d-flex flex-row justify-content-around rounded border border-dark bg-light w-100 h-100">
                    <div class="bloque1 d-flex flex-column justify-content-around h-100 col-6">
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Username<span class="requerido text-danger">*</span>: &nbsp;</label><input type="text" name="" id="user" class="datos-user col-7"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Nombre<span class="requerido text-danger">*</span>: &nbsp;</label><input type="text" name="" id="name" class="datos-user col-7"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Primer Apellido<span class="requerido text-danger">*</span>: &nbsp;</label><input type="text" name="" id="lastname1" class="datos-user col-7"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Segundo Apellido<span class="requerido text-danger">*</span>: &nbsp;</label><input type="text" name="" id="lastname2" class="datos-user col-7"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Fecha de Nacimiento<span class="requerido text-danger">*</span>: &nbsp;</label><input type="date" name="" id="birthday" class="datos-user col-7"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">DNI<span class="requerido text-danger">*</span>: &nbsp;</label><input type="text" name="" id="dni" class="datos-user col-7" onchange="comprobarDNI()"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Dirección<span class="requerido text-danger">*</span>: &nbsp;</label><input type="text" name="" id="dir" class="datos-user col-7"></div>
                    </div>
                    <div class="bloque2 d-flex flex-column justify-content-around h-100 col-6">        
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Código Postal<span class="requerido text-danger">*</span>: &nbsp;</label><input type="text" name="" id="postCode" class="datos-user col-7" onchange="comprobarCodPos()"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Localidad<span class="requerido text-danger">*</span>: &nbsp;</label><input type="text" name="" id="local" class="datos-user col-7"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Comunidad Autónoma<span class="requerido text-danger">*</span>: &nbsp;</label><input type="text" name="" id="comAuto" class="datos-user col-7"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Nacionalidad<span class="requerido text-danger">*</span>: &nbsp;</label><input type="text" name="" id="nacio" class="datos-user col-7"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Email<span class="requerido text-danger">*</span>: &nbsp;</label><input type="text" name="" id="mail" class="datos-user col-7" onchange="comprobarEmail(this.id, this.value)"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Teléfono Móvil<span class="requerido text-danger">*</span>: &nbsp;</label><input type="text" name="" id="mobile" class="datos-user col-7" onchange="comprobarMovil()"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Teléfono Fijo:</label><input type="text" name="" id="phone" class="datos-user col-7" onchange="comprobarFijo()"></div>
                        <div class="d-flex flex-row justify-content-around"><label for="" class="col-5">Rol<span class="requerido text-danger">*</span>: &nbsp;</label>
                        <select name="" id="role" class="datos-user col-7">
                            <option value="">No Asignado</option>
                            <option value="Alumno">Alumno</option>
                            <option value="Profesor">Profesor</option>
                            <option value="Admin">Admin</option>
                        </select></div>
                    </div>
                </form>
            </div>

            <div class="modal-footer d-flex flex-row justify-content-between w-100 p-0 m-0  bg-light">
                <div class="contenedor-toast p-0 m-0 h-100 col-8 d-flex flex-row justify-content-end">
                    <div class="toast w-75 h-100" id="element" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000">
                        <div class="toast-body w-100 h-100 d-flex flex-row justify-content-center align-items-center rounded border border-white text-white bg-danger" id="toast-text"></div>
                    </div>
                </div>
                <div class="botones col-4 p-0 m-0 d-flex flex-row justify-content-end">
                    <button id="go" type="button" class="btn btn-success mr-2" onclick="addUser()">Añadir</button>
                    <button type="button" class="btn btn-danger mr-2" data-dismiss="modal" onclick="onCloseModalUsers()">Close</button>
                </div>
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
                    <div class="d-flex flex-row justify-content-around"><label for="" class="col-3">Seleccione un Usuario<span class="requerido text-danger">*</span>: &nbsp;</label><select class="col-9" name="" id="idUsuario"><option value="">-</option></select></div>
                    <div class="d-flex flex-row justify-content-around"><label for="" class="col-3">NRP<span class="requerido text-danger">*</span>: &nbsp;</label><input class="col-9" type="text" name="" id="nrp"></div>
                    <div class="d-flex flex-row justify-content-around"><label for="" class="col-3">Salario: &nbsp;</label><input class="col-9" type="text" name="" id="salary"></div>
                    <div class="d-flex flex-row justify-content-around"><label for="" class="col-3">Email Docente<span class="requerido text-danger">*</span>: &nbsp;</label><input class="col-9" type="text" name="" id="emailDocente" onchange="comprobarEmail(this.id, this.value)"></div>
                </form>
            </div>
            

            <div class="modal-footer d-flex flex-row justify-content-between w-100 p-0 m-0  bg-light">
                <div class="contenedor-toast p-0 m-0 h-100 col-8 d-flex flex-row justify-content-end">
                    <div class="toast w-75 h-100" id="toast-alta" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000">
                        <div class="toast-body w-100 h-100 d-flex flex-row justify-content-center align-items-center rounded border border-white text-white bg-danger" id="alta-toast-text"></div>
                    </div>
                </div>
                <div class="botones col-4 p-0 m-0 d-flex flex-row justify-content-end">
                    <button type="button" class="btn btn-success mr-2" onclick="altaProfesores()">Añadir</button>
                    <button type="button" class="btn btn-danger mr-2" data-dismiss="modal" onclick="onCloseModalAlta()">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="modal fade w-100 h-100" id="alta-centros">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">

            <div class="modal-header d-flex flex-row align-items-center">
                <h4 class="modal-title">Nuevo Centro Educativo</h4>
            </div>

            <div class="addCentro modal-body">
                <form action="" class="d-flex flex-column justify-content-center align-items-around h-100">
                    <div class="d-flex flex-row justify-content-around"><label for="" class="col-3">Seleccione un Usuario: &nbsp;</label><input type="text"></div>
                    <div class="d-flex flex-row justify-content-around"><label for="" class="col-3">NRP: &nbsp;</label><input class="col-9" type="text" name="" id=""></div>
                    <div class="d-flex flex-row justify-content-around"><label for="" class="col-3">Salario (opcional): &nbsp;</label><input class="col-9" type="text" name="" id=""></div>
                    <div class="d-flex flex-row justify-content-around"><label for="" class="col-3">Email Docente: &nbsp;</label><input class="col-9" type="text" name="" id=""></div>
                    <div class="d-flex flex-row justify-content-around"><label for="" class="col-3">NRP: &nbsp;</label><input class="col-9" type="text" name="" id=""></div>
                    <div class="d-flex flex-row justify-content-around"><label for="" class="col-3">Salario (opcional): &nbsp;</label><input class="col-9" type="text" name="" id=""></div>
                    <div class="d-flex flex-row justify-content-around"><label for="" class="col-3">Email Docente: &nbsp;</label><input class="col-9" type="text" name="" id=""></div>
                </form>
            </div>
            

            <div class="modal-footer d-flex flex-row justify-content-between w-100 p-0 m-0  bg-light">
                <!-- <div class="contenedor-toast p-0 m-0 h-100 col-8 d-flex flex-row justify-content-end">
                    <div class="toast w-75 h-100" id="toast-alta-centros" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000">
                        <div class="toast-body w-100 h-100 d-flex flex-row justify-content-center align-items-center rounded border border-white text-white bg-danger" id="altaCentros-toast-text"></div>
                    </div>
                </div> -->
                <div class="botones col-4 p-0 m-0 d-flex flex-row justify-content-end">
                    <button type="button" class="btn btn-success mr-2" data-dismiss="modal">Añadir</button>
                    <button type="button" class="btn btn-danger mr-2" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div> -->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>