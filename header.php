<?php
	session_start();
	 $conn = mysqli_connect("localhost","root","","web");
	 $count = $_SESSION['user_email'];
     $query = "SELECT * FROM tbl_users WHERE user_email = '$count'";
	 $result = mysqli_query($conn, $query);
	 $row = mysqli_fetch_assoc($result);

?>
<div id="ribbon" class="esi_ribbon"></div>
	<nav class="navbar navbar-default ">
	  	<div class="container-fluid">
	    	<div class="navbar-header">
	     		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>                        
	      		</button>
	      		<a class="navbar-brand" href="index.php">Logo</a>
	    	</div>
	    	<ul class="collapse navbar-collapse nav navbar-nav" id="myNavbar">
			    <li ><a href="index.php">Home</a></li>
			    <li><a href="index.php#about">About</a></li>
			    <li><a href="index.php#news">News</a></li> 
		        <li class="dropdown">
	    	        <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
			        	<span class="caret"></span>
			        </a>
			        <ul class="dropdown-menu">
			            <li><a href="top.php">Top 25</a></li> 
			            <li><a href="services.php">Services</a></li>
			            <li><a href="contacts.php">Contacts</a></li>
			        </ul>
			    </li>
	    	</ul>
	    		
		    <form class="collapse navbar-collapse navbar-form pull-right" id="custom-search-input" action="search.php" method = "post">
                    <div class="input-group">
                        <input type="text" id="search" name="search"class="search-query form-sm" placeholder="Search from site"/>
                        <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary" >
                           <span class=" glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
			</form>
				<ul class="collapse nav navbar-collapse navbar-nav navbar-right pull-right">
		            <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					  <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?= $row['user_name']; ?>&nbsp;<span class="caret"></span></a>
		              <ul class="dropdown-menu">
		              	<?php
		              		if($count == "admin@gmail.com"){?>
		              			<li><a href="admin-part/retrieve.php"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Add Product</a></li>
		              			<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;View Profiles</a></li>
		                		<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
		              		<?php
                            }?>
                        	<?php if($count != "admin@gmail.com"){?>
				                <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;View Profile</a></li>
				                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
				            <?php
                            }?>
		              </ul>
		            </li>
		        </ul>                   
	  	</div>
	</nav>
	