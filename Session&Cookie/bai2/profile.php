<?php
    $server = "localhost";
    $user = "root";
    $password ="";
    $dbName = "login";
    $db = new mysqli($server, $user, $password, $dbName);
    session_start();
    echo 'Login sucessful!'.'</br>';
    
?>