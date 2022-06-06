function iniciarSesion(){
    let username = $("#username").val();
    let pass = $("#pass").val();

    let peticion1 = $.ajax({
        url: "../settings/login.php",
        type: "POST",
        async: true,
        data: {
            user: username,
            password: pass
        },

        success: function(){
            let hayClave = data;
            if(hayClave){
                
            }
        }
    });
}