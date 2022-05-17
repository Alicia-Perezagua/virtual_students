<?php include "./header.php" ?>
<body class="tarea_nueva">
    <form action="" class="nueva_tarea p-5">
        <label for="">Nombre de la tarea:&nbsp;</label>
        <input type="text" name="" id="">
        <br>
        <label for="">Categoría:&nbsp;</label>
        <select name="" id="">
            <option value="">Tarea</option>
            <option value="">Recurso</option>
            <option value="">Exámen</option>
        </select>
        <br>
        <label for="">Fecha Límite:&nbsp;</label>
        <input type="date" name="" id="">
        <br>
        <label for="">Tipo:&nbsp;</label>
        <select name="" id="">
            <option value="">Obligatoria</option>
            <option value="">No obligatoria</option>
            <option value="">Extra(Para subir nota)</option>
        </select>
        <br>
        <button class="crear_tarea">Nueva Tarea</button>
    </form>