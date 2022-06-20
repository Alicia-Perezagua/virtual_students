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
            url: "../../settings/admin.php",
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
                funcion: "altaUsuario" 
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
        url: "../../settings/admin.php", 
        type: "POST", 
        dataType: "json", 
        async: true,
        
        data: {
            funcion: "cargarProfesores"
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

function cargarProfesores2(){
    var peticion = $.ajax({
        url: "../../settings/admin.php", 
        type: "POST", 
        dataType: "json", 
        async: true,
        
        data: {
            funcion: "cargarProfesores2"
        },

        success: function(data){
            if(data){
                let idProfesor;
                let nombre_profesor;
                let primer_apellido;
                let segundo_apellido;
                for(var i = 0; i < data.length; i++){
                    for(var j = 0; j < data.length; i++){
                        idProfesor = data[i][j].id_profesor;
                        nombre_profesor = data[i][j].nombre;
                        primer_apellido = data[i][j].primer_apellido;
                        segundo_apellido = data[i][j].segundo_apellido;
                        let options = "<option value='" + idProfesor +"'>" + nombre_profesor + " " + primer_apellido + " " + segundo_apellido + "</option>";
                        $("#profesores").append(options);
                    }                  
                }
            }
        }
    });
}

function cargarAlumnos(){
    var peticion = $.ajax({
        url: "../../settings/admin.php", 
        type: "POST", 
        dataType: "json", 
        async: true,
        
        data: {
            funcion: "cargarAlumnos"
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
                        $("#idUserAlumnos").append(options);
                    }                  
                }
            }
        }
    });
}

function cargarCiclos(){
    var peticion = $.ajax({
        url: "../../settings/admin.php", 
        type: "POST", 
        dataType: "json", 
        async: true,
        
        data: {
            funcion: "cargarCiclos"
        },

        success: function(data){
            if(data){
                let idCiclo;
                let nombre_ciclo;

                for(var i = 0; i < data.length; i++){
                    for(var j = 0; j < data.length; i++){
                        idCiclo = data[i][j].id_ciclo;
                        nombre_ciclo = data[i][j].nombre_ciclo;;
                        let options = "<option value='" + idCiclo +"'>" + nombre_ciclo + "</option>";
                        $("#ciclos").append(options);
                        $("#ciclos2").append(options);
                    }                  
                }
            }
        }
    });
}

function cargarModulos(){
    var peticion = $.ajax({
        url: "../../settings/admin.php", 
        type: "POST", 
        dataType: "json", 
        async: true,
        
        data: {
            funcion: "cargarModulos"
        },

        success: function(data){
            if(data){
                let idModulo;
                let nombre_modulo;

                for(var i = 0; i < data.length; i++){
                    for(var j = 0; j < data.length; i++){
                        idModulo = data[i][j].id_modulo;
                        nombre_modulo = data[i][j].nombre_modulo;
                        let options = "<option value='" + idModulo +"'>" + nombre_modulo + "</option>";
                        $("#modulos").append(options);
                        $("#modulos2").append(options);
                    }                  
                }
            }
        }
    });
}

function cargarCentros(){
    var peticion = $.ajax({
        url: "../../settings/admin.php", 
        type: "POST", 
        dataType: "json", 
        async: true,
        
        data: {
            funcion: "cargarCentros"
        },

        success: function(data){
            if(data){
                let idCentro;
                let nombre_centro;

                for(var i = 0; i < data.length; i++){
                    for(var j = 0; j < data.length; i++){
                        idCentro = data[i][j].id_centro;
                        nombre_centro = data[i][j].nombre_centro;
                        let options = "<option value='" + idCentro +"'>" + nombre_centro + "</option>";
                        $("#centros").append(options);
                        $("#seleccionarCentro").append(options);
                    }                  
                }
            }
        }
    });
}

