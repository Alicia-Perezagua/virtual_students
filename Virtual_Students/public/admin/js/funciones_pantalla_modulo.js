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