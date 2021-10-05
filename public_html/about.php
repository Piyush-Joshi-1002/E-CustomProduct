<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Crowdline</title>
  <script src="removeBanner.js"></script>
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link href="assets/css/Style.css" rel="stylesheet">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
  <!-- Template CSS -->
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
              <li class="transmitvcart galssescart2 cart cart box_1">
                <form action="#" method="post" class="last">
                  <input type="hidden" name="cmd" value="_cart">
                    <button class="top_transmitv_cart" type="button" onclick="ChqSignIN(3)" name="submit" value="">
                        My Cart
                        <span class="fa fa-shopping-cart"></span>
                    </button>
                </form>
              </li>
              <li class="transmitvcart galssescart2 cart cart box_1">
                <form action="#" method="post" class="last">
                  <input type="hidden" name="cmd" value="_cart">
                    <button class="top_transmitv_cart" type="button" onclick="ChqSignIN(3)" name="submit" value="">
                        My Order
                        <span class="fa fa-shopping-cart"></span>
                    </button>
                </form>
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
                <li class="nav-item active">
                  <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#" onclick = "document.getElementById('ShowDesignes').style.display = 'block'">Sell Your Designe</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">What We Offer</a>
                </li>
               <li class="nav-item">
                  <a class="nav-link" href="about.php">MyOrder</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
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
            <h2 class="hny-title text-center">About Us</h2>
            <ol class="breadcrumb mb-0">
              <li><a href="index.html">Home</a>
                <span class="fa fa-angle-double-right"></span></li>
              <li class="active">About</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
</section>

<section class="w3l-wecome-content-6">
	<!-- /content-6-section -->
	  <div class="ab-content-6-mian py-5">
			 <div class="container py-lg-5">
					<div class="welcome-grids row">
							<div class="col-lg-6 mb-lg-0 mb-5">
									<h3 class="hny-title">
											About Our Spry<span>Store</span></h3>
								<p class="my-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla,
								gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia</p>
								<p class="mb-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla.</p>
								<div class="read">
									<a href="#" class="read-more btn">Shop Now</a>
								</div>	
							</div>
							<div class="col-lg-6 welcome-image">
								<img src="assets/images/2.jpg" class="img-fluid" alt="" />
							</div>	
							
						</div>	
				 
				 </div>
			 </div>
	 </section>
   <!-- //content-6-section -->

  
<section class="w3l-specification-6">
	<!-- /specification-6-->
	  <div class="specification-6-mian py-5">
			 <div class="container py-lg-5">
					<div class="row story-6-grids text-left">
							<div class="col-lg-5 story-gd">
									<img src="assets/images/left2.jpg" class="img-fluid" alt="/">
								</div>
							<div class="col-lg-7 story-gd pl-lg-4">
								<h3 class="hny-title">What We <span>Offer</span></h3>
								<p>Lorem illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit totam animi
									consequatur saepe blanditiis.Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam
									sequi optio consectetur adipisicing elit. Fuga, suscipit totam animi consequatur saepe
									blanditiis.</p>
			
								<div class="row story-info-content mt-md-5 mt-4">

									<div class="col-md-6 story-info">
										<h5> <a href="#">01. Visit Store</a></h5>	
									<p>Lorem illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit totam animi
														consequatur.</p>
												
										
									</div>
									<div class="col-md-6 story-info">
											<h5> <a href="#">02. Add To Cart</a></h5>	
											<p>Lorem illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit totam animi
													consequatur.</p>
									</div>
									<div class="col-md-6 story-info">
											<h5> <a href="#">03. Gift Cards</a></h5>	
											<p>Lorem illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit totam animi
													consequatur.</p>
									</div>
									<div class="col-md-6 story-info">
											<h5> <a href="#">04. Unique shop</a></h5>	
											<p>Lorem illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit totam animi
													consequatur.</p>
									</div>
								</div>
							
							</div>
						
			
			
						</div>
				 </div>
			 </div>
	 </section>
   <!-- //specification-6-->
  
