<!DOCTYPE html>
<html lang="en">

	<!--head-->
	<head>
		<meta charset="utf-8">  <!--Character encoding-->
		<meta name="author" content="Yuvraj, Ravinder, Muskan">  <!--author details-->
		<meta name="description" content="Home page of the Retro Website">
		<link rel="stylesheet" href="css/styles.css" type="text/css">
		<link rel="stylesheet" href="css/projectcss.css" type="text/css">
		<link rel="shortcut icon" href="./images/first-fax-machine.png" type="image/x-icon">
		<title>Home</title>
	</head>  <!--end of head-->

	<!--body-->
	<body>

		<header>   <!--header-->

			<section class="header-image">  <!--section-->

				<div class="start">
					<a>+1 905-537-0601</a>  <!--phone number-->
					<a>fax@gmail.com</a>  <!--email-->
				</div>  <!--end of start-->

				<div class="logo">  
					<p>FAX</p>  <!--logo-->
				</div>  <!--end of logo-->

				<div class="top-nav">  <!-- global-nav file linked-->
					<?php
						include("includes/global_nav.php");
					?>
				</div>  <!--end of top-nav-->
				
				<div class="imagetext">  <!-- for text over the image at the top-->
					<p>FAX</P>
					<h1><b>DELIVER YOUR MESSAGES</b></h1>
					<div class="button">  <!-- for the buttons-->
							<!--The below button also include a simple java script code that makes an alert when the user presses read more button-->
							<BUTTON onclick = "alert('You will be redirected to a new tab')" class="active1"><a href="https://en.wikipedia.org/wiki/Fax" target="_blank">READ MORE</a></BUTTON>
							<BUTTON><a href="contact-us.php">CONTACT US</a></BUTTON>
					</div>  <!-- end of button-->
				</div>  <!--end of imagetext-->
			</section>  <!-- end of section header-image-->
		</header>   <!-- end of header-->

		<main>  <!--main-->
			<section class="container">  <!--section container-->
				<div class="para"> <!--div para-->
					<h2>FAX</h2>  <!--second level heading-->
					<figure>  <!--figure-->
					<img src="./images/first-fax-machine.png" alt="first-fax-machine">  <!--image-->
					<figcaption>First Fax Machine</figcaption>  <!--caption for the image-->
				</figure>  <!--end of figure-->
					
				</div>  <!--end of para div-->
			
				<div class="para2">  <!--para 2 div-->
					<h2 class = "head">THE FAX VARIANT</h2>
					<p>Fax (short for facsimile), sometimes called telecopying or telefax (the latter short for telefacsimile), is the
						 telephonic transmission of scanned printed material (both text and images), normally to a telephone number connected 
						 to a printer or other output device. The original document is scanned with a fax machine (or a telecopier), which 
						 processes the contents (text or images) as a single fixed graphic image, converting it into a bitmap, and then 
						 transmitting it through the telephone system in the form of audio-frequency tones. The receiving fax machine interprets 
						 the tones and reconstructs the image, printing a paper copy. Early systems used direct conversions of image darkness 
						 to audio tone in a continuous or analog manner. Since the 1980s, most machines transmit an audio-encoded digital 
						 representation of the page, using data compression to more quickly transmit areas that are all-white or all-black. 
					</p>  <!--para end for the introduction of home page-->
				</div>  <!--end of para2 div-->
			</section>  <!--end of section container-->
			
			<section class="black">  <!--section black-->
				<div class="text">
					Let's Blog
				</div>
				<div class="white">
					<div class="blog">  <!--information about the roles-->
						<p>We please to serve you , if you have any queries then let us know , we are their to help you out with you issue.</p>
						<h5>Yuvraj Jindal</h5>
					</div>
					<div class="blog">
						<p>We dont have any magazines yet, but our logo itself is the sign of our work.</p>
						<h5>Ravinder Singh</h5>
					</div>
					<div class="blog">
						<p>We trust our customers loyality, and they too,we always try to connect with others</p>
						<h5>Muskan Dhingra</h5>
					</div>
				</div><!--end of white div-->
			</section><!--end of section black-->
		</main> <!--end of main-->

		<footer>  <!--footer-->
		
			<br><br><br><br><br><br>

			<p>Copyright & copy2020 All rights reserved &nbsp;&nbsp;&nbsp;
				Fax2016  51 Uxbridge Road, San Francisco W7 3PX  &nbsp;&nbsp;&nbsp; 
				Tel: +1 905-537-0601
			</p>  <!--copyright, address and telephone information-->

			<p>Copyright © 2016 FAX.inc</p>
			<p>Inc. created by Yuvraj Jindal, Ravinder Singh, and Muskan Dhingra</p>

		</footer>  <!--end of the footer-->

	</body>  <!--end of body-->

<!--end of the html file-->	
</html>