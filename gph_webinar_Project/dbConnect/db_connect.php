<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "webinar";

    $conn = mysqli_connect($host, $username, $password, $db);

    
    if(!$conn){
        die("DB not connected ".mysqli_connect_error($conn));
    }

    // echo "Database connected";

?>

