<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account</title>
    <link rel="stylesheet" href="css/account.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet'/>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js'></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <?php
session_start();
require "dbconn.php";
if(isset($_SESSION['username'])){

  $sname = $_SESSION['username'];
  
$sql1="select name from upinfo where name = '$sname'";  
$res1=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
$row1=mysqli_num_rows($res1);
if($row1>0)
{
        $ro1=mysqli_fetch_array($res1);
        $uname=$ro1[0];
}
$sql2="select mail from upinfo where name = '$sname'";  
$res2=mysqli_query($conn,$sql2) or die(mysqli_error($conn));
$row2=mysqli_num_rows($res2);
if($row2>0)
{
        $ro2=mysqli_fetch_array($res2);
        $mail=$ro2[0];
}
$sql3="select phone from upinfo where name = '$sname'";  
$res3=mysqli_query($conn,$sql3) or die(mysqli_error($conn));
$row3=mysqli_num_rows($res3);
if($row3>0)
{
        $ro3=mysqli_fetch_array($res3);
        $phone=$ro3[0];
}
$sql4="select city from upinfo where name = '$sname'";  
$res4=mysqli_query($conn,$sql4) or die(mysqli_error($conn));
$row4=mysqli_num_rows($res4);
if($row4>0)
{
        $ro4=mysqli_fetch_array($res4);
        $city=$ro4[0];
}
$sql5="select address from upinfo where name = '$sname'";  
$res5=mysqli_query($conn,$sql5) or die(mysqli_error($conn));
$row5=mysqli_num_rows($res5);
if($row5>0)
{
        $ro5=mysqli_fetch_array($res5);
        $address=$ro5[0];
}
$sql6="select voucher from downinfo where sname = '$sname'";  
$res6=mysqli_query($conn,$sql6) or die(mysqli_error($conn));
$row6=mysqli_num_rows($res6);
if($row6>0)
{
        $ro6=mysqli_fetch_array($res6);
        $voucher=$ro6[0];
}
$sql7="select day from downinfo where sname = '$sname'";  
$res7=mysqli_query($conn,$sql7) or die(mysqli_error($conn));
$row7=mysqli_num_rows($res7);
if($row7>0)
{
        $ro7=mysqli_fetch_array($res7);
        $day=$ro7[0];
}
$sql8="select time from downinfo where sname = '$sname'";  
$res8=mysqli_query($conn,$sql8) or die(mysqli_error($conn));
$row8=mysqli_num_rows($res8);
if($row8>0)
{
        $ro8=mysqli_fetch_array($res8);
        $time=$ro8[0];
}
$sql9="select waste from downinfo where sname = '$sname'";
$res9=mysqli_query($conn,$sql9) or die(mysqli_error($conn));
$row9=mysqli_num_rows($res9);
if($row9>0)
{
  $ro9=mysqli_fetch_array($res9);
  $wast=$ro9[0];   
}
}
?>
</head>
<body>
   <header>
        <div class="container">
            <nav class="nav d-flex">
                <a href="home.php" class="logo">
                    <img src="images/logo2.png" alt="logo">
                </a>
                <div class="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="navigation-bar">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="#more">About</a></li>
                        <li><a href="#">features</a></li>
                        <li><a href="#">resources</a></li>
                        <li><form action="logout.php" method="post"><input type="submit" value="logout" class="logout" name="logout"></form></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    
    <section class="home">
        <div class="container3">
            <div class="home-wrapper d-flex">
                <div class="user-pic">
                    <img src="images/user.svg" width="120px" alt="user">
                </div>
                <div class="user-info">
                   <form action="php/update.php">
                     <div class="goback">
                       <a href="home.php" class="btn2">Back to home</a>
                     </div>
        <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
  <input type="text" name="name" placeholder="<?php echo $uname ?>" onfocus = "this.blur()">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">E-mail</label>
      </div>
      <div class="col-75">
               <input type="text" name="e-mail" placeholder="<?php echo $mail ?>" onfocus = "this.blur()">
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label for="fname">Phone</label>
      </div>
      <div class="col-75">
         <input type="text" name="phone" placeholder="<?php echo $phone ?>" onfocus = "this.blur()">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">City</label>
      </div>
      <div class="col-75">
            <input type="text" name="city" placeholder="<?php echo $city ?>" onfocus = "this.blur()">
      </div>
    </div>
      <div class="row">
      <div class="col-25">
        <label for="fname">Address</label>
      </div>
      <div class="col-75">
               <input type="text" name="address" placeholder="<?php echo $address ?>" onfocus = "this.blur()">
      </div>
    </div><br><br>
    <div>
        <a href="update1.php" class="btn">Update</a>
    </div>
  </form>
  <br><br>
    <form action="assets/php/update.php">
    <div class="row">
      <div class="col-25">
        <label for="lname">Voucher</label>
      </div>
      <div class="col-75">
        <input type="text" name="voucher" placeholder="<?php echo $voucher ?>" onfocus = "this.blur()">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Time">Time</label>
      </div>
      <div class="col-75">
       <input type="text" name="time" placeholder="<?php echo $day ?>   <?php echo $time ?>" onfocus = "this.blur()">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Time">Materials</label>
      </div>
      <div class="col-75">
       <input type="text" name="waste" placeholder="<?php echo $wast ?>" onfocus = "this.blur()">
      </div>
    </div><br><br>
    <div>
        <a href="update2.php" class="btn">Update</a>
    </div>
  </form>
                </div>
                
            </div>
        </div>
    </section>
    
    
<footer>
    <div class="container">
			<div class="footer-left">

				<p class="footer-links">
					<a href="#" class="link-1">Home</a>
					<a href="#">Blog</a>
					<a href="#">About</a>
					<a href="#">Faq</a>
					<a href="#">Contact</a>
				</p>
    <div class="footer-logo">
         <a href="#"><img src="images/name.png" alt="logo"></a>
                </div>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p>44 S.Somha, Alexandria</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1.555.555.5555</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="#">support@Green_Infinty.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				
					<h3 id="more">About the company</h3><br><p>
					Recycling is a huge topic in modern times, where landfills are
                        overburdened and the amount of waste produced every year
                        continues to grow.</p>
				
				<div class="footer-icons">

					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-linkedin-in"></i></a>
					<a href="#"><i class="fab fa-github"></i></a>

				</div>

			</div>
			<div class="footer-bottom">
				<p class="footer-company-name">Copyright &copy; All Rights Reserved To <span>Green Infinty</span> &reg;</p>
			</div>
        </div>
		</footer>
</body>
</html>
