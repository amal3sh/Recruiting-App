<?php 
require('connect.php');
session_start();
$name= $_POST['company_name'];
$url = $_POST['url'];
$num = $_POST['comp_num'];
$email = $_SESSION['user'];
if($name!='')
{
	$query = "UPDATE employer_reg SET comp_name ='$name' WHERE comp_email ='$email' ";
	mysqli_query($con,$query);
}
if($url!='')
{
	$query = "UPDATE employer_reg SET comp_url ='$url' WHERE comp_email ='$email' ";
	mysqli_query($con,$query);
}
if($num!='')
{
	$query = "UPDATE employer_reg SET comp_contact_number =$num WHERE comp_email ='$email' ";
	mysqli_query($con,$query);
}
header("location:http://localhost/Reclutare/employer_panel.php");


 ?>