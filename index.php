<!DOCTYPE html>
<html>
<head>
	<title>
		ShakeIt
	</title>
    <meta name="viewport" content="width=device-width, initialscale=1.0">
	<!-- <meta name="viewport" content="width=device-width,initial-scale=1.0"> -->
	<meta charset="utf-8">
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery-2.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/bootstrap-social.css" rel="stylesheet" >
</head>
<body>
	<div id="index1"></div>
	<?php include 'header.php'; ?>

	<div class="video">
		<video autoplay loop muted class="bgvideo" id="index" id="bgvideo">
			<source src="video/5.mp4" type="video/mp4">
		</video>
	</div>

<div class="main">
	<div class="wrapper ">
        <div class="text-center diz">
            <h1>LET’S DISCOVER THE
            <br>WORLD TOGETHER</h1>
        </div>
	    <div class="page-scroll">
			<a href="#about" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
	</div>

	<section id="about" class="section clearfix">
        <div class="container">
            <div class="hotel-title">
                <h4>TOP POPULAR DESTINATIONS</h4>
            </div><!-- end hotel-title -->
            <div class="row">
                <?php
                    $db = mysqli_connect("localhost","root","","web");
                    $query = "SELECT * FROM products ORDER BY id";
                    $result = $db->query($query);
                    $num = $result->num_rows;
                    for ($i=0;$i<$num;$i++){
                        $row = $result->fetch_assoc();?>
                        <div class="col-md-6">   
                    <div class="mini-desti row">
                        <div class="col-md-4">
                            <img src=<?= $row["image"]?> alt="" class="img-responsive" style="width:150px;height:100px">
                        </div><!-- end col -->
                        <div class="col-md-8">
                            <div class="mini-desti-title">
                                <div class="pull-left">
                                    <h6><?= $row["name"]?></h6>
                                    <span class="rating">
                                        <?php 
                                        if( $row["star"]==5){?>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        <?php
                                        }?>
                                        <?php if( $row["star"]==4.5){?>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half"></i>
                                        <?php
                                        }?>
                                        <?php if( $row["star"]==4){?>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        <?php
                                        }?>        
                                    </span><!-- end rating -->
                                </div>
                                <div class="pull-right">
                                    <h6><?= $row["price"]?></h6>
                                </div>  
                                <div class="clearfix"></div>   
                                <div class="mini-desti-desc">
                                    <p><?= $row["description"]?></p>
                                </div>
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end mini-desti -->
                    </div>
                    <?php
                    }
                     ?>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->  

	<div id="myCarousel" class="carousel slide bgpar bg" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	  </ol>
		<div class="carousel-inner" role="listbox">
	    <div class="item active">
			<div class="container text-center padding-40">
				 <h3>AWESOME TRIP!</h3>
		                        <hr>
		                        <p>"Thank you for providing such a wonderful trip experience. We are indebted to you Devy, for life.
		                          We have been able to understand more about Andes people, explore remote highlands and experience such unusual things. 
		                         This is an unforgettable trip with nothing but boastful things to say."</p>
		                        <h6>- DAVID / CEO AGODA -</h6>

			</div>
		</div>
		<div class="item">
	        <div class="container text-center padding-40">
	                        <h3>THANKS YOU TRIPS! THIS IS AMAZING TRAVEL!</h3>
	                        <hr>
	                        <p>"Thanking you so very much for a truly wonderful vacation, an unforgettable experience.
	                         I hope to come on another of your trips and would recommend your trips to “Any” active person - 
	                         anytime; outstanding, fun and action packed..."</p>	
	                        <h6>- JEAN / VENTURA, CALIFORINIA -</h6>
	        </div>
	    </div>            
		</div>
	</div>
	<section class="section section-light clearfix">
        <div class="container">
            <div class="top-destinations clearfix">
                <div class="hotel-title text-center">
                    <h3>BEST DESTINATIONS FOR SUMMER</h3>
                    <p>Every new year brings a host of reasons to choose a destination. 
                    Planning your 2016 summer holiday? Our experts have selected their favourite spots in World's best seaside destinations,
                     each with a fresh reason to visit, from new budget flights, hotels, arts events and festivals to a solar eclipse …</p>
                    <hr>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="clearfix">
                            <div class="post-media clearfix">
                                <a href="#"><img src="img/top/Bali.jpg" style="width:650px;height:350px"alt="" class="img-responsive"></a>
                            </div><!-- end post-media -->

                            <div class="post-title clearfix">
                                <div class="pull-left">
                                    <h5><a href="#">BALI</a> ,INDONESIA</h5>
                                    <h6>290 PLACES</h6>
                                </div>
                                <div class="pull-right">
                                    <h5>FROM <span style="color:#ffc926">$490</span></h5>
                                </div>
                            </div><!-- end ost-title -->
                            <div class="post-content clearfix">
                                <p>Bali is magical. As probably the most famous island in Indonesia, 
                                Bali blends spectacular mountain scenery and beautiful beaches with warm and friendly people, 
                                a vibrant culture and out of this world resorts.</p>
                            </div><!-- end post-content -->
                        </div><!-- end post-wrapper -->
                    </div><!-- end col -->

                    <div class="col-sm-6">
                        <div class="clearfix">
                            <div class="post-media clearfix">
                                <a href="#"><img src="img/top/Bora-Bora2.jpg" style="width:650px;height:350px"alt="" class="img-responsive"></a>
                            </div><!-- end post-media -->

                            <div class="post-title clearfix">
                                <div class="pull-left">
                                    <h5><a href="#">BORA-BORA</a> ,FRENCH POLYNESIA</h5>
                                    <h6>120 PLACES</h6>
                                </div>
                                <div class="pull-right">
                                    <h5>FROM <span style="color:#ffc926">$331</span></h5>
                                </div>
                            </div><!-- end ost-title -->
                            <div class="post-content clearfix">
                                <p>Undoubtedly the most celebrated island in the South Pacific, Bora Bora is French Polynesia's leading lady. 
                                Her beauty is unrivaled and her fame, unwavering. 
                                Bora Bora is one of the few places on earth that everyone hopes to witness in their lifetime — and once you see it,
                                you are forever enamored.</p>
                            </div><!-- end post-content -->
                        </div><!-- end post-wrapper -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end related-hotels -->

            <hr>
            <br>

            <div class="clearfix">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="clearfix">
                            <div class="hotel-wrapper">
                                <div class="post-media">
                                    <a href="#"><img src="img/top/8.jpg" alt=""style="width:400px;height:250px" class="img-responsive"></a>
                                </div><!-- end media -->
                                <div class="post-title clearfix">
                                    <div class="pull-left">
                                        <h5><a href="#" title="">BUCUTI & TARA BEACH</a></h5>
                                    </div><!-- end left -->
                                    <div class="pull-right">
                                        <h6>$550</h6>
                                    </div><!-- end left -->
                                </div><!-- end title -->
                                <span class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span><!-- end rating -->
                                <p>The resort is beautiful, the service outstanding, and the wide, white sand beach is stunning. The staff made us feel special and pampered all week.</p>
                            </div><!-- end hotel-wrapper -->                            
                        </div><!-- end clearfix -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="clearfix">
                            <div class="hotel-wrapper">
                                <div class="post-media">
                                    <a href="#"><img src="img/top/9.jpg" alt="" style="width:400px;height:250px" class="img-responsive"></a>
                                </div><!-- end media -->
                                <div class="post-title clearfix">
                                    <div class="pull-left">
                                        <h5><a href="#" title="">HOTEL RITTA HOPPNER</a></h5>
                                    </div><!-- end left -->
                                    <div class="pull-right">
                                        <h6>$500</h6>
                                    </div><!-- end left -->
                                </div><!-- end title -->
                                <span class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </span><!-- end rating -->
                                <p>Romantic chalets, great staff, A+ service. We were over the moon about our stay</p>
                            </div><!-- end hotel-wrapper -->                            
                        </div><!-- end clearfix -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="clearfix">
                            <div class="hotel-wrapper">
                                <div class="post-media">
                                    <a href="hotel-single.html"><img src="img/top/10.jpg" alt="" style="width:400px;height:250px" class="img-responsive"></a>
                                </div><!-- end media -->
                                <div class="post-title clearfix">
                                    <div class="pull-left">
                                        <h5><a href="#" title="">BELLEVUE SYRENE</a></h5>
                                    </div><!-- end left -->
                                    <div class="pull-right">
                                        <h6>$400</h6>
                                    </div><!-- end left -->
                                </div><!-- end title -->
                                <span class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span><!-- end rating -->
                                <p>Elegant, breezy and relaxing. A beautiful hotel in a stunning location with great amenities and staff.</p>
                            </div><!-- end hotel-wrapper -->                            
                        </div><!-- end clearfix -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </div><!-- end container -->
    </section><!-- end section -->

    <section id="news"class="section fullscreen" style="background-image:url('img/top/7.jpg');">
        <div class="container">
            <div class="home-message text-center">
                <h1>LET’S DISCOVER THE<br>WORLD TOGETHER</h1>
                <a href="#" class="btn btn-success btn-lg border-radius">READ MORE</a>
            </div><!-- end homemessage -->
        </div><!-- end container -->	
        <div class="page-scroll" style="margin-top:0px; padding-bottom: 30px;" id="scroll">
						<a href="#index" id="totop" class="btn btn-circle" style="background-color: rgba(0,0,0,1);">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
    </section><!-- end section -->
	
	<?php include 'footer.php'; ?>
</div>
	<script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>

</body>
</html>
