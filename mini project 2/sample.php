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
<style>

.form-background
{
    margin-left:80px;
    margin-right:80px;
    margin-top:50px;
    color:white;
    

}    
.form-background h1
{
    font-size:70px;
}
.form select
{
    position:relative;
    min-height:40px;
    min-width:950px;
    border-radius:10px;


}
.form option
{
    background:grey;
}
.form button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 23px;
  
  width: 140px;
  height: 30px;
  cursor: pointer;
  margin-top: 40px;

}

    </style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
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
   <h3 >Built it yourself</h3>
   <p> <a href="index.php">Home</a> / Built it yourself </p>
</div>
<br><br><br><br>
    <div class="form-background">
   <form method="post" action="custom.php">
   <div class="form">
        Processor: &nbsp;&nbsp; 
        
        <select name="processor">
            <option disabled selected>Select the component</option>
            <option value="i5 PROCESSOR">i5 PROCESSOR</option>
            <option value="i7 PROCESSOR">i7 PROCESSOR</option>
            <option value="i9 PROCESSOR">i9 PROCESSOR</option>
            <option value="Ryzen 5 PROCESSOR">Ryzen 5 PROCESSOR</option>
            <option value="Ryzen 7 PROCESSOR">Ryzen 7 PROCESSOR</option>
            <option value="Ryzen 9 PROCESSOR">Ryzen 9 PROCESSOR</option>
        </select>
        <center><button type="submit" name="submit">Confirm</button></center>
        </form>
</div>

<script src="js/script.js"></script>
</body>
</html>
