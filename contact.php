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





    <title>Inaayat-Sign up</title>


    <style type="text/css">

    body
    {

      background-color: #ab2121;
    }

  h1{
    padding-top: 9px;
    padding-bottom: 9px;
      text-align: center;
      font-size: 40px;
      font-weight:bold;
      color: #ffffff;
      border: 3px solid #ffbb33;
      background-color: #000;
      width: 1365px;
      height:70px;

    }

   
    .background
{
    width: 1325px;
    height: 400px;
    background: url('hotel.jpg');
    border: 2px solid black;
    margin-top: 15px;
    margin-left: 15px;
}
.transbox
{
    width: 1200px;
    height: 300px;
    margin: 50px 50px;
    background-color: #fff;
    border: 1px solid white;
    opacity: 0.6;
    filter: alpha(opacity=50);
}
.transbox p
{
    margin: 80px 80px;
    font-weight: bold;
    font-family: georgia;
    color: #000;
    font-size: 20px;
    font-style: italic;
    text-align: center;
}

/*div.branches1
{

  box-sizing: border-box;
  height:250px;
  width:600px;
  border: 5px solid #800000;
  float: left;
  text-align: center;
  font-style :italic;
  font-weight: bold;
  color:#800000;
  padding-top: 15px;
  background-color: #ffc34d;
}


div.branches2
{


  height:250px;
  width:600px;
  border: 5px solid #800000;
  float: right;
  text-align: center;
  font-weight: bold;
  color:#800000;
  background-color: #ffc34d
}*/

div.bg2
{
    padding-top: 30px;
    padding-bottom: 0px;
    width: 1255px;
    height: 77%;
    border: 2px solid black;
    margin-top: 50px;
    margin-left: 50px;
    /*margin-bottom: 20px;*/
    position: absolute;
    right:4%;
    background-color: #ffc34d ; 





}
.branches2 h1{

    
      font-size: 40px;
      font-weight:bold;
      color: #ffffff;
      border: 3px solid #ffbb33;
      background-color: #000;
      width: 1365px;
      height:70px;
      float: right;


} 


.jumb {
      margin-top: 550px;
      top:180%;
    }

/*    .footer{
      margin: 0;
      padding-bottom:10px;
      top:80%;
    }*/


.spacing{
  margin-bottom: 590px;
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
      </li> -->
      <li class="nav-item">
        <a class="nav-link " href="http://localhost/inaayat/booking.php">Booking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="http://localhost/inaayat/reviews.php">Reviews</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link"  href="http://localhost/inaayat/order.php">Order</a>
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
</body>



<!-- <h1>BRANCHES</h1>

<div class="branches1"> 
<br>  
<p>2, Main Market, Sunder Nagar,New Delhi,Delhi-110003.<br>Contact No-1800110075, 01124352435, 01124312431.<br>Email-info@inaayat.com<br>Duration:Mon-Sun: 10:00 am - 10:00 pm</p>

<form class="form-style-9"> 
  
<input type="submit" style="color: #800000;text-align: center ;font-family: georgia; font-weight: bold;  background-color: #cc8800;" size="10" maxlength="20" value="Get Directions">

</div>

<div class="branches2">
  <br>
   <p>C - 67, Okhla Industrial Area, Phase 1,New Delhi,Delhi-110020.<br>Contact No-1800110075, 01124352435, 01124312431.<br>info@inaayat.com.<br>Duration-Mon-Sun: 10:00 am - 07:00 pm</p>
<form class="form-style-9"> 
  
<input type="submit" style="color: #800000;text-align: center ;font-family: georgia; font-weight: bold;  background-color: #cc8800;" size="10" maxlength="20" value="Get Directions">

</form>
</form>
</div>
<br>



<br>  
<div class="branches1"> 
<br>  
<p>FC 1, Fourth Floor, Mall of India, Plot No. M-03, Ashok Marg, Sector 18, Noida, Uttar Pradesh 201301.<br>Contact No-0120 623 7000.<br>Email-info@inaayat.com.<br>Duration-Mon-Sun: 10:00 am - 07:00 pm.</p>
<form class="form-style-9"> 
  
<input type="submit" style="color: #800000;text-align: center ;font-family: georgia; font-weight: bold;  background-color: #cc8800;" size="10" maxlength="20" value="Get Directions">

</form>
</div>
<br>


  <div class="branches2">
  <br>
   <p>PVR Anupam Saket, Community Center, Ashok Vihar, Saket, New Delhi, Delhi 110017<br>Contact No-1800110075, 01124352435, 01124312431.<br>info@inaayat.com.<br>Duration-Mon-Sun: 10:00 am - 07:00 pm</p>
   <form class="form-style-9"> 
  
<input type="submit" style="color: #800000;text-align: center ;font-family: georgia; font-weight: bold;  background-color: #cc8800;" size="10" maxlength="20" value="Get Directions">

</form> -->
   <br>
   <br>


<h1>SIGN UP</h1>

<div class="bg2">
<form action="contactform.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" style="padding-left: 15px; font-weight: bold; font-size: 18px; font-family: monospace;">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4" style="padding-left: 15px; font-weight: bold; font-size: 18px; font-family: monospace;">Password</label>
      <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputname" style="padding-left: 15px; font-weight: bold; font-size: 18px; font-family: monospace;">Full Name</label>
    <input type="text" class="form-control" name="name" id="inputname" placeholder="areesha fatima">
  </div>
  <div class="form-group">
    <label for="inputAddress" style="padding-left: 15px; font-weight: bold; font-size: 18px; font-family: monospace;">Address </label>
    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">

      <label for="inputCity" style="padding-left: 15px; font-weight: bold; font-size: 18px; font-family: monospace;">City</label>
      <input type="text" class="form-control" name="city" id="inputCity">
    </div>
    <div class="form-group col-md-4" style="margin-top: 33px; margin-left: 90px">

      <label for="inputState" style="padding-left: 15px; font-weight: bold; font-size: 18px; font-family: monospace;">State</label>
      <select id="inputState" name="state" uclass="form-control">
        <option selected>Choose...</option>
        <option>DELHI</option>
        <option>MUMBAI</option>
         <option>LUCKNOW</option>
          <option>ROORKEE</option>
           <option>BANGALORE</option>
            <option>BIHAR</option>
             <option>GUJARAT</option>


      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputZip" style="padding-left: 15px; font-weight: bold; font-size: 18px; font-family: monospace;">Zip</label>
      <input type="text" name="zip"class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group" style="margin-left:550px;">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck" style="font-weight: bold; font-size: 17px; font-family: monospace;">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" style="margin-left:580px;">Sign in</button>
</form>
</div>
</div>


<div class="spacing">
  <p> .
  </p>
</div>

<h1>WHY YOU SHOULD BE A MEMBER?</h1>

  
<div class="background">
    <div class="transbox">
        <p> every day, more than 11 million guests visit INAAYAT RESTAURANTS around the world.<br> And they do so because our restaurants are known for serving high-quality, great-tasting, and affordable food.<br>Founded in 1954, INAAYAT  is the second demanding among the restaurants in the world.<br> The original HOME OF THE CHICKEN, our commitment to premium ingredients, signature recipes, and family-friendly dining experiences is what has defined our brand for more than 50 successful years.</p>
    </div>
</div>

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









  </html>
