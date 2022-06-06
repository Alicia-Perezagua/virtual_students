<?php
    $host="localhost";
    $dbname="virtual_students";
    $user="root";
    $pass="";

    $con = "mysql:dbname=$dbname;host=$host";

    $bd = new PDO($con, $user, $pass);    
?>