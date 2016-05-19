<?php
	session_start();
	$con = mysqli_connect('localhost','root','','web') or die("Unable to connect");

	if(isset($_GET['q'])){
		$sql = "SELECT * FROM tbl_users WHERE user_email = '".$_GET['q']."'";
		$res = mysqli_query($con, $sql);
		if(mysqli_num_rows($res)>0){
			echo "yes";
		}
		else{
			echo "no";
		}
		exit();

	}
	if(isset($_POST['btn-login'])){
		$user_email = $_POST['user_email'];
		$user_password = $_POST['password'];

		$sql = mysqli_query($con,"SELECT * from tbl_users where  user_email=\"$user_email\" and user_password=\"$user_password\"");
		if (mysqli_num_rows($sql)) {

			$_SESSION['user_email']=$user_email;

			header('location:index.php');
		}else{
			header('location:log_in.php');
		}
	}

?>