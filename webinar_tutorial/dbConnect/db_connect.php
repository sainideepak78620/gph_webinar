<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "webinar";

    $conn = mysqli_connect($host, $username, $password, $db);

    
    if(!$conn){
        die("DB not connected ".mysqli_connect_error($conn));
    }

    echo "Database connected";



    // MySQLi Extension Supports on mysql
    // -> MySQLi (OO) MYSQL()
    // -> MySQLi (PROCEDURAL) WE'LL USE THIS
    // PDO - PHP Data Object. PDO supports 12 different db
    // ORM Object Relation Mapping


?>

