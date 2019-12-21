<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Flat Theme</title>
	<!-- File Normalize Css-->
	<link rel="stylesheet" href="css/normalize.css">
	<!-- File Fontawesome Css-->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- File Main Css-->
	<link rel="stylesheet" href="css/main.css">
	<!-- Internet Explorer-->
	<meta http-equiv=”x-ua-compatible” content=”IE=edge” />
	<!-- Icon -->
	<link rel="icon" href="icon.png">
</head>

<body background="1.jpg">
	<!-- Start div wrapper -->
	<div id="wrapper">

		<!-- Start header -->
		<header>
			<div class="container">
				<div class="logo">
					<h2 style="font-family: 'Lato', sans-serif;"><img src="icon.png" height="50px" width="50px"><img src="2.png" height="50px" width="300px"></h2>
				</div>

				<nav>
					<ul>
						<li><a href="index.html">Home </a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="aboutus.html">About Us</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<!-- Ended header -->



		<form id="form" class="topBefore">
			<h3 style="color:white">DON’T BE SHY. SAY HELLO!</h3><br>
			<p style="color:white;"> We're happy to answer any questions you have or provide you with an estimate.
				Just send us a mesaage in the form bellow with any questions you may have: </p> <br> <br>

			<input id="name" type="text" placeholder="NAME">
			<input id="email" type="text" placeholder="E-MAIL">
			<textarea id="message" type="text" placeholder="MESSAGE"></textarea>
			<input id="submit" type="submit" value="GO!">

		</form>


	<?php include('htmlBodyParts/footer.php'); ?>
