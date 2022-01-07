<?php
    require './dbConnect/db_connect.php';

    $sql = 'SELECT * FROM `dummy`';
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<br>id: ".$row['id']." name: ".$row['name']." semester: ".$row['semester'];
        }
    }
    else{
        echo "no data found";
    }

    
?>