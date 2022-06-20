function recogerModulo(idModulo){
    document.cookie = "modulo=" + idModulo;
    console.log(document.cookie);
    setTimeout(function(){
        window.location.href = "../admin/pantalla_modulo.php";
    }, 3000);
}