<!DOCTYPE html>
<html>
<head>
	<title>Enter OTP</title>
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
    <h5>You are one step away.</h5>
  </div>
  <form id="otp_verification" name="otp_verification" action="otp_verification_cand.php" method="post" style="width:500px; margin:auto">
  	<input type="text" name="otp_input" id="otp_input" placeholder="Enter email verification code" class="form-control">
  	<br>

  		<center><button type= "submit" name="submit" class="btn btn-outline-primary" >Verify Now</button> </center>
 	<br><br>

















  <script
 	 src="https://code.jquery.com/jquery-1.12.4.js"
 	 integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  	 crossorigin="anonymous"></script>
	<script src="js/bootstrap.js"></script>

</body>
</html>