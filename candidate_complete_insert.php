<?php 

require('connect.php');
session_start();
$email = $_SESSION['user']; 
if (isset($_POST['submit'])) {
	$cand_qualification = $_POST['cand_qualification'];
	$cand_experience = $_POST['cand_experience'];

	$query = "UPDATE candidate_reg SET cand_experience = '$cand_experience' WHERE cand_email = '$email' ";
	mysqli_query($con,$query);
	$query = "UPDATE candidate_reg SET cand_qualification = '$cand_qualification' WHERE cand_email = '$email' ";
	mysqli_query($con,$query);
	$query = "UPDATE candidate_reg SET Is_complete = 1 WHERE cand_email = '$email' ";
	mysqli_query($con,$query);

	header("location:http://localhost/Reclutare/user_panel.php");
	


}



 ?>