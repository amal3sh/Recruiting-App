<?php 

require('connect.php');
session_start();
$exp=$_POST['cand_experience'];
$qual = $_POST['cand_qualification'];
$resume = $_POST['upload'];
$email = $_SESSION['user'];
if($exp!='Select_experience')
{
$query = "UPDATE candidate_reg SET cand_experience = '$exp' WHERE cand_email = '$email' ";
mysqli_query($con,$query);
}

if($qual!='Select_qualification')
{

$query = "UPDATE candidate_reg SET cand_qualification = '$qual' WHERE cand_email = '$email' ";
mysqli_query($con,$query);
}
if($resume!='')
{
$query = "UPDATE candidate_reg SET cand_resume = '$resume' WHERE cand_email = '$email' ";
mysqli_query($con,$query);
}
header("location:http://localhost/Reclutare/user_panel.php");






 ?>