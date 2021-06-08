<?php
               require('connect.php');

				 session_start();
 				$email = $_SESSION['user'];
 				//echo($email);
				 $query = "SELECT * FROM candidate_reg WHERE cand_email = '$email' ";
				 $result = mysqli_query($con, $query);
// echo($result);
				 $value = mysqli_fetch_assoc($result);

                $file = $value["cand_resume"];
                echo ($file);
                /*header('Content-type: application/pdf,application/vnd.ms-excel');
                header('Content-Disposition:inline; filename="' .$file . '"');
                header('Content-Transfer-Encoding: binary');
                header('Accept-Ranges: bytes');
                @write($file);*/
            ?>            