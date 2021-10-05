
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

<section id = 'Tshirt_MarketPlace_Container' >
        <div class="Rough_div_ForCenter">
            <h3 class="hny-title mb-0 text-center" style = "color:aliceblue">Choose <span>Categories</span></h3>
			<div class = "Customize_Row"  >
                <div class = "Rough_div_Customize">
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
                        <input type="button" value="Cash on delivery" onclick="saveDataToBuy()"><br>
                        <input type="button" value="Payment using UPI" onclick="saveDataToBuy()">
                        </form>
                    </div>
                </div>
            </div>
            <!--//EndPriceDiv-->
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
              </ul>

            </div>
          </div>
        </nav>
        <!--//nav-->
      </header>
      <div class="breadcrumb-contentnhy">
        <div class="container">
          <nav aria-label="breadcrumb">
            <h2 class="hny-title text-center">Market Place</h2>
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
<!--SECTION FOR Select Catagery--> 
<section class = 'w3l-ecommerce-main'>
   <div id="CustomizeYourOwn">
        <div class="ecom-contenthny py-2 CusomizeYourOwn">

            <div class="container py-lg-2" style="background:aliceblue" >
                <h3 class="hny-title mb-0 text-center" style="color:black; ">Select <span> Your Choice </span></h3>
                <div class = "Customize_Row" >
                    <div  class = "Rough_div_Customize">
                        <div class="Customize_collumn" onclick="SelectedChoices('F')">
                            <img id="ForFront" class='DirectShow' src="assets/images/Female/longSleeve/ffffff.png">
                            <img id="ForBack" class='HoverShow' src="assets/images/Female/halfSleeve/ffffff.png">
                            <div class='popup_Box'>
                                    <h3 class="hny-title mb-0 text-center"><span>For FeMale</span></h3> 
                            </div>
                        </div>
                        <div class="Customize_collumn" onclick="SelectedChoices('M')">
                            <img id="ForFront"  src="assets/images/Male/longSleeve/ffffff.png">
                            <img id="ForBack"  src="assets/images/Male/withoutSleeve/ffffff.png">
                            <div  class='popup_Box'><h3 class="hny-title mb-0 text-center"><span>For Male</span></h3> 
                            </div>
                        </div>
                    </div>
              </div>
            </div>
        </div>
    </div>
</section>