function cargarGrupos(){
    var peticion = $.ajax({
        url: "../../settings/admin.php", 
        type: "POST", 
        dataType: "json", 
        async: true,
        
        data: {
            funcion: "cargarGrupos"
        },

        success: function(data){
            if(data){
                let idGrupo;
                let denominacion;

                for(var i = 0; i < data.length; i++){
                    for(var j = 0; j < data.length; i++){
                        idGrupo = data[i][j].id_grupo;
                        denominacion = data[i][j].denominacion;
                        let options = "<option value='" + idGrupo +"'>" + denominacion + "</option>";
                        $("#grupos").append(options);
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
            url: "../../settings/admin.php",
            type: "POST", 
            async: true,
            data: {
                id_user: idUser,
                nrp: nrp,
                salary: salario,
                email: emailDocente,
                funcion: "altaProfesores"
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

function altaCentros(){
    if($("#nombreCentro").val() === "" || $("#direccionCentro").val() === "" || $("#codPostCentro").val() === "" || $("#localidadCentro").val() === "" || $("#provinciaCentro").val() === "" || $("#comAutoCentro").val() === "" || $("#paisCentro").val() === ""){
        $("#altaCentros-toast-text").text("Se deben rellenar todos los campos obligatorios");
        $('#toast-alta-centros').toast('show');
    } else {
        var peticion1 = $.ajax({
            url: "../../settings/admin.php",
            type: "POST", 
            async: true,
            data: {
                nombreC: $("#nombreCentro").val(),
                direccionC: $("#direccionCentro").val(),
                codPostC: $("#codPostCentro").val(),
                localidadC: $("#localidadCentro").val(), 
                provinciaC: $("#provinciaCentro").val(),
                comAutoC: $("#comAutoCentro").val(), 
                paisC: $("#paisCentro").val(), 
                funcion: "altaCentros"
            }, 
    
            success: function(data){
                if(data){
                    alert(data); 
                } else {
                    alert("No se pudo ingresar el centro educativo");
                }
            }
        })

        $("#nombreCentro").val("");
        $("#direccionCentro").val("");
        $("#codPostCentro").val("");
        $("#localidadCentro").val("");
        $("#provinciaCentro").val("");
        $("#comAutoCentro").val("");
        $("#paisCentro").val("");
    }
}

function altaCiclos(){
    if($("#nombreCiclo").val() === "" || $("#numCursos").val() === "" || $("#horasTotales").val() === "" || $("#famProf").val() === ""){
        $("#altaCiclos-toast-text").text("Se deben rellenar todos los campos obligatorios");
        $('#toast-alta-ciclos').toast('show');
    } else {
        var peticion1 = $.ajax({
            url: "../../settings/admin.php",
            type: "POST", 
            async: true,
            data: {
                nombreCiclo: $("#nombreCiclo").val(),
                descripcion: $("#descripcion").val(),
                numCursos: $("#numCursos").val(),
                horasTotales: $("#horasTotales").val(), 
                famProf: $("#famProf").val(), 
                funcion: "altaCiclos"
            }, 
    
            success: function(data){
                if(data){
                    alert(data); 
                } else {
                    alert("No se pudo ingresar el ciclo formativo");
                }
            }
        })

        $("#nombreCiclo").val("");
        $("#descripcion").val("");
        $("#numCursos").val("");
        $("#horasTotales").val("");
        $("#famProf").val("");
    }
}

function altaModulos(){
    if($("#nombreModulo").val() === "" || $("#horasTotalesM").val() === "" || $("#horasSemanales").val() === "" || $("#curso").val() === ""){
        $("#altaModulos-toast-text").text("Se deben rellenar todos los campos obligatorios");
        $('#toast-alta-modulos').toast('show');
    } else {
        var peticion1 = $.ajax({
            url: "../../settings/admin.php",
            type: "POST", 
            async: true,
            data: {
                nombreModulo: $("#nombreModulo").val(),
                descripcionM: $("#descripcionM").val(),
                horasTotalesM: $("#horasTotalesM").val(),
                horasSemanales: $("#horasSemanales").val(), 
                curso: $("#curso").val(), 
                funcion: "altaModulos"
            }, 
    
            success: function(data){
                if(data){
                    alert(data); 
                } else {
                    alert("No se pudo ingresar el ciclo formativo");
                }
            }
        })

        $("#nombreModulo").val("");
        $("#descripcionM").val("");
        $("#horasTotalesM").val("");
        $("#horasSemanales").val("");
        $("#curso").val("");
    }
}

function altaGrupos(){
    if($("#denominacion").val() === ""){
        $("#altaGrupos-toast-text").text("Se deben rellenar todos los campos obligatorios");
        $('#toast-alta-grupos').toast('show');
    } else {
        var peticion1 = $.ajax({
            url: "../../settings/admin.php",
            type: "POST", 
            async: true,
            data: {
                denominacion: $("#denominacion").val(),
                funcion: "altaGrupos"
            }, 
    
            success: function(data){
                if(data){
                    alert(data); 
                } else {
                    alert("No se pudo ingresar el ciclo formativo");
                }
            }
        })

        $("#denominacion").val("");
    }
}

function ciclosCentros(){
    var peticion1 = $.ajax({
        url: "../../settings/admin.php",
        type: "POST", 
        async: true,
        data: {
            idCentro: $("#centros").val(),
            idCiclo: $("#ciclos").val(),
            funcion: "ciclosCentros"
        }, 

        success: function(data){
            if(data){
                alert(data);
                $("#centros").val("");
                $("#ciclos").val("");
            } else {
                alert("No se ha podido realizar la asignación");
            }
        }
    });
}

function modulosCiclos(){
    var peticion1 = $.ajax({
        url: "../../settings/admin.php",
        type: "POST", 
        async: true,
        data: {
            idModulo: $("#modulos").val(),
            idCiclo: $("#ciclos2").val(), 
            funcion: "modulosCiclos"
        }, 

        success: function(data){
            if(data){
                alert(data);
                $("#ciclos2").val("");
                $("#modulos").val(""); 
            } else {
                alert("No se ha podido realizar la asignación");
            }
        }
    });
}

function modulosGruposProfesor(){
    var peticion1 = $.ajax({
        url: "../../settings/admin.php",
        type: "POST", 
        async: true,
        data: {
            idGrupo: $("#grupos").val(),
            idModulo: $("#modulos2").val(),
            idProfesor: $("#profesores").val(),
            funcion: "modulosGruposProfesor"
        }, 

        success: function(data){
            if(data){
                alert(data);
                $("#profesores").val("");
                $("#modulos2").val("");
                $("#grupos").val(""); 
            } else {
                alert("No se ha podido realizar la asignación");
            }
        }
    });
}

function getCiclosByIdCentro(){
    var peticion = $.ajax({
        url: "../../settings/admin.php", 
        type: "POST", 
        dataType: "json", 
        async: true,
        
        data: {
            idCentro: $("#seleccionarCentro").val(),
            funcion: "getCiclosByIdCentro"
        },

        success: function(data){
            if(data){
                let idCiclo;
                let nombreCiclo;
                let selectCurso = "<div class='d-flex flex-row justify-content-around'><label for='' class='col-3'>Seleccione el curso:<span class='requerido text-danger'>*</span>&nbsp;</label><select class='col-9' name='' id='seleccionarCurso' onchange='getModulosByIdCicloCurso()'><option value=''>-</option><option value='1º'>1º</option><option value='2º'>2º</option></select></div>";
                let selectCiclos = "<div class='d-flex flex-row justify-content-around'><label for='' class='col-3'>Seleccione el ciclo:<span class='requerido text-danger'>*</span>&nbsp;</label><select class='col-9' name='' id='seleccionarCiclo'><option value=''>-</option></select></div>";
                $("#matriculaciones_curso").append(selectCiclos);
                $("#matriculaciones_curso").append(selectCurso);

                for(var i = 0; i < data.length; i++){
                    for(var j = 0; j < data.length; i++){
                        idCiclo = data[i][j].id_ciclo;
                        nombreCiclo = data[i][j].nombre_ciclo;
                        let options = "<option value='" + idCiclo +"'>" + nombreCiclo + "</option>";
                        $("#seleccionarCiclo").append(options);
                        
                    }                         
                }
            }
        }
    });
}

function getModulosByIdCicloCurso(){
    var peticion = $.ajax({
        url: "../../settings/admin.php", 
        type: "POST", 
        dataType: "json", 
        async: true,
        
        data: {
            idCiclo: $("#seleccionarCiclo").val(),
            curso: $("#seleccionarCurso").val(),
            funcion: "getModulosByIdCicloCurso"
        },

        success: function(data){
            if(data){
                let idModulo;
                let nombreModulo;
                let selectModulos = "<div class='d-flex flex-row justify-content-around'><label for='' class='col-3'>Seleccione el ciclo:<span class='requerido text-danger'>*</span>&nbsp;</label><select class='col-9' name='' id='seleccionarModulo'><option value=''>-</option></select></div>";
                $("#matriculaciones_curso").append(selectModulos);

                for(var i = 0; i < data.length; i++){
                    for(var j = 0; j < data.length; i++){
                        idModulo = data[i][j].id_modulo;
                        nombreModulo = data[i][j].nombre_modulo;
                        let options = "<option value='" + idModulo +"'>" + nombreModulo + "</option>";
                        $("#seleccionarModulo").append(options);
                        
                    }                         
                }
            } else {
                alert("Debe seleccionar un ciclo");
            }
        }
    });
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

function comprobarCodPos(inputId, inputValue){
   

    if(!patronCodigoPostal.test(inputValue)){
        $("#" + inputId).css("border", "1px solid red");
        $("#" + inputId).css("background-color", "pink"); 
        $("#" + inputId).val("");
        if(inputId === "postCode"){
            $("#toast-text").text("El campo 'código postal' no cumple el formato");
            $('#element').toast('show');
        } else if(inputId === "codPostCentro"){
            $("#altaCentros-toast-text").text("El campo 'código postal' no cumple el formato");
            $('#toast-alta-centros').toast('show');
        }
        $("#toast-text").text("El campo 'Código Postal' no cumple el formato");
        $('#element').toast('show');
    } else {
        $("#" + inputId).css("border", "1px solid black");
        $("#" + inputId).css("background-color", "white");
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

function onCloseModalAltaCentros(){
    $("#nombreCentro").val("");
    $("#direccionCentro").val("");
    $("#codPostCentro").val("");
    $("#localidadCentro").val("");
    $("#provinciaCentro").val("");
    $("#comAutoCentro").val("");
    $("#paisCentro").val("");
    $("#codPostCentro").css("border", "1px solid black");
    $("#codPostCentro").css("background-color", "white");
}

function onCloseModalAltaCiclos(){
        $("#nombreCiclo").val("");
        $("#descripcion").val("");
        $("#numCursos").val("");
        $("#horasTotales").val("");
        $("#famProf").val("");
}

function onCloseModalAltaModulos(){
    $("#nombreModulo").val("");
    $("#descripcionM").val("");
    $("#horasTotalesM").val("");
    $("#horasSemanales").val("");
    $("#curso").val("");
}

function onCloseModalAltaGrupos(){
    $("#denominacion").val("");
}

function onLoadBody(){
    this.cargarProfesores();
    this.cargarProfesores2()
    this.cargarAlumnos();
    this.cargarCiclos();
    this.cargarModulos();
    this.cargarCentros();
    this.cargarGrupos();
}