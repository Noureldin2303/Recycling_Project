<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Choose Material</title>
    <link rel="stylesheet" href="css/material.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
            function cl(){
        for(var x=3;x<=8;x++){
            document.getElementsByTagName('div')[x].setAttribute("style","");
        }
        for(var x=25;x<=27;x++){
            document.getElementsByTagName('div')[x].setAttribute("style","");
        }
    }

    </script>
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
                        <li><a href="#more">About </a></li>
                        <li><a href="#">features</a></li>
                        <li><a href="#">resources</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
   <form action="choose.php" method="post">
<section class="home">    
<div class="container2">
        <div class="home-wrapper">
            <h1>Choose Materials That You Have</h1><br>
            <p>Please select the material that you have to deliver</p>
            <div class="list d-flex">
    <div class="form-element">
      <input type="checkbox" name="material[]" value="Glass" id="Glass">
      <label for="Glass">
        <div class="icon">
          <i class="fa fa-wine-bottle"></i>
        </div>
        <div class="title">
          Glass
        </div>
      </label>
    </div>
    <div class="form-element">
      <input type="checkbox" name="material[]" value="Wood" id="Wood">
      <label for="Wood">
        <div class="icon">
        <i class="fa fa-cube"></i>
        </div>
        <div class="title">
          Wood
        </div>
      </label>
    </div>
    <div class="form-element">
      <input type="checkbox" name="material[]" value="Plastic" id="Plastic">
      <label for="Plastic">
        <div class="icon">
          <i class="fab fa-bitbucket"></i>
        </div>
        <div class="title">
          Plastic
        </div>
      </label>
    </div>
    <div class="form-element">
      <input type="checkbox" name="material[]" value="Paper" id="Paper">
      <label for="Paper">
        <div class="icon">
          <i class="far fa-file"></i>
        </div>
        <div class="title">
          Paper
        </div>
      </label>
    </div>
    <div class="form-element">
      <input type="checkbox" name="material[]" value="E-Waste" id="E-Waste">
      <label for="E-Waste">
        <div class="icon">
          <i class="fas fa-plug"></i>
        </div>
        <div class="title">
          E-Waste
        </div>
      </label>
    </div>
    <div class="form-element">
      <input type="checkbox" name="material[]" value="Metal" id="Metal">
      <label for="Metal">
        <div class="icon">
          <i class="fas fa-chain"></i>
        </div>
        <div class="title">
          Metal
        </div>
      </label>
    </div>
    <div class="form-element">
      <input type="checkbox" name="material[]" value="Organic" id="Organic">
      <label for="Organic">
        <div class="icon">
          <i class="fas fa-drumstick-bite"></i>
        </div>
        <div class="title">
          Organic
        </div>
      </label>
    </div>
  </div>
</div>
</div>
</section>

<section class="time">    
<div class="container2">
        <div class="home-wrapper">
            <h1>Choose Day & Time To Deliver Material</h1><br>
            <p>Please choose the suitable day and time to deliver material</p>
            
              <div class="list2 d-flex">
    <div class="form-element2">
      <input type="radio" name="days" value="Saturday" id="day1">
      <label for="day1">
        <div class="title">
          Saturday
        </div>
      </label>
    </div>
    <div class="form-element2">
      <input type="radio" name="days" value="Sunday" id="day2">
      <label for="day2">
        <div class="title">
          Sunday
        </div>
      </label>
    </div>
    <div class="form-element2">
      <input type="radio" name="days" value="Monday" id="day3">
      <label for="day3">
        <div class="title">
          Monday
        </div>
      </label>
    </div>
    <div class="form-element2">
      <input type="radio" name="days" value="Tuesday" id="day4">
      <label for="day4">
        <div class="title">
          Tuesday
        </div>
      </label>
    </div>
    <div class="form-element2">
      <input type="radio" name="days" value="Wednesday" id="day5">
      <label for="day5">
        <div class="title">
          Wednesday
        </div>
      </label>
    </div>
    <div class="form-element2">
      <input type="radio" name="days" value="Thursday" id="day6">
      <label for="day6">
        <div class="title">
          Thursday
        </div>
      </label>
    </div>
  </div><br>     
            
  <div class="list3 d-flex">
    <div class="form-element3">
      <input type="radio" name="time" value="6 - 12 AM" id="time1">
      <label for="time1">
        <div class="title">
          6 - 12 AM
        </div>
      </label>
    </div>
    <div class="form-element3">
      <input type="radio" name="time" value="1 - 5 PM" id="time2">
      <label for="time2">
        <div class="title">
          1 - 5 PM
        </div>
      </label>
    </div>
    <div class="form-element3">
      <input type="radio" name="time" value="8 - 12 PM" id="time3">
      <label for="time3">
        <div class="title">
          8 - 12 PM
        </div>
      </label>
    </div>
  </div>
</div>
</div>
</section>

<section class="voucher">    
<div class="container2">
        <div class="home-wrapper">
            <h1>Choose Your Voucher</h1><br>
            <p>Please choose the voucher you prefare</p>
            
  <div class="list4 d-flex">
    <div class="form-element4">
      <input type="radio" name="vouchers" value="Carrefour" id="Carrefour">
      <label for="Carrefour">
          <div class="icon">
          <i class="fas fa-shopping-cart"></i>
        </div>
        <div class="title">
        Carrefour
        </div>
      </label>
    </div>
    <div class="form-element4">
      <input type="radio" name="vouchers" value="McDonalds" id="McDonalds">
      <label for="McDonalds">
          <div class="icon">
          <i class="fas fa-hamburger"></i>
        </div>
        <div class="title">
        McDonalds
        </div>
      </label>
    </div>
    <div class="form-element4">
      <input type="radio" name="vouchers" value="Uber" id="Uber">
      <label for="Uber">
          <div class="icon">
          <i class="fab fa-uber"></i>
        </div>
        <div class="title">
        Uber
        </div>
      </label>
    </div>
  </div>
</div>
</div>
</section>
<div class="submit">
<input type="submit" name="submit" value="Submit" class="btn">
<input type="reset" name="reset" value="Reset" class="btn2" onclick="c1()">
</div>
</form> 
    </body>
</html>