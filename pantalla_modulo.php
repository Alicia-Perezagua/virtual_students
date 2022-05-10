<?php include "header.php" ?>
<div class="body_modulo">
    <div class="tranparencia-modulo">
        <div class="container-fluid navbar p-0 m-0">
            <ul class="d-flex flex-row justify-content-around align-items-center w-100 h-100 p-0 m-0">
                <a class="h-100 rounded" href="#"><li class="list-unstyled p-0 m-0 h-100 home d-flex justify-content-center align-items-center"><i class="fa fa-home" aria-hidden="true"></i></li></a>
                <a class="h-100 rounded" href="./login.php"><li class="inicio-sesion list-unstyled p-0 m-0 h-100 d-flex justify-content-center align-items-center">Iniciar Sesión</li></a>
            </ul>
        </div>
        <h3>            </h3>
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
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#contenedor-unidades-recursos" aria-expanded="false" aria-controls="contenedor-unidades-recursos">
                recursos
                </button>
            </h5>
            </div>
            
            <div id="contenedor-unidades-recursos" class="collapse" aria-labelledby="headingOne2">
                <div id="unidad-didactica">
                    <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#recursos-contenido" aria-expanded="false" aria-controls="recursos-contenido">
                        UT1 - Prototypes
                        </button>
                    </h5>
                    </div>
                </div>

                <div id="recursos-contenido" class="collapse" aria-labelledby="headingTwo">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="tareas">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#contenedor-unidades-tareas" aria-expanded="false" aria-controls="contenedor-unidades-tareas">
                Tareas
                </button>
            </h5>
            </div>
            
            <div id="contenedor-unidades-tareas" class="collapse" aria-labelledby="headingOne2">
                <div id="unidad-didactica">
                    <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tareas-contenido" aria-expanded="false" aria-controls="tareas-contenido">
                        UT1 - Prototypes
                        </button>
                    </h5>
                    </div>
                </div>

                <div id="tareas-contenido" class="collapse" aria-labelledby="headingTwo">
                    <div class="card-body" id="contenedor-tareas">
                       <div class="tarea-nueva">
                           <h5 class="col-6">Tarea 1 </h5>
                           <button class="botones-modulos col-3"><i class="fa fa-download" aria-hidden="true"></i></button>
                           <button class="botones-modulos col-3">ENTREGAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>