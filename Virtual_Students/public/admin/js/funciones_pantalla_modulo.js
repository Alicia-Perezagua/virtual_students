function onLoadIndex(){
    var peticion1 = $.ajax({
        url: "../../settings/sesion.php",
        type: "POST", 
        async: true, 
        data: {
            funcion: "recogerRol"
        },
        
        success: function(data){
            console.log(data);
            if(data === "Alumno"){
                $("#menu_pantalla_modulos").html("<ul class='flex-row justify-content-around align-items-center w-100 h-100 p-0 m-0' id='menu_alumnos_desktop'>" +
                    "<a class='h-100 rounded' href='./index.php' id='logo'><li class='list-unstyled p-0 m-0 h-100 home d-flex justify-content-center align-items-center'><img src='./images/Vsts.png' alt='Logo Virtual Students' class='w-100'></li></a>" +
                    "<div class='enlaces-principales drop-button dropdown h-100'>" +
                        "<button type='button' class='enlaces-principales drop-button dropdown-toggle h-100' data-toggle='dropdown'>" +
                        "Mis modulos" +
                        "</button>" +
                        "<div class='dropdown-menu'>" +
                            "<a class='dropdown-item' href='#'>Todos los modulos</a>" +
                            "<div class='dropdown-divider'></div>" +
                            "<a class='dropdown-item' href='./pantalla_modulo.php'>Bases de Datos</a>" +
                            "<a class='dropdown-item' href='./pantalla_modulo.php'>Sistemas Informáticos</a>" +
                            "<a class='dropdown-item' href='./pantalla_modulo.php'>FOL</a>" +
                            "<a class='dropdown-item' href='./pantalla_modulo.php'>Entornos de Desarrollo</a>" +
                            "<a class='dropdown-item' href='./pantalla_modulo.php'>Lenguaje de Marcas</a>" +
                            "<a class='dropdown-item' href='./pantalla_modulo.php'>Programación</a>" + 
                        "</div>" + 
                    "</div>" + 
                    "<a class='enlaces-principales h-100 rounded' href='./login.php'><li class='inicio-sesion list-unstyled p-0 m-0 h-100 d-flex justify-content-center align-items-center'>Calendario</li></a>" +
                    "<a class='enlaces-principales h-100 rounded' href='./login.php'><li class='inicio-sesion list-unstyled p-0 m-0 h-100 d-flex justify-content-center align-items-center'>Mis profesores</li></a>" +
                    "<div class='drop-button dropdown h-100 d-flex flex-row align-items-center justify-content-center'>" +
                        "<img src='./images/julian-wan-WNoLnJo7tS8-unsplash.jpg' alt='' class='icono-user' data-toggle='dropdown'>" +
                        "<div class='dropdown-menu'>" + 
                            "<a class='dropdown-item drop-user' href='./pantalla_datos_personales.php'>Datos Personales</a>" + 
                            "<a class='dropdown-item drop-user' href='#'>Documentación</a>" + 
                            "<a class='dropdown-item drop-user' href='#'>Configuración</a>" + 
                            "<a class='dropdown-item drop-user' href='../../settings/logout.php'><i class='fa fa-power-off' aria-hidden='true'></i> Cerrar Sesión</a>" +
                        "</div>" + 
                    "</div>" +
                "</ul>");
            } else if(data === "Profesor"){
                $("#menu_pantalla_modulos").html( "<ul class='flex-row justify-content-around align-items-center w-100 h-100 p-0 m-0' id='menu_alumnos_desktop'>" +
                    "<a class='h-100 rounded' href='./index.php' id='logo'><li class='list-unstyled p-0 m-0 h-100 home d-flex justify-content-center align-items-center'><img src='./images/Vsts.png' alt='Logo Virtual Students' class='w-100'></li></a>" +
                    "<div class='enlaces-principales drop-button dropdown h-100'>" +
                        "<button type='button' class='enlaces-principales drop-button dropdown-toggle h-100' data-toggle='dropdown'>" +
                        "Mis modulos" +
                        "</button>" +
                        "<div class='dropdown-menu'>" +
                            "<a class='dropdown-item' href='#'>Todos los modulos</a>" +
                            "<div class='dropdown-divider'></div>" +
                            "<a class='dropdown-item' href='./pantalla_modulo.php'>Bases de Datos</a>" +
                            "<a class='dropdown-item' href='./pantalla_modulo.php'>Sistemas Informáticos</a>" +
                            "<a class='dropdown-item' href='./pantalla_modulo.php'>FOL</a>" +
                            "<a class='dropdown-item' href='./pantalla_modulo.php'>Entornos de Desarrollo</a>" +
                            "<a class='dropdown-item' href='./pantalla_modulo.php'>Lenguaje de Marcas</a>" +
                            "<a class='dropdown-item' href='./pantalla_modulo.php'>Programación</a>" +
                        "</div>" +
                    "</div>" +
                    "<a class='enlaces-principales h-100 rounded' href='./login.php'><li class='inicio-sesion list-unstyled p-0 m-0 h-100 d-flex justify-content-center align-items-center'>Calendario</li></a>" +
                    "<div class='enlaces-principales drop-button dropdown h-100'>" +
                        "<button type='button' class='enlaces-principales drop-button dropdown-toggle h-100' data-toggle='dropdown'>" +
                        "Mis grupos" +
                        "</button>" +
                        "<div class='dropdown-menu'>" +
                            "<a class='dropdown-item' href='#'>Todos los grupos</a>" +
                            "<div class='dropdown-divider'></div>" + 
                            "<a class='dropdown-item' href='./pantalla_modulo.php'>1º DAW</a>" + 
                            "<a class='dropdown-item' href='./pantalla_modulo.php'>2º DAW</a>" +
                            "<a class='dropdown-item' href='./pantalla_modulo.php'>1º DAM</a>" +
                            "<a class='dropdown-item' href='./pantalla_modulo.php'>2º DAM</a>" +
                            "<a class='dropdown-item' href='./pantalla_modulo.php'>1º Bachillerato A</a>" +
                            "<a class='dropdown-item' href='./pantalla_modulo.php'>4º ESO B</a>" +
                        "</div>" +
                    "</div>" +
                    "<div class='drop-button dropdown h-100 d-flex flex-row align-items-center justify-content-center'>" +
                        "<img src='./images/julian-wan-WNoLnJo7tS8-unsplash.jpg' alt='' class='icono-user' data-toggle='dropdown'>" +
                        "<div class='dropdown-menu'>" + 
                            "<a class='dropdown-item drop-user' href='./pantalla_datos_personales.php'>Datos Personales</a>" +
                            "<a class='dropdown-item drop-user' href='#'>Documentación</a>" +
                            "<a class='dropdown-item drop-user' href='#'>Configuración</a>" +
                            "<a class='dropdown-item drop-user' href='../../settings/logout.php'><i class='fa fa-power-off' aria-hidden='true'></i> Cerrar Sesión</a>" +
                        "</div>" +
                   "</div>" +
                "</ul>");

                $("#contenedor-recursos").append("<div class='addRecurso w-100 p-3 m-0 d-flex flex-row justify-content-center'>" +
                "<button class='boton-modal addNewModulos' data-toggle='modal' data-target='#nuevoRecurso'><i class='fa fa-plus' aria-hidden='true'></i>&nbsp;Añadir Recurso</button>" +
                "</div>");

                $("#tareas-contenido").append("<div class='addTareas w-100 p-3 m-0 d-flex flex-row justify-content-center'>" +
                "<button class='boton-modal addNewTareas' data-toggle='modal' data-target='#nuevaTarea'><i class='fa fa-plus' aria-hidden='true'></i>&nbsp;Añadir Tarea</button>" +
                "</div>");

                $(".switchBoton").attr("data-target", "#registroEntregas");
                $(".switchBoton").text("VER ENTREGAS");
            }
        }
    })
}

