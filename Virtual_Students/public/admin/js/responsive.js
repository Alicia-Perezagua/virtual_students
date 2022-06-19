let menu_principal = "<div class='container-fluid navbar p-0 m-0' id='menu_alumnos'><ul class='d-flex flex-row justify-content-around align-items-center w-100 h-100 p-0 m-0'><a class='h-100 rounded' href='./index.php' id='logo'><li class='list-unstyled p-0 m-0 h-100 home d-flex justify-content-center align-items-center'><img src='./images/Vsts.png' alt='Logo Virtual Students' class='w-100'></li></a><div class='enlaces-principales drop-button dropdown h-100'><button type='button' class='enlaces-principales drop-button dropdown-toggle h-100' data-toggle='dropdown'>Mis modulos</button><div class='dropdown-menu'><a class='dropdown-item' href='#'>Todos los modulos</a><div class='dropdown-divider'></div>" +
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
    "<div class='icono-user drop-button dropdown h-100 d-flex flex-row align-items-center'>" + 
        "<img src='./images/julian-wan-WNoLnJo7tS8-unsplash.jpg' alt='' class='icono-user' data-toggle='dropdown'>" +
        "<div class='dropdown-menu'>" +
            "<a class='dropdown-item drop-user' href='#'>Datos Personales</a>" +
            "<a class='dropdown-item drop-user' href='#'>Documentación</a>" + 
            "<a class='dropdown-item drop-user' href='#'>Configuración</a>" + 
           " <a class='dropdown-item drop-user' href='#'><i class='fa fa-power-off' aria-hidden='true'></i> Cerrar Sesión</a>" +
        "</div>" +
    "</div>" +
"</ul>" +
"</div>";

const largeDevices = matchMedia('(min-width: 400px)');

const largeSize = mql_l => {
  mql_l.matches ? $("#menu_alumnos").html(menu_principal) : this.smallSize
}
  
largeDevices.addEventListener('change', largeSize); 
largeSize(largeDevices);
  
const smallDevices = matchMedia('(max-width: 400px)');

const smallSize = mql_s => {
  mql_s.matches ? $("#menu_alumnos").html("<ul class='d-flex flex-row justify-content-around align-items-center w-100 h-100 p-0 m-0'><a class='h-100 rounded col-8 d-flex flex-row justify-content-end' href='./index.php' id='logo'><li class='list-unstyled p-0 m-0 h-100 home d-flex justify-content-center align-items-center'><img src='./images/Vsts.png' alt='Logo Virtual Students' class='w-100'></li></a><div class='burger col-4 d-flex flex-row justify-content-center' ><button type='button' class='enlaces-principales drop-button h-100' data-toggle='dropdown'><i class='fa fa-bars' aria-hidden='true'></i></button></div></ul> ") : this.largeSize
} 
  
smallDevices.addEventListener('change', smallSize); 
smallSize(smallDevices);
