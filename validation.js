window.onload = function(){
	document.candidate_signup_form.onsubmit= function() { return checkForm();}
}
	

function firstNameValidate(){
	var firstNameInput = document.getElementById("firstNameInput");
	var str = document.getElementById("firstNameInput").value;
	
	//alert(firstNameInput.length)
	if((firstNameInput.value=="") || (str.length <3) || (str.length >15))
	{

	document.getElementById("firstNameInputStatus").style.display = "block";
	firstNameInput.parentNode.className = "form-group has-error has-feedback";
	document.getElementById("firstNameInput").className="form-control is-invalid";
	return false;
	}
			
	else {		
	document.getElementById("firstNameInputStatus").style.display = "none";
	firstNameInput.parentNode.className = "form-group has-success has-feedback";
	document.getElementById("firstNameInput").className="form-control is-valid";
	return true;
	}
	
}

function lastNameValidate(){

	var lastNameInput = document.getElementById("lastNameInput");
	var str = document.getElementById("lastNameInput").value;

	if((lastNameInput.value=="") || (str.length >15))
	{

	document.getElementById("lastNameInputStatus").style.display = "block";
	lastNameInput.parentNode.className = "form-group has-error has-feedback";
	document.getElementById("lastNameInput").className="form-control is-invalid";
	return false;
	}
	else if(lastNameInput.length < 3)
	{
		document.getElementById("lastNameInputStatus").style.display = "block";
	lastNameInput.parentNode.className = "form-group has-error has-feedback";
	document.getElementById("lastNameInput").className="form-control is-invalid";
	return false;
	}		
	else {		
	document.getElementById("lastNameInputStatus").style.display = "none";
	lastNameInput.parentNode.className = "form-group has-success has-feedback";
	document.getElementById("lastNameInput").className="form-control is-valid";
	return true;
	}
	

}

function emailValidate(){

	var emailInput = document.getElementById("emailInput");

	if(emailInput.value=="")

{	document.getElementById("emailInputStatus").innerHTML ="Email address is required";
	document.getElementById("emailInputStatus").style.display = "block";
	emailInput.parentNode.className = "form-group has-error has-feedback";
	document.getElementById("emailInput").className="form-control is-invalid";
	return false;

}
else if(!validEmailAddress(emailInput.value))
{
	document.getElementById("emailInputStatus").innerHTML ="Incorrect email address format";
	document.getElementById("emailInputStatus").style.display = "block";
	emailInput.parentNode.className = "form-group has-error has-feedback";
	document.getElementById("emailInput").className="form-control is-invalid";
	return false;
}
else
{
	document.getElementById("emailInputStatus").style.display ="none";
	emailInput.parentNode.className = "form-group has-success has-feedback";
	document.getElementById("emailInput").className="form-control is-valid";
	return true;

}

}

function passwordValidate(){
	var passwordInput = document.getElementById("passwordInput");
	var str = document.getElementById("passwordInput").value;

	if((passwordInput.value=="")||(str.length <8))
	{
	document.getElementById("passwordInputStatus").style.display = "block";
	passwordInput.parentNode.className = "form-group has-error has-feedback";
	document.getElementById("passwordInput").className="form-control is-invalid"
	return false;

	}
	else
	{
	document.getElementById("passwordInputStatus").style.display = "none";
	passwordInput.parentNode.className = "form-group has-success has-feedback";
	document.getElementById("passwordInput").className="form-control is-valid"
	return true;
	}	

}

function confirmPassword()
{
	var passwordInput = document.getElementById("passwordInput").value;
	var passwordconfirmInput = document.getElementById("passwordconfirmInput");
	var str=document.getElementById("passwordconfirmInput").value;
	
	if((passwordconfirmInput.value=="") ||(passwordInput!=str))
	{
	document.getElementById("confirmpasswordInputStatus").style.display = "block";
	passwordconfirmInput.parentNode.className = "form-group has-error has-feedback";
	document.getElementById("passwordconfirmInput").className="form-control is-invalid"
	return false;
	}
	else
	{
	document.getElementById("confirmpasswordInputStatus").style.display = "none";
	passwordconfirmInput.parentNode.className = "form-group has-success has-feedback";
	document.getElementById("passwordconfirmInput").className="form-control is-valid"
	return true;

	}

}

