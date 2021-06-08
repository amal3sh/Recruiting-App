<?php 

require('connect.php');

if(isset($_POST['email']) && isset($_POST['password']))
{
	$user= $_POST['email'];
	$pass = $_POST['password'];
	$query=" SELECT * FROM emp_sign_in WHERE email_id = '$user' and password = '$pass' ";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	// $active = $row['active'];
      
    $count = mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);

    
         

     if($count == 1)
      {
         session_start();
         $_SESSION['user'] = $user;
          
          $query=" SELECT Is_verified FROM employer_reg WHERE comp_email = '$user' and comp_pswd = '$pass' ";
          $result = mysqli_query($con, $query);
          $value = mysqli_fetch_assoc($result);

         
        
         if($value["Is_verified"]==0)
         {

		    header("location:http://localhost/Reclutare/enter_otp_emp.php");
      	}
      	
      	else
      	 {
      	 	
         header("location:http://localhost/Reclutare/employer_panel.php");
     	 }
    }
    else
    echo("invalid userid or password"); 	 
}

 ?>