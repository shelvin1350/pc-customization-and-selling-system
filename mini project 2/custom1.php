<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NEOVAL</title>
<link rel="stylesheet" type="text/css" href="styleinternship.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<style>

.form-background
{
    margin-left:80px;
    margin-right:80px;
    margin-top:50px;
    margin-bottom:50px;
    color:white;

}    
.form-background h1
{
    font-size:70px;
}
.form-select select
{
    position:relative;
    min-height:40px;
    min-width:900px;
    margin-left:;
    border-radius:10px;
    position:relative;
}
.form-select input
{
    position:relative;
    min-height:40px;
    min-width:900px;
    border-radius:6px;
    position:relative;
    background:white;
}
.form-select option
{
    background:grey;
}

.form-select button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 23px;
  
  width: 140px;
  height: 30px;
  cursor: pointer;
  margin-top: 20px;
  margin-left:50px;
}



</style>
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
   <h3 >Built it yourself</h3>
   <p> <a href="index.php">Home</a> / Built it yourself </p>
</div>
<br><br><br><br>
						<script>

$(document).ready(function(){
    $('select').change(function(){
        var totalVal = 0;
        $('select.add').each(function(){
           totalVal += parseInt($(this).val()) ;
        });
        $('input').val(totalVal);
    });
});
         </script>
		
   </div>
   <div class="form-background">
    <big><h1 align="center">Buy customized PC</h1></big>
    <br><br>
    <div class="form-select">






        

    <?php

    $pr=$_POST['processor1'];
    $m1=$_POST['motherboard1'];
    $r1=$_POST['ram1'];
    $g1=$_POST['graphicscard1'];
    $s1=$_POST['storage1'];
    $c1=$_POST['cooler1'];
    $ca1=$_POST['case1'];
    $add=$_POST['add'];
    ?>

   
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Processor: &nbsp;&nbsp; 
        <input type="text" value="<?php echo $pr; ?>" style="margin-left:27px;" name="processor" readonly>






        <br><br>
        <label>Motherboard: &nbsp;&nbsp; </label>
        <input type="text" style="margin-left:10px;" value="<?php echo $m1; ?>" name="processor" readonly>


        



        <br><br>

        RAM: &nbsp;&nbsp; 
        <input type="text" value="<?php echo $r1; ?>" style="margin-left:62px;" name="ram" readonly>
        <br><br>
        Graphics Card: &nbsp;&nbsp; 
        <input type="text" value="<?php echo $g1; ?>" name="graphicscard" readonly>




        <br><br>
        Storage: &nbsp;&nbsp; 
        <input type="text" value="<?php echo $s1; ?>" style="margin-left:43px;" name="storage" readonly>


        




        <br><br>
        Cooler: &nbsp;&nbsp; 
        <input type="text" value="<?php echo $c1; ?>" style="margin-left:50px;" name="cooler" readonly>

        <br><br>
        Case: &nbsp;&nbsp;
        <input type="text" value="<?php echo $ca1; ?>" style="margin-left:61px;" name="case" readonly>


        <br><br>     
        Total amount: &nbsp;&nbsp;
        <input type="text" value="$ <?php echo intval($add/81); ?>" name="amount" style="margin-left:10px;" readonly>
     






  















        

          <form>
            <a href="./"><button id="button" name="cancel" style="margin-left:300px;" formaction="custom.php"><span>Cancel</span></button></a>
            <button id="button" name="confirm" type="submit" formaction="addr.php"><span>Confirm </span></button>
    </form>


</div>
		
<script src="js/script.js"></script>
</body>
</html>
