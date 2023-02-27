<?php
    include "connection.php";

    if (isset ($_GET['signin_form_get'])){
         
        $fname = $_GET['first_name'];
        $midname = $_GET['mid_name'];
        $lastname = $_GET['last_name'];
        $school = $_GET['school'];
        $address = $_GET['address'];

        echo "$fname - $midname - $lastname - $school - $address";

        $query = "INSERT INTO students (firstname, midname, lastname, school, address) VALUES ('$fname', '$midname', '$lastname', '$school', '$adress')";

        $query = "INSERT INTO students VALUES ('', '$fname', '$midname', '$lastname', '$school', '$address')";

        if ($conn -> query ($query) === TRUE){

            echo "INSERTED SUCCESSFULLY";
            echo '<script>Window.alert("INSERTED SUCCESSFULLY")</script>';
            echo "<script>Window.history.go (-1);</script>";
            header ('location: normal-tables.php');
        }
        else{
            
            echo "ERROR!!!";
            echo '<script>Window.alert("ERROR!!!")</script>';
        }
    }
?>