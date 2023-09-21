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
   //$number = $_POST['number'];
   $add = mysqli_real_escape_string($conn, $_POST['address']);

   $select_message = mysqli_query($conn, "SELECT * FROM `custom` WHERE name = '$name' AND email = '$email' AND address = '$add'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `custom`(user_id, name, email, address) VALUES('$user_id', '$name', '$email', '$add')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}
if(isset($_POST['send']))
{
  header('location:thankyou.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PC Checkout</title>
<link rel="stylesheet" type="text/css" href="styleinternship.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>

<body bgcolor="#000000">
<div class="menu-bar">
		<a href="index.php"><img src="NEOVAL_free-file.png"></a><br>
	<ul>
		<li><i class="fa-solid fa-house"></i>&nbsp;<a href="index.php">Home</a></li>
		<li><a href="pccustom.php">PC Building</a></i>
		</li>
		<li><a href="shop.php">Products</a>
			
		</li>
		<li ><i class="fa-solid fa-shopping-cart"></i>&nbsp;<a href="#">Cart</a></li>
		<li></i>&nbsp;<a href="orders.php">Orders</a></li>
	</ul>
	</div>
	
		<div class="heading">
   <h3 >CheckOut</h3>
   <p> <a href="index.php">Home</a> / CheckOut </p>
</div>
<br><br><br><br>

<style>
.right-side .input-box{
  height: 50px;
  width: 70%;
  margin: 12px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  width: 70%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
  margin-left:37%;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}
.right-side .button{
  display: inline-block;
  margin-top: 12px;
  margin-left:43%;
}
.right-side .button input[type="button"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: #3e2093;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input[type="button"]:hover{
  background: #5029bc;
}
</style>
<div>
<center><h2 style="font-size:36px; color:#FFFFFF">Enter your details</h2></center>
<div class="right-side">
       
		<br />
        <p align="center" style="color:#FFFFFF">Please Provide your valid detail.We will contact you soon.</p>
		<br />
		<br />
		<form action="#" method="post">
        <div class="input-box">
          <input type="text" name="name" placeholder="Enter Your Name">
        </div>
        <div class="input-box">
          <input type="text" name="email" placeholder="Enter Your Email">
        </div>
        <div class="input-box message-box">
          <textarea name="address" class="box" placeholder="Enter Your address" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="button">
          <input type="submit" value="Place Order" name="send" class="btn"  formaction="addr.php">
        </div>
      </form>
	  </div>
	  <br />
	  <br />
	  <?php
    include 'footer.php';
    ?>
</body>
</html>
