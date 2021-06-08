


<!DOCTYPE html>
<html>
<head>
    <title></title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <style>
    .font-div
    {
        width: 10%;
    }



    </style>
</head>
<body>
    <nav class="navbar  navbar-expand-md navbar-dark bg-dark mb-4">
        <a class="navbar-brand" href="#">Reclutare</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Employers</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
        </li>
        </ul>
    
        </div>
    </nav>

   



<?php 
require('connect.php');

 session_start();
 $email = $_SESSION['user'];
 //echo($email);
 $query = "SELECT * FROM candidate_reg WHERE cand_email = '$email' ";
 $result = mysqli_query($con, $query);
// echo($result);
 $value = mysqli_fetch_assoc($result);

        //echo($value["cand_name"]);
 
 

 ?>
 <?php
    if(!ISSET($_SESSION['user']))
    {
        header("location:http://localhost/Reclutare/Log_In.php");
    }
    ?>
      <div class="d-flex flex-column">
            <div class="p-3 bg-dark text-white">
                <div class="d-flex flex-row">
                    <center><h1 class="display-4"><?php
                    echo($value["cand_name"]);
                    ?>
 

                     </h1></center>
                </div>
            </div>
        </div> 



        <div class="d-flex flex-row text-center text-white align-items-start bg-dark ">
            <div class="p-4 bg-success font-div" data-toggle="collapse" data-target="#view_profile">
                <i class="fa fa-user fa-1x d-block"></i>Profile
            </div>
         

           <div class="p-4 bg-warning font-div" data-toggle="collapse" data-target="#edit_profile">
                <i class="fa fa-edit fa-1x d-block"></i>Edit Profile
            </div>
          
       
            <div class="p-4 bg-danger font-div" data-toggle="collapse" data-target="#notification">
                <i class="fa fa-bell fa-1x d-block"></i>Career Calls
            </div>
          
        
       
            <div class="p-4 bg-primary font-div" data-toggle="collapse" data-target="#settings">
                <i class="fa fa-cog fa-1x d-block"></i>Settings
            </div>
        </div>




<div class="container">
    <div class="collapse" id="view_profile">
        <div class="p-4 text-white bg-success">
            <h2>My Profile</h2>
        </div>

    <div class="card card-body  text-black" >

        <h5>Name:
            <?php echo($value["cand_name"]); ?></h5><br>
            <h5>Email:
            <?php echo($value["cand_email"]); ?></h5><br>
            <h5>Gender:
            <?php echo($value["cand_gender"]); ?></h5><br>
            <h5>DOB:
            <?php echo($value["cand_dob"]); ?></h5><br>
            <h5>Mob:
            <?php echo($value["cand_mob_number"]); ?></h5><br>
            <h5>Location:
            <?php echo($value["cand_location"]); ?></h5><br>
            <h5>Experience:
            <?php echo($value["cand_experience"]); ?></h5><br>
            <h5>Qualification:
            <?php echo($value["cand_qualification"]); ?></h5><br>
            <h5>
            <embed src="<?php echo($value["cand_resume"]) ?>"" width="800px" height="1000px" />
              

</div>   

    
    </div>


</div> 



