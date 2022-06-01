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
                // console.log(data);
                // console.log(data[0]);
                // console.log(data[0].length);
                for(var i = 0; i < data.length; i++){
                    for(var j = 0; j < data.length; i++){
                        idUsuarioBack = data[i][j].id_user;
                        console.log(idUsuarioBack)
                        nombre_user = data[i][j].nombre;
                        console.log(nombre_user);
                        let options = "<option value='" + idUsuarioBack +"'>" + nombre_user + "</option>";
                        $("#idUsuario").append(options);
                    }                  
                }
            }
        }
    });
}

function comprobarEmail(){
    let email = $("#mail").val();

    if(!patronEmail.test(email)){
        $("#mail").css("border", "1px solid red");
        $("#mail").css("background-color", "pink"); 
        $("#mail").val("");
    } else {
        $("#mail").css("border", "1px solid black");
        $("#mail").css("background-color", "white");
    }
}

function comprobarDNI(){
    let dni = $("#dni").val();

    if(!patronDNI1.test(dni) && !patronDNI2.test(dni) && !patronDNI3.test(dni)){
        $("#dni").css("border", "1px solid red");
        $("#dni").css("background-color", "pink"); 
        $("#dni").val("");
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