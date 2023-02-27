<?php
    include "connection.php";

    if (isset ($_GET['signin_form_get'])){
         
        $email = $_GET['email'];
        $password = $_GET['password'];

        echo "$email - $password";

        $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

        $query = "INSERT INTO users VALUES ('', '$email', '$password')";

        if ($conn -> query ($query) === TRUE){

            echo "INSERTED SUCCESSFULLY";
            header ('location: normal-tables.php');
        }
        else{
            
            echo "ERROR!!!";
            echo '<script>Window.alert("ERROR!!!")</script>';
        }
    }
?>`