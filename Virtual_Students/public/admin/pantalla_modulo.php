<?php include "header.php" ?>
<body id="body-modulo" class="body-modulo" onload="onLoadIndex()">
    <div id="menu_pantalla_modulos" class='container-fluid navbar p-0 m-0'>
    </div>
    <div class="tranparencia-modulo">
        <h3 id="tituloPantalla"></h3>
        <nav aria-label="breadcrumb" class="breadcrumbs_menu">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Mis modulos</a></li>
                <li class="breadcrumb-item active" id="elementoBreadcrumbs"></li>
            </ol>
        </nav>
        <div id="accordion" class="container">
            <div class="card">
                <div class="card-header" id="recursos">
                    <h5 class="mb-0">
                        <button class="cabeceras btn btn-link collapsed" data-toggle="collapse" data-target="#contenedor-unidades-recursos" aria-expanded="false" aria-controls="contenedor-unidades-recursos">
                        Recursos
                        </button>
                    </h5>
                </div>
                
                <div id="contenedor-unidades-recursos" class="collapse" aria-labelledby="headingOne2">
                    <div id="unidad-didactica">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="cabeceras btn btn-link collapsed ml-5" data-toggle="collapse" data-target="#recursos-contenido" aria-expanded="false" aria-controls="recursos-contenido">
                                UT1 - Prototypes
                                </button>
                            </h5>
                        </div>
                    </div>

                    <div id="recursos-contenido" class="collapse p-0 m-0" aria-labelledby="headingTwo">
                        <div class="card-body p-0 m-0" id="contenedor-recursos">
                            <div class="recurso-nueva d-flex flex-row align-items-center  p-0 m-0">
                                <div class="col-2"></div>
                                <h5 class="titulo-recurso col-4">Recurso 1 </h5>
                                <div class="col-4 h-100 d-flex flex-row justify-content-center"><button class="botones-modulos w-75 h-100"><a id="recurso1" class="archivo_descargable" href="./pruebas_backend.php" download="Documento 1"><i class="fa fa-download" aria-hidden="true"></i></a></button></div>
                                <div class="col-2 h-100"><button class="boton-descripcion w-75 h-100 btn btn-link collapsed" data-toggle="collapse" data-target="#descripcion-recurso" aria-expanded="false" aria-controls="descripcion-recurso">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </button></div>
                            </div>

                            <div id="descripcion-recurso" class="collapse">
                                <div class="d-flex flex-row justify-content-center">
                                    <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, corrupti laboriosam omnis dolores eaque accusamus nesciunt voluptates nam veniam. Dolor molestias aut animi, ipsa at voluptatem doloremque molestiae perferendis magni!</p>
                                </div>
                            </div>

                            <div class="recurso-nueva d-flex flex-row align-items-center  p-0 m-0">
                                <div class="col-2"></div>
                                <h5 class="titulo-recurso col-4">Recurso 1 </h5>
                                <div class="col-4 h-100 d-flex flex-row justify-content-center"><button class="botones-modulos w-75 h-100"><a class="archivo_descargable" href="./images/Vsts.png" download="Imagen 1"><i class="fa fa-download" aria-hidden="true"></i></a></button></div>
                                <div class="col-2 h-100"><button class="boton-descripcion w-75 h-100 btn btn-link collapsed" data-toggle="collapse" data-target="#descripcion-recurso-2" aria-expanded="false" aria-controls="descripcion-recurso-2">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </button></div>
                            </div>

                            <div id="descripcion-recurso-2" class="collapse">
                                <div class="d-flex flex-row justify-content-center">
                                    <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, corrupti laboriosam omnis dolores eaque accusamus nesciunt voluptates nam veniam. Dolor molestias aut animi, ipsa at voluptatem doloremque molestiae perferendis magni!</p>
                                </div>
                            </div>

                            <div class="recurso-nueva d-flex flex-row align-items-center  p-0 m-0">
                                <div class="col-2"></div>
                                <h5 class="titulo-recurso col-4">Recurso 1 </h5>
                                <div class="col-4 h-100 d-flex flex-row justify-content-center"><button class="botones-modulos w-75 h-100"><a class="archivo_descargable" href="./images/Vsts.png" download="Imagen 1"><i class="fa fa-download" aria-hidden="true"></i></a></button></div>
                                <div class="col-2 h-100"><button class="boton-descripcion w-75 h-100 btn btn-link collapsed" data-toggle="collapse" data-target="#descripcion-recurso-3" aria-expanded="false" aria-controls="descripcion-recurso-3">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </button></div>
                            </div>
                            <div id="descripcion-recurso-3" class="collapse">
                                <div class="d-flex flex-row justify-content-center">
                                    <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, corrupti laboriosam omnis dolores eaque accusamus nesciunt voluptates nam veniam. Dolor molestias aut animi, ipsa at voluptatem doloremque molestiae perferendis magni!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="tareas">
                <h5 class="mb-0">
                    <button class="cabeceras btn btn-link collapsed" data-toggle="collapse" data-target="#contenedor-unidades-tareas" aria-expanded="false" aria-controls="contenedor-unidades-tareas">
                    Tareas
                    </button>
                </h5>
                </div>
                
                <div id="contenedor-unidades-tareas" class="collapse" aria-labelledby="headingOne2">
                    <div id="unidad-didactica">
                        <div class="card-header" id="headingOne">
                            <button class="cabeceras btn btn-link collapsed ml-5" data-toggle="collapse" data-target="#tareas-contenido" aria-expanded="false" aria-controls="tareas-contenido">
                            UT1 - Prototypes
                            </button>
                        </div>
                    </div>

                    <div id="tareas-contenido" class="collapse  p-0 m-0" aria-labelledby="headingTwo">
                        <div class="card-body p-0 m-0" id="contenedor-tareas">
                            <div class="tarea-nueva d-flex flex-row align-items-center p-0 m-0">
                                <div class="col-2"></div>
                                <h5 class="titulo-tarea col-4">Tarea 1 </h5>
                                <div class="col-2 h-100"><button class="botones-modulos w-75 h-100"><a class="archivo_descargable" href="./images/Vsts.png" download="Imagen 1"><i class="fa fa-download" aria-hidden="true"></i></a></button></div>
                                <div class="col-2 h-100"><button type="button" class="switchBoton botones-modulos w-75 h-100" data-toggle="modal" data-target="#entregarTarea">ENTREGAR</button></div>
                                <div class="col-2 h-100"><button class="boton-descripcion w-75 h-100 btn btn-link collapsed" data-toggle="collapse" data-target="#descripcion-tarea" aria-expanded="false" aria-controls="descripcion-tarea">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </button></div>
                            </div>
                            <div id="descripcion-tarea" class="collapse">
                                <div class="d-flex flex-row justify-content-center">
                                    <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, corrupti laboriosam omnis dolores eaque accusamus nesciunt voluptates nam veniam. Dolor molestias aut animi, ipsa at voluptatem doloremque molestiae perferendis magni!</p>
                                </div>
                            </div>

                            <div class="tarea-nueva d-flex flex-row align-items-center p-0 m-0">
                                <div class="col-2"></div>
                                <h5 class="titulo-tarea  col-4">Tarea 1 </h5>
                                <div class="col-2 h-100"><button class="botones-modulos w-75 h-100"><a class="archivo_descargable" href="./images/Vsts.png" download="Imagen 1"><i class="fa fa-download" aria-hidden="true"></i></a></button></div>
                                <div class="col-2 h-100"><button type="button" class="switchBoton botones-modulos w-75 h-100" data-toggle="modal" data-target="#entregarTarea">ENTREGAR</button></div>
                                <div class="col-2 h-100"><button class="boton-descripcion w-75 h-100 btn btn-link collapsed" data-toggle="collapse" data-target="#descripcion-tarea-2" aria-expanded="false" aria-controls="descripcion-tarea-2">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </button></div>
                            </div>
                            <div id="descripcion-tarea-2" class="collapse">
                                <div class="d-flex flex-row justify-content-center">
                                    <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, corrupti laboriosam omnis dolores eaque accusamus nesciunt voluptates nam veniam. Dolor molestias aut animi, ipsa at voluptatem doloremque molestiae perferendis magni!</p>
                                </div>
                            </div>

                            <div class="tarea-nueva d-flex flex-row align-items-center p-0 m-0">
                                <div class="col-2"></div>
                                <h5 class="titulo-tarea col-4">Tarea 1 </h5>
                                <div class="col-2 h-100"><button class="botones-modulos w-75 h-100"><a class="archivo_descargable" href="./images/Vsts.png" download="Imagen 1"><i class="fa fa-download" aria-hidden="true"></i></a></button></div>
                                <div class="col-2 h-100"><button type="button" class="switchBoton botones-modulos w-75 h-100" data-toggle="modal" data-target="#entregarTarea">ENTREGAR</button></div>
                                <div class="col-2 h-100"><button class="boton-descripcion w-75 h-100 btn btn-link collapsed" data-toggle="collapse" data-target="#descripcion-tarea-3" aria-expanded="false" aria-controls="descripcion-tarea-3">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </button></div>
                            </div>
                            <div id="descripcion-tarea-3" class="collapse">
                                <div class="d-flex flex-row justify-content-center">
                                    <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, corrupti laboriosam omnis dolores eaque accusamus nesciunt voluptates nam veniam. Dolor molestias aut animi, ipsa at voluptatem doloremque molestiae perferendis magni!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade w-100 h-100" id="entregarTarea">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">

                    <div class="modal-header d-flex flex-row align-items-center">
                        <h4 class="modal-title">Entregar Tarea</h4>
                    </div>

                    <div class="modal-body">
                        <form action="" class="p-1 m-0 d-flex flex-column justify-content-center rounded border border-dark bg-light w-100 h-100">
                            <label for="" class="ml-3 pb-2">Selecciona el archivo que quieres subir:&nbsp;</label>
                            <input class="ml-3 pb-2" type="file" name="archivo-nuevo" id="archivo-nuevo" multiple onchange="mostrarValor()"/>
                            <label class="ml-3 pb-2" for="">O también puedes soltar aquí tu archivo <i class="fa fa-arrow-down" aria-hidden="true"></i></label>
                            <div class="border border-dark mb-2 d-flex flex-row align-items-center justify-content-center h-50 ml-3 mr-3" id="drop-zone" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeave(event)"><p id="mensaje">Arrastra aquí tus archivos</p></div>
                        </form>
                    </div>

                    <div class="modal-footer d-flex flex-row align-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Añadir</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="modal fade w-100 h-100" id="nuevaTarea">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">

                    <div class="modal-header d-flex flex-row align-items-center">
                        <h4 class="modal-title">Añadir Nueva Tarea</h4>
                    </div>

                    <div class="modal-body">
                    <form action="" class="p-1 m-0 d-flex flex-column justify-content-center rounded border border-dark bg-light w-100 h-100">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <label for="" class="col-4 h-100 d-flex flex-column justify-content-center">Nombre de la nueva tarea:</label>
                                <input class="col-8 w-100 h-75" type="text" name="nombre-tarea" id="nombre-tarea"/>
                            </div>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <label for="" class="col-4 h-100 d-flex flex-column justify-content-center">Fecha Límite de Entrega:</label>
                                <input class="col-8 w-100 h-75" type="date" name="fecha-limite" id="fecha-limite"/>
                            </div>
                            <label for="" class="pl-3">Descripción de la Tarea (opcional): &nbsp; </label>
                            <textarea name="" id="" cols="30" class="ml-3 h-25"></textarea>
                            <label for="" class="pl-3">Recurso: &nbsp; <i class="fa fa-arrow-down" aria-hidden="true"></i></label>
                            <div class="border border-dark bg-white mb-2 d-flex flex-row align-items-center justify-content-center h-25 ml-3" id="drop-zone" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeave(event)"><p id="mensaje">Arrastra aquí tus archivos</p></div>
                        </form>
                    </div>

                    <div class="modal-footer d-flex flex-row align-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Añadir</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade w-100 h-100" id="nuevoRecurso">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content h-75">

                    <div class="modal-header d-flex flex-row align-items-center">
                        <h4 class="modal-title">Añadir Nuevo Recurso</h4>
                    </div>

                    <div class="modal-body">
                        <form action="" class="p-1 m-0 d-flex flex-column justify-content-center rounded border border-dark bg-light w-100 h-100">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <label for="" class="p-2 col-4 h-100 d-flex flex-column justify-content-center">Nombre del nuevo recurso:</label>
                                <input class="p-2 col-8 w-100 h-75" type="text" name="nombre-recurso" id="nombre-recurso"/>
                            </div>
                            <label for="" class="p-2">Descripción del Recurso (opcional): &nbsp; </label>
                            <textarea name="" id="" cols="30" class="h-25 ml-2"></textarea>
                            <label class="p-2" for="">Recurso: &nbsp; <i class="fa fa-arrow-down" aria-hidden="true"></i></label>
                            <div class="border border-dark ml-2 mb-2 d-flex flex-row align-items-center justify-content-center h-25" id="drop-zone" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeave(event)"><p id="mensaje">Arrastra aquí tus archivos</p></div>
                        </form>
                    </div>

                    <div class="modal-footer d-flex flex-row align-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Añadir</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade w-100 h-100" id="registroEntregas">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">

                    <div class="modal-header d-flex flex-row align-items-center">
                        <h4 class="modal-title">Registro de Tareas</h4>
                    </div>

                    <div class="modal-body">
                        
                    </div>

                    <div class="modal-footer d-flex flex-row align-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Añadir</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
        <?php include "./footer.php" ?>
    </div>