function entregarTarea(){
    
}

function pedirDatos(){
    var peticionDatos = $.ajax({
        url: "pruebas_backend.php",
        type: "POST", 
        async: true,

        success: function(data){
            if(data){
                $("#recurso1").attr("href", data);
            } else {
                console.log("NO DATA");
            }
        }
    })
}

// function prueba(){
//     $(".addRecurso").css("display", "flex");
//     $(".addRecurso").css("flex-direction", "row"); 
//     $(".addRecurso").css("justify-content", "center");
// }

// function recursoNuevo(){
//     var infoTarea = "<div class='recurso-nueva d-flex flex-row align-items-center  p-0 m-0'>" +
//                         "<div class='col-2'></div>" +
//                         "<h5 class='titulo-recurso col-4'>Recurso 1 </h5>" +
//                         "<div class='col-4 h-100 d-flex flex-row justify-content-center'><button class='botones-modulos w-75 h-100'><a id='recurso1' class='archivo_descargable' href='./pruebas_backend.php' download='Documento 1'><i class='fa fa-download' aria-hidden='true'></i></a></button></div>" +
//                         "<div class='col-2 h-100'><button class='boton-descripcion w-75 h-100 btn btn-link collapsed' data-toggle='collapse' data-target='#descripcion-recurso' aria-expanded='false' aria-controls='descripcion-recurso'>" +
//                         "<i class='fa fa-angle-down' aria-hidden='true'></i>" +
//                         "</button></div>" +
//                     "</div>" +
//                     "<div id='descripcion-recurso' class='collapse'>" +
//                         "<div class='d-flex flex-row justify-content-center'>" +
//                             "<p class='descripcion'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, corrupti laboriosam omnis dolores eaque accusamus nesciunt voluptates nam veniam. Dolor molestias aut animi, ipsa at voluptatem doloremque molestiae perferendis magni!</p>" +
//                         "</div>" +
//                     "</div>";

//     $("#contenedor-recursos").append(infoTarea);

// }