<section class="w3l-services-6">
	<!-- /content-6-section -->
	<div class="services-grids-6 py-5">
		<div class="container py-lg-5">
				<div class="row w3-icon-grid-gap1">
					<div class="col-md-6 w3-icon-grid1">
						<a href="#link">
							<span class="fa fa-codepen" aria-hidden="true"></span>
							<h3>Let your footwear do the talking</h3>
							<div class="clearfix"></div>
						</a>
						<p>Lorem sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia.</p>
					</div>
					<div class="col-md-6 w3-icon-grid1">
						<a href="#link">
							<span class="fa fa-mobile" aria-hidden="true"></span>
							<h3>Trendy celebrity collections</h3>
							<div class="clearfix"></div>
						</a>
						<p>Lorem sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia.</p>
					</div>
					<div class="col-md-6 w3-icon-grid1">
						<a href="#link">
							<span class="fa fa-hourglass" aria-hidden="true"></span>
							<h3>Animation</h3>
							<div class="clearfix"></div>
						</a>
						<p>Lorem sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia.</p>
					</div>
					<div class="col-md-6 w3-icon-grid1">
						<a href="#link">
							<span class="fa fa-modx" aria-hidden="true"></span>
							<h3>Vast collection of Sports shoes</h3>
							<div class="clearfix"></div>
						</a>
						<p>Lorem sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia.</p>
					</div>
					<div class="col-md-6 w3-icon-grid1">
						<a href="#link">
							<span class="fa fa-bar-chart" aria-hidden="true"></span>
							<h3>Uniquely designed collection</h3>
							<div class="clearfix"></div>
						</a>
						<p>Lorem sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia.</p>
					</div>
					<div class="col-md-6 w3-icon-grid1">
						<a href="#link">
							<span class="fa fa-shopping-bag" aria-hidden="true"></span>
							<h3>
									High Quality Footwear</h3>
							<div class="clearfix"></div>
						</a>
						<p>Lorem sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia.</p>
					</div>
					
					
				</div>
		</div>
	</div>
</section>
<!-- //content-6-section -->
<section class="features-4">
	<div class="features4-block py-5">
		<div class="container py-lg-5">
			<h6>We are the best</h6>
			<h3 class="hny-title text-center">What We <span>Offering</span></h3>
			
			<div class="features4-grids text-center row mt-5">
				<div class="col-lg-3 col-md-6 features4-grid">
					<div class="features4-grid-inn">
						<span class="fa fa-bullhorn icon-fea4" aria-hidden="true"></span>
						<h5><a href="#URL">Call Us Anytime</a></h5>
						<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>

					</div>
				</div>
				<div class="col-lg-3 col-md-6 features4-grid sec-features4-grid">
						<div class="features4-grid-inn">
							<span class="fa fa-truck icon-fea4" aria-hidden="true"></span>
							<h5><a href="#URL">Free Shipping</a></h5>
							<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>
	
						</div>
					</div>
					<div class="col-lg-3 col-md-6 features4-grid">
							<div class="features4-grid-inn">
								<span class="fa fa-recycle icon-fea4" aria-hidden="true"></span>
								<h5><a href="#URL">Free Returns</a></h5>
								<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>
		
							</div>
						</div>
						<div class="col-lg-3 col-md-6 features4-grid">
								<div class="features4-grid-inn">
									<span class="fa fa-money icon-fea4" aria-hidden="true"></span>
									<h5><a href="#URL">Secured Payments</a></h5>
									<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>
			
								</div>
							</div>
			</div>
		</div>
	</div>
</section>
<!-- features-4 -->

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
    include "assets/php/CartBox.php"
?>
<?php
    include "assets/php/forMarketplaceSection.php"
?>
 </section></section>
  </body>

  </html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->
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
<!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->
<script src="assets/js/bootstrap.min.js"></script>
