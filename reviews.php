<!DOCTYPE html>
<html lang="en">

	<!--head-->
	<head>
		<meta charset="utf-8">  <!--Character encoding-->
		<meta name="author" content="Yuvraj, Ravinder, Muskan">  <!--author details-->
		<meta name="description" content="Review page of the Retro Website"> <!--page description-->
		<link rel="stylesheet" href="css/styles.css" type="text/css">   <!--external css file for basic structure-->
		<link rel="stylesheet" href="css/review.css" type="text/css">  <!--external css for body main layout-->
		<link rel="shortcut icon" href="./images/first-fax-machine.png" type="image/x-icon">  <!--Icon of the webpage-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
		<title>Reviews</title>   <!--title of the page-->
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
	
		<main> <!--main-->
			
			<!--below are the customer reviews-->
			<section class="customer-reviews">  <!--section customer reviews-->
				<h2>Customer Reviews</h2>  <!--second level heading-->
			
				<!-- First customer review -->
				<div class="review">
				<p>
					"The fax machine is so reliable and easy to use. It has made sending documents a breeze!"
				</p>
				<p>- John Smith</p>
				</div>
			
				<!-- Second customer review -->
				<div class="review">
				<p>
					"I've been using this fax machine for years, and it never disappoints. Highly recommended!"
				</p>
				<p>- Jane Doe</p>
				</div>
			
				<!-- Third customer review -->
				<div class="review">
				<p>
					"The fax quality is excellent, and the customer support team is very helpful."
				</p>
				<p>- Michael Johnson</p>
				</div>
			
				<!-- Fourth customer review -->
				<div class="review">
				<p>
					"This fax machine has improved our office efficiency tenfold. Thank you, Fax Inc.!"
				</p>
				<p>- Emily Williams</p>
				</div>
			
				<!-- Fifth customer review -->
				<div class="review">
				<p>
					"I love the sleek design of this fax machine. It's a perfect fit for our modern office."
				</p>
				<p>- David Lee</p>
				</div>
			</section>  <!--end of section customer review-->

			<!--section for customer feedback form-->
			<section class="feedback-form">  
				<h2>Customer Feedback</h2> <!--second level heading-->
				<!--form for customer feedback-->
				<form  id="customer_feedback_form" action="feedback.php" method="get">
					<div>
						<label for="name">Name:</label>  <!--for name-->
						<input type="text" id="name" name="name" required>
					</div>

					<div>
						<label for="phone">Phone No:</label>  <!--for phone number-->
						<input type="number" id="phone" name="phone" required>
					</div>

					<div>
						<label for="email">Email:</label>  <!--for email-->
						<input type="email" id="email" name="email" placeholder="name@domain.com" required>
					</div>

					<div>
						<label for="feedback">Feedback:</label>  <!--for feedback writing area-->
						<textarea id="feedback" name="feedback" rows="4" placeholder="Please Provide Your Review" required></textarea>
					</div>

					<!--Below javascript code makes alert when submitting the feedback form-->
					<button onclick = "alert('The Feedback form could not be Changed Once Submitted')" type="submit">Submit Feedback</button>  <!--submit button-->
				</form>  <!--end of form-->
			</section>
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