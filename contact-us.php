<!DOCTYPE html>
<html lang="en">

	<!--head-->
	<head>
		<meta charset="utf-8">  <!--Character encoding-->
		<meta name="author" content="Yuvraj, Ravinder, Muskan">  <!--author details-->
		<meta name="description" content="Review page of the Retro Website">  <!--page description-->
		<link rel="stylesheet" href="css/styles.css" type="text/css">  <!--external css file for basic structure-->
		<link rel="stylesheet" href="css/support_&_contact_us.css" type="text/css">  <!--external css for body main layout-->
		<link rel="shortcut icon" href="./images/first-fax-machine.png" type="image/x-icon">  <!--Icon of the webpage-->
		<title>Contact Us</title>  <!--title of the page-->
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

		<!--information for contacting, address and fax if person have a query-->
			<section class="roww">  <!--section roww-->
				<div class="column">  <!--div column-->
					<h2>Let's have a chat!</h2>
					<br>
					<p><b>Telephone:</b>1-888-345-6789</p>
					<p><b>Fax:</b>1-888-345-6789</p><br>
					<a class="mail">fax@gmail.com</a>
				</div>  <!--end of div column-->
			
				<div class="column">
					<h2>Looking for a Career</h2>
					<br>
					<p><b>Telephone:</b>1-888-345-6789</p>
					<p><b>Fax:</b>1-888-345-6789</p><br>
					<a class="mail">fax@gmail.com</a>
				</div>  <!--end of div column-->
			
				<div class="column">
					<h2>Visit our Location</h2>
					<br>
					<p><b>5 Dedrick Pl.</b>West Caldwell, NJ 07006<br>United States</p><br>  
					<a class="mail" href="https://www.google.com/maps/place/5+Dedrick+Pl,+West+Caldwell,+NJ+07006,+USA/@40.8555463,-74.2923307,17z/data=!3m1!4b1!4m6!3m5!1s0x89c300bf1c305521:0xb7093f548f84c626!8m2!3d40.8556791!4d-74.2923873!16s%2Fg%2F11bw4251fp?entry=ttu" target="_blank">
						Get Directions</a>
				</div>  <!--end of div column-->
			</section>  <!--end of section roww-->
		</main>  <!--end of maain-->

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