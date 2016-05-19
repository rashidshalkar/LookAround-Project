<!DOCTYPE html>
<html>
<head>
	<title>
		ShakeIt
	</title>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery-2.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="video">
		<video autoplay loop muted class="bgvideo" id="bgvideo">
			<source src="video/1.mp4" type="video/mp4">
		</video>
	</div>
	<div class="main">
		<div class="container brd">
		  <h3 class="text-center">Contact</h3>
		  <p class="text-center"><em>We love our clients!</em></p>
		  <div class="row">
		    <div class="col-md-4">
		      <p>Drop a note.</p>
		      <p><span class="glyphicon glyphicon-map-marker"></span>Almaty, KZ</p>
		      <p><span class="glyphicon glyphicon-phone"></span>Phone: +7 775 4023859</p>
		      <p><span class="glyphicon glyphicon-envelope"></span>Email: rashidshalkar13@gmail.com</p> 
		    </div>
		    <div class="col-md-8">
		      <div class="row">
		        <div class="col-sm-6 form-group">
		          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
		        </div>
		        <div class="col-sm-6 form-group">
		          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
		        </div>
		      </div>
		      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="4"></textarea>
		      <div class="row">
		        <div class="col-md-12 form-group" style="margin-top: 20px">
		          <button class="btn btn-success pull-right" type="submit">Send</button>
		        </div>
		      </div> 
		    </div>
		  </div>
	    </div>
	    <div class="container text-bottom">
	      <p class="navbar-text pull-center">&#169; 2016 - Site Built By Rashid Shalkar
	      </p>
    	</div>  
	</div>	
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
