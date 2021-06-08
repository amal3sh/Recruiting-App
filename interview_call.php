<?php 

require("connect.php");
session_start();
$email = $_SESSION['user'];
$qual = $_GET['qual'];
$exp = $_GET['exp'];
$cand_email = $_GET['cand'];
echo $cand_email. $qual. $exp .$email;
$query ="INSERT INTO interview( cand_email, comp_email, qualification, experience) VALUES ('$cand_email','$email','$qual','$exp')";
mysqli_query($con,$query);
header("location:http://localhost/Reclutare/employer_panel.php");


 ?>