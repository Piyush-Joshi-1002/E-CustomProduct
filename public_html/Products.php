<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
    include "assets/php/Connection.php"
?>
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>Crowdline</title>
  <script src="removeBanner.js"></script>
  <style>img[alt="www.000webhost.com"]{display:none};</style>
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link href="assets/css/Customize.css" rel="stylesheet">
  <link href="assets/css/TshirtFonts.css" rel="stylesheet">
  <link href="assets/css/ItemCart.css" rel="stylesheet">
  <link href="assets/css/Style.css" rel="stylesheet">
  <link href="assets/css/priceSection.css" rel="stylesheet">
  <script src="assets/js/html2canvas.js"></script>
  <script src="assets/js/Control.js" type="text/javascript"></script>
</head>
<body>
<!--Show Designes -->
 <section id='ChoicesDesignes'>
    <div id="ShowDesignes">
        
        <h3 class="hny-title mb-0 text-center" style="color:white">Select Primary Designes <span>For Sell Product</span></h3>
        <div id="Designe_Block">
        </div>
        <div id="cancleDiv" onclick="document.getElementById('ShowDesignes').style.display = 'none'">X</div>
    </div>
</section>

<!--//For Choices -->

<section id = 'Tshirt_MarketPlace'>
    <div class="Container" id='Tshirt_MarketPlace_Container'>
        <div class="Rough_div_ForCenter" >
            <h3 class="hny-title mb-0 text-center">Choose <span>Categories</span></h3>
			<div class = "Customize_Row" >
                <div  class = "Rough_div_Customize">
                    <div class="Customize_collumn" onclick="RefranceForNextCoice('F')">
                        <img id="ForFront" class='DirectShow' src="assets/images/Female/longSleeve/ffffff.png">
                        <img id="ForBack" class='HoverShow' src="assets/images/Female/halfSleeve/ffffff.png">
                        <div class='popup_Box'>
                                <h3 class="hny-title mb-0 text-center"><span>For FeMale</span></h3> 
                        </div>
                    
                    </div>
                    <div class="Customize_collumn" onclick="RefranceForNextCoice('M')">
                        <img id="ForFront"  src="assets/images/Male/longSleeve/ffffff.png">
                        <img id="ForBack"  src="assets/images/Male/withoutSleeve/ffffff.png">
                        <div  class='popup_Box'><h3 class="hny-title mb-0 text-center"><span>For Male</span></h3> 
                        </div>
                    </div>
                </div>
            </div>
            <div id="cancleDiv" onclick="document.getElementById('Tshirt_MarketPlace_Container').style.display = 'none'">X</div>
        </div>
    </div>
</section>
 <!--End Show Desigen-->

