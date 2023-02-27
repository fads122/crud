<?php
    include "connection1.php";

if(isset($_POST['submit'])){
    $fname = $_POST['firstname'];
    $mname = $_POST['midname'];
    $lname = $_POST['lastname'];
    $school = $_POST['school'];
    $address = $_POST['address'];

    $sql = "INSERT INTO `students`(`firstname`, `midname`, `lastname`, `school`, `address`) 
    VALUES ('$fname','$mname', '$lname', '$school', '$address')";

    $conn -> query($sql) or die ($conn->error);
    echo header("Location: normal-tables.php");
}
?>