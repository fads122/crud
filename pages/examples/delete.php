<?php
    include "connection1.php";

    if(isset($_GET['u_id'])){
        $u_id = $_GET['u_id'];
        $sql_query = "DELETE FROM students_info WHERE ID = '$u_id'";
            if ($con->query($sql_query) === TRUE){
                echo "<script>window.alert('SUCCESSFULLY DELETED!!');</script>";
                echo    "<script>window.location.assign('normal-tables.php')</script>";
            }else{
                echo "<script>window.alert('DELETION DENIED!!');</script>";
            }
    }

?>