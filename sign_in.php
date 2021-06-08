<?php 

require('connect.php');

if(isset($_POST['email']) && isset($_POST['password']))
{
	$user= $_POST['email'];
	$pass = $_POST['password'];
	$query=" SELECT * FROM sign_in WHERE email_id = '$user' and password = '$pass' ";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	// $active = $row['active'];
      
    $count = mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);

    
         

     if($count == 1)
      {
         session_start();
         $_SESSION['user'] = $user;
          
          $query=" SELECT Is_verified FROM candidate_reg WHERE cand_email = '$user' and cand_pswd = '$pass' ";
          $result = mysqli_query($con, $query);
          $value = mysqli_fetch_assoc($result);

          $query2 = "SELECT Is_complete FROM candidate_reg WHERE cand_email = '$user' and cand_pswd = '$pass' ";
          $result2 = mysqli_query($con, $query2);
          $value2 = mysqli_fetch_assoc($result2);
        
         if($value["Is_verified"]==0)
         {

		 header("location:http://localhost/Reclutare/enter_otp.php");
      	}
      	elseif($value2["Is_complete"]==0)
      	{

		 header("location:http://localhost/Reclutare/cand_reg_2.php");
      	}
      	else
      	 {
      	 	
         header("location:http://localhost/Reclutare/user_panel.php");
     	 }
    }
    else
    echo("invalid userid or password"); 	 
}

 ?>