<section class="w3l-banner-slider-main inner-pagehny">
  <div class="breadcrumb-infhny">

    <div class="top-header-content">

      <header class="tophny-header">
        <div class="container-fluid">
          <div class="top-right-strip row">
            <!--/left-->
            <div class="top-hny-left-content col-lg-6 pl-lg-0">
              <h6>Upto 30% off on All styles , <a href="#" target="_blank"> Click here for <span
                    class="fa fa-hand-o-right hand-icon" aria-hidden="true"></span> <span class="hignlaite">More
                    details</span></a></h6>
            </div>
            <!--//left-->
            <!--/right-->
            <ul class="top-hnt-right-content col-lg-6">

                  <li class="" id="userName">

                    </li>
                    <li class="button-log usernhy" id="NO_Name">
                        <a class="btn-open" href="#">
                            <span class="fa fa-user" aria-hidden="true"></span>
                        </a>
                    </li>
              
            </ul>
            <!--//right-->
            <div class="overlay-login text-left">
                <button type="button"  class="overlay-close1">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
                <div class="wrap">
                    <h5 class="text-center mb-4">Login Now</h5>
                    <p id="userDetailsInfo" class="form-text text-muted">  </p>
                    <div id="login_Signup" class="login-bghny p-md-5 p-4 mx-auto mw-100">
                        <!--/login-form-->

                        <form action="index.php" id="SignInAccount" method="post">
                            <div class="form-group">
                                <p class="login-texthny mb-2">Email address</p>
                                <input type="email" name="SignInEmail" class="form-control" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                    with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <p class="login-texthny mb-2">Password</p>
                                <input type="password" name="SignInPass" class="form-control" 	placeholder="" required="">
                            </div>
                            <div class="form-check mb-2">
                                <div class="userhny-check">
                                    <label class="check-remember container">
                                        <input type="checkbox" class="form-check"> <span
                                            class="checkmark"></span>
                                        <p class="privacy-policy">Remember me</p>
                                    </label>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <button type="submit"  class="submit-login btn mb-4" name="SignInButton">Sign In</button>
                            <button type="CreatAccount" class="submit-login btn mb-4" onclick="CreateAccountVisible()">Creat account</button>
                        </form>
                        <form action="index.php" Id="CreateAccount" method="post">
                            <div class="form-group">
                                <p class="login-texthny mb-2">Enter Your Name</p>
                                <input type="text" name="UserName" class="form-control" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                    with anyone else.</small>
                            </div>

                            <div class="form-group">
                                <p class="login-texthny mb-2">Enter Your Number</p>
                                <input type="number" name="UserNumber" class="form-control" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your number
                                    with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <p class="login-texthny mb-2">Enter Email address</p>
                                <input type="email" name="UserEmail" class="form-control" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                    with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <p class="login-texthny mb-2">Create Password</p>
                                <input type="password" name="Userpassword"class="form-control" placeholder="" required="">
                            </div>
                            <button type="submit" class="submit-login btn mb-4" name="SignUpButton">SignUp</button>
                            <button type="button" class="submit-login btn mb-4" onclick="SignInAccountVisible()">Sign In</button>
                        </form>
                        <!--//login-form-->
                    </div>
                </div>
            </div>
          </div>
        </div>
        <!--/nav-->
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid serarc-fluid">
            <a class="navbar-brand" href="index.html">
              Spry<span class="lohny">S</span>tore</a>
            <!-- if logo is image enable this   
                    <a class="navbar-brand" href="#index.html">
                      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                    </a> -->
            <!--/search-right-->
            <div class="search-right">

              <a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
                <span class="search-text">Search here</span></a>
              <!-- search popup -->


              <div id="search" class="pop-overlay">
                <div class="popup">

                  <form action="#" method="post" class="search-box">
                    <input type="search" placeholder="Keyword" name="search" required="required" autofocus="">
                    <button type="submit" class="btn">Search</button>
                  </form>

                </div>

                <a class="close" href="#">×</a>
              </div>
              <!-- /search popup -->
            </div>
            <!--//search-right-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa fa-bars"> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#" onclick = "document.getElementById('ShowDesignes').style.display = 'block'">Sell Your Designe</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">What We Offer</a>
                </li>

                <li class="nav-item active">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
              </ul>

            </div>
          </div>
        </nav>
        <!--//nav-->
      </header>
      <div class="breadcrumb-contentnhy">
        <div class="container">          <nav aria-label="breadcrumb">
            <h2 class="hny-title text-center"> My Order </h2>
            <ol class="breadcrumb mb-0">
              <li><a href="index.html">Home</a>
                <span class="fa fa-angle-double-right"></span></li>
              <li class="active">Contact</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    </div>
</section>
<section id="Empty">
    <div class="innerEmpty">
        <div class="EmptyMsg"><h1> Currently No Order placed </h1></div>
    </div>
</section>
<section id="cartItems">
    
