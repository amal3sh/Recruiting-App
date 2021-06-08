<?php 
require('connect.php');
session_start();
$email= $_SESSION['user'];
$query ="DELETE FROM candidate_reg WHERE cand_email = '$email'";
mysqli_query($con,$query);
$query ="DELETE FROM sign_in WHERE email_id = '$email'";
mysqli_query($con,$query);
unset($_SESSION['user']);
session_destroy();
header("location:http://localhost/Reclutare/Log_In.php");



 ?>