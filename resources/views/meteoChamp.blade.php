<!DOCTYPE html>
<html lang="en">
<head>
	<title>AGRIDEM</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
    <link rel="stylesheet" href="css/style.css"/>



	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body style="height:100vh; overflow:hidden">
	<!-- Page Preloder -->
	{{--  <div id="preloder">
		<div class="loader">
            <p>AGRIDEM</p>
			<h2>Loading.....</h2>
		</div>
	</div>  --}}


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<h3>AGRIDEM</h3>
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li class="active"><a href="home.html">Home</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#contact">Contact</a></li>
				<li><a href="">Connexion</a></li>
			</ul>
		</nav>
	</header>
    <!-- Header section end -->


    <!-- services section end -->
    <div class="text-center" style="    margin-top: 10rem;" >
            <img class="p-3" src="https://www.team-mediaportal.com/wiki/download/attachments/10453429/WWLiteScreenshot.png?version=1&modificationDate=1458743044000&api=v2" alt="" style="heigth=25vh!important;">
        <h3 class="p-3">Quelles données voulez-vous consulter ?</h3>
        <a href="/irrigation" type="button" class="btn btn-primary|secondary|success|danger|warning|info|light|dark|link-outline my-3 mx-5">Irrigation</a>
        <a href="/irrigation" type="button" class="btn btn-primary|secondary|success|danger|warning|info|light|dark|link-outline my-3 mx-5">Soins de la culture</a>
        {{--  <button type="button" class="btn btn-primary|secondary|success|danger|warning|info|light|dark|link-outline my-3 mx-5">Soins de la culture</button>  --}}
</div>

	<!-- Footer section -->
	<footer class="footer-section">
		<h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">agridem</a></h2>
	</footer>
	<!-- Footer section end -->




	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>

<style>
    .footer-section {
            position:fixed;
            bottom:0;
        }
    </style>
