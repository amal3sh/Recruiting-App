<!DOCTYPE html>
<html>
<head>
	<title>Complete registering</title>
		<link rel="stylesheet" href="css/bootstrap.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
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
<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="Images/reclutare.png" alt="" width="72" height="72">
    <h2>Your Dream Job is Waiting. </h2>
    <h5>Jobs are one step away.</h5>
  </div>
  <form id="candidate_signup_completion_form" name="candidate_signup_completion_form" action="candidate_complete_insert.php" method="post" style="width:500px; margin:auto">
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
      <option value = "1_year_and_below">1 Year And Below</option>
      <option value = "1-2yr">1 to 2 Year</option>
      <option value = "2-4yr">2 to 4 Year</option>
      <option value = "4-6yr">4 to 6 Year</option>
      <option value="6_and_above"> 6 Years and Above</option>
    </select>
    </div> 
    	<br>
 	<center><button type= "submit" name="submit" class="btn btn-outline-primary" >Next</button> </center>
 	 
</form>
</div>
<br><br><br><br><br><br>
































  <footer style="background-color: black;" id="myFooter">
        
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
  <script src="validation.js"></script>

</body>
</html>