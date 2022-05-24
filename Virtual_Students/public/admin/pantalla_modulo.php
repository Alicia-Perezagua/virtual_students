<?php include "header.php" ?>
<body class="body-modulo">
    <div class="container-fluid navbar p-0 m-0">
        <ul class="d-flex flex-row justify-content-around align-items-center w-100 h-100 p-0 m-0">
            <a class="enlaces-principales h-100 rounded" href="./index.php"><li class="list-unstyled p-0 m-0 h-100 home d-flex justify-content-center align-items-center"><i class="fa fa-home" aria-hidden="true"></i></li></a>
            <a class="enlaces-principales h-100 rounded" href="./login.php"><li class="inicio-sesion list-unstyled p-0 m-0 h-100 d-flex justify-content-center align-items-center">Iniciar Sesión</li></a>
        </ul>
    </div>
    <div class="tranparencia-modulo">
        <h3>"Modulo de Ejemplo"</h3>
        <nav aria-label="breadcrumb" class="breadcrumbs_menu">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Categoría</a></li>
                <li class="breadcrumb-item active">Página actual</li>
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
                        <div class="addRecurso w-100 p-0 m-0">
                                <button class="addNewRecurso" onclick="recursoNuevo()"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Añadir Recurso</button>
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
                                <div class="col-2 h-100"><button class="botones-modulos w-75 h-100" onclick="agregarTarea()">ENTREGAR</button></div>
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
                                <div class="col-2 h-100"><button class="botones-modulos w-75 h-100" onclick="agregarTarea()">ENTREGAR</button></div>
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
                                <div class="col-2 h-100"><button class="botones-modulos w-75 h-100" onclick="agregarTarea()">ENTREGAR</button></div>
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
        <button class="pruebas" onclick="prueba()">¡¡Probar!!</button>
        <?php include "./footer.php" ?>
    </div>

    