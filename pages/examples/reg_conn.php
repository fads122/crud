<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="crud";

    $conn = mysqli_connect ($server, $username, $password, $database);

    if (!$conn) {   
        echo "Connection failed!";
    }else{
        echo "Connection Succesfully";
    }
?>

