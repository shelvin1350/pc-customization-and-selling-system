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
    min-width:400px;
    display:none;
    
    position:relative;
    background:grey;
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
    <br><br>
    <div class="form-select">
    <?php
        $pro=$_POST['processor'];
    ?>
        <form method="post">
        Processor: &nbsp;&nbsp; 
        <select name="processor" style="margin-left:27px;">
            <option selected value="<?php echo $pro; ?>"><?php echo $pro; ?></option>
        </select>
        
        <input type="text" value="<?php echo $pro; ?>" name="processor1">









<?php
        if(isset($_POST['check']))
        {
            //MOTHERBOARD...........

            if($_POST['motherboard']=='1')
            {
                $m='11000';
                $m1='ASUS Prime 8560M A';
               
            }
            else if($_POST['motherboard']=='2')
            {
                $m='7700';
                $m1='MSI B560M PRO-E';
                
            }
            else if($_POST['motherboard']=='3')
            {
                $m='12000';
                $m1='MSI B560M PRO WIFI';
                
            }
            else
            {
                $m='12400';
                $m1='MSI MAG B560M PRO-VDH';
                
            }
            

            //RAM...............

            if($_POST['ram']=='1')
            {
                $r='4700';
                $r1='8 GB G.SKILL TRIDENT Z RGB DDR4 3000MHz';
                

            }
            else if($_POST['ram']=='2')
            {
                $r='7600';
                $r1='16 GB G.SKILL TRIDENT Z RGB DDR4 3000MHz';
                
            }
            else if($_POST['ram']=='3')
            {
                $r='12100';
                $r1='32 GB G.SKILL TRIDENT Z RGB DDR4 3000MHz';
                
            }
            else if($_POST['ram']=='4')
            {
                $r='2300';
                $r1='8 GB G.SKILL RIPJAWS V DDR4 3200MHz';
                
            }
            else if($_POST['ram']=='5')
            {
                $r='4400';
                $r1='16 GB G.SKILL RIPJAWS V DDR4 3200MHz';
                
            }
            else
            {
                $r='12520';
                $r1='32 GB G.SKILL RIPJAWS V DDR4 3200MHz';
                
            }

            //GRAPHICSCARD..........

            if($_POST['graphicscard']=='1')
            {
                $g='8300';
                $g1='INNO3D GEFORCE GT 1030 4GB';
                
            }
            else if($_POST['graphicscard']=='2')
            {
                $g='6100';
                $g1='NVIDIA GT 730 4GB';
                
            }
            else if($_POST['graphicscard']=='3')
            {
                $g='40600';
                $g1='Nvidia GeForce RTX 3050 8GB (MSI/Inno 3D)';
                
            }
            else if($_POST['graphicscard']=='4')
            {
                $g='59640';
                $g1='MSI GeForce RTX 3070 Ventus 2X 8GB (L)';
                
            }
            else
            {
                $g='295945';
                $g1='Nvidia RTX A5500 24GB';
            }

            //STORAGE..........

            if($_POST['storage']=='1')
            {
                $s='4300';
                $s1='500GB SAMSUNG 870 EVO SATA SSD';
                
            }
            else if($_POST['storage']=='2')
            {
                $s='8900';
                $s1='1TB SAMSUNG 870 EVO SATA SSD';
                
            }
            else
            {
                $s='17999';
                $s1='2TB SAMSUNG 870 EVO SATA SSD';
                
            }

            //COOLER...........

            if($_POST['cooler']=='1')
            {
                $c='1825';
                $c1='DEEPCOOL GAMMAXX 400 XT AIR COOLER';
                
            }
            else if($_POST['cooler']=='2')
            {
                $c='1669';
                $c1='DEEPCOOL GAMMAXX 400 V2 AIR COOLER';
                
            }
            else if($_POST['cooler']=='3')
            {
                $c='1034';
                $c1='DEEPCOOL GAMMAXX 200 V2 AIR COOLER';
                
            }
            else if($_POST['cooler']=='4')
            {
                $c='6800';
                $c1='NZXT KRAKEN M22 120MM LIQUID COOLER';
                
            }
            else
            {
                $c='10390';
                $c1='MSI MAG CORELIQUID 360R (AIO Liquid Cooler, 360 Radiator, 3 x 120mm ARGB Fans, Intel 1151/1200/2066, AMD AM4/TR4/sTR4)';
                
            }

            //CASE..............

            if($_POST['case']=='1')
            {
                $ca='4150';
                $ca1='MSI MAG Forge 100M Mid Tower Gaming PC Case';
                
            }
            else if($_POST['case']=='2')
            {
                $ca='18109';
                $ca1='CORSAIR 5000X RGB WHITE';
                
            }
            else if($_POST['case']=='3')
            {
                $ca='27824';
                $ca1='CORSAIR 7000X RGB BLACK';
                
            }
            else if($_POST['case']=='4')
            {
                $ca='56587';
                $ca1='CORSAIR 1000D';
                
            }
            else
            {
                $ca='23600';
                $ca1='CORSAIR 7000D AIRFLOW BLACK';
                
            }

            $add=$r+$g+$m+$s+$c+$ca;
        }
        ?>




















