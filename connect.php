<?php

    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $db = "typinglearner";
    
    $conn = mysqli_connect($host, $user, $password, $db);

    if ($conn) {
        echo "connect";
    }
    else {
        echo "fail";
    }

?>