<!DOCTYPE html>
<html lang="en">

	<!--head-->
	<head>
		<meta charset="utf-8">  <!--Character encoding-->
		<meta name="author" content="Yuvraj, Ravinder, Muskan">  <!--author details-->
		<meta name="description" content="About page of the Retro Website">  <!--page description-->
		<link rel="stylesheet" href="css/styles.css" type="text/css">  <!--external css file for basic structure-->
		<link rel="stylesheet" href="css/about us.css" type="text/css">  <!--external css for body main layout-->
		<link rel="shortcut icon" href="./images/first-fax-machine.png" type="image/x-icon">  <!--Icon of the webpage-->
		<title>About us</title>  <!--title of the page-->
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

			<section class="about-text">  <!-- section about-text-->
				<h1 class="c-about">About Us</h1>
				<div class="box">  <!--content in about us page-->
					<div class="area">
						</p>Welcome to Fax , your one-stop destination for all things fax-related! We are a dedicated team of 
						fax machine enthusiasts, passionate about bridging the gap between modern communication technology and 
						the timeless reliability of faxing. With our expertise and commitment to customer satisfaction, 
						we aim to be your go-to resource for all fax machine needs.</p>
					</div>
					<div class="area">
						<p>At Your Fax Machine Connection, our mission is simple: to preserve the efficiency and convenience of faxing in today's 
							fast-paced digital world. While email and messaging apps have taken center stage, faxing remains an essential 
							communication tool for businesses, professionals, and individuals alike. Our goal is to keep faxing accessible, 
							easy-to-use, and relevant for everyone, while also embracing the latest advancements in fax technology.</p>

							<p>As we look ahead, we envision a future where fax machines continue to hold their place as a dependable and secure
								communication tool. Our dedication to innovation, customer-centricity, and promoting the benefits of faxing will 
								guide us on this journey.</p>
					</div>
				</div>  <!--end of box-->
			</section>  <!-- end of section about text -->

			<section class="what-we-do">  <!--section what we do -->
				<div class="photo">  <!-- picture of latest fax machine-->
					<blockquote cite="https://m.media-amazon.com/images/I/51UM8C1LjyL._SL1500_.jpg">  <!-- image address -->
					<img class="aa" src="images/about_us.jpg"  alt="modern-fax-machine">
					</blockquote>
				</div>

				<!-- given below are the text which is embedded in the box next to the image-->
				<div class="text">
					<div class="top">
						What FAX Do
					</div>  <!-- end of tope -->

					<div class="icon-text">
						<div class="first">
							<h3>Sending Faxes</h3>
							<p>Help Your Send</p>
						</div>  <!--end of first-->

						<div class="first">
							<h3>Receiving Faxes</h3>
							<p>Physically Possible</p>
						</div>  <!--end of first-->
					</div>

					<div class="icon-text">
						<div class="first">
							<h3>Copying</h3>
							<p>Give better look</p>
						</div>  <!--end of first-->

						<div class="first">
							<h3>Scanning</h3>
							<p>Get creative snaps</p>
						</div>  <!--end of first-->
					
					</div>

					<div class="icon-text">
						<div class="first">
							<h3>Memory Storage</h3>
							<p>Promote your project</p>
						</div>  <!--end of first-->

						<div class="first">
							<h3>Speed Dialing</h3>
							<p>Fast & Friendly</p>
						</div>  <!--end of first-->

					</div>  <!--end of icon-text-->
				</div>  <!-- end of ttext-->
			</section>  <!--end of section what we do -->

			<hr>

			<div class="regard"> <!--regards-->
				REGARDS FROM:
			</div>

			<section class="regards-from">  <!--section regards-from-->
				<div class="box1">
					
					<div class="row">
						<img class="round" src="images/inventor.jpeg" alt="alexander-bain-img">  <!--inventor Imange-->
						<div class="round-text">
							<h3>Alexander Bain</h3>  <!--name of inventor-->
							<h3 class="underline">Founder</h3>  <!--designation-->
							<p>With a passion to deleve into all aspects of design, and contributed the World with a marvellous discovery. 
								As an inventor, he was known for his contributions to the scientific method of psychology. 
							</p>  <!--some information about inventor-->
						</div>  <!--end of round-text-->
					</div>  <!--end of row-->
				</div>  <!--end of box1-->
			</section>  <!--end of section regards-from-->
		</main>  <!--end of main-->

		<footer>  <!--footer-->
		
				<br><br><br><br><br><br>

					<p>Copyright & copy2020 All rights reserved &nbsp;&nbsp;&nbsp;
						Fax2016  51 Uxbridge Road, San Francisco W7 3PX  &nbsp;&nbsp;&nbsp; 
						Tel: +1 905-537-0601
					</p>  <!--copyright, address and telephone information-->

					<p>Copyright © 2016 FAX.inc</p>
					<p>Inc. created by Yuvraj Jindal, Ravinder Singh, and Muskan Dhingra</p>
		
		</footer> <!--ened of footer-->

	</body>  <!--end of body-->
	
<!--end of html file-->
</html>