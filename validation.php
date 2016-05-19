<?php
	session_start();
	$value = $_GET['query'];
	$formfield = $_GET['field'];
	// $pass = $_SESSION['pass'];
	if ($formfield == "username") {
		if (!preg_match("/^[a-z ,.'-]+$/i",$value)) {
		echo "Only alphabetic character are allowed";
	} else {
		echo "<span>Valid</span>";
	}
	}
	if ($formfield == "password") {
		if (strlen($value) < 6) {
		echo "Password too short";
	} else {
		$_SESSION['pass'] = $value;
		echo "<span>Strong</span>";
	}
	}
	if ($formfield == "email") {
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
		echo "Invalid email";
	} else {
		echo "<span>Valid</span>";
	}
	}
	if ($formfield == "password_confirm") {
		if($value == $_SESSION['pass']){
			
			echo "<span>Valid</span>";
	} if ($value != $_SESSION['pass']){
		echo "Doesn't match";
		}
	}
?>