
<html >

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>Crowdline</title>
  <script src="removeBanner.js"></script>
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css" rel="stylesheet">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link href="assets/css/Customize.css" rel="stylesheet">
  <link href="assets/css/Style.css" rel="stylesheet">
  <link href="assets/css/tshirtChoice.css" rel="stylesheet">
  <script src="assets/js/Control.js" type="text/javascript"></script>
  <link href="assets/css/priceSection.css" rel="stylesheet">
  <link href="assets/css/Buyoptions.css" rel="stylesheet">
  <link href="assets/css/UploadImage.css" rel="stylesheet">
  <style>img[alt="www.000webhost.com"]{display:none};</style>
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

<script src="assets/js/html2canvas.js"></script>
    <script>
      function doCapture() {
        window.scrollTo(0, 0);

        html2canvas(document.getElementById("tshirt_Container")).then(function (canvas) {
          var ajax = new XMLHttpRequest();
          ajax.open("POST", "save-capture.php", true);
          ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          ajax.send("image=" + canvas.toDataURL("image/jpeg", 0.9));
          console.log(canvas.toDataURL("image/jpeg", 0.9));
          ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
              console.log(this.responseText);
            }
          };
        });
      }
    </script>
<section class="w3l-banner-slider-main inner-pagehny">
  <div class="breadcrumb-infhny">

    <div class="top-header-content">

      <header class="tophny-header">
        <div class="container-fluid">
          <div class="top-right-strip row">
            <!--/left-->
            <div class="top-hny-left-content col-lg-6 pl-lg-0">
              <h6> , <a href="#" target="_blank">  <span
                    class="fa fa-hand-o-right hand-icon" aria-hidden="true"></span> <span class="hignlaite">
                    </span></a></h6>
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
              <li class="transmitvcart galssescart2 cart cart box_1">
                <form action="#" method="post" class="last">
                  <input type="hidden" name="cmd" value="_cart">
                  <input type="hidden" name="display" value="1">
                    <button class="top_transmitv_cart" type="button" onclick="ChqSignIN(3)" name="submit" value="">
                        My Cart
                        <span class="fa fa-shopping-cart"></span>
                    </button>
                </form>
              </li>
            </ul>
            <!--PriceDiv-->
            <div id="AddToCartDiv">
               <div id="close" onclick="document.getElementById('AddToCartDiv').style.display = 'none';">X</div>
                <div id="centerDiv">
                    <h2>Choose Your Payment Mode</h2>
                    <div id="centerBorderDiv">
                        <form action="post">
                        <input type="button" value="Cash on delivery" onclick="saveDataToBuy('C_O_D')"><br>
                        <input type="button" value="Payment using UPI" onclick="saveDataToBuy('Using_UPI')">
                        </form>
                    </div>
                </div>
            </div>
            <!--//EndPriceDiv-->
            <!--//right-->
            <div class="overlay-login text-left" id="wrap">
                    <button type="button"  class="overlay-close1">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                    <div class="wrap">
                        <h5 class="text-center mb-4">Login Now</h5>
                        <p id="userDetailsInfo" class="form-text text-muted">  </p>
                        <div id="login_Signup" class="login-bghny p-md-5 p-4 mx-auto mw-100">
                            <!--/login-form-->

                            <form action="MarketPlace.php" id="SignInAccount" method="post">
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
                            <form action="MarketPlace.php" Id="CreateAccount" method="post">
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
            <a class="navbar-brand" href="index.php">
              	Crowd<span class="lohny">l</span>ine</a>
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
                <li class="nav-item" onclick="ChqSignIN(4)">
                    <a class="nav-link" href="#" >My Order</a>
                 </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="artist_store.php">Your Arts</a>
                </li>
              </ul>

            </div>
          </div>
        </nav>
        <!--//nav-->
      </header>
      <div class="breadcrumb-contentnhy">
        <div class="container">
          <nav aria-label="breadcrumb">
            <h2 class="hny-title text-center">Artist Page</h2>
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
<!--SECTION FOR MARKET PLACE--> 
<section>
      <div class="container">
        <div id="Outsider" >  
            <div id="tshirt_Container" >
                <img  id = "tshirt_Image" src="assets/images/Male/halfSleeve/232121.png" >
                <div id="DisignRange">
                     <img  id='Designes' src = 'assets/images/Disgnes/Tattoo5.png' width='100%' height='100%'>
                     
                </div>
            </div>  
        </div>
    <div id="heading">
        <h1>Upload Your Designes</h1>
    </div>
    <div class="Item">
        <div class="UploadImage">
           <form method="POST" 
              action="" 
              enctype="multipart/form-data"> 
                <label for="files" class="btn"><h5>Click to Select Your Design</h5></label>
                <input id="files" style="visibility:hidden;" type="file" onchange="UploadImgae(event)">
            </form>
        </div>
        
    </div>
     <section>
    <div id="forSellProduct">
        <div class="Item">
            <div class="SaveItems" onclick="document.getElementById('ProductDetailsForm').style.display = 'flex';"> 
                    <h5>Sell My Product</h5>
            </div>
        </div>
    </div>
    <div id="forSellProductMobile">
        <div class="Item">
            <div class="SaveItems" onclick="document.getElementById('ProductDetailsForm').style.display = 'flex';"> 
                    <h5>Sell My Product</h5>
            </div>
        </div>
    </div>
