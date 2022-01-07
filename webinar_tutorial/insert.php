<?php
    require './dbConnect/db_connect.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $semester = $_POST['semester'];

        $sql = "INSERT INTO `dummy` (`name`,`semester`) VALUES ('$name',$semester)";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "inserted successfully from post";
        }
        else{
            echo "can't inserted  from post";

        }
    }
    else{
        $name = $_GET['name'];
        $semester = $_GET['semester'];

        $sql = "INSERT INTO `dummy` (`name`,`semester`) VALUES ('$name',$semester)";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "inserted successfully from get";
        }
        else{
            echo "can't inserted  from get";

        }
    }
?>