function genderValidation()
{
	var genderInput = document.getElementById("genderInput"); 
	
	if(genderInput.value == "select_gender")
	{
	document.getElementById("genderInputStatus").style.display = "block";
	genderInput.parentNode.className = "form-group has-error has-feedback";
	document.getElementById("genderInput").className="form-control is-invalid"
	return false;

	}
	else
	{
	document.getElementById("genderInputStatus").style.display = "none";
	genderInput.parentNode.className = "form-group has-success has-feedback";
	document.getElementById("genderInput").className="form-control is-valid"
	return true;
	}
}


function locationValidate()
{
	var locationInput = document.getElementById("locationInput");

	if(locationInput.value == "Select_location")
	{
	document.getElementById("locationInputStatus").style.display = "block";
	locationInput.parentNode.className = "form-group has-error has-feedback";
	document.getElementById("locationInput").className="form-control is-invalid"
	return false;

	}
	else
	{
	document.getElementById("locationInputStatus").style.display = "none";
	genderInput.parentNode.className = "form-group has-success has-feedback";
	document.getElementById("locationInput").className="form-control is-valid"
	return true;
	}

}
	
function mobValidate()
{
	var mobInput = document.getElementById("mobInput");
	
	if(mobInput.value=="")
	{
	document.getElementById("mobInputStatus").innerHTML ="MObile number required";
	document.getElementById("mobInputStatus").style.display = "block";
	mobInput.parentNode.className = "form-group has-error has-feedback";
	document.getElementById("mobInput").className="form-control is-invalid";
	return false;

	}
	else if(!validMobileNumber(mobInput.value))
	{
	document.getElementById("mobInputStatus").innerHTML ="Incorrect mob number";
	document.getElementById("mobInputStatus").style.display = "block";
	mobInput.parentNode.className = "form-group has-error has-feedback";
	document.getElementById("mobInput").className="form-control is-invalid";
	return false;
	}
	else
	{
	document.getElementById("mobInputStatus").style.display ="none";
	mobInput.parentNode.className = "form-group has-success has-feedback";
	document.getElementById("mobInput").className="form-control is-valid";
	return true;
	}

}

function dobValidate()
{
	var dobInput = document.getElementById("dobInput");
	

	

	if(dobInput.value=="")
	{
	document.getElementById("dobInputStatus").innerHTML ="Date of birth required";
	document.getElementById("dobInputStatus").style.display = "block";
	dobInput.parentNode.className = "form-group has-error has-feedback";
	document.getElementById("dobInput").className="form-control is-invalid";
	return false;

	}
	
	else
	{
	document.getElementById("dobInputStatus").style.display ="none";
	dobInput.parentNode.className = "form-group has-success has-feedback";
	document.getElementById("dobInput").className="form-control is-valid";
	return true;
	}
	
}

function resumeValidate()
{
	var resumeInput = document.getElementById("resumeInput");
	if(resumeInput.value=="")
	{
	document.getElementById("resumeInputStatus").style.display = "block";
	resumeInput.parentNode.className = "form-group has-error has-feedback";
	document.getElementById("resumeInput").className="form-control is-invalid";
	return false;

	}
	
	else
	{
	document.getElementById("resumeInputStatus").style.display ="none";
	resumeInput.parentNode.className = "form-group has-success has-feedback";
	document.getElementById("resumeInput").className="form-control is-valid";
	return true;
	}


}

	
	
     
	
function checkForm(){
	

	var valid = true;

	
	
	
	
	
	
	
	
	
	var acceptterms = document.getElementById("termsInput");



if(!firstNameValidate()) valid = false;


















if(acceptterms.value == false)
{
	document.getElementById("termsInput").style.display = "block";
	acceptterms.parentNode.className = "form-group has-error has-feedback";
	document.getElementById("termsIcon").className="glyphicon glyphicon-remove form-control"
	valid= false;

}
else
{
	document.getElementById("termsInput").style.display = "none";
	acceptterms.parentNode.className = "form-group has-success has-feedback";
	document.getElementById("termsIcon").className="glyphicon glyphicon-ok form-control";

}

}

function validEmailAddress(email)
{
	var pattern=/^[a-zA-Z0-9._-]+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	return pattern.test(email);
}

function validMobileNumber(mobile_number)
{
	var pattern =/[6|7|8|9]\d{9}$/;
	return pattern.test(mobile_number);
}