<script>

function yesnoCheck(that) {
    if (that.value != "0") {

        document.getElementById("ifYes").style.display = "block";
    } else {
        document.getElementById("ifYes").style.display = "none";
    }
}




        </script>



        <br><br>
        <label>Motherboard: &nbsp;&nbsp; </label>
        <select name="motherboard" onchange="yesnoCheck(this);" style="margin-left:10px;" class="add">
            <option disabled selected value="0">Select the component</option>
            <option value="1">ASUS Prime 8560M A</option>
            <option value="2">MSI B560M PRO-E</option>
            <option value="3">MSI B560M PRO WIFI</option>
            <option value="4">MSI MAG B560M PRO-VDH</option>
        </select><br><br>


        <input type="text" value="<?php if(isset($_POST['check'])){echo $m1;} ?>" name="motherboard1">
        


    <script>

function yesnoChecka(that) {
    if (that.value != "0") {

        document.getElementById("ifYesa").style.display = "block";
    } else {
        document.getElementById("ifYesa").style.display = "none";
    }
}

</script>


        <div id="ifYes" style="display: none;" > 
        RAM: &nbsp;&nbsp; 
        <select name="ram" onchange="yesnoChecka(this);" style="margin-left:62px;" class="add">
            <option disabled selected value="0">Select the component</option>
            <option value="1">8 GB G.SKILL TRIDENT Z RGB DDR4 3000MHz</option>
            <option value="2">16 GB G.SKILL TRIDENT Z RGB DDR4 3000MHz</option>
            <option value="3">32 GB G.SKILL TRIDENT Z RGB DDR4 3000MHz</option>
            <option value="4">8 GB G.SKILL RIPJAWS V DDR4 3200MHz</option>
            <option value="5">16 GB G.SKILL RIPJAWS V DDR4 3200MHz</option>
            <option value="6">32 GB G.SKILL RIPJAWS V DDR4 3200MHz</option>
        </select><br><br>

        
        </div>
        <input type="text" value="<?php if(isset($_POST['check'])){echo $r1; }?>" name="ram1">



        <div id="ifYesa" style="display: none" >
        Graphics Card: &nbsp;&nbsp; 
        <select name="graphicscard" onchange="yesnoCheckb(this);" class="add">
        <option disabled selected value="0">Select the component</option>
            <option value="1">INNO3D GEFORCE GT 1030 4GB</option>
            <option value="2">NVIDIA GT 730 4GB</option>
            <option value="3">Nvidia GeForce RTX 3050 8GB (MSI/Inno 3D)</option>
            <option value="4">MSI GeForce RTX 3070 Ventus 2X 8GB (L)</option>
            <option value="5">Nvidia RTX A5500 24GB</option>
        </select><br><br>
        </div>
        <input type="text" value="<?php if(isset($_POST['check'])){ echo $g1;} ?>" name="graphicscard1">



    <script>

    function yesnoCheckb(that) {
    if (that.value != "0") {

        document.getElementById("ifYesb").style.display = "block";
    } else {
        document.getElementById("ifYesb").style.display = "none";
    }
    }

