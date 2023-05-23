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
		<h1>Our Certificate & Online Programs For 2021</h1>
	</section>
<!---------------------Content---------------------->
<section class="blog-content">
	<div class="row">
		<div class="blog-left">
			<img src="img/certificate.jpg">
			<h2>Our Certificate & Online Programs For 2021</h2>
			<p>We provide an internationally recognized honors degree that is applicaple all around the world and is prioritized above all other degrees provide by other organizations.</p>
			<br>
			<p>This degree is given priority and you will be full of job offers and other opportunities all around the world by top organizations. Your will be an recognized and an Edufordian and will be given opportinities and respect.</p>
			<br>
			<p>We of the Eduford always try to keep contacts with top companies and peoples so that we can give out student needed exposure and we have succeed in thet matter soo much that we can gurantee 100% placement for our students even in this era on online jobs and covid.</p>
			<br>
			<p>We have provided degrees to students via a graduation ceremoy till now but in this onlie era we have performed this tast via ZOOM and for the equivalent facilities given to the student in farewell ceremony here we invite people on the top and they select quite a few outstanding students on the spot. So, work hard and have fun.</p>
			<div class="comment-box">
				<h3>Leave a Comment!</h3>
				<form class="comment-form" action="feed.php" method="post">
					<input type="text" name="name" placeholder="Enter Name" required>
					<input type="email" name="email" placeholder="Enter Email" required>
					<textarea rows="5" name="comment" placeholder="Your Feedback"></textarea>
					<button type="submit" class="hero-btn red-btn">POST</button>
				</form>
			</div>
		</div>
		<div class="blog-right">
			<h3>Post Catagories</h3>
			<div>
				<span>Networking</span>
				<span>18</span>
			</div>
			<div>
				<span>Machine Learning</span>
				<span>22</span>
			</div>
			<div>
				<span>Programing</span>
				<span>36</span>
			</div>
			<div>
				<span>Database</span>
				<span>40</span>
			</div>
			<div>
				<span>Web Design</span>
				<span>49</span>
			</div>
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
	<p><i class="fa fa-copyright"></i>Copyright, 2022, Eduford,Roshan Gautam.</p>
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