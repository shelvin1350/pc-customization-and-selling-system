<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NEOVAL</title>
<link rel="stylesheet" type="text/css" href="styleinternship.css">
  <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body bgcolor="#000000">
	<div class="menu-bar">
		<a href="index.php"><img src="NEOVAL_free-file.png"></a><br>
	<ul>
		<li class="active"><i class="fa-solid fa-house"></i>&nbsp;<a href="index.php">Home</a></li>
		<li><a href="pccustom.php">PC Building</a></i>
		</li>
		<li><a href="shop.php">Products</a>
			
		</li>

		<li><i class="fa-solid fa-phone"></i>&nbsp;<a href="contact.php">Contact Us</a></li>
				<li><a href="logout.php">Logout</a>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>

	</ul>
          

	</div>
	    <section class="main swiper mySwiper">
      <div class="wrapper swiper-wrapper">
        <div class="slide swiper-slide">
          <img src="images/slide1.jpg" alt="" class="image" />
          <div class="image-data">
       <br /><br /><br /><br /><br /><br /> <br /><br /><br /><br /><br />
	
	   <p align="left">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
		  <a href="#" class="button">BUY NOW</a></p>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="images/slide2.jpg" alt="" class="image" />
          <div class="image-data">

	   <br /><br /><br /><br /><br /><br /><br /><br />
	   
            <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="button">EXPLORE   MORE
			</a></p>
        </div>
		 </div>
        <div class="slide swiper-slide">
          <img src="images/slide3.jpg" alt="" class="image" />
          <div class="image-data">
     
	   <br /><br /><br /><br /><br /> <br /><br /><br /><br /><br /><br /><br />
       <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="button">CUSTOMIZE NOW</a></p>
          </div>
        </div>
      </div>

      <div class="swiper-button-next nav-btn"></div>
      <div class="swiper-button-prev nav-btn"></div>
      <div class="swiper-pagination"></div>
    </section>

    <!-- Swiper JS -->
    <script src="JS/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
	<br /><br /><br /><br />
    <h1 style="color:#FFFFFF; font-size:46px" align="center">What Makes Us Stand Out?</h1>
	<br />
	<div class="image">
	
	<a href="#"><img src="vertical2.png"></a>
	<br /><br /><br /><br />
	<p style="margin-left:40px; margin-right:40%; letter-spacing:normal; font-size:24px; font-family:'poppins', serif">Since we started our journey in 2022, we have been striving to provide you with the ultimate Custom PC experience. We are a team of proficient professionals who are zealous to make all our valued customers happy & satisfied by offering premium-quality products & unmatched services. Thats why we are widely recognized as the most reliable Custom PC builder in India, specializing in building High-Performance Custom Workstation Computers, Gaming PCs, and Servers.<br />
<br />
WE NEVER SETTLE FOR LESS & neither should you. We assure you that you will hardly find this level of craftsmanship & customizability elsewhere. And our industry leading 3 Years Warranty along with Lifetime Technical Support always lets you enjoy Peak PC Performance without any worries.</p>
	</div>
<div class="pexel">
<br /><br />
		<a href="#"><img style="height:400px; width:400px; margin-top:10%;" src="Home.jpg"></a>
		<br />
		<h1>Bring Home<br />
        Your Dream PC Now! </h1>
		<p>Have any questions or queries that you would like to ask pertaining to a new NEOVAL System or want to upgrade the existing one? Feel free          to get in touch with us by simply dropping a mail at: <a style="color:#660066">sales@neoval.com</a> or making a phone call on:<a style="color:#660066"> +91-8078982842!</a><br />
		<br />
		You will assuredly get the right assistance at the right time from our dedicated team who is always ready and available to help you out.
		<br />
		<br />
		Let Our Team Do The Work For You!!
		</p>
	</div>
<br /><br /><br />
	
	<?php
  	include 'footer.php';
  	?>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="js/script.js"></script>
</body>
</html>
