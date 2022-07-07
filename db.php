<?php
    $server= "localhost";
    $user = "root";
    $pword = '';
    $db = "oboy";
    
    $connection = mysqli_connect($server, $user, $pword, $db);
    
    if (!$connection) {
        echo "db connection error";
    }   
    return;
?>