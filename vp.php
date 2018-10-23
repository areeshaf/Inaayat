<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">



<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />


  <link rel="stylesheet" href="demo.css">
  <link rel="stylesheet" href="footer-distributed-with-address-and-phones.css">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">



   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <title>Payment Gateway</title>
  <style type="text/css">
    
    .imagetop{
      margin-left: 550px;
    }

    .leftimg{
      display: inline-block;
      margin-right: 50px;
      margin-left: 300px;

    }

    .leftimg img{
      width: 150px;
      height: 100px;
      margin-top: 20px;
    }

    .jumbotron{
      border-radius: 0;
    }

    .card{
      border-radius: 0;
      font-size: 20px;
      height: 70px;
      cursor: pointer;
    }

    
    

  </style>
</head>
<body>
  <img src="cards.png" class="imagetop"><br><br>


  <div class="jumbotron w-25 p-2 float-left" style="height: 500px;">
  
  <div class="card" id="credit" style="width: 23rem; color: blue;">
  <div class="card-body">
   <p><i class="fas fa-credit-card" style="display: inline-block;"></i> Credit Card</p>
  </div>
</div>

<div class="card" id="debit" style="width: 23rem; margin-top: 20px; background-color: #ebf0f4">
  <div class="card-body">
   <p><i class="fas fa-credit-card" style="display: inline-block;"></i> Debit Card</p>
  </div>
</div>

</div>


  
<form>
  <div class="formm  " style="display: inline-block; margin-top: 40px; margin-left: 120px;">
  <div class="form-group">
    <label for="exampleInputEmail1"><strong>Enter Your Card Number</strong></label>
    <input type="text" class="form-control" placeholder="YOUR CARD NUMBER" style="width: 500px;">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><strong>Enter Name As On Card</strong></label>
    <input type="text" class="form-control" placeholder="FULL NAME AS ON CARD" style="width: 500px">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><strong>Enter Expiry Details</strong></label>
    <input type="text" class="form-control" placeholder="Month" style="width: 100px">/<input type="text" class="form-control" placeholder="Year" style="width: 100px">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><strong>Enter CVV/CVC</strong></label>
  <input type="password" class="form-control" placeholder="CVV/CVC" style="width: 100px">
</div>
<div class="form-group">
    <label for="exampleInputPassword1"><strong>Enter Amount To Be Paid</strong></label>
  <input type="text" class="form-control" placeholder="Amount" style="width: 100px">
</div>
<button type="submit" class="btn btn-primary" id="payment">Make Payment</button>
</div>
</form>

<script type="text/javascript">
  
 $("#credit").click(function(){

 $("#credit").css("background-color","white");
  $("#credit").css("color","blue");

  $("#debit").css("background-color","#ebf0f4");
  $("#debit").css("color","black");



 });


  
 $("#debit").click(function(){

 $("#debit").css("background-color","white");
  $("#debit").css("color","blue");

  $("#credit").css("background-color","#ebf0f4");
  $("#credit").css("color","black");



 });

 $("#payment").click(function(){

   alert("Your Payment Is Successfull");


 });

</script>
 



<footer class="footer-distributed">

      <div class="footer-left">

 <a class="navbar-brand" href="http://localhost/inaayat/changedfront.php" style="display: inline-block;">
    <img src="inaayat.jpg" width="50" height="50" alt="">
  </a>
        <h3 style="display: inline-block;">Inaayat<span>Restaurant</span></h3>

        <p class="footer-links">
          
          <a href="http://localhost/inaayat/changedfront.php">Home</a>
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