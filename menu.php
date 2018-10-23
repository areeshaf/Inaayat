<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
session_start();


?>


<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">














<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />


  <link rel="stylesheet" href="demo.css">
  <link rel="stylesheet" href="footer-distributed-with-address-and-phones.css">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">







    <link href="https://fastcdn.org/Animate.css/3.4.0/animate.min.css" rel="stylesheet">

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>



    <title>INAAYAT</title>

    

    <style type="text/css">

    .order{
      border-style: none;
    }
  
  .head{
    font-weight: bold;
     background-image: url("head2.jpg");
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
    width: 200px;
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
   

   </style>

  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="#">
    <img src="inaayat.jpg" width="30" height="30" alt="">
  </a>

  <a class="navbar-brand" href="changedfront.php">INAAYAT</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="changedfront.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" id="yes" href="Menu.php">Menu <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="booking.php">Booking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="reviews.php">Reviews</a>
      </li>   
       <li class="nav-item">
        <a class="nav-link " href="http://localhost/inaayat/map.php">Map</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="http://localhost/inaayat/about.php">About Us</a>
      </li>
    <li class="nav-item" style="width: 500px;">                                        

      </li>
       <?php

        
        if (isset($_SESSION['username'])) { 
          echo "<th>hello  </th>".$_SESSION['username'];echo('<form action="logout.php" method="get">');

 echo "<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

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
    </div>
</nav>

   <div class="head">
    <div class="innerHead ">
     <h1 style="font-size: 70px;">MENU </h1>
   </div>
   </div> 

  <table>
<tr>
   <td ><img src="pizza.jpg" style="width: 230px; height: 230px;"></td>
   <td style="size: 230px;"><img src="burger.jpg" style="width: 230px; height: 230px;"></td>
   <td style="size: 230px;"><img src="sandwich.jpg" style="width: 230px; height: 230px;"></td>
   <td style="size: 230px;"><img src="momo.jpg" style="width: 230px; height: 230px;"></td>
   <td style="size: 230px;"><img src="breakfast.jpg" style="width: 230px; height: 230px;"></td>

</tr>
</table>
  </div>
   

   

  <div class="jumbotron jumbo">
    <form action="iiii.php" method="POST" enctype="multipart/form-data">
  <h1 class="display-4">SNACKS</h1><br><br>
 <strong>BISCUITS & SAUSAGE GRAVY</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="BISCUITS & SAUSAGE GRAVY - RS 250" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 250</span></p><br>
Two large biscuits topped with our own hearty, made from scratch sausage gravy, accompanied by two eggs any style and served with hashbrowns.<br><br>

<strong>BREAKFAST PIE</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="BREAKFAST PIE -RS  250" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 250</span></p><br>
A Metro original! Layers of eggs, cheese, mushrooms, onions, peppers and red skin potatoes, served with a side. | Add ham, bacon or sausage.<br><br>

<strong>THE BISSELL BREAKFAST</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="THE BISSELL BREAKFAST -RS 250" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 250</span></p><br>
Two eggs any style, bacon, toast, hasbrowns or grits, and a short stack of pancakes.<br><br>

<strong>HUEVOS RANCHEROS</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="HUEVOS RANCHEROS -RS 250" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 250</span></p><br>
Your choice of eggs served over fried tortilla shells, chorizo sausage, black beans, onions and peppers. Topped with melted cheese, salsa, sour cream, jalapeños and green onions.<br><br>

<hr><p style="font-size: 25px; text-decoration: underline; font-style: italic;"><strong>Eggs Galore</strong></p><br>
<strong>THREE EGG BREAKFAST</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="THREE EGG BREAKFAST -RS 250" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 250</p><br>
Three eggs any style, hashbrowns, toast, and your choice of meat: bacon, sausage patties, sausage links, turkey sausage, or Canadian bacon.<br><br>

<strong>TWO EGG BREAKFAST</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="TWO EGG BREAKFAST - 250" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 250</span></p><br>
Two eggs any style, hashbrowns, toast, and your choice of meat: bacon, sausage patties, sausage links, turkey sausage, or Canadian bacon.<br><br>

<strong>PROTEIN BREAKFAST</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="PROTEIN BREAKFAST - 250" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 250</span></p><br>
Four scrambled egg and your choice of 2 meats: bacon, sausage patties, sausage links, turkey sausage, or Canadian bacon.<br><br>

<strong>EGGS, HASHBROWNS & TOAST</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="EGGS, HASHBROWNS & TOAST - 250" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 250</span></p><br>
Two eggs any style, toast and hashbrowns or grits.



 </div>


 <div class="jumbotron jumbo">
  <h1 class="display-4">MUGHLAI</h1><br><br>
  <p style="font-size: 25px; text-decoration: underline; font-style: italic;"><strong>Non-Vegetarian</strong></p><br>
 <strong>Murgh Malai Kebab</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="Murgh Malai Kebab - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Tender cubes of grilled chicken marinated in mild flavored cream sauce with cashew accent.<br><br>

<strong>Murgh Angare</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="Murgh Angare - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Chicken kebab marinated in a spicy basil, tomato marinade.<br><br>

<strong>Seekh-E-Sikander</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="Seekh-E-Sikander - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Minced lamb mildly flavored with fresh herbs and cooked in a clay oven on skewers.<br><br>

<strong>Murgh Makhmal-E-Kebab</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="Murgh Makhmal-E-Kebab - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Chicken cooked in saffron nutty yogurt marinade.<br><br>

<strong>Parathdar Paneer Tikka</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="Parathdar Paneer Tikka - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Soft cheese and vegetables in a nawabi marinade.<br><br>

<strong>Mughlai Mix Grill</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="Mughlai Mix Grill - 400" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 400</span></p><br>
Combination​ of Tandoori Murgh, Seekh Kebab Badshahi, Salmon Tikka Nawabi and Tandoori Prawns.<br><br>


<hr><p style="font-size: 25px; text-decoration: underline; font-style: italic;"><strong>Vegetarian</strong></p><br>
<strong>Saag Paneer</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="Saag Paneer - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Fried soft cheese in smooth creamy spinach.<br><br>

<strong>Kadhai Paneer</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="Kadhai Paneer - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Two eggs any style, hashbrowns, toast, and your choice of meat: bacon, sausage patties, sausage links, turkey sausage, or Canadian bacon.<br><br>

<strong>Paneer Makhani</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="Paneer Makhani - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Soft​ cheese cooked in a rich creamy tomato sauce flavored with fenugreek.<br><br>

<strong>Bhindi Masala</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="Bhindi Masala - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Eggplant and peas braised in onions and tomatoes.<br><br>
 </div>


 <div class="jumbotron jumbo">
  <h1 class="display-4">ITALIAN</h1><br><br>
 <strong>Pepperoni Classica Pizza</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="Pepperoni Classica Pizza - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Roasted banana peppers, mozzarella, oregano.<br><br>

<strong>Prosciutto + Burrata Pizza</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="Prosciutto + Burrata Pizza - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Fennel seed, arugula, reggiano.<br><br>

<strong>Margherita Pizza</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="Margherita Pizza - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Tomatoes, mozzarella, basil.<br><br>

<strong>Pasta BRAVO</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="Pasta BRAVO - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Grilled chicken, mushrooms, rigatoni, red pepper cream.<br><br>

<strong>Pasta Woozie</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="Pasta Woozie - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Grilled chicken, fettuccine, alfredo, spinach.<br><br>

<strong>Pasta Fra Diavolo</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="Pasta Fra Diavolo - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 400</span></p><br>
Spicy tomato cream sauce, campanelle pasta, choose chicken or shrimp.<br><br>

<strong>Spicy Bay Scallop Marinara</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="Spicy Bay Scallop Marinara - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Capellini, spinach, caramelized onions, artichokes, pesto bread crumbs.<br><br>

<strong>Roasted Turkey + Bacon Sandwich</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="Roasted Turkey + Bacon Sandwich - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</p><br>
Tomatoes, arugula, green onion mayo, avocado aioli, toasted brioche, fresh fruit.<br><br>

 </div>

 <div class="jumbotron jumbo">
  <h1 class="display-4">DESSERT</h1><br><br>
 <strong>PINEAPPLE CRÈME BRÛLÉE</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="PINEAPPLE CRÈME BRÛLÉE - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
A twist on traditional crème brûlée served inside of a pineapple.<br><br>

<strong>CHOCOLATE ISLAND</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="CHOCOLATE ISLAND - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Rich chocolate mousse on a fudge brownie island in chocolate sauce and vanilla bean anglaise.<br><br>

<strong>WARM CHOCOLATE PINEAPPLE UPSIDE-DOWN CAKE</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="WARM CHOCOLATE PINEAPPLE UPSIDE-DOWN CAKE - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
A warm, rich chocolate cake with a chocolate molten center topped with caramelized pineapple, served with raspberry sauce and fresh Island fruit.<br><br>

<strong>SPIKED HOT CHOCOLATE WITH TOASTED MARSHMALLOW</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="SPIKED HOT CHOCOLATE WITH TOASTED MARSHMALLOW - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Choice of RumChata, Kahlúa, Godiva Chocolate Liqueur or Fireball.<br><br>

<strong>COCONUT GRANDE</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="COCONUT GRANDE - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
A coconut lover's dream. Warm coconut cake topped with coconut-pineapple ice cream, fresh pineapple and toasted coconut, served in a fresh coconut.<br><br>

<strong>MANGO SORBET WITH TROPICAL FRUIT</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="MANGO SORBET WITH TROPICAL FRUIT - 400" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 400</span></p><br>
Ice cream with mango and tropical fruits.<br><br>

<strong>VANILLA ICE CREAM WITH CHOCOLATE SAUCE</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="VANILLA ICE CREAM WITH CHOCOLATE SAUCE- 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Ice cream with vannila and choclate sauce.<br><br>

 </div>

 <div class="jumbotron jumbo">
  <h1 class="display-4">BEVERAGES</h1><br><br>
 <strong>ZOMBIE, CALIFORNIA</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="ZOMBIE, CALIFORNIA - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
This combination of Bacardi Black and Barbancourt Rums with Peach Schnapps is deceptively fruity... Okay, so California is not an island, but this magical elixir is still legendary and tropical.<br><br>

<strong>PAINKILLER, BRITISH VIRGIN ISLANDS</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="PAINKILLER, BRITISH VIRGIN ISLANDS - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Pusser's Dark Rum, cream of coconut, pineapple and orange juice, with freshly ground nutmeg. Originated at the Soggy Dollar Bar where patrons swim to the bar to pay for this tasty beverage with wet Washingtons.<br><br>

<strong>ONE LOVE</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="ONE LOVE - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Malibu Banana Rum, pineapple, orange and guava juice shaken together and topped with an Appleton Rum floater. This elixir is made with everything nice and all fruits ripe.<br><br>

<strong>LONG ISLAND ICED TEA</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="LONG ISLAND ICED TEA - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
A classic cocktail sure to deliver a punch with Vodka, Rum, Gin, Tequila, Triple Sec, Sweet & Sour and Coca-Cola.<br><br>

<strong>PINEAPPLE-COCONUT MARTINI</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="PINEAPPLE-COCONUT MARTINI - 400" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 400</span></p><br>
Cruzan Coconut Rum, pineapple juice, grenadine, garnished with rum-infused golden pineapple.<br><br>

<strong>STRAWBERRY DAIQUIRI</strong><p style="float: right; font-weight: bold;"><input type="checkbox" name="order[]" value="STRAWBERRY DAIQUIRI - 350" style="height: 30px; width: 30px;margin-right: 20px;"><span style="font-size: 20px">RS 350</span></p><br>
Strawberries, Castillo Silver Rum, lime and pressed sugarcane juice.<br><br>
 </div>
<button type="submit" class="btn btn-danger btn-lg" style="margin-left: 700px;">Order My Food</button>
</form>






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







    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


 
  
  

  </body>
</html>