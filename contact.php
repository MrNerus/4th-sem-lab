<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>Eduford-World's Largest IT Education Provider</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://fonts.gstatic.com/css2? family=Poppins:wght@100;200;300;400;600;700&display=swap">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="sub-header">
		<nav>
			<a href="index.html"><img src="img/logo.png"></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<div>
                        <?php include('components/menu.php'); ?>
                    </div>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
		<h1>Contact Us</h1>
	</section>
<!-------------------Contact Us--------------------->
<section class="location">
	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.8141374939573!2d85.31732961539343!3d27.692138832766354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b19295555f%3A0xabfe5f4b310f97de!2sThe%20British%20College%2C%20Kathmandu!5e0!3m2!1sen!2snp!4v1625581067558!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.6629659292703!2d85.32252260952286!3d27.66589742722197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19da41da6bc3%3A0xa10f47e6b63b6aa6!2sAims%20international%20college!5e0!3m2!1sen!2snp!4v1681306939549!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section class="contact-us">
	<div class="row">
		<div class="contact-col">
			<div>
				<i class="fa fa-home"></i>
				<span>
					<h5>XYZ Road, ABC Building</h5>
					<p>Lagankhel,Lalitpur , Nepal</p>
				</span>
			</div>
			<div>
				<i class="fa fa-phone"></i>
				<span>
					<h5>123456789</h5>
					<p>Monday - Friday, 9AM - 4PM</p>
				</span>
			</div>
			<div>
				<i class="fa fa-envelope-o"></i>
				<span>
					<h5>info@eduford.com</h5>
					<p>Email for any Queries</p>
				</span>
			</div>
		</div>
		<div class="contact-col">
			<form action="usercon.php" method="post">
				<input name="name" type="text" placeholder ="Enter your Name" required>
				<input name="email" type="email" placeholder="Enter your Email" required>
				<input name="subject" type="text" placeholder="Enter your Subject" required>
				<textarea name="comment" rows="8" placeholder="Message" required></textarea>
				<button type="submit" class="hero-btn red-btn">SEND</button>
			</form>
		</div>
	</div>
</section>
<!---------------------Footer----------------------->
<section class="footer">
	<h4>About Us</h4>
	<p>"We of the Eduford will guide you in your journy to be the best you can be.<br>We will support you in every way possible for a educational organazation".</p>
	<div class="icons">
		<i class="fa fa-facebook"></i>
		<i class="fa fa-twitter"></i>
		<i class="fa fa-instagram"></i>
		<i class="fa fa-linkedin"></i>
	</div>
	<p><i class="fa fa-copyright"></i>Copyright, 2021, Eduford, Roshan Gautam.</p>
</section>
<!------------JavaScript for Toggle Menu------------>
<script type="text/javascript">
	var navLinks = document.getElementById("navLinks");
	function showMenu(){
		navLinks.style.right = "0";
	}
	function hideMenu(){
		navLinks.style.right = "-200px";
	}
</script>
</body>
</html>