<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Account</title>
    <link rel="stylesheet" href="css/update.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet'/>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js'></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<?php
  session_start();
  require "dbconn.php";
  
if(isset($_SESSION['username'])){
if(isset($_POST['submit']))
{
    $sname = $_SESSION['username'];
    $phone = $_POST["phone"];
    $city = $_POST["city"];
    $mail = $_POST["e-mail"];
    $address = $_POST["address"];

$result1 = mysqli_query($conn,"update upinfo set phone='$phone' where name='$sname'");
$result2 = mysqli_query($conn,"update upinfo set city='$city' where name='$sname'");
$result3 = mysqli_query($conn,"update upinfo set mail='$mail' where name='$sname'");
$result4 = mysqli_query($conn,"update upinfo set address='$address' where name='$sname'");
if($result1 ||$result2 ||$result3 ||$result4)

{
    echo '<script> alert("update-Success") </script>';    
    header("location: account.php");
    exit();
}
else{
    echo '<script> alert("failed") </script>';    
    header("location: update.php");
    exit();

}
}
}
?>
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
                        <li><a href="#more">About </a></li>
                        <li><a href="#">features</a></li>
                        <li><a href="#">resources</a></li>
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
                   <form method="post">
                        <div class="goback">
         <a href="#" class="btn2">Back to home</a>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">E-mail</label>
      </div>
      <div class="col-75">
        <input type="text" name="e-mail" placeholder="E-mail">
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label for="fname">Phone</label>
      </div>
      <div class="col-75">
        <input type="text" name="phone" placeholder="Phone">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">City</label>
      </div>
      <div class="col-75">
        <input type="text" name="city" placeholder="City">
      </div>
    </div>
      <div class="row">
      <div class="col-25">
        <label for="fname">Address</label>
      </div>
      <div class="col-75">
        <input type="text" name="address" placeholder="Address">
      </div>
    </div>
    <br><br>
    <div>
        <input type="submit" name="submit" class="btn" value="Save Changes">
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

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>
			<div class="footer-bottom">
				<p class="footer-company-name">Copyright &copy; All Rights Reserved To <span>Green Infinty</span> &reg;</p>
			</div>
        </div>
		</footer>
</body>
</html>
