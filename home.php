<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Go Green</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php session_start()?>
<body>
    <!-- header -->
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
                        <li><a href="#more">About </a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">features</a></li>
                        <li><a href="account.php">Account</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Home -->
    <section class="home">
        <div class="container">
            <img src="images/shape1.svg" alt="shape" class="shape shape1">
            <img src="images/shape2.svg" alt="shape" class="shape shape2">
            <img src="images/shape3.svg" alt="shape" class="shape shape3">
            <img src="images/shape4.svg" alt="shape" class="shape shape4">
            <img src="images/shape5.svg" alt="shape" class="shape shape5">
            <div class="home-wrapper d-flex">
                <div class="col-left">
                    <h1>Recycling <br>
                        Save The World</h1>
                    <p>choose suitable life insurance plans <br>
                        as per your need</p>
                    <ul>
                        <li><img src="images/health.svg" alt="health">Reduce</li>
                        <li><img src="images/car.svg" alt="car">Reuse</li>
                        <li><img src="images/home.svg" alt="Home">Recycle</li>
                    </ul>
                    <div class="btn-section d-flex">
                        <a href="material.php" class="btn-start">Get started</a>
                        <a href="#more" class="btn-read"> <span><img src="images/play.svg" alt="play"></span>
                            Read More</a>
                    </div>
                </div>
                <div class="home-image">
                    <img src="images/new2.png" alt="home image">
                </div>
            </div>
        </div>
    </section>
    
   <section class="middle">
        <div class="container">
             <img src="images/shape1.svg" alt="shape" class="shape shap1">
            <img src="images/shape2.svg" alt="shape" class="shape shap2">
            <img src="images/shape3.svg" alt="shape" class="shape shap3">
            <img src="images/shape4.svg" alt="shape" class="shape shap4">
            <img src="images/shape5.svg" alt="shape" class="shape shap5">
            <div class="middle-wrapper d-flex">
                  <div class="middle-image">
                    <img src="images/pic.png" alt="home image">
                </div>
                <div class="col-right">
                    <h1>Work With US <br>
                       share our commitment to the environment</h1>
                    <p>Are you ready to join the our family<br>
                    We are looking for talented,dedicated people </p>
                    <p>Our business is unique and so is our team.  We seek individuals who
                       are go-getters, dedicated, and eager to excel at what they do.
                       we rely on each other as resources and experts in our field, combined
                       we are the best in the industry.  we provide the opportunity for your
                       career to flourish, and for you to grow as an individual.
                    </p>
                     <div class="btn-section d-flex">
                        <a href="#" class="btn-start">Join us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <section class="middle2">
        <div class="container">
            <div class="middle2-wrapper2 d-flex">
              <div class="images">
                   <h1 class="title">Our goal</h1><br>
                        <div class="img"><img src="images/recycle-6-svgrepo-com.svg" alt="health">
                            <h1>Recycle</h1>
                            <p>Recycling is the process of converting waste materials into new materials and objects</p>
                        </div>
                        <div class="img"><img src="images/idea-svgrepo-com.svg" alt="car">
                            <h1>Discover new ideas</h1>
                            <p>Recycle many of your household items. Use this guide to determine where you can recycle</p>
                            </div>
                        <div class="img"><img src="images/recycle-bin-svgrepo-com.svg" alt="Home">
                            <h1>Trash Restore</h1>
                            <p>Recover or empty the entire Trash folder, or specify just a few items as needed</p>
                        </div>
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
					<p><a href="#">support@Green_Infinity.com</a></p>
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
			    <img src="images/eee.png" width="80%">
				<p class="footer-company-name">Copyright &copy; All Rights Reserved To <span>Green Infinity</span> &reg;</p>
			</div>
        </div>
		</footer>


<script src="js/main.js"></script>
</body>

</html>