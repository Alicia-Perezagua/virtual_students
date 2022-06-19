function onload(){
    var peticion1 = $.ajax({
        url: "../../settings/sesion.php",
        type: "POST", 
        async: true, 
        data: {
            funcion: "recogerSesion"
        }, 

        success: function(data){
            alert(data);
            if(data !== "null"){
                $("#alert_sesion").css("display", "inline");
                setTimeout(function(){
                    $("#alert_sesion").css("display", "none");
                    window.location.href = "../admin/index.php";
                }, 1000)
            }
        }
    });
}

function comprobarClave(){

    let username = $("#username").val();

    var peticion1 = $.ajax({
        url: "../../settings/login_back.php",
        type: "POST",
        async: true,
        data: {
            user: username, 
            funcion: "comprobarClave"
        },
        success: function(data){
            if(data === "false"){
                var nuevaClave = "<label class='login-label' for=''>Nueva Contraseña: </label>" +
                "<input class='login-input' type='password' id='pass'>" + 
                "<label class='login-label' for=''>Repetir Contraseña: </label>" + 
                "<input class='login-input' type='password' id='repPass'>" + 
                "<button class='button-entrar' onclick='setearClaveNueva()'>Actualizar</button>"
                $("#formulario-login").html(nuevaClave);
            } else if(data === "true") {
                var insertarClave = "<label class='login-label' for=''>Contraseña: </label>" + 
                "<input class='login-input' type='password' id='passD'>" + 
                "<button class='button-entrar' onclick='iniciarSesion()'>Iniciar Sesión</button>";
                $("#siguiente").css("display", "none");                
                $("#formulario-login").append(insertarClave);
            } else {
                $("#mensajes").css("display", "inline"); 
                $("#mensajes").text("No se reconoce a este usuario");
            }
        }
    }); 
    document.cookie = "username = " + username; 
    console.log(document.cookie);
}

function setearClaveNueva(){
    let pass = $("#pass").val();
    let repPass = $("#repPass").val();
    let cookie = document.cookie
    let cookieArr = cookie.split(";");
    let cookieUserArr = cookieArr[1].split("="); 
    let cookieUsername = cookieUserArr[1];
    
    let user_name = cookieUsername;
    
    if(pass === repPass){
        var peticion2 = $.ajax({
            url: "../../settings/login_back.php",
            type: "POST",
            async: true,
            data: {
                user: user_name,
                pass: pass,
                repPass: repPass, 
                funcion: "cambion" 
            },

            success: function(data){
                if(data === "true"){
                    $("#mensajes").css("display", "inline"); 
                    $("#mensajes").text("Sesión iniciada con éxito");
                    setTimeout(function() {
                        window.location.href = "../admin/index.php";
                    }, 1500);
                }
            }
        }); 
    } else {
        alert("Las contraseñas no coinciden");
    }
}

function iniciarSesion(){
    let passD = $("#passD").val();
    let cookie = document.cookie
    console.log(cookie);
    let cookieArr = cookie.split(";");
    console.log(cookieArr);
    let cookieUserArr = cookieArr[0].split("=");
    console.log(cookieUserArr); 
    let cookieUsername = cookieUserArr[1];
    
    
    let user_name = cookieUsername;
    console.log(user_name);

    var peticion3 = $.ajax({
        url: "../../settings/login_back.php",
        type: "POST",
        async: true,
        data: {
            pass: passD,
            user: user_name, 
            funcion: "insertarPass" 
        },

        success: function(data){
            if(data === "true"){
                $("#mensajes").css("display", "inline"); 
                $("#mensajes").text("Sesión iniciada con éxito");
                setTimeout(function() {
                    window.location.href = "../admin/index.php";
                }, 1500);
            }
        }
    })
}

function setearCookieSesion(){
    var peticion = $.ajax({
        
    })
}

function comrpobarDatos(){
    let username = $("#username").val();
    console.log(username);
}