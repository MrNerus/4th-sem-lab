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
		<h1>About Us</h1>
	</section>
<!--------------------Content----------------------->
<section class="about-us">
	<div class="row">
		<div class="about-col">
			<h1>We are the world's largest IT education provider.</h1>
			<p>We of the Eduford are the world's No.1 ranked IT education provider and we have been in this spot since 2012 when we recieved the award for best educational environment in the same year. After that we have recieved all the top award and have mentained our status and growth throught the years.</p>
			<a href="course.html" class="hero-btn red-btn">EXPLORE NOW</a>
		</div>
		<div class="about-col">
			<img src="img/about.jpg">
		</div>
	</div>
</section>
<!---------------------Footer----------------------->
<section class="footer">
	<h4>About Us</h4>
	<p>"We of the AIMS will guide you in your journy to be the best you can be.<br>We will support you in every way possible for a educational organazation".</p>
	<div class="icons">
		<i class="fa fa-facebook"></i>
		<i class="fa fa-twitter"></i>
		<i class="fa fa-instagram"></i>
		<i class="fa fa-linkedin"></i>
	</div>
	<p><i class="fa fa-copyright"></i>Copyright, 2022, AIMS, Roshan Gautam.</p>
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