<div class="container">
    <div class="collapse" id="edit_profile">
        <div class="p-4 text-white bg-warning">
            <h2>Edit profile</h2>
    
        </div>

        <div class="card card-body  text-black" >
             <form id="candidate_update" name="candidate_update_form" action="candidate_update.php" method="post" style="width:500px; margin:auto">
    <div class="form-group has-feedback" >
    <label for="cand_qualification" >Highest Qualification</label>
    <select name="cand_qualification" id="qualificationInput"  class="form-control" aria-describedby="qualificationInputStatus" >
      <option value="Select_qualification" selected>-Select your highest qualification-</option>
      <option value="MCA">MCA</option>
      <option value = "BAMS">BAMS</option>
      <option value="M.Pharm">M.Pharm</option>
      <option value ="M.Com">M.Com</option>
      <option value = "M.Tech/ME/MS">M.Tech/ME/MS</option>
      <option value ="PGDCA">PGDCA</option>
      <option value="Diploma">Diploma</option>
      <option value="MBA">MBA</option>
      <option value="CS">CS</option>
      <option value = "ICNA Inter">ICNA Inter</option>
      <option value = "B.Ed">B.Ed</option>
      <option value = "BCA">BCA</option>
      <option value="Bachelor's Degree">Bachelor's Degree</option>
      <option value = "Aviation">Aviation</option>
      <option value ="M.Pharm">M.Pharm</option>
      <option value = "B.Pharm">B.Pharm</option>
      <option value = "BA">BA</option>
      <option value = "Msc">Msc</option>
      <option value = "Bsc">Bsc</option>
      <option value = "BBA">BBA</option>
      <option value = "MA">MA</option>
      <option value = "MSW">MSW</option>
      <option value = "BE/B.Tech">B.Tech</option>
    </select>
    </div>
    <div class="form-group has-feedback" >
    <label for="cand_experience" >Experience</label>
    <select name="cand_experience" id="experienceInput"  class="form-control" aria-describedby="experienceInputStatus" >
      <option value="Select_experience" selected>-Select your experience-</option>
      <option value = "Fresher">Fresher</option>
      <option value = "1 Year And Below">1 Year And Below</option>
      <option value = "1 to 2 year">1 to 2 Year</option>
      <option value = "2 to 4 Year">2 to 4 Year</option>
      <option value = "4 to 6 Year">4 to 6 Year</option>
      <option value="6 Years and Above"> 6 Years and Above</option>
    </select>
    </div> 
        <br>
    
     


            <div class="form-group">
                <label for "upload">Update Resume</label>
                <input type="file" name="upload" accept="application/pdf,application/vnd.ms-excel class="form-control">
            </div>
        <center><button type= "submit" name="submit" class="btn btn-outline-primary" >Update</button> </center>
        </form>
        </div> 

    </div>

</div>

<div class="container">
    <div class="collapse" id="notification">
        <div class="p-4 text-white bg-danger">
            <h2>Notification</h2>
        </div>
        <div class="card card-body  text-black" >
            <?php
              require('connect.php');
              $id=$_SESSION['user'];
              $query1="SELECT * from interview where cand_email = '$id' ";
              $result1 = mysqli_query($con,$query1);
              while($row=mysqli_fetch_assoc($result1))
              {
                $company_id=$row['comp_email'];
                $query2="SELECT * from employer_reg where comp_email = '$company_id' ";
               $result2 = mysqli_query($con,$query2);
               $row2=mysqli_fetch_assoc($result2);
               echo "<h5><hr>". $row2['comp_name']. "looking for candidates with".$row['experience']."contact them at".$row['comp_email']."</hr></h5><br>";
             }
             

            ?>

            
        </div>    
    </div>
</div>

<div class="container">
    <div id="settings" class="panel-collapse collapse">
         <div class="p-4 text-white bg-primary">
            <h2>Settings</h2>
        </div>
        <div class="card card-body  text-black" >
            <ul class="list-group">
            <a href="signout.php" onclick="return confirm('Are you sure want to sign out?');">
            <li class="list-group-item"><div  data-toggle="collapse"  data-target="#">
                <i class="fa fa-sign-out fa-2x d-block"></i>Sign Out
            </div></li></a>
            
            <a href="cand_del.php" onclick="return confirm('Are you sure want to delete account?');"><li class="list-group-item"><div  data-toggle="collapse"  data-target="#">
                <i class="fa fa-trash fa-2x d-block"></i>Delete Account
            </div></li></a>

            </ul>
            
        </div>    
    </div>
</div>
<br>
<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="Images/reclutare.png" alt="" width="72" height="72">
    <h2>Your Dream Job is Waiting. </h2>
    <h5>All you need is here!</h5>
  </div>

</div>
<br><br><br><br>
<footer class="bg-dark" id="myFooter">
        
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><a href="#">RECLUTARE</a></h2>
                </div>
                <div class="col-sm-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        
                    </ul>
                </div>
                
               
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2019 Copyright  </p>
        
    </footer>



<script
     src="https://code.jquery.com/jquery-1.12.4.js"
     integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
     crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>