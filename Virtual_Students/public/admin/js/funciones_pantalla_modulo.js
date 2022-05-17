function agregarTarea(){
    window.open("./ventana_entrega_tareas.php", "Entregar Tarea", "width=50vw");
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