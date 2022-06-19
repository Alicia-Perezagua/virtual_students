//Expresiones regulares para validación de datos

patronEmail = /^[A-Za-z0-9._-]+[@]{1}[a-z]+[.]{1}[a-z]{1,3}$/;
patronDNI1 = /^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]{1}$/;
patronDNI2 = /^[0-9]{8}\s[-]{1}\s[TRWAGMYFPDXBNJZSQVHLCKE]{1}$/;
patronDNI3 = /^[0-9]{8}[-]{1}[TRWAGMYFPDXBNJZSQVHLCKE]{1}$/;
patronTelefono1 = /^[0-9]{9}$/;
patronMovil = /^[0-9]{3}\s[0-9]{3}\s[0-9]{3}$/;
patronFijo = /^[0-9]{2}\s[0-9]{3}\s[0-9]{2}\s[0-9]{2}$/;
patronCodigoPostal = /^[0-9]{5}$/;

function addUser(){

    //Recogida de datos.

    let username = $("#user").val();
    let nombre = $("#name").val();
    let apellido1 = $("#lastname1").val();
    let apellido2 = $("#lastname2").val();
    let fechNac = $("#birthday").val();
    let dni = $("#dni").val();
    let address = $("#dir").val();
    let postCode = $("#postCode").val();
    let localidad = $("#local").val();
    let comunidad_autonoma = $("#comAuto").val();
    let nacionalidad = $("#nacio").val();
    let email = $("#mail").val();
    let movil = $("#mobile").val();
    let fijo = $("#phone").val();
    let rol = $("#role").val();

    if(username === "" || nombre === "" || apellido1 === "" || apellido2 === "" || fechNac === "" || dni === "" || address === "" || postCode === "" || localidad === "" || comunidad_autonoma === "" || nacionalidad === "" || email === "" || movil === "" || rol === ""){
        $("#toast-text").text("Debes rellenar todos los campos obligatorios");
        $('#element').toast('show');
    } else {

        var peticion = $.ajax({
            url: "./admin_back.php",
            type: "POST",
            async: true,
            data: {
                username: username, 
                nombre: nombre, 
                apellido1: apellido1, 
                apellido2: apellido2, 
                fechNac: fechNac, 
                dni: dni, 
                address: address,
                postCode: postCode, 
                localidad: localidad, 
                comunidad_autonoma: comunidad_autonoma, 
                nacionalidad: nacionalidad, 
                email: email, 
                movil: movil, 
                fijo: fijo, 
                rol: rol, 
                funcion: "añadir usuario" 
            }, 

            success: function(data){
                if(data){
                    alert(data);
                    $("#user").val("");
                    $("#name").val("");
                    $("#lastname1").val("");
                    $("#lastname2").val("");
                    $("#birthday").val("");
                    $("#dni").val("");
                    $("#dni").css("border", "1px solid black");
                    $("#dni").css("background-color", "white");
                    $("#dir").val("");
                    $("#postCode").val("");
                    $("#postCode").css("border", "1px solid black");
                    $("#postCode").css("background-color", "white");
                    $("#local").val("");
                    $("#comAuto").val("");
                    $("#nacio").val("");
                    $("#mail").val("");
                    $("#mail").css("border", "1px solid black");
                    $("#mail").css("background-color", "white");
                    $("#mobile").val("");
                    $("#mobile").css("border", "1px solid black");
                    $("#mobile").css("background-color", "white");
                    $("#phone").val("");
                    $("#phone").css("border", "1px solid black");
                    $("#phone").css("background-color", "white");
                    $("#role").val("");
                } else {
                    alert("No se ha podido insertar el usuario");
                }
            }
        });
    }
}

function cargarProfesores(){
    var peticion = $.ajax({
        url: "./admin_back.php", 
        type: "POST", 
        dataType: "json", 
        async: true,
        
        data: {
            funcion: "cargar profesores"
        },

        success: function(data){
            if(data){
                let idUsuarioBack;
                let nombre_user;
                let primer_apellido;
                let segundo_apellido;
                for(var i = 0; i < data.length; i++){
                    for(var j = 0; j < data.length; i++){
                        idUsuarioBack = data[i][j].id_user;
                        nombre_user = data[i][j].nombre;
                        primer_apellido = data[i][j].primer_apellido;
                        segundo_apellido = data[i][j].segundo_apellido;
                        let options = "<option value='" + idUsuarioBack +"'>" + nombre_user + " " + primer_apellido + " " + segundo_apellido + "</option>";
                        $("#idUsuario").append(options);
                    }                  
                }
            }
        }
    });
}

