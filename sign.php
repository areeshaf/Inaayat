<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
session_start();


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />


  <link rel="stylesheet" href="demo.css">
  <link rel="stylesheet" href="footer-distributed-with-address-and-phones.css">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">


    <title>Inayat-Sign In</title>
  </head>

  <style  type="text/css">

    body{
      background-color: #042b42;
      overflow-x:hidden; //to hide horizontalscroll-behavior
    }
    *{
      padding: 0px;
      margin: 0px;
    }

    .head{
      font-weight: bold;
       background-image: url("Big-top-image.jpg");
       height : 400px;
       color: white;
       background-repeat: no-repeat;
       background-size: cover;
       background-position: center center;
       text-align: center;
       box-sizing: border-box;
       font-family: Courier New, serif ;
       padding-top: 100px;
       border-style: inset;



      }

     .innerHead{
      width: 400px;
      height: 190px;
      border-radius: 10px;
      background-color:#CB202D;
      display: inline-block;
      padding-top: 50px;
     }


      .images img{
        margin-top: 40px;
        width: 250px;
        height: 250px;
        border-radius: 50%;
        margin-left: 25px;
      }

      .jumbo{
        margin-top: 50px;
      }

      .footer{
        margin: 0;
      }


    #container {
        position: static;
        width: 340px;
        height: 280px;
        /* margin-left: 170px; */
        background: #fff;
        border-radius: 3px;
        border: 1px solid #ccc;
        box-shadow: 0 1px 2px rgba(0.1, 0.1, 0.1, 0.1);

    }

  #sign{
    width: auto;
    height: auto !important;
    padding: 40px;
  }

.inp-set{
  border-radius: 2px;
  width: 200px;
  height: 20px;
  margin-top: 20px;
}

/* .but{
  height: 25px;
  width: 200px;
  border-radius: 2px;
  border: 0px;
  background-color: blue;
  margin-top: 20px;

} */

input[type=submit] {
    /* float: right; */
    margin-right: 20px;
    margin-top: 20px;
    width: 80px;
    height: 30px;
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    background-color: #acd6ef; /*IE fallback*/
    background-image: -webkit-gradient(linear, left top, left bottom, from(#acd6ef), to(#6ec2e8));
    background-image: -moz-linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
    background-image: linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
    border-radius: 30px;
    border: 1px solid #66add6;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .3), inset 0 1px 0 rgba(255, 255, 255, .5);
    cursor: pointer;
}
input[type=submit]:hover {
    background-image: -webkit-gradient(linear, left top, left bottom, from(#b6e2ff), to(#6ec2e8));
    background-image: -moz-linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
    background-image: linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
}
input[type=submit]:active {
    background-image: -webkit-gradient(linear, left top, left bottom, from(#6ec2e8), to(#b6e2ff));
    background-image: -moz-linear-gradient(top left 90deg, #6ec2e8 0%, #b6e2ff 100%);
    background-image: linear-gradient(top left 90deg, #6ec2e8 0%, #b6e2ff 100%);
}

  </style>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="http://localhost/inaayat/changedfront.php">
      <img src="inaayat.jpg" width="30" height="30" alt="">
    </a>

    <a class="navbar-brand" href="#">INAAYAT</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item ">
          <a class="nav-link" href="http://localhost/inaayat/changedfront.php">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="http://localhost/inaayat/Menu.php">Menu </a>
        </li>
<!-- 
      <li class="nav-item">
        <a class="nav-link " href="http://localhost/inaayat/order.html">Order</a>
      </li>
 -->        <li class="nav-item">
          <a class="nav-link " href="http://localhost/inaayat/booking.php">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="http://localhost/inaayat/reviews.php">Reviews</a>
        </li>
      
          <li class="nav-item">
        <a class="nav-link " href="http://localhost/inaayat/map.php">Map</a>
      </li>

      
        <li class="nav-item">
          <a class="nav-link " href="http://localhost/inaayat/about.php">About Us</a>
        </li>
      <li class="nav-item" style="width: 680px;"> 
      </li>
      <?php

        
        if (isset($_SESSION['username'])) { 
          echo "<th>hello  </th>".$_SESSION['username'];echo('<form action="logout.php" method="get">');echo('<input type="submit" value="LOGOUT">');
         echo('</form>');
        }
        else{

          ?>
             <li class="nav-item">
             <a class="nav-link " href="http://localhost/inaayat/contact.php">Sign Up</a>
            </li>

            <li class="nav-item">
            <a class="nav-link " href="http://localhost/inaayat/sign.php">Log In</a>
           </li>



          <?php

        }
        ?>


     
       
      </ul>
      </div>
    </nav>

       <div class="head">
        <div class="innerHead">
         <h1 style="font-size: 70px;">SIGN IN </h1>
       </div>
       </div>
    <br>
    <br>
    <br>

<center>
<div id="container">
          <div id="sign">
            <form id="sign_in_form" action="signn.php" method="post">
              <input type="email" placeholder="Email Id" name="email" class="inp-set"/><br>
              <input type="password" placeholder="password" name="password" class="inp-set"/><br>
              <!-- <input type="submit" name="Sign In" class="but" /> -->
              <center> <input type="submit" value="Login"> </center>
            </form>
          </div>
</div>
</center>
   <footer class="footer-distributed">

      <div class="footer-left">

 <a class="navbar-brand" href="http://localhost/inaayat/changedfront.html" style="display: inline-block;">
    <img src="inaayat.jpg" width="50" height="50" alt="">
  </a>
        <h3 style="display: inline-block;">Inaayat<span>Restaurant</span></h3>

        <p class="footer-links">
          
          <a href="http://localhost/inaayat/changedfront.html">Home</a>
          ·
          <a href="http://localhost/inaayat/Menu.html">Menu</a>
          ·
          <a href="http://localhost/inaayat/order.html">Order</a>
          ·
          <a href="http://localhost/inaayat/about.html">About</a>
          ·
          <a href="http://localhost/inaayat/sign.html">LogIn</a>
          ·
          <a href="http://localhost/inaayat/contact.html">Contact</a>
        </p>

        <p class="footer-company-name">Company Name &copy; 2015</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>21 New Colony Street</span> Delhi, India</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+1 555 123456</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">support@inaayat.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>Thank You for Visiting</span>
          We, at Inaayat thank you from the bottom of our hearts for visiting our page and showing interest in our restaurant. We hope to hear from you again, soon.
        </p>

        <div class="footer-icons">

          <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
          <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
          <a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
          <a href="https://www.github.com"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>

       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
