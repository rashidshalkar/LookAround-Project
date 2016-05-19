<?php 
	session_start();	
	require 'dbconfig.php';

	if ( !empty($_POST)) {
		// keep track validation errors
		$nameError = null;
		$emailError = null;
		$passwordError = null;
		$password_confirmError = null;
		
		// keep track post values
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password_confirm = $_POST['password_confirm'];
		$_SESSION['pass'] = $_POST['password'];
		
		// validate input
		$valid = true;
		if (empty($username)) {
			$nameError = 'Please enter Name and Surname';
			$valid = false;
		}		
		if (empty($email)) {
			$emailError = 'Please enter Email Address';
			$valid = false;
		} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$emailError = 'Please enter a valid Email Address';
			$valid = false;
		}
		if (empty($password)) {
			$passwordError = 'Please enter Password';
			$valid = false;
		}
		if (empty($password_confirm)) {
			$password_confirmError = 'Please confirm Password';
			$valid = false;
		}
		
		// insert data
		if ($valid && $password_confirm == $password && strlen($password) >= 6) {
			$sql = "INSERT INTO tbl_users (user_name,user_email,user_password) values(?, ?, ?)";
			$sql2 = "SELECT *FROM tbl_users WHERE user_email=$email";
			$q2 = $db_con->prepare($sql2);

			$q = $db_con->prepare($sql);
			$q->execute(array($username,$email,$password));

			$_SESSION['user_email']=$email;
			header("Location: log_in.php");
		}
		elseif ($password_confirm != $password) {
			$password_confirmError = "Doesn't match";
			$p = 1;
			$valid = false;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		ShakeIt
	</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta charset="utf-8">
    <script src="js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery-2.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/bootstrap-social.css" rel="stylesheet">

	<script type="text/javascript">
		function checkForm() {
		// Fetching values from all input fields and storing them in variables.
		var name = document.getElementById("username1").value;
		var password = document.getElementById("password1").value;
		var email = document.getElementById("email1").value;
		var website = document.getElementById("password_confirm1").value;
		//Check input Fields Should not be blanks.
		if (name == '' || password == '' || email == '' || website == '') {
			alert("Fill All Fields");
		} else {
			//Notifying error fields
			var username1 = document.getElementById("username");
			var password1 = document.getElementById("password");
			var email1 = document.getElementById("email");
			var website1 = document.getElementById("password_confirm");
			//Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
			if (username1.innerHTML == 'Must be 3+ letters' || password1.innerHTML == 'Password too short' || email1.innerHTML == 'Invalid email' || website1.innerHTML == 'Doesnt match') {
				alert("Fill Valid Information");
			} else {
			//Submit Form When All values are valid.
				document.getElementById("myForm").submit();
				}
			}
		}
		function validate(field, query) {
		var xmlhttp;
		if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else { // for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
			document.getElementById(field).innerHTML = "Validating..";
		} else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	  		document.getElementById(field).innerHTML = xmlhttp.responseText;
		} else {
			document.getElementById(filed).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
			}
		}
		xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
		xmlhttp.send();
		}
</script>
</head>
<style type="text/css">
	span{
	color:green
	}
	.main .wrapper #myForm div{
	color:red;
	font-size:14px
	}
</style>
<body>
	<div class="video">
		<video autoplay loop muted class="bgvideo" id="bgvideo">
			<source src="video/0.mp4" type="video/mp4">
		</video>
	</div>
	<div class="main">
		<div class="wrapper">
		    <form class="form-signin" method="post"  id="myForm" action="" name="myForm">       
		    	<h2 class="form-signin-heading"><strong>JOIN</strong></h2>
			    <input type="text" id="username1" name="username" placeholder="First name and last name " onblur="validate('username', this.value)" class="form-control" value="<?php echo !empty($name)?$name:'';?>">
			    	<strong><div id="username"></div></strong>
			    <input type="email" id="email1" name="email" placeholder="Email adress" onblur="validate('email', this.value)" class="form-control" value="<?php echo !empty($email)?$email:'';?>">
			    	<strong><div id='email'></div></strong>
	        	<input type="password" id="password1" name="password" placeholder="Password" onblur="validate('password', this.value)" class="form-control" value="<?php echo !empty($password)?$password:'';?>">
					<strong><div id="password"></div></strong>
				<input type="password" id="password_confirm1" name="password_confirm" placeholder="Password confirm" onblur="validate('password_confirm', this.value)" class="form-control">
					<strong><div id="password_confirm"></div></strong>
			    <button type="submit" class="btn btn-success btn-block up btn-lg" onclick="checkForm()" name='submit'><strong>Join with email</strong></button>
          	</button>
			    <small class="small">
		      		<p>Already have an account? <a href="log_in.php"><strong> Log in</strong></a></p>
		        </small>
			</form>
		</div>
		<div class="container text-bottom">
	      <p class="navbar-text pull-center">&#169; 2016 - Site Built By Rashid Shalkar
	      </p>
    	</div>  
	</div>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
