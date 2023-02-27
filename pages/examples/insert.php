<?php
    include "connection.php";

    if (isset ($_GET['submit_form_get'])){
         
        $fname = $_GET['firstname'];
        $midname = $_GET['midname'];
        $lname = $_GET['lastname'];
        $school = $_GET['school'];
        $address = $_GET['address'];

        echo "$fname - $midname - $lname - $school - $address";

        // $query = "INSERT INTO students (firstname, midname, lastname, birthdate, school, address) VALUES ('$fname', '$midname', '$lname', 
        //  '$bdate', '$school', '$address')";

        $query = "INSERT INTO students VALUES ('', '$fname', '$midname', '$lname', '$school', '$address')";

        if ($conn -> query ($query) === TRUE){

            echo "INSERTED SUCCESSFULLY";
            header ('location: normal-tables.php');
        }else{
            
            echo "ERROR!!!";
            echo '<script>Window.alert("ERROR!!!")</script>';
        }
    }
?>