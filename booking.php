<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
session_start();


?>
<!doctype html>
<html lang="en">
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



    <title>Inaayat-Booking</title>

    <style type="text/css">
body{

      background-color: #eab7ac;
    }

    	.head{
    font-weight: bold;
     background-image: url("furniture.jpg");
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
    height: 150px;
    border-radius: 10px;
    background-color:#343A40;
    display: inline-block;
    padding-top: 50px;
   }

    }
   
    </style>

</head>
<body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="http://localhost/inaayat/changedfront.php">
    <img src="inaayat.jpg" width="30" height="30" alt="">
  </a>

  <a class="navbar-brand" href="changedfront.php">INAAYAT</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="http://localhost/inaayat/changedfront.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/inaayat/Menu.php">Menu</a>
      </li><!-- 
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/inaayat/order.html">Order</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link active" href="http://localhost/inaayat/booking.php">Booking <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/inaayat/Reviews.php">Reviews</a>
      </li>
        <li class="nav-item">
        <a class="nav-link " href="http://localhost/inaayat/map.php">Map</a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/inaayat/about.php">About Us</a>
      </li>
      <?php

        
        if (isset($_SESSION['username'])) { 
          echo "<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";

          echo "<li>Hello--</li>".$_SESSION['username'];

          echo('<form action="logout.php" method="get">');
           echo "<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
          echo('<input type="submit" value="LOGOUT">');
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
     <h1 style="font-size: 50px;">BOOK A TABLE</h1>
   </div>
   </div>

<div class="card" style="width: 800px; margin-left: 21%; margin-top: 50px;">
  <img class="card-img-top" src="book.jpg">
  <div class="card-body">

    <center>
    <h3 class="card-title" style="font-family: courier"><span class="badge badge-danger" style="padding-top: 10px; padding-bottom: 10px; padding-left: 30px; padding-right: 30px"><strong>BOOK YOUR TABLE</strong></h3>

</center>
    <form action="bookingg.php" method="post" style="font-family: courier; font-weight: bold; font-size: 20px">
  NAME:<br>
  <input type="text" name="Name" size="45" ><br>
  EMAIL:<br>
  <input type="text" name="email" size="45"><br>
  MOBILE:<br>
  <input type="text" name="mobile" size="45"><br>
  CITY:<br>
  <input type="text" name="city" size="45"><br>
  TABLE FOR:<br>
  <input type="text" name="table" size="45"><br>


   <br> 
   <center> <button type="submit" class="btn btn-danger" style="font-family: courier; font-weight:bold;font-size: 21px ; padding-top: 7px; padding-bottom: 7px; padding-left: 50px; padding-right: 50px"><strong>BOOK</strong></button>
   </center>
   </form>
  </div>
</div>



<footer class="footer-distributed"  >

      <div class="footer-left">

 <a class="navbar-brand" href="http://localhost/inaayat/changedfront.html" style="display: inline-block;">
    <img src="inaayat.jpg" width="50" height="50" alt="">
  </a>
        <h3 style="display: inline-block;">Inaayat<span>Restaurant</span></h3>

        <p class="footer-links" >
          
          <a href="http://localhost/inaayat/changedfront.php" >Home</a>
          ·
          <a href="http://localhost/inaayat/Menu.php">Menu</a>
          ·
          <a href="http://localhost/inaayat/order.php">Order</a>
          ·
          <a href="http://localhost/inaayat/about.php">About</a>
          ·
          <a href="http://localhost/inaayat/sign.php">LogIn</a>
          ·
          <a href="http://localhost/inaayat/contact.php">Contact</a>
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
  
</body>
</html>