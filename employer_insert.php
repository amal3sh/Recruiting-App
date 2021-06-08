<?php 
require 'PHPMailerAutoload.php';
require 'credential.php';



$company_name = $_POST['company_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$url = $_POST['url'];
$location = $_POST['location'];
$comp_num = $_POST['comp_num'];
$con=mysqli_connect("localhost:3306","root","","reclutare_db");



				$token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789';
				$token = str_shuffle($token);
				$token = substr($token, 0, 6);


$query ="INSERT INTO employer_reg(comp_name, comp_email, comp_pswd, comp_url, comp_location, comp_contact_number, Is_verified, token)
VALUES('$company_name','$email','$password','$url','$location',$comp_num,0,'$token')";
mysqli_query($con,$query);				
			



			include_once "PHPMailer/PHPMailer.php";
			 $mail = new PHPMailer;
                $mail->SMTPDebug = 2; 
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = EMAIL;
                $mail->Password = PASS;
                $mail->SMTPSecure = "tls";
                $mail->Port = 587;
                $mail->setFrom(EMAIL, 'Reclutare');
                $mail->addAddress($_POST['email']);
                $mail->Subject = "Please verify email!";
                $mail->isHTML(true);
                $mail->Body = "
                    Your email verification : $token
                ";

              
        if ($mail->send())
                {
                	
                    
                    header("Location:http://localhost/Reclutare/pls_verify_disp_page.php");
                    $query = "INSERT INTO emp_sign_in(email_id, password) VALUES ('$email', '$password')";
                	
                    mysqli_query($con,$query);

                }	
                else
                
                    echo 'Error';








 ?>