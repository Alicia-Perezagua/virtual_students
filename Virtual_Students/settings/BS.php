<?php
//convertir contraseña introducida por el usuario en un hash
function hash_change($password){
    $password_hash= password_hash($password,PASSWORD_DEFAULT);
    return $password_hash;
}
?>