</section>
<section class="w3l-footer-22">
      <!-- footer-22 -->
      <div class="footer-hny py-5">
          <div class="container py-lg-5">
              <div class="text-txt row">
                  <div class="left-side col-lg-4">
                      <h3><a class="logo-footer" href="index.html">
                            Spry<span class="lohny">S</span>tore</a></h3>
                      <!-- if logo is image enable this   
                                    <a class="navbar-brand" href="#index.html">
                                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                                    </a> -->
                      <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.Vivamus
                          a ligula quam. Ut blandit eu leo non suscipit. </p>
                      <ul class="social-footerhny mt-lg-5 mt-4">

                          <li><a class="facebook" href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                          </li>
                          <li><a class="twitter" href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                          </li>
                          <li><a class="google" href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                          </li>
                          <li><a class="instagram" href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                          </li>
                      </ul>
                  </div>

                  <div class="right-side col-lg-8 pl-lg-5">
                      <h4>Women's Day Special Offer
                        All Branded Sandals are Flat 50% Discount</h4>
                      <div class="sub-columns">
                          <div class="sub-one-left">
                              <h6>Useful Links</h6>
                              <div class="footer-hny-ul">
                                  <ul>
                                      <li><a href="index.html">Home</a></li>
                                      <li><a href="about.html">About</a></li>
                                      <li><a href="#">Blog</a></li>
                                      <li><a href="#" onclick = "document.getElementById('ShowDesignes').style.display = 'block'">Sell Your Designe</a></li>
                                      <li><a href="contact.html">Contact</a></li>
                                  </ul>
                                  <ul>
                                      <li><a href="#">Careers</a></li>
                                      <li><a href="#">Privacy Policy</a></li>
                                      <li><a href="#">Terms and Conditions</a></li>
                                      <li><a href="contact.html">Support</a></li>
                                  </ul>
                              </div>

                          </div>
                          <div class="sub-two-right">
                              <h6>Our Store</h6>
                              <p class="mb-5">49436 Broaddus Honey Court Avenue, Madisonville KY 95020, United States of America</p>

                              <h6>We accept:</h6>
                              <ul>
                                  <li><a class="pay-method" href="#"><span class="fa fa-cc-visa"
                                              aria-hidden="true"></span></a>
                                  </li>
                                  <li><a class="pay-method" href="#"><span class="fa fa-cc-mastercard"
                                              aria-hidden="true"></span></a>
                                  </li>
                                  <li><a class="pay-method" href="#"><span class="fa fa-cc-paypal"
                                              aria-hidden="true"></span></a>
                                  </li>
                                  <li><a class="pay-method" href="#"><span class="fa fa-cc-amex"
                                              aria-hidden="true"></span></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="below-section row">
                  <div class="columns col-lg-6">
                      <ul class="jst-link">
                          <li><a href="#">Privacy Policy </a> </li>
                          <li><a href="#">Term of Service</a></li>
                          <li><a href="contact.html">Customer Care</a> </li>
                      </ul>
                  </div>
                  <div class="columns col-lg-6 text-lg-right">
                      <p>© 2021, Created By Piyush Joshi. All rights reserved. Design by <a href="https://w3layouts.com/" target="_blank">
                              W3Layouts</a>
                      </p>
                  </div>
                  <button onclick="topFunction()" id="movetop" title="Go to top">
                      <span class="fa fa-angle-double-up"></span>
                  </button>
              </div>
          </div>
      </div>
      <!-- //titels-5 -->
      <!-- move top -->
       

      <script>
          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function () {
              scrollFunction()
          };

          function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                  document.getElementById("movetop").style.display = "block";
              } else {
                  document.getElementById("movetop").style.display = "none";
              }
          }

          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
          }
      </script>
      <!-- /move top -->
  </section>
   <script>
    var CartDiv = document.getElementById('cartItems'),innerDiv,ItemImage,ItemDiscription,ItemPrice,ItemQuantity;
    var table = localStorage.getItem('TshirtType')
    <?php
        $ID = $_COOKIE["id"];
        $query = "select * from buyproducts where UserID = ".$ID.";";
        $result = $conn->query($query);
        $i = 0;
        echo "console.log('".$query."');";
        while($row = $result->fetch_assoc())
        {
            echo"document.getElementById('Empty').style.display = 'none';";
            $i += 1;
            echo"CartDiv.innerHTML +=\"<div class='Items' id='cart".$i."'></div>\";";
            echo"innerDiv = document.getElementById('cart".$i."');";
            echo"innerDiv.innerHTML +=\"<div class='ItemImage' id='ItemImage".$i."'></div>\";";
            echo"ItemImage = document.getElementById('ItemImage".$i."');";
            echo"ItemImage.innerHTML +=\"<img src='uploads/".$row['S_NO'].".jpeg' width='100%' height='100%'>\";";
            echo"innerDiv.innerHTML +=\"<div class='ItemDiscription' id='ItemDiscription".$i."'></div>\";";
            echo"ItemDiscription = document.getElementById('ItemDiscription".$i."');";
            echo"ItemDiscription.innerHTML +=\"<h2 id='ItemHeading'>".$row['ProductName']."</h2>\";";
            echo"ItemDiscription.innerHTML +=\"<p class='Paragraph'>".$row['ProductDetails']."</p>\";";
            echo"innerDiv.innerHTML +=\"<div class='ItemPrice' id='ItemPrice".$i."'><h3>Price</h3></div>\";";
            echo"ItemPrice = document.getElementById('ItemPrice".$i."');";
            echo"ItemPrice.innerHTML += \"<p>Rs. ".$row['ProductPrice']."<p>\";";
        }
    ?>

</script> 
  </body>
    <?php
        include "assets/php/signin.php";
    ?>
    <?php
        include "assets/php/MyOrderPhp.php";
    ?>
    <?php
        include "assets/php/forMarketplaceSection.php"
    ?>
  </html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-2.1.4.min.js"></script>
<!--/login-->
<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
  </script>
<!--//login-->
 

<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->
<script src="assets/js/bootstrap.min.js"></script>

