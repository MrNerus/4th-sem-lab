<!-- trying git fork -->
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
    
	<section class="header">
		<nav>
			<a href="index.php"><img src="img/logo.png"></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<div >
                        <?php include('components/menu.php'); ?>
               </div>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
		<div class="text-box">
			<h1>World's Largest IT Education Provider</h1>
			<p>Welcome to Eduford!! <br>We are a great place to be in for Learning and Inovation.</p>
			<a href="contact.php" class="hero-btn">Visit Us</a>
		</div>
	</section>
<!---------------------Course----------------------->
<section class="course">
	<h1>Courses We Offer</h1>
	<p>The courses we offer are:<br>Networking, Machine Learning, Programming, Database, Web Design.</p>
	<div class="row">
		<div class="course-col">
			<h3>Beginner</h3>
			<p>Providing basic courses for Programming, Networking and Database.</p>
		</div>
		<div class="course-col">
			<h3>Intermediate</h3>
			<p>Providing advanced courses for Programming, Networking and Database along with basic course for Web Design.</p>
		</div>
		<div class="course-col">
			<h3>Advanced</h3>
			<p>Providing advanced courses for Programming, Networking, Database and Web Design along with complete academic course on Machine Learning.</p>
		</div>
	</div>
</section>
<!---------------------Campus----------------------->
<section class="campus">
	<h1>Our Global Campuses</h1>
	<p>These are our global campuses.</p>
	<div class="row">
		<div class="campus-col">
			<img src="img/london.png">
			<div class="layer">
				<h3>LONDON</h3>
			</div>
		</div>
		<div class="campus-col">
			<img src="img/newyork.png">
			<div class="layer">
				<h3>NEW YORK</h3>
			</div>
		</div>
		<div class="campus-col">
			<img src="img/washington.png">
			<div class="layer">
				<h3>WASHINGTON</h3>
			</div>
		</div>
	</div>
</section>
<!-------------------Facilities--------------------->
<section class="facilities">
	<h1>Our Facilities</h1>
	<p>These are the Facilities that we provide here.</p>
	<div class="row">
		<div class="facilities-col">
			<img src="img/library.png">
			<h3>World Class Library</h3>
			<p>Here, we provide books and other learning resources to our students through this world class library.</p>
		</div>
		<div class="facilities-col">
			<img src="img/basketball.png">
			<h3>Large PLay Ground</h3>
			<p>Here, we provide games and other ECA's to our students through this large play ground.</p>
		</div>
		<div class="facilities-col">
			<img src="img/cafeteria.png">
			<h3>Tasty & Healthy Food</h3>
			<p>Here, we provide tasty and healthy food to our students through this cafeteria.</p>
		</div>
	</div>
</section>
<!-----------------Testimonials---------------------->
<section class="testimonials">
	<h1>What our Student says?</h1>
	<p>These are some reviews from our Alumnus!!</p>
	<div class="row">
		<div class="testimonials-col">
			<img src="img/user1.jpg">
			<div>
				<p>Hi, I am Emma Watson, I completed my advanced level course in 2018 and it was fantastic. The learnig environment was good and the exposure I got during and after passing were excellent and I am very happy that I joined this organization.</p>
				<h3>Emma Watson, Alumnus, 2018</h3>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
			</div>
		</div>
		<div class="testimonials-col">
			<img src="img/user2.jpg">
			<div>
				<p>Hi, I am Harry Poter, I completed my advanced level course in 2021 and it was fantastic. As the hole world was suffering during covid-19 the organization was quick to adapt to the situation at hand and we did ot suffer form any time loss.</p>
				<h3>Harry Potter, Alumnus, 2021</h3>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
		</div>
	</div>
</section>
<!-----------------Call to Action------------------->
<section class="cta">
	<h1>Enroll For Our Various Online Courses,<br>Anywhere From The World</h1>
	<a href="contact.php" class="hero-btn">CONTACT US</a>
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
		navLinks.styl
		+e.right = "0";
	}
	function hideMenu(){
		navLinks.style.right = "-200px";
	}
</script>
</body>
</html>
