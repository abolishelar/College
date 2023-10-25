<!------------------footer-------------------->
<div id="footer" class="footer-section">
<div class="main-section">
<div class="width-25">
<div class="footer-link">
<h2>My Global Campus</h2>
<p>It is no exaggeration that the story of Shri. Duradundeeshwar Vidya Samavardhak Sangh is the story of education in the Sankeshwar area.</p>
<ul class="social-icon">
	<li><a href="#"><i class="fa fa-twitter"></i></a></li>
	<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
	<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div>
</div>
<div class="width-25">
<div class="footer-link second-child">
	<h2>Featured Links</h2>

	<ul class="footer-menu">
		<li><a href="#">Home</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">Administration</a></li>
		<li><a href="#">Academics</a></li>
	</ul>
	<ul class="footer-menu">
		<li><a href="#">Notifications</a></li>
		<li><a href="#">Admission</a></li>
		<li><a href="#">Course Offered</a></li>
		<li><a href="#">Library</a></li>
	</ul>
</div>
</div>
<div class="width-25">
<div class="footer-link footer-contact">
<h2>Contact Info</h2>
<ul class="social-icon">
	<li><a href="#"><i class="fa fa-regular fa-envelope"></i></a><span>E-mail:info@sdvs.com</span></li>
	<li><a href="#"><i class="fa fa-regular fa-whatsapp"></i></a><span>WHATS-APP:+91 -123 456 789</span></li>
	<li><a href="#"><i class="fa fa-light fa-phone"></i></a><span>CONTACT NO.:+91 -123 4567890</span></li>
	<li><a href="#"><i class="fa fa-regular fa-earth"></i></i></a><span>http://www.sdvs.com</span></li>
</ul>
</div>
</div>
<form action="#" method="POST">
	<?php 
	$userEmail = "";
	if(isset($_POST['subscribe'])){
	$userEmail = $_POST['email'];
	if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
		$subject = "Thanks for subscribing us - SDVS SANGHA";
		$message = "Thanks for subscribing to our website. You'll always receive latest updates from us. And we won't share or sell your information to anyone.";
		$sender = "From: sdvs@gmail.com";
	}else{
		?>
		<div class="alert"><?php echo $userEmail ?> is not a valid email</div>
		<?php
	}
	}
	?>
	<div class="width-25">
		<div class="footer-link newsletter">
			<h2>My Global Campus</h2>
			<p>Welcome To The Best Institute</p>
			<input type="text" name="email" placeholder="E-mail" required value="<?php echo $userEmail ?>">
			<button name="subscribe">Subscribe Now</button>
		</div>
	</div>
</div>
</form>
<hr>
<p class="copyright">© 2023 SDVS SANGHA. All rights reserved | Designed by Students</p>
</div>
</body>
</html>
