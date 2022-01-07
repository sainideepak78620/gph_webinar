<?php

    if($_SERVER['REQUEST_METHOD'] =='POST'){
        $name = $_POST['name1'];
        echo "<h1>Welcome ".$name."</h1>";
    }
    else{
        $name = $_GET['name'];
        echo "Welcome ".$name;
    }
?>