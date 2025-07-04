<?php
    $dbhost ="localhost";
    $dbuser ="root";
    $dbpassword ="";
    $dbname ="crud_proj";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
    if(!$conn){
        die("connection failed". mysqli_connect_error());
    }
    
?>