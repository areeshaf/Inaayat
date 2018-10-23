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







    <title>Inaayat-Home Page</title>

    <style type="text/css">
    *{
      padding: 0px;
      margin: 0px;
    }
    body{

      background-color: rgba(127,0,0,1);
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
    .main-div{
      display: table;
      /* width:50%; */
      overflow: hidden;
    }

    .main-div .row{

      /* width:40px; */

    }

    .main-div .left{
      display: table-cell;
      align:center;
      width:45%;
      float:left;
      overflow: hidden;
      margin-top:5%;

    }
    .left img{
      display: table-cell;
      width:100%;
      float:left;
      overflow: hidden;
    }
    .main-div .right{
      display: table-cell;
      float:right ;
      width:45%;
     margin-right:0%;
     margin-top:5%;

    }
    hr {
    display: block;
    height: 2px;
    border: 0;
    border-top: 1px solid #000000;
    margin: 1em 0;
    padding: 0;
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
        <a class="nav-link active" href="http://localhost/inaayat/changedfront.php"><span class="sr-only">(current)</span>Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="http://localhost/inaayat/Menu.php">Menu </a>
      </li>

     
      <li class="nav-item">
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
     <h1 style="font-size: 70px;">INAAYAT </h1>
   </div>
   </div>

   <br>
<center>
 <table style="padding: 20px">
   <tr >
 		<td width="100%" height="100vh"  style="background-color: rgba(234,109,109,0.38); padding:20px">
<!--        <center>Inaayat is a fine dining restaurant located in the heart of New Delhi. The restaurant overlooks one of the most beautiful parks in Delhi, Madison Square Park, and sits at the base of a historic Art Deco building on the corner of 24th Street. Located here since 1998, it just underwent a full-scale renovation and redesign.
 <br>It is considered one of the world’s best restaurants since 2006 according to Restaurant Magazine and has been recently been ranked fourth in this toplist.
       The restaurant has been owned by Asma, Areesha and Marhaba since 2011 and during that time it has evolved considerably, both in food and in experience. Today, the restaurant offers an eight to ten course menu in the main dining room, but guests can also visit the bar for a more abbreviated tasting menu, some light snacks, or simply for a cocktail or glass of wine.
 </center> -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="border: 2px; border-color: black">
  <div class="carousel-inner" style="height: 300px; ">
    <div class="carousel-item active">
      <img class="d-block w-100" src="slide1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="slide2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="slide3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

     </td>
   </tr>



<br>
 </table>

   <table  style="position: 300px; top: 800; bottom: 0; left: 100; right: 0;padding: 10px" cellspacing="10">
     <div class="main-div"  style="display:flex" >
       <br>
       <br>

 	<tr>
 		<td width="300px" height="300px"  style="background-color: rgba(0,0,0,1)">
       <div class="first-pic" >
         <div  class="left" >
           <img src="spices.jpg" alt="spices">
         </div>
 		</td><td width="300px" height="300px" style="  background-color: #d44444">
         <div class="right" style="padding:20px;">
 The spices used in Inaayat are one of the best in the world. The quality is remarkable, the taste and smell are mouth watering. Chefs from all around the world have commented on the amazing taste of these spices and their colors. Moreover, they are handpicked by one of our best tasters and therefore, are surely tasty. 
           </div>
       </div>
 </td><td width="300px" height="300px"  style="background-color: rgba(0,0,0,1)">
       <div class="second-pic">
         <div class="left">
           <img src="pie.jpg" alt="pie">
         </div>
 		</td>

    <td width="300px" height="300px" style="  background-color: #d44444">

         <div class="right" style="padding:20px;">
           The pies prepared in Inaayat are one of the best in the world. The quality is remarkable, the taste and final look are mouth watering. Chefs from all around the world have commented on the amazing taste of all the different pies made here and their colors. Moreover, they are based on the recipes of the owner's grandmother and therefore, are surely tasty. 
                     </div>
       </div>
 </td></tr>
<tr>
  <td> <hr/> </td>
  <td> <hr/> </td>
  <td> <hr/> </td>
  <td> <hr/> </td>
</tr>

 <tr>

 <td width="300px" height="300px"  style="background-color: rgba(0,0,0,1)">
       <div class="third-pic">
         <div class="left">

           <img src="bread.jpg" alt="bread">
         </div>
 		</td><td width="300px" height="300px" style="  background-color: #d44444">
         <div class="right" style="padding:20px;">
           It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum
         </div>
       </div>
 </td>
 <td width="300px" height="300px"  style="background-color: rgba(0,0,0,1)">
       <div class="fourth-pic">
         <div class="left">
           <img src="donut.jpg" alt="donut">
         </div>
 		</td><td width="300px" height="300px" style="     background-color: #d44444;">
         <div class="right" style="padding:20px;">
           It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum
         </div>
       </div>
 </td></tr>
 <tr>
  <td> <hr/> 
</td>
  <td> <hr/> </td>
  <td> <hr/> </td>
  <td> <hr/> </td>
</tr>
 <tr><td width="300px" height="300px"  style="background-color: rgba(0,0,0,1)">
       <div class="fifth-pic">
         <div class="left">
           <img src="vegetable.jpg" alt="vegetable">
         </div>
 		</td><td width="300px" height="300px" style="  background-color: #d44444">
         <div class="right" style="padding:20px;">
           It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum
         </div>
       </div>
 </td><td width="300px" height="300px"  style="background-color: rgba(0,0,0,1)">
       <div class="sixth-pic">
         <div class="left">
           <img src="jelly-beans.jpg" alt="jelly-beans">
         </div>
 		</td><td width="300px" height="300px" style="  background-color: #d44444">
         <div class="right" style="padding:20px;">
           It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum
         </div>
       </div>
 </td></tr>
 <tr>
  <td> <hr/> </td>
  <td> <hr/> </td>
  <td> <hr/> </td>
  <td> <hr/> </td>

</tr>
 <tr>
 <td width="300px" height="300px"  style="background-color: rgba(0,0,0,1)">
       <div class="seventh-pic">
         <div class="left">
           <img src="seekh.jpg" alt="seekh">
         </div>
 		</td><td width="300px" height="300px" style="  background-color: #d44444">
         <div class="right" style="padding:20px;">
           It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum
         </div>
       </div>
 </td><td width="300px" height="300px"  style="background-color: rgba(0,0,0,1)">
       <div class="eighth-pic">
         <div class="left">
           <img class="blur" src="grill.jpg" alt="grill">
         </div>
 		</td><td width="300px" height="300px" style="  background-color: #d44444">
         <div class="right" style="padding:20px;">
           It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum
         </div>
       </div>
 </td></tr>
<tr>
  <td>
    
  </td>
</tr>
     </div>
 	</table>
</center>
<!--  <div class="jumbotron  bg-dark footer " style="color: white; margin-top: 20px;">
  <h1 class="display-4"></h1>
  <p class="lead">CONTACT US:<p>Areesha:58934573 Asma:7585903 Marhaba:894375<br></p></p>
  <p>ADDRESS:abcdefghjhfkjdsnvkjdshvcnkcvlkdsjcnlksjkljfncksj</p>
  <hr><p>2018 Concepts, Inc. All rights reserved. Privacy Policy | Terms and conditions applied</p>
</div> -->




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