</script>




    <div id="ifYesb" style="display: none" >
        Storage: &nbsp;&nbsp; 
        <select name="storage" onchange="yesnoCheckc(this);" style="margin-left:43px;" class="add">
        <option disabled selected value="0">Select the component</option>
            <option value="1">500GB SAMSUNG 870 EVO SATA SSD</option>
            <option value="2">1TB SAMSUNG 870 EVO SATA SSD</option>
            <option value="3">2TB SAMSUNG 870 EVO SATA SSD</option>
        </select><br><br>
        </div>

        <input type="text" value="<?php if(isset($_POST['check'])){ echo $s1; }?>" name="storage1">




<script>

function yesnoCheckc(that) {
if (that.value != "0") {

    document.getElementById("ifYesc").style.display = "block";
} else {
    document.getElementById("ifYesc").style.display = "none";
}
}

</script>





    <div id="ifYesc" style="display: none" >
        Cooler: &nbsp;&nbsp; 
        <select name="cooler" onchange="yesnoCheckd(this);" style="margin-left:50px;" class="add">
        <option disabled selected value="0">Select the component</option>
            <option value="1">DEEPCOOL GAMMAXX 400 XT AIR COOLER</option>
            <option value="2">DEEPCOOL GAMMAXX 400 V2 AIR COOLER</option>
            <option value="3">DEEPCOOL GAMMAXX 200 V2 AIR COOLER</option>
            <option value="4">NZXT KRAKEN M22 120MM LIQUID COOLER</option>
            <option value="5">MSI MAG CORELIQUID 360R (AIO Liquid Cooler, 360 Radiator, 3 x 120mm ARGB Fans, Intel 1151/1200/2066, AMD AM4/TR4/sTR4)</option>
        </select><br><br>
</div>

<input type="text" value="<?php if(isset($_POST['check'])){ echo $c1; }?>" name="cooler1">




<script>

function yesnoCheckd(that) {
if (that.value != "0") {

    document.getElementById("ifYesd").style.display = "block";
} else {
    document.getElementById("ifYesd").style.display = "none";
}
}

</script>






    <div id="ifYesd" style="display: none" >
        Case: &nbsp;&nbsp;
        <select name="case" onchange="yesnoCheckd(this);" style="margin-left:61px;" class="add">
        <option disabled selected value="0">Select the component</option>
            <option value="1">MSI MAG Forge 100M Mid Tower Gaming PC Case </option>
            <option value="2">CORSAIR 5000X RGB WHITE</option>
            <option value="3">CORSAIR 7000X RGB BLACK</option>
            <option value="4">CORSAIR 1000D</option>
            <option value="5">CORSAIR 7000D AIRFLOW BLACK</option>
        </select><BR><BR>
        </div>


        <input type="text" value="<?php if(isset($_POST['check'])){ echo $ca1; }?>" name="case1">

        <input type="text" value="<?php if(isset($_POST['check'])){ echo $add; }?>" name="add">

<script>

function yesnoChecke(that) {
if (that.value != "0") {

    document.getElementById("ifYese").style.display = "block";
} else {
    document.getElementById("ifYese").style.display = "none";
}
}

</script>



    





      















            
      
    <button id="button" type="submit" formaction="<?php echo $_SERVER['PHP_SELF'];?>" name="check" style="margin-left:300px;"><span>Check Out</span></button>
<button id="button" name="go" type="submit" formaction="custom1.php">Go</button>
</form>
</div>

		
<script src="js/script.js"></script>
</body>
</html>
