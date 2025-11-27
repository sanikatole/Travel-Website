<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>home</title>

	<!-- swiper css link -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

	<!-- custom css file link -->
	<link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts -->

<section class="header">
	<a href="home.php" class="logo">travel.</a>

	<nav class="navbar">
		<a href ="home.php">home</a>
		<a href ="about.php">about</a>
		<a href ="package.php">package</a>
		<a href ="book.php">book</a>
   </nav> 	

  <div id="menu-btn" class="fas fa-bars"></div>


</section>



<!-- header section ends -->

<!-- home section starts -->
<section class="home">
	<div class="swiper home-slider">
		<div class="swiper-wrapper">
			<div class="swiper-slide slide" style="background: url(images/home-slide-1.jpg) no-repeat">
				<div class="content">
					<span>explore, discover, travel </span>
					<h3>travel arround the world</h3>
					<a href="package.php" class="btn">discover more</a>
				</div>
			</div>

			<div class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat">
				<div class="content">
					<span>explore, discover, travel </span>
					<h3>discover the world</h3>
					<a href="package.php" class="btn">discover more</a>
				</div>
			</div>

			<div class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat">
				<div class="content">
					<span>explore, discover, travel </span>
					<h3>make your tour worthwhile</h3>
					<a href="package.php" class="btn">discover more</a>
				</div>
			</div>

		</div>

			<div class="swiper-button-next"></div>
		    <div class="swiper-button-prev"></div>

	</div>
</section>

<!-- home section ends -->


<!-- services sector starts -->


<section class="services">

<h1 class="heading-title"> our services </h1> <br><br>

<div class="box-container">
	<div class="box">
		<img src="images/icon-1.png" alt="">
		<h3>adventure</h3>
	</div>	

	<div class="box">
		<img src="images/icon-2.png" alt="">
		<h3>tour guide</h3>
	</div>	

	<div class="box">
		<img src="images/icon-3.png" alt="">
		<h3>trekking</h3>
	</div>	

	<div class="box">
		<img src="images/icon-4.png" alt="">
		<h3>camp fire</h3>
	</div>	

   <div class="box">
		<img src="images/icon-5.png" alt="">
		<h3>off road</h3>
	</div>
   
   <div class="box">
		<img src="images/icon-6.png" alt="">
		<h3>camping</h3>
	</div>
</div>

</section>

<!-- services sector ends -->

<!-- home about section starts -->
<section class="home-about">
	<div class="image">
		<img src="images/about-img.jpg" alt="">
	</div>	

	<div class="content">
		<h3>about us</h3>
		<h3>we believe that traveling is not just about visiting new places; it's about creating unforgettable experiences and connecting with different cultures. Our passion for exploration and adventure led us to create this platform, where we aim to inspire and empower travelers from all walks of life.</h3>
        <a href="about.php" class="btn">read more</a>
	</div>	
</section>	
<!-- home about section ends -->

<!-- home packages section starts -->

<section class="home-packages">
	<h1 class="heading-title"> our packages </h1>

	<div class="box-container">
		<div class="box">
			<div class="image">
				<img src="images/img-1.jpg" alt="">
			</div>
			<div class="content">
				<h3>Goa</h3>
				<p>Goa is not just a destination for vacations; it's a sanctuary for the soul, where every moment is a celebration of life!</p>
				<a href="book.php" class="btn">book now</a>
			</div>
		</div>
        <div class="box">
			<div class="image">
				<img src="images/img-2.jpg" alt="">
			</div>
			<div class="content">
				<h3>Italy</h3>
				<p>Italy is a country where art and beauty are part of everyday life, where history and tradition coexist with modernity and innovation!</p>
				<a href="book.php" class="btn">book now</a>
			</div>
		</div>
		<div class="box">
			<div class="image">
				<img src="images/img-3.jpg" alt="">
			</div>
			<div class="content">
				<h3>Rajasthan</h3>
				<p>In Rajasthan,every sunrise is a spectacle, every festival ariot of colors, and every meal a feast fit for a king and the timeless charm,majesty!</p>
				<a href="book.php" class="btn">book now</a>
			</div>
		</div>
	</div>

 <div class="load-more"> <a href="package.php" class="btn">load more</a></div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts -->

<section class="home-offer">
	<div class="content">
		<h3>upto 50% off</h3>
		<p>"Unlock your next adventure with up to 50% off! Explore the world without breaking the bank.Book your dream gateway today!"</p>
		<a href="book.php" class="btn">book now</a>
	</div>	
</section>

<!-- home offer ends -->





<!-- footer section starts -->

<section class="footer">
	
<div class="box-container">

	<div class="box">
		<h3>quick links</h3>
	        <a href ="home.php"><i class="fas fa-angle-right"></i> home</a>
			<a href ="about.php"><i class="fas fa-angle-right"></i> about</a>
			<a href ="package.php"><i class="fas fa-angle-right"></i> package</a>
			<a href ="book.php"><i class="fas fa-angle-right"></i> book</a>
	</div>	

	<div class="box">
		<h3>extra links</h3>
	        <a href ="#"><i class="fas fa-angle-right"></i> ask questions</a>
			<a href ="#"><i class="fas fa-angle-right"></i> about us</a>
			<a href ="#"><i class="fas fa-angle-right"></i> privacy policy</a>
		    <a href ="#"><i class="fas fa-angle-right"></i> terms of use</a>
	</div>	

	<div class="box">
		<h3>contact info</h3>
	        <a href ="#"><i class="fas fa-phone"></i> +123-456-789 </a>
	        <a href ="#"><i class="fas fa-phone"></i> +111-222-333</a>
	        <a href ="#"><i class="fas fa-envelope"></i> sanika@gmail.com </a>
	        <a href ="#"><i class="fas fa-map"></i> mumbai, india - 400104 </a>		
	</div>	

	<div class="box">
		<h3>follow us</h3>
		<a href="#"> <i class ="fab fa-facebook-f"></i> facebook </a>
		<a href="#"> <i class ="fab fa-twitter"></i> twitter </a>
		<a href="#"> <i class ="fab fa-instagram"></i> instagram </a>
		<a href="#"> <i class ="fab fa-linkedin"></i> linkedin </a>		
	</div>
</div>

<div class="credit"> created by <span>mrs. web designer</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->


<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>