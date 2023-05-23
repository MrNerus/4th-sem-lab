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
		<h1>Our Courses</h1>
	</section>
<!---------------------Course----------------------->
<section class="course">
	<h1>Courses We Offer</h1>
	<p>The courses we offer are:<br>Networking, Machine Learning, Programming, Database, Web Design.</p>
	<div class="row">
		<div class="course-col">
			<a href="BSc.html">
				<h3>BSC hons</h3>
			<p>BSc (Hons) in Computing is one of the popular courses in Nepal provided by different international universities in Nepal with affiliation.</p>
			</a>
		</div>
		<div class="course-col">
			<a href="bca.html"><h3>BCA</h3>
			<p>Bachelor of Computer Applications is a practical course focused on the application of technology to develop computer applications.</p>
			</a>
		</div>
		<div class="course-col">
			<h3>BSc.CSIT</h3>
			<p>BSc CSIT is a course developed by Tribhuvan University combining 3 years of Computer Science and 3 years of Information Technology course into a single 4-year course. </p>
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
	<p><i class="fa fa-copyright"></i>Copyright, 2021, Eduford, Abhishek Paneru.</p>
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