function altaProfesores(){
    let idUser = $("#idUsuario").val();
    let nrp = $("#nrp").val();
    let salario = $("#salary").val();
    let emailDocente = $("#emailDocente").val();

    if(idUser === "" || nrp === "" || emailDocente === ""){
        $("#alta-toast-text").text("Debes rellenar todos los campos obligatorios");
        $('#toast-alta').toast('show');
    } else {
        var peticion = $.ajax({
            url: "./admin_back.php",
            type: "POST", 
            async: true,
            data: {
                id_user: idUser,
                nrp: nrp,
                salary: salario,
                email: emailDocente,
                funcion: "alta profesor"
            },

            success: function(data){
                if(data){
                    alert(data);
                    $("#idUsuario").val("");
                    $("#nrp").val("");
                    $("#salary").val("");
                    $("#emailDocente").val("");
                    $("#emailDocente").css("border", "1px solid black");
                    $("#emailDocente").css("background-color", "white");
                } else {
                    alert("No se pudo dar de alta.");
                }
            }
        }); 
    }

}

function comprobarEmail(inputId, inputValue){

    if(!patronEmail.test(inputValue)){
        $("#" + inputId).css("border", "1px solid red");
        $("#" + inputId).css("background-color", "pink"); 
        $("#" + inputId).val("");

        if(inputId === "mail"){
            $("#toast-text").text("El campo 'email' no cumple el formato");
            $('#element').toast('show');
        } else if(inputId === "emailDocente"){
            $("#alta-toast-text").text("El campo 'email' no cumple el formato");
            $('#toast-alta').toast('show');
        }
    } else {
        $("#" + inputId).css("border", "1px solid black");
        $("#" + inputId).css("background-color", "white");
    }
}

function comprobarDNI(){
    let dni = $("#dni").val();

    if(!patronDNI1.test(dni) && !patronDNI2.test(dni) && !patronDNI3.test(dni)){
        $("#dni").css("border", "1px solid red");
        $("#dni").css("background-color", "pink"); 
        $("#dni").val("");
        $("#toast-text").text("El campo 'DNI' no cumple el formato");
        $('#element').toast('show');
    } else {
        $("#dni").css("border", "1px solid black");
        $("#dni").css("background-color", "white");
    }
}

function comprobarMovil(){
    let movil = $("#mobile").val();

    if(!patronTelefono1.test(movil) && !patronMovil.test(movil)){
        $("#mobile").css("border", "1px solid red");
        $("#mobile").css("background-color", "pink"); 
        $("#mobile").val("");
        $("#toast-text").text("El campo 'Teléfono Móvil' no cumple el formato");
        $('#element').toast('show');
    } else {
        $("#mobile").css("border", "1px solid black");
        $("#mobile").css("background-color", "white");
    }
}

function comprobarFijo(){
    let fijo = $("#phone").val();

    if(!patronTelefono1.test(fijo) && !patronFijo.test(fijo)){
        $("#phone").css("border", "1px solid red");
        $("#phone").css("background-color", "pink"); 
        $("#phone").val("");
        $("#toast-text").text("El campo 'Teléfono fijo' no cumple el formato");
        $('#element').toast('show');
    } else if($("#phone").val() === ""){
        $("#phone").css("border", "1px solid black");
        $("#phone").css("background-color", "white");
    } else {
        $("#phone").css("border", "1px solid black");
        $("#phone").css("background-color", "white");
    }
}

function comprobarCodPos(){
    let postCode = $("#postCode").val();

    if(!patronCodigoPostal.test(postCode)){
        $("#postCode").css("border", "1px solid red");
        $("#postCode").css("background-color", "pink"); 
        $("#postCode").val("");
        $("#toast-text").text("El campo 'Código Postal' no cumple el formato");
        $('#element').toast('show');
    } else {
        $("#postCode").css("border", "1px solid black");
        $("#postCode").css("background-color", "white");
}
}

function onCloseModalUsers(){
    $("#user").val("");
    $("#name").val("");
    $("#lastname1").val("");
    $("#lastname2").val("");
    $("#birthday").val("");
    $("#dni").val("");
    $("#dni").css("border", "1px solid black");
    $("#dni").css("background-color", "white");
    $("#dir").val("");
    $("#postCode").val("");
    $("#postCode").css("border", "1px solid black");
    $("#postCode").css("background-color", "white");
    $("#local").val("");
    $("#comAuto").val("");
    $("#nacio").val("");
    $("#mail").val("");
    $("#mail").css("border", "1px solid black");
    $("#mail").css("background-color", "white");
    $("#mobile").val("");
    $("#mobile").css("border", "1px solid black");
    $("#mobile").css("background-color", "white");
    $("#phone").val("");
    $("#phone").css("border", "1px solid black");
    $("#phone").css("background-color", "white");
    $("#role").val("");
}

function onCloseModalAlta(){
    $("#nrp").val("");
    $("#salary").val("");
    $("#emailDocente").val("");
    $("#emailDocente").css("border", "1px solid black");
    $("#emailDocente").css("background-color", "white");
}

function onLoadBody(){
    this.cargarProfesores();
}