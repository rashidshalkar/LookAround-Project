<?php 
	$db = mysqli_connect("localhost","root","","web");
	
	if ( isset($_POST['submit'])) {
		// keep track validation errors
		$nameError = null;
		$descriptionError = null;
		$priceError = null;
		$starError = null;
		$imageError = null;

		// keep track post values
		$name = $_POST['name'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$star = $_POST['star'];
		$image = "img/top/".$_FILES['fileName']['name'];

		// validate input
		$valid = true;
		if (empty($name)) {
			$nameError = 'Please enter name';
			$valid = false;
		}
		
		if (empty($description)) {
			$descriptionError = 'Please write description';
			$valid = false;
		}	
		if (empty($price)) {
			$priceError = 'Please enter price';
			$valid = false;
		}
		if (empty($star)) {
			$starError = 'Please enter number';
			$valid = false;
		}
		if (empty($image)) {
			$imageError = 'Please choose image ';
			$valid = false;
		}
		
		// insert data
		if ($valid) {
			if(is_uploaded_file($_FILES['fileName']['tmp_name'])){
		            $location = "../img/top/";
		            if(move_uploaded_file($_FILES['fileName']['tmp_name'], $location.$_FILES['fileName']['name']))
		            {
						$query = "INSERT INTO `products` (`name`,`description`,`price`,`image`,`star`) values ('$name','$description','$price','$image','$star')";
						$db->query($query);
						header("location: retrieve.php");
					}
				}
			}
	}
	$db->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		ShakeIt
	</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta charset="utf-8">
    <script src="../js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<script src="../js/jquery-2.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../style.css">

	<link href="../css/font-awesome.css" rel="stylesheet">
	<link href="../css/bootstrap-social.css" rel="stylesheet" >
</head>
<style type="text/css">
	body{
		background-image: url('../img/bg/3.jpg');
		background-position: center center;
		background-repeat: no-repeat;
	    background-size: cover;
	    background-attachment: fixed;
	}
	.help-inline{
		color: lightgreen;
		font-size: bold;
	}
</style>
<body>
	<div class="main">
		<div class="wrapper">
		    <form class="form-signin" method="post" action="" enctype="multipart/form-data" >       
		    	<h2 class="form-signin-heading" style="color:white"><strong>ADD</strong></h2>
			    <input type="text" id="name" name="name" placeholder="Name of the product" class="form-control" value="<?php echo !empty($name)?$name:'';?>">
			    	<?php if (!empty($nameError)): ?>
					      		<span class="help-inline"><?php echo $nameError;?></span>
					<?php endif; ?>
			    <input type="text" id="description" name="description" placeholder="Description" class="form-control" value="<?php echo !empty($description)?$description:'';?>">
			    	<?php if (!empty($descriptionError)): ?>
					      		<span class="help-inline"><?php echo $descriptionError;?></span>
					<?php endif;?>
	        	<input type="text" id="price" name="price" placeholder="Price" class="form-control" value="<?php echo !empty($price)?$price:'';?>">
					<?php if (!empty($priceError)): ?>
					      		<span class="help-inline"><?php echo $priceError;?></span>
					<?php endif;?>
				<input type="number" id="star" max="5" min="3" name="star" placeholder="Star" class="form-control">
					<?php if (!empty($starError)): ?>
					      		<span class="help-inline"><?php echo $starError;?></span>
					<?php endif;?>
				<div style="position:relative;">
			        <a class='btn btn-primary' href='javascript:;'>
			            Choose File...
			            <input type="file" enctype="multipart/form-data" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="fileName" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
			        </a>
			        <?php if (!empty($imageError)): ?>
					      		<span class="help-inline"><?php echo $imageError;?></span>
					<?php endif;?>
			        &nbsp;
			        <span class='label label-info' id="upload-file-info"></span>
			</div>
			    <button type="submit" class="btn btn-success up" name='submit'><strong>Create</strong></button>
				<a class="btn btn-danger up pull-center" href="retrieve.php">Back</a>
          	</button>
			</form>
		</div>
		<div class="container text-bottom">
	      <p class="navbar-text pull-center">&#169; 2016 - Site Built By Rashid Shalkar
	      </p>
    	</div>  
	</div>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>