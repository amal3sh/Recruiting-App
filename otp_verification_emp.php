<?php 
require ('connect.php');

if (isset($_POST['submit'])) {

session_start();
$otp = $_POST['otp_input'];
$email = $_SESSION['user']; 

$query = "SELECT token FROM employer_reg WHERE comp_email = '$email' " ;
$result=mysqli_query($con,$query);
$value = mysqli_fetch_assoc($result);
if($value['token']==$otp)
{
	$query = "UPDATE employer_reg SET Is_verified = 1 WHERE comp_email = '$email' ";
	mysqli_query($con,$query);
	header("location:http://localhost/Reclutare/employer_panel.php");

}
else
{
	echo('Invalid otp');
}

}
 ?>