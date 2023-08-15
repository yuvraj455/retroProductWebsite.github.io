<!DOCTYPE html>
<html lang="en">

	<!--head-->
	<head>
		<meta charset="utf-8">  <!--Character encoding-->
		<meta name="author" content="Yuvraj, Ravinder, Muskan">  <!--author details-->
		<meta name="description" content="Corporate information page of the Retro Website">  <!--page description-->
		<link rel="stylesheet" href="css/styles.css" type="text/css">  <!--external css file for basic structure-->
		<link rel="stylesheet" href="css/corporate-info.css" type="text/css">  <!--external css for body main layout-->
		<link rel="shortcut icon" href="./images/first-fax-machine.png" type="image/x-icon">  <!--Icon of the webpage-->
		<title>Corporate Information</title>  <!--title of the page-->
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
			<section class="all">  <!--section all-->
				
					<div class="about-me">  <!--about-me-->
						<h3 class="hhead">Who We Are</h3>  <!--third level heading-->
						<p class="me-middle">Since our beginning in 1962, we've been on the forefront of workplace innovation. 
							Back then, that meant creating the first office fax machine, enabling people to work smarter, better 
							and faster than ever before. Today, we're empowering digital workplaces, which means connecting people 
							to information, faster and more conveniently than ever before. We'll help you to improve employee 
							productivity, better serve your customers, and grow your business. As for tomorrow, that vision is already 
							taking shape in our minds and labs. And as digital workplaces continue to change the way we work, our 
							imagination will continue to help you work smarter.
						</p>  <!--end of para-->
					</div><!--end of about-me-->

					<div class="leadership">  <!--leadership-->
						<h3 class="hhead">Leadership</h3>  <!--thirs level heading-->
						<div class="img-text">  <!--image with text-->
							<img class="cc" src="images/Alexander_Bain.jpg" width="220px" height="170px" alt="latest img">
							<h3 class="one">Alexander Bain</h3>  
							<p class="two">FOUNDER</p>
							<p>As the founder of the Fax and the Fax machine, Bain was responsible for the overall growth of the
								company. Bain leads the company with a dedicated spirit and great passion towards
								building a poweful empire.
							</p>  <!--end of para-->
						</div><!--end of image text-->

						<div class="img-text">
							<img class="cc" src="images/President.jpg" width="220px" height="170px" alt="latest img">
							<h3 class="one">Mike Fast</h3>
							<p class="two">President & CEO</p>
							<p>In this role, he has overall responsibility for the leadership of Comapany’s Canadian operations.  
								Mike leads the Canadian team in their mission to Empower Digital Workplaces. 
							</p>  <!--end of para-->
						</div>  <!--end of image text-->

						<div class="img-text">
							<img class="cc" src="images/vice_President.jpg" width="220px" height="170px" alt="latest img">
							<h3 class="one">Julian Jugmohan</h3>
							<p class="two">Vice President & Finance</p>
							<p>As Company's executive Finance leader, Julian oversees Financial Planning and Analysis, Sales Compensation; 
								Corporate and Sales Tax; Treasury; Accounting; SOX; Policy Design, and Administration.
							</p>  <!--end of para-->
						</div>  <!--end of image text-->
					</div>  <!--end of leadership div-->
			</section>  <!--end of section all-->
		</main>  <!--end of main-->
	
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