<?php include "./header.php" ?>
<div class="body-login p-0 m-0">
    <div class="contenedor-formulario container-fluid p-0 m-0 d-flex flex-row justify-content-center align-items-center w-100 h-0">
    <form action="../../settings/login.php" class="h-50 d-flex flex-column justify-content-center align-items-center">
            <label for="">Username: </label>
            <input type="text" name="name" min=8>
            <label for="">Contraseña: </label>
            <input type="text" name="password" min=8>
            <button>Entrar</button>
            <div style="color:red;font-size:x-large">
        <?php if(out_error()!="" or out_error()!=null){
            echo out_error();
        }?>
    </div>
        </form>
    </div>
</div>
<?php
    require_once('./footer.php');
?>