<section class="w3l-ecommerce-main">
	<!-- /products-->
	<div class="ecom-contenthny py-5">
		<div class="container py-lg-5">
			<h3 class="hny-title mb-0 text-center">Popular <span>Products </span></h3>
			<p class="text-center">Handpicked Favourites just for you</p>
			 
			<div class="ecom-products-grids row mt-lg-5 mt-3" id = "Popular_Products">
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2 transmitv">
						<div class="product-image2">
							<a href="#" onclick="ProdutDescription('Female',11)">
								<img class="pic-1 img-fluid" src="FemaleProductForSell/11.jpeg">
								<img class="pic-2 img-fluid" src="FemaleProductForSell/11.jpeg">
							</a>
							<ul class="social">
									<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
							<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="transmitv_item" value="Women Maroon Top">
									<input type="hidden" name="amount" value="899.99">
									<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
										Add to Cart
									</button>
								</form>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#">Music Lover </a></h3>							
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2">
						<div class="product-image2">
							<a href="#" onclick="ProdutDescription('Male',24)">
								<img class="pic-1 img-fluid" src="MaleProductForSell/24.jpeg">
								<img class="pic-2 img-fluid" src="MaleProductForSell/24.jpeg">
							</a>
							<ul class="social">
									<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
									<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="transmitv_item" value="Free Fire full sleeve">
											<input type="hidden" name="amount" value="599.99">
											<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
												Add to Cart
											</button>
										</form>
									</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#">Free Fire full sleeve </a></h3>
						</div>
					</div>

				</div>
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2">
						<div class="product-image2">
							<a href="#">
								<img class="pic-1 img-fluid" src="MaleProductForSell/27.jpeg">
								<img class="pic-2 img-fluid" src="MaleProductForSell/27.jpeg">
							</a>
							<ul class="social">
									<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
									<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="transmitv_item" value="Dark Blue Top">
											<input type="hidden" name="amount" value="799.99">
											<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
												Add to Cart
											</button>
										</form>
									</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#">Pub-G T-shirt </a></h3>
						</div>
					</div>

				</div>
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2">
						<div class="product-image2">
							<a href="#" onclick="ProdutDescription('Female',9)">
								<img class="pic-1 img-fluid" src="FemaleProductForSell/9.jpeg">
								<img class="pic-2 img-fluid" src="FemaleProductForSell/9.jpeg">
							</a>
							<ul class="social">
									<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
									<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="transmitv_item" value="Women Tunic">
											<input type="hidden" name="amount" value="399.99">
											<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
												Add to Cart
											</button>
										</form>
									</div>
						</div>
						<div class="product-content">
                            <h3 class="title"><a href="#">Leave Hear Wild </a></h3>
						</div>
					</div>

				</div>
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2">
						<div class="product-image2">
							<a href="#" onclick="ProdutDescription('Male',22)">
								<img class="pic-1 img-fluid" src="MaleProductForSell/22.jpeg">
								<img class="pic-2 img-fluid" src="MaleProductForSell/22.jpeg">
							</a>
							<ul class="social">
									<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
									<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="transmitv_item" value="Yellow T-Shirt">
											<input type="hidden" name="amount" value="299.99">
											<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
												Add to Cart
											</button>
										</form>
									</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#">DJ aalok</a></h3>
						</div>
					</div>

				</div>
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2">
						<div class="product-image2">
							<a href="#" onclick="ProdutDescription('Female',8)">
								<img class="pic-1 img-fluid" src="FemaleProductForSell/8.jpeg">
								<img class="pic-2 img-fluid" src="FemaleProductForSell/8.jpeg">
							</a>
							<ul class="social">
									<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
									<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="transmitv_item" value="Straight Kurta">
											<input type="hidden" name="amount" value="699.99">
											<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
												Add to Cart
											</button>
										</form>
									</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#">Unicorn </a></h3>
						</div>
					</div>

				</div>
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2">
						<div class="product-image2">
							<a href="#" onclick="ProdutDescription('Male',26)">
								<img class="pic-1 img-fluid" src="MaleProductForSell/26.jpeg">
								<img class="pic-2 img-fluid" src="MaleProductForSell/26.jpeg">
							</a>
							<ul class="social">
									<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
									<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="transmitv_item" value="White T-Shirt">
											<input type="hidden" name="amount" value="599.99">
											<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
												Add to Cart
											</button>
										</form>
									</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#">Free Fire HalfSleeve </a></h3>
						</div>
					</div>

				</div>
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2">
						<div class="product-image2">
							<a href="#" onclick="ProdutDescription('Female',4)" >
								<img class="pic-1 img-fluid" src="FemaleProductForSell/4.jpeg">
								<img class="pic-2 img-fluid" src="FemaleProductForSell/4.jpeg">
							</a>
							<ul class="social">
									<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
									<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="transmitv_item" value="Blue Sweater">
											<input type="hidden" name="amount" value="499.99">
											<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
												Add to Cart
											</button>
										</form>
									</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#">ITs time To Travle</a></h3>
						</div>
					</div>

				</div>

			</div>
			<!-- //row-->
		</div>
	</div>
</section>
<!--//End of Customize -->
<!-- //content-6-section -->
<!--END Section for Select Catagery-->
<?php
    include "assets/php/signin.php"
?>
<?php
    include "assets/php/CartBox.php"
?>
 
 <?php
    include "assets/php/forMarketplaceSection.php"
?>
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
                      <p>© 2020 SpryStore. All rights reserved. Design by <a href="https://w3layouts.com/" target="_blank">
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

