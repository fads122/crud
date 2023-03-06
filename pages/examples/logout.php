<?php
session_destroy();
unset($_SESSION['adID']);
unset($_SESSION['adpass']);
header("Location: sign-in1.php");


?>