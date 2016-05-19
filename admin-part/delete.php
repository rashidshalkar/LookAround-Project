<?php 
	$con = mysqli_connect("localhost","root","","web");
	$id = 0;
	
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	
	if ( isset($_POST['submit'])) {
		// keep track post values
		$id = $_POST['id'];
		// echo "$id";
		// exit();
		// delete data
		$sql = "DELETE FROM products  WHERE id = '$id'";
		$con->query($sql);
		header("Location: retrieve.php");
	} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="../css/bootstrap.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Delete a Product</h3>
		    		</div>
		    		
	    			<form class="form-horizontal" action="delete.php?id=<?php echo $id?>" method="post">
	    			  <input type="hidden" name="id" value="<?php echo $id;?> "/>
					  <p class="alert alert-error">Are you sure to delete ?</p>
					  <div class="form-actions">
						  <button type="submit" class="btn btn-danger" name='submit'>Yes</button>
						  <a class="btn" href="retrieve.php">No</a>
						</div>
					</form>
				</div>		
    </div> <!-- /container -->
  </body>
</html>