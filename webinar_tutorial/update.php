<?php
    require './dbConnect/db_connect.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $semester = $_POST['semester'];

        $sql = "UPDATE `dummy` SET `name`= '$name', `semester`= '$semester' WHERE `dummy`.`id` = $id";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "updated successfully from post";
        }
        else{
            echo "can't updated  from post";

        }
    }


?>