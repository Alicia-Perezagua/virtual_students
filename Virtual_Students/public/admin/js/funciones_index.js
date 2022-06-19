function cargarMenus(){
    console.log(document.cookie);
    // var newCookies = document.cookie.slice(0, 26);
    // document.cookies = newCookies;
    // console.log(document.cookies);
    var peticion1 = $.ajax({
        url: "../../settings/sesion.php",
        type: "POST", 
        async: true, 
        data: {
            funcion: "recogerSesion"
        }, 

        success: function(data){
            console.log(data);
            if(data === "null"){
                $("#index-body").html("<div class='container-fluid navbar p-0 m-0'>" +
                                            "<ul class='d-flex flex-row justify-content-around align-items-center w-100 h-100 p-0 m-0'>" +
                                            "<a class='enlaces-principales h-100 rounded' href='#'><li class='list-unstyled p-0 m-0 h-100 home d-flex justify-content-center align-items-center'><i class='fa fa-home' aria-hidden='true'></i></li></a>" +
                                            "<a class='enlaces-principales h-100 rounded' href='./login.php'><li class='inicio-sesion list-unstyled p-0 m-0 h-100 d-flex justify-content-center align-items-center'>Iniciar Sesión</li></a>" +
                                            "</ul>" + 
                                        "</div>" +
                                        "<div class='hero container-fluid d-flex justify-content-center align-items-center p-0 m-0'>" +
                                        "<div class='transparencia p-0 m-0 h-100 w-100 d-flex justify-content-center align-items-center'>" +
                                            "<div class='contenedor-titulo container p-0 m-0 d-flex justify-content-center align-items-center'>" +
                                                "<h1 class='site-title'> ¡Bienvenidos a <span>Virtual Students</span>!</h1>" +
                                            "</div>" +
                                            "</div>" +
                                        "</div>"); 
            } else {

                var peticion2 = $.ajax({
                    url: "../../settings/sesion.php",
                    type: "POST", 
                    async: true, 
                    data: {
                        funcion: "recogerRol"
                    },
                    
                    success: function(data){
                        console.log(data);
                        if(data === "Alumno"){
                            $("#index-body").html("<div class='container-fluid navbar p-0 m-0'>" +
                            "<ul class='flex-row justify-content-around align-items-center w-100 h-100 p-0 m-0' id='menu_alumnos_desktop'>" +
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
                            "</ul>" + 
                        "</div>");
                        } else if(data === "Profesor"){
                            $("#index-body").html("<div class='container-fluid navbar p-0 m-0'>" + 
                            "<ul class='flex-row justify-content-around align-items-center w-100 h-100 p-0 m-0' id='menu_alumnos_desktop'>" +
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
                                        "<a  onclick='destruirCookies()' class='dropdown-item drop-user' href='../../settings/logout.php'><i class='fa fa-power-off' aria-hidden='true'></i> Cerrar Sesión</a>" +
                                    "</div>" +
                               "</div>" +
                            "</ul>" +
                        "</div>");
                        } 
                    }
                });
            }
        }
    });
}