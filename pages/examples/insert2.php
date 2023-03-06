<?php
   session_start();
   require 'connection1.php';

   if(isset($_POST["submit"])){
     $uname = $_POST["adname"];
     $pass = $_POST["adpassword"];
     $result = mysqli_query($con, "SELECT * FROM adminlogin WHERE adname = '$uname'");
     $row = mysqli_fetch_assoc($result);
     if(mysqli_num_rows($result) > 0){

       if($pass == $row['adpass']){
         $_SESSION["adminlogin"] = true;
         $_SESSION["adID"] = $row["adID"];
         echo "<script>alert('LOGIN SUCCESS!'); </script>";
         echo "<script>window.location.assign('normal-tables.php');</script>" ;
       }
     }
     else{
       echo
       "<script> alert('Di pa naka rehistro ang gumagamit'); </script>";
      
     }
   }
?>