<!DOCTYPE html>
<html lang="en">

	<!--head-->
	<head>
		<meta charset="utf-8">  <!--Character encoding-->
		<meta name="author" content="Yuvraj, Ravinder, Muskan">  <!--author details-->
		<meta name="description" content="Product page of the Retro Website"> <!--page description-->
		<link rel="stylesheet" href="css/styles.css" type="text/css">   <!--external css file for basic structure-->
		<link rel="stylesheet" href="css/products.css" type="text/css">  <!--external css for body main layout-->
		<link rel="shortcut icon" href="./images/first-fax-machine.png" type="image/x-icon">  <!--Icon of the webpage-->
		<title>Products</title>  <!--title of the page-->
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

		<!--below are products lists from the company from starting 1949 till now-->
		<h1 class="service">OUR PRODUCTS</h1>
		<main>  <!--main-->
			<section class="full">  <!--section class full-->
				<div class="start-it">  <!--div start it-->
					<div class="col-1" >
						<img class="ser-img" src="images/1949-desk-type.jpg" alt="Service" >
					</div>  <!--end of div col1-->
					<div class="col-2">
						<h2>1949 - FAX MODEL</h2>
						<p>After introducing its Desk-Fax prototype in 1949 in eight U.S. cities, Western Union 
							manufactured tens of thousands of the machines into the 1960s, a quantity unequaled 
							by telephone-based fax machines until the 1970s. 
						</p><br><br>
					</div>  <!--end of div col2-->
				</div>  <!--end of div start it-->

				<div class="start-it">
					<div class="col-1">
						<img class="ser-img" src="images/1964.jpeg" alt="Service" > 
					</div>  <!--end of col1-->
					<div class="col-2">
						<h2>1964 - FAX MODEL</h2>
						<p>Xerox expanded into facsimile with its LDX (Long Distance Xerography) system in 1964. 
							Weighing nearly 1100 pounds together, the LDX scanner and printer leased for $800 per 
							month and could transmit 8 pages a minute. 
						</p><br><br>
					</div>  <!--end of div col2-->
				</div>  <!--end of div start it-->

				<div class="start-it">
					<div class="col-1" >
						<img class="ser-img" src="images/1981.jpg" alt="Service" > 
					</div>   <!--end of div col1-->
					<div class="col-2">
						<h2>1981 - FAX MODEL</h2>
						<p>After the CCITT agreement on the Group 3 facsimile standard in 1980, Sharp introduced its 
							FO2000 fax machine, the “HAYAX” in honor of Sharp founder Tokuji Hayakawa, in 1981. The 
							world’s smallest G3 fax machine, it weighed 70 kg and used 175 w to transmit an A4 sheet 
							in 20 seconds on a 9600 bps modem. The HAYAX retailed in the Japanese office machine 
							market for about 3 million yen.
						</p><br><br>
					</div>   <!--end of div col2-->
				</div>  <!--end of div start it-->
			</section>  <!--end of section class full-->

			<section class="right">
				<div class="start-it">
					<div class="col-3" >
						<img class="ser-img" src="images/2001-fax-machine.jpeg" alt="Service" > 
					</div>  <!--end of div col3-->
					<div class="col-4">
						<h2>2001 - FAX MODEL</h2>
						<p>Laser fax having a compact, built-in laser printer, 2001.</p><br><br>
					</div>  <!--end of div col4-->
				</div>  <!--end of div start it-->

				<div class="start-it">
					<div class="col-3" >
						<img class="ser-img" src="images/latest.jpg" alt="Service" > 
					</div>  <!--end of div col3-->
					<div class="col-4">
						<h2>2023 - OFFICE FAX MODEL</h2>
						<p>The latest Fax machine compatible for a greater usabilty in the offices and MNC Corporations.</p><br><br>
					</div>  <!--end of div col4-->
				</div>  <!--end of div start it-->

				<div class="start-it">
					<div class="col-3" >
						<img class="ser-img" src="images/professional-big.JPG" alt="Service" > 
					</div>  <!--end of div col3-->
					<div class="col-4">
						<h2>2023 - Professional FAX MODEL</h2>
						<p>Professional laser fax machine for office use with the Super G3 standard for faster fax transmission.</p><br><br>
					</div>  <!--end of div col4-->
				</div>  <!--end of div start it-->
			</section>  <!--end of section right-->
		</main>  <!--end of main-->
		
		<br><br><br>
    
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