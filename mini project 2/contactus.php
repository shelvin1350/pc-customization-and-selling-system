<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contact Us</title>
<link rel="stylesheet" type="text/css" href="styleinternship.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body bgcolor="#000000">
<div class="menu-bar">
		<a href="index.php"><img src="NEOVAL_free-file.png"></a><br>
	<ul>
		<li><i class="fa-solid fa-house"></i>&nbsp;<a href="index.php">Home</a></li>
		<li ><a href="pccustom.html">PC Building</a></i>
		</li>
		<li><a href="shop.php">Products</a>
			
		</li>
		<li><i class="fa-solid fa-shopping-cart"></i>&nbsp;<a href="cart.php">Cart</a></li>
		<li class="active"><i class="fa-solid fa-phone"></i>&nbsp;<a href="contactus.php">Contact Us</a></li>
	</ul>
	</div>
	
	<div class="heading">
   <h3>Contact us</h3>
   <p> <a href="index.php">Home</a> / Contact </p>
</div>
<center>
<section class="contact">

   <form action="" method="post">
      <h3>Say Something!</h3>
      <input type="text" name="name" required placeholder="Enter Your Name" class="box">
      <input type="email" name="email" required placeholder="Enter Your Email" class="box">
      <input type="number" name="number" required placeholder="Enter Your Number" class="box">
      <textarea name="message" class="box" placeholder="Enter Your Message" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="Send Message" name="send" class="btn">
   </form>

</section>

</center>
<script src="js/script.js"></script>

</body>
</html>
