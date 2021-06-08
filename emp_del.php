<?php
require('connect.php'); 
session_start();
$email= $_SESSION['user'];
$query ="DELETE FROM employer_reg WHERE comp_email = '$email'";
mysqli_query($con,$query);
$query ="DELETE FROM emp_sign_in WHERE email_id = '$email'";
mysqli_query($con,$query);
unset($_SESSION['user']);
session_destroy();
header("location:http://localhost/Reclutare/Log_In.php");






 ?>