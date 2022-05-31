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
            } else {
                alert("No se ha podido insertar el usuario");
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
    }
}