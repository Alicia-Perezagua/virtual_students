<?php include "./header.php" ?>
<div class="body_login">
    <div class="contenedor-formulario container-fluid p-0 m-0 d-flex flex-row justify-content-center align-items-center">
        <form action="../../settings/login.php
        " class="h-50 d-flex flex-column justify-content-center align-items-center">
            <label for="">Username: </label>
            <input type="text" name="name">
            <label for="">Contraseña: </label>
            <input type="text" name="password">
            <button>Entrar</button>
            <div style="color:red;font-size:x-large">
        <?php if(out_error()!="" or out_error()!=null){
            echo out_error();
        }?>
    </div>
        </form>
    </div>
    
</div>
<?php include "./footer.php" ?>