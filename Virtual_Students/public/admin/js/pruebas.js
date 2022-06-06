function traerDatos(){
    var peticion = $.ajax({
        url: "./pruebas_backend.php",
        type: "POST", 
        async: true,
        dataType: "json",

        success: function(data){
            if(data){
                $("#username").attr("value", data.username);
                $("#nombre").attr("value", data.nombre);
                $("#apellidos").attr("value", data.primerApellido + " " + data.segundoApellido);
                $("#fechNac").attr("value", data.fechaNacimiento);
                $("#dni").attr("value", data.dni);
                $("#dir").attr("value", data.direccion);
                $("#codPos").attr("value", data.codigoPostal);
                $("#local").attr("value", data.localidad);
                $("#comAuto").attr("value", data.comunidadAutonoma);
                $("#nac").attr("value", data.nacionalidad);
                $("#mail").attr("value", data.email);
                $("#telMov").attr("value", data.movil);
                $("#telFij").attr("value", data.telefonoFijo);
            } else {
                alert("No data");
            }
        }
    });
}

