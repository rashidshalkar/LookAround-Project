<!DOCTYPE html>
<html>
<head>
	<title>
		ShakeIt
	</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta charset="utf-8">
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery-2.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/bootstrap-social.css" rel="stylesheet" >
</head>
<style type="text/css">
	body{
		background-image: url('img/bg/3.jpg');
		background-position: center center;
		background-repeat: no-repeat;
	    background-size: cover;
	    background-attachment: fixed;
	    /*background-color: lightgray;*/

	}
	.navbar{
	margin-bottom: 0;
	position: relative;
	z-index: 1000;
	width: 100%;
	background: #7CFC00;
	}
	.page-scroll{
	position: relative;
	z-index: 1000;
	margin-top:30px;
	text-align: center;
	}
	.btn-circle-green {
    width: 70px;
    height: 70px;
    margin-right: auto;
    margin-left: auto;
    border: 2px solid #589442;
    border-radius: 50%;
    color: #fff;
    background: rgba(255,255,255,0.1);
	}
	.btn-circle-green:hover,
	.btn-circle-green:focus {
	    outline: 0;
	    color: #fff;
	    
	    background-color: #589442;
	}
	.text-bottom-2{
	position: relative;
	bottom: 0;
	left: 30px;
	margin-top: 20px;
	border-radius: 30px;
	background: rgba(0,0,0,0.8);
	}
	.text-bottom-2 p{
		color: white;
		text-align: center;
	}
</style>
<body>
	<div id="top"></div>
	<?php include 'header.php'; ?>
	
	<div id="tcDest0" id="top"class="tcDest" style="background-image: url('img/lander_cropped_v2.jpg');">
		<div class="headline">
			<div style="font-weight:bold; margin-left:-4px; border-top:5px solid #589442; padding-top:8px;">DISCOVER</div>
			<div style="font-size:39%;">THE TOP 25 DESTINATIONS</div>
			<div style="font-size:71%; font-weight:bold;">IN THE WORLD</div>
			<div style="font-size:230%; line-height:80%; letter-spacing:4px;">2016</div>
			<div class="intro">
			Explore this year's Travelers' Choice Award-winning destinations, based on millions of reviews by travelers. Discover grand cities, exciting trip ideas, and unforgettable sights. Which one will you discover first?
			</div>
		
		<div class="page-scroll">
			<a href="#1" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div id="1"class="col-md-6 tcDest clickable border" style="background-image:url('img/NYC_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">1</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">New York</div>
						<div class="tcCountry">United States</div>
					</div>
				</div>
			</div>
			<div class="col-md-4.9 tcDest clickable border" style="background-image:url('img/SIEM_REAP_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">2</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Siem Reap</div>
						<div class="tcCountry">Cambodia</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 tcDest clickable border" style="background-image:url('img/SYDNEY_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">3</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Sydney</div>
						<div class="tcCountry">Australia</div>
					</div>
				</div>
			</div>
			<div class="col-md-6.1 tcDest clickable border" style="background-image:url('img/DUBAI_cropped_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">4</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Dubai</div>
						<div class="tcCountry">United Arab Emirates</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 tcDest clickable border" style="background-image:url('img/ISTANBUL_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">5</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Istanbul</div>
						<div class="tcCountry">Turkey</div>
					</div>
				</div>
			</div>
			<div class="col-md-5.9 tcDest clickable border" style="background-image:url('img/HANOI_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green btn-circle-green">6</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Hanoi</div>
						<div class="tcCountry">Vietnam</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 tcDest clickable border" style="background-image:url('img/PRAGUE_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">7</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Prague</div>
						<div class="tcCountry">Czech Republic</div>
					</div>
				</div>
			</div>
			<div class="col-md-5.9 tcDest clickable border" style="background-image:url('img/LONDON_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">8</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">London</div>
						<div class="tcCountry">United Kingdom</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7 tcDest clickable border" style="background-image:url('img/ROME_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">9</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Rome</div>
						<div class="tcCountry">Italy</div>
					</div>
				</div>
			</div>
			<div class="col-md-5.9 tcDest clickable border" style="background-image:url('img/BUENES_AIRES_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">10</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Buenes Aires</div>
						<div class="tcCountry">Argentina</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 tcDest clickable border" style="background-image:url('img/Paris_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">11</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Paris</div>
						<div class="tcCountry">France</div>
					</div>
				</div>
			</div>
			<div class="col-md-5.9 tcDest clickable border" style="background-image:url('img/CAPE_TOWN_CENTRAL_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">12</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Cape Town Central</div>
						<div class="tcCountry">South Africa</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 tcDest clickable border" style="background-image:url('img/MARRAKECH_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">13</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Marrakech</div>
						<div class="tcCountry">Morocco</div>
					</div>
				</div>
			</div>
			<div class="col-md-5.9 tcDest clickable border" style="background-image:url('img/ZERMATT_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">14</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Zermatt</div>
						<div class="tcCountry">Switzerland</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7 tcDest clickable border" style="background-image:url('img/BARCELONA_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">15</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Barcelona</div>
						<div class="tcCountry">Spain</div>
					</div>
				</div>
			</div>
			<div class="col-md-5.9 tcDest clickable border" style="background-image:url('img/GOREME_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">16</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Goreme</div>
						<div class="tcCountry">Turkey</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 tcDest clickable border" style="background-image:url('img/UBUD_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">17</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Ubud</div>
						<div class="tcCountry">Indonesia</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 tcDest clickable border" style="background-image:url('img/CUSCO_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">18</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Cusco</div>
						<div class="tcCountry">Peru</div>
					</div>
				</div>
			</div>
			<div class="col-md-3.9 tcDest clickable border" style="background-image:url('img/ST_PETERSBURG_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">19</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">St. Petersburg</div>
						<div class="tcCountry">Russia</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 tcDest clickable border" style="background-image:url('img/BANGKOK_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">20</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Bangkok</div>
						<div class="tcCountry">THailand</div>
					</div>
				</div>
			</div>
			<div class="col-md-5.9 tcDest clickable border" style="background-image:url('img/KATHMANDU_2_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">21</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Kathmandu</div>
						<div class="tcCountry">Nepal</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 tcDest clickable border" style="background-image:url('img/ATHENS_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">22</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Athens</div>
						<div class="tcCountry">Grecee</div>
					</div>
				</div>
			</div>
			<div class="col-md-5.9 tcDest clickable border" style="background-image:url('img/BUDAPEST_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">23</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Budapest</div>
						<div class="tcCountry">Hungary</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7 tcDest clickable border" style="background-image:url('img/QUEENSTOWN_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">24</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Qweenstown</div>
						<div class="tcCountry">New Zealand</div>
					</div>
				</div>
			</div>
			<div class="col-md-5.9 tcDest clickable border" style="background-image:url('img/HONG_KONG_v2.jpg')">
				<div class="tcBasicInfo">
					<div class="">
						<div class="tcRank btn-circle-green">25</div>	
					</div>
					<div class="tcWinner">
						<div class="tcCity">Hong Kong</div>
						<div class="tcCountry">China</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="page-scroll" style=>
						<a href="#top" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div> 
	<div class="container text-bottom-2">
	      <p class="navbar-text pull-center">&#169; 2016 - Site Built By Rashid Shalkar
	      </p>
    </div> 
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>
</body>
</html>