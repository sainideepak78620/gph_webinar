<?php
    require './dbConnect/db_connect.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $id = $_POST['id'];

        $sql = "DELETE FROM `dummy` WHERE `dummy`.`id` =$id";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Deleted";
        }
        else{
            echo "not Deleted";
        }
    }
?>