</section>
      <h1>Select Tshirt Color</h1>
      <div id="Color_Box">
          <div class="tshirt-Color" id="color1" onclick="ChangeTshirtColor('232121')"></div>
          <div class="tshirt-Color" id="color2" onclick="ChangeTshirtColor('f00f00')"></div>
          <div class="tshirt-Color" id="color3" onclick="ChangeTshirtColor('f0ff00')"></div>
          <div class="tshirt-Color" id="color4" onclick="ChangeTshirtColor('a0db50')"></div>
          <div class="tshirt-Color" id="color5" onclick="ChangeTshirtColor('fcfddf')"></div>
          <div class="tshirt-Color" id="color6" onclick="ChangeTshirtColor('abcdef')"></div>
          <div class="tshirt-Color" id="color7" onclick="ChangeTshirtColor('fcdcbf')"></div>
          <div class="tshirt-Color" id="color8" onclick="ChangeTshirtColor('cbafed')"></div>
          <div class="tshirt-Color" id="color9" onclick="ChangeTshirtColor('ffffff')"></div>
    </div>
    <div >
        <h2>Change Tshirts</h2>
        <div id="More_Images">
            <div class="T_shirtChoice"  onclick ="ChangeTshirt('halfSleeve')"><img id="halfSleeve" src="assets/images/Male/halfSleeve/232121.png" width="100%" height="100%"></div>
            <div class="T_shirtChoice"  onclick ="ChangeTshirt('longSleeve')"><img id="longSleeve" src="assets/images/Male/longSleeve/232121.png" width="100%" height="100%"></div>
            <div class="T_shirtChoice"  onclick ="ChangeTshirt('withoutSleeve')"><img id="withoutSleeve" src="assets/images/Male/withoutSleeve/232121.png" width="100%" height="100%"></div>
        </div>   
    </div>
      
    <div >
        <h2>Recommended Designs </h2>
        <div id="More_Images_Recomended" style="display:flex; flex-wrap:wrap; justify-content:space-around;">
        </div>   
    </div>
  </div>
<!--Section for Fill Product Details  Form (Use buyoptions.css)-->
<section>
    <div id="ProductDetailsForm">
       <div id="close" onclick="document.getElementById('ProductDetailsForm').style.display = 'none';">X</div>
        <div id="FillDetails">
           <h1>FillUp your Product Details</h1>
           <div id="setCenter">
               <div id="FillForm">
                    
                        <input type="text" id='productName' class="inputBox" placeholder="Enter Product Name" required><br>
                        <textarea class="inputBox" id='productDescription' placeholder="Enter Product Description (Max 280 letters)" required></textarea><br>
                        <h3>Select Price :
                        <select name="price" id='productPrice' class="inputBox" id="price">
                          <option value="250">250</option>
                          <option value="300">300</option>
                          <option value="350">350</option>
                          <option value="400">400</option>
                          <option value="350">450</option>
                          <option value="300">500</option>
                          <option value="350">550</option>
                          <option value="400">600</option>
                            </select>   </h3>
                        <!--Use Control.js for sellMyProduct funciton-->
                        <button type ="submit" id="SellProduct" onclick="ChqSignIN(5)">Sell My Product</button> 
                    
                </div>
            </div>
        </div>
    </div>
</section>    

<!--END Section for Form-->
<?php
    include "assets/php/Extra.php"
?>
<?php
    include "assets/php/signin.php"
?>
<?php
    include "assets/php/CartBox.php"
?>
<script>
    document.getElementById('halfSleeve').src = "assets/images/"+TshirtCatagory+"/halfSleeve/232121.png";
    document.getElementById('longSleeve').src = "assets/images/"+TshirtCatagory+"/longSleeve/232121.png";
    document.getElementById('withoutSleeve').src = "assets/images/"+TshirtCatagory+"/withoutSleeve/232121.png";
    document.getElementById("tshirt_Image").src = "assets/images/"+TshirtCatagory+"/"+TshirtType+"/232121.png";
    document.getElementById('Designes').src = "assets/images/Disgnes/"+Tshirt_Designe;
</script>

</section>

<!--END OF MARKET PLACE-->
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
    <?php
        include "assets/php/signin.php"
    ?>
     <?php
        include "assets/php/forMarketplaceSection.php"
    ?>
  </body>

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


<!-- disable body scroll which navbar is in active -->

<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->
<script src="assets/js/bootstrap.min.js"></script>

