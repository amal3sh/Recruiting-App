<?php 
require ('connect.php');

if (isset($_POST['submit'])) {

session_start();
$otp = $_POST['otp_input'];
$email = $_SESSION['user']; 

$query = "SELECT token FROM candidate_reg WHERE cand_email = '$email' " ;
$result=mysqli_query($con,$query);
$value = mysqli_fetch_assoc($result);
if($value['token']==$otp)
{
	$query = "UPDATE candidate_reg SET Is_verified = 1 WHERE cand_email = '$email' ";
	mysqli_query($con,$query);
	header("location:http://localhost/Reclutare/cand_reg_2.php");

}
else
{
	echo('Invalid otp');
}

}
 ?>