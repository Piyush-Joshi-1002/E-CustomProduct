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
    <script src="removeBanner.js"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Crowdline</title>
  
  <!-- Template CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link href="assets/css/Style.css" rel="stylesheet">
  <link href="assets/css/IndexPageHeader.css" rel="stylesheet">
    <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
  <script type="text/javascript" src="assets/js/advance.js"></script>
    <!-- Template CSS -->
    <style>img[alt="www.000webhost.com"]{display:none};</style>
</head>
<body>
<!--w3l-banner-slider-main-->
<section class="w3l-banner-slider-main">
	<div class="top-header-content">
		<header class="tophny-header">
			<div class="container-fluid">
				<div class="top-right-strip row">
					<!--/left-->
					<div class="top-hny-left-content col-lg-6 pl-lg-0">
						<h6>  <a href="about.php" target="_blank">  <span
									class="fa fa-hand-o-right hand-icon" aria-hidden="true"></span> <span
									class="hignlaite">More details</span></a></h6>
					</div>
					<!--//left-->
					<!--/right-->
                    <ul class="top-hnt-right-content col-lg-6 ">
                        <li class="UserName" id="userName">

                            <ul class="LogoutOption">
                                    <li></li>
                            </ul>	
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
					<!--//right-->
					<div class="overlay-login text-left" id="wrap">
						<button type="button"  class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap" >
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
									<input type="search" placeholder="Keyword" name="search" required="required"
										autofocus="">
									<button type="submit" class="btn">Search</button>
								</form>

							</div>
							<a class="close" href="#">×</a>
						</div>
						<!-- /search popup -->
					</div>
					<!--//search-right-->
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa fa-bars"> </span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
						   
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.php">About</a>
							</li>
							<li class="nav-item">
                               <a class="nav-link" href="#" onclick = "document.getElementById('Tshirt_MarketPlace_Container').style.display = 'block'">Sell Your Designe</a>
                                
                            </li>
                            <li class="nav-item">
								<a class="nav-link" href="about.php">What We Offer</a>
							  </li>
                            <li class="nav-item" onclick="ChqSignIN(4)">
								<a class="nav-link" href="#" >My Order</a>
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
		<div class="bannerhny-content">

			<!--/banner-slider-->
			<div class="content-baner-inf">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="container">
								<div class="carousel-caption">
									<h3>Women's
										Fashion
										<br>50% Off</h3>
									<a href="ChooseCatagery.php" class="shop-button btn">
										Shop Now
									</a>

								</div>
							</div> 
						</div>
						<div class="carousel-item item2">
							<div class="container">
								<div class="carousel-caption">
									<h3>Men's
										Fashion
										<br>60% Off</h3>
									<a href="ChooseCatagery.php" class="shop-button btn">
										Shop Now
									</a>

								</div>
							</div>
						</div>
						<div class="carousel-item item3">
							<div class="container">
								<div class="carousel-caption">
									<h3>Women's
										Fashion
										<br>50% Off</h3>
									<a href="ChooseCatagery.php" class="shop-button btn">
										Shop Now
									</a>

								</div>
							</div>
						</div>
						<div class="carousel-item item4">
							<div class="container">
								<div class="carousel-caption">
									<h3>Men's
										Fashion
										<br>60% Off</h3>
									<a href="ChooseCatagery.php" class="shop-button btn">
										Shop Now
									</a>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<!--//banner-slider-->
			<!--//banner-slider-->
			<div class="right-banner ">
				<div class="right-1">
					<h4>
						Men's
						Fashion
						<br>50% Off</h4>
				</div>
			</div> 

		</div>
    </div>
</section>
<!-- //w3l-banner-slider-main -->
<!-- Customize-->
<section class = 'w3l-ecommerce-main'>
   <!--onclick="ShowChoices('F')"-->
   <div class="ecom-contenthny py-2 CusomizeYourOwn"> 
    <h3 class="hny-title mb-0 text-center" style="color :black;">Customize Your <span>Own T-Shirt</span></h3>
		
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" id="Carousel_Inner">
            <div class="item active Customize_Tshirt" onclick="ShowChoices('M')">
              <img src="assets/images/Man.png" class="Crousal_Image" alt="Los Angeles">
            </div>

            <div class="item Customize_Tshirt" onclick="ShowChoices('F')">
              <img src="assets/images/Woman.png" class="Crousal_Image" alt="Chicago">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
</section>
<!--//End of Customize -->
<!-- //content-6-section -->

<section class="w3l-content-w-photo-6">
	<!-- /specification-6-->
	  <div class="content-photo-6-mian py-5">
			 <div class="container py-lg-5">
					<div class="align-photo-6-inf-cols row">
						
						<div class="photo-6-inf-right col-lg-6">
								<h3 class="hny-title text-left">All Branded Men's Suits are Flat <span>30% Discount</span></h3>
								<p>Visit our shop to see amazing creations from our designers.</p>
								<a href="ChooseCatagery.php" class="read-more btn">
										Shop Now
								</a>
						</div>
						<div class="photo-6-inf-left col-lg-6" style="cursor:pointer;" onclick="location.href = 'ChooseCatagery.php';">
								<img src="assets/images/1.jpg" class="img-fluid" alt="">
						</div>
					</div>
			 </div>
		</div>
            
</section>
<!-- //specification-6-->

<!--MARKET PLACE-->
<section>
<!--
    <div id="MarketPlace">
        <img class = 'background' src="assets/images/2.jpg">
        <div class="For_Center">
            <h3 class="hny-title mb-0 text-center">Select Designe <span>For Tshirt</span></h3>
			
            <div class="rows">
                <div onclick="document.getElementById('ShowDesignes').style.display = 'block'" class= "collumns"><img src="assets/images/Disgnes/Tattoo1.png"><h4>View More</h4></div>
                <div onclick="document.getElementById('ShowDesignes').style.display = 'block'" class= "collumns"><img <?php
    include "assets/php/TshirtCustomBlock.php"
?>
 <?php
        include "assets/php/CartBox.php"
    ?>src="assets/images/Disgnes/Tattoo2.png"><h4>View More</h4></div>
                <div onclick="document.getElementById('ShowDesignes').style.display = 'block'" class= "collumns"><img src="assets/images/Disgnes/tattoo3.PNG"><h4>View More</h4></div>
            </div>
            <div class="rows">
                <div onclick="document.getElementById('ShowDesignes').style.display = 'block'" class= "collumns"><img src="assets/images/Disgnes/Tattoo4.png"><h4>View More</h4></div>
                <div onclick="document.getElementById('ShowDesignes').style.display = 'block'" class= "collumns"><img src="assets/images/Disgnes/Tattoo5.png"><h4>View More</h4></div>
                <div onclick="document.getElementById('ShowDesignes').style.display = 'block'" class= "collumns"><img src="assets/images/Disgnes/Tattoo6.png"><h4>View More</h4></div>
            </div>
        </div>
    </div>
-->
</section>
<!-- END OF MARKET PLACE-->
<section id='ChoicesDesignes'>
    <div id="ShowDesignes">
        
        <h3 class="hny-title mb-0 text-center" style="color:white">Select Primary Designes <span>For Sell Product</span></h3>
        <div id="Designe_Block">
        </div>
        <div id="cancleDiv" onclick="document.getElementById('ShowDesignes').style.display = 'none'">X</div>
    </div>
</section>

<!--//For Choices -->

<section id='Tshirt_MarketPlace'>
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
<!--//END Choices-->
<!-- //Customize // -->
<!--//Choices For Customize//-->
<section id='ChoicesForCustomize'>
    
    <div id="ShowChoicesForCustomize">
        <h3 class="hny-title mb-0 text-center" style="color:white">Select T-shirt <span>For Customize</span></h3>
        <div id="insideCenterBox">
            <div id="Option1" onclick="RedirectToCustomeProductPage('halfSleeve')" class="Options"><img id = 'Option1Img' src="assets/images/Female/halfSleeve/ffffff.png" width="100%" height="100%"></div>
            <div id="Option2" onclick="RedirectToCustomeProductPage('longSleeve')" class="Options"><img id = 'Option2Img' src="assets/images/Female/longSleeve/ffffff.png" width="100%" height="100%"></div>
            <div id="Option3" onclick="RedirectToCustomeProductPage('withoutSleeve')" class="Options"><img id = 'Option3Img' src="assets/images/Female/withoutSleeve/ffffff.png" width="100%" height="100%"></div>
        </div>
        <div id="cancleDiv" onclick="document.getElementById('ShowChoicesForCustomize').style.display = 'none'">X</div>

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
							<!--<form action="#" method="post">-->
							<!--		<input type="hidden" name="cmd" value="_cart">-->
							<!--		<input type="hidden" name="add" value="1">-->
							<!--		<input type="hidden" name="transmitv_item" value="Women Maroon Top">-->
							<!--		<input type="hidden" name="amount" value="899.99">-->
									<div type="submit" class="transmitv-cart ptransmitv-cart add-to-cart" onclick = "ChqSignIN(0)">
										Add to Cart
									</div>
									
								<!--</form>-->
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
							<!--<form action="#" method="post">-->
							<!--		<input type="hidden" name="cmd" value="_cart">-->
							<!--		<input type="hidden" name="add" value="1">-->
							<!--		<input type="hidden" name="transmitv_item" value="Women Maroon Top">-->
							<!--		<input type="hidden" name="amount" value="899.99">-->
									<div type="submit" class="transmitv-cart ptransmitv-cart add-to-cart" onclick = "ChqSignIN(0)">
										Add to Cart
									</div>
									
								<!--</form>-->
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
							<!--<form action="#" method="post">-->
							<!--		<input type="hidden" name="cmd" value="_cart">-->
							<!--		<input type="hidden" name="add" value="1">-->
							<!--		<input type="hidden" name="transmitv_item" value="Women Maroon Top">-->
							<!--		<input type="hidden" name="amount" value="899.99">-->
									<div type="submit" class="transmitv-cart ptransmitv-cart add-to-cart" onclick = "ChqSignIN(0)">
										Add to Cart
									</div>
									
								<!--</form>-->
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
							<!--<form action="#" method="post">-->
							<!--		<input type="hidden" name="cmd" value="_cart">-->
							<!--		<input type="hidden" name="add" value="1">-->
							<!--		<input type="hidden" name="transmitv_item" value="Women Maroon Top">-->
							<!--		<input type="hidden" name="amount" value="899.99">-->
									<div type="submit" class="transmitv-cart ptransmitv-cart add-to-cart" onclick = "ChqSignIN(0)">
										Add to Cart
									</div>
									
								<!--</form>-->
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
							<!--<form action="#" method="post">-->
							<!--		<input type="hidden" name="cmd" value="_cart">-->
							<!--		<input type="hidden" name="add" value="1">-->
							<!--		<input type="hidden" name="transmitv_item" value="Women Maroon Top">-->
							<!--		<input type="hidden" name="amount" value="899.99">-->
									<div type="submit" class="transmitv-cart ptransmitv-cart add-to-cart" onclick = "ChqSignIN(0)">
										Add to Cart
									</div>
									
								<!--</form>-->
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
							<!--<form action="#" method="post">-->
							<!--		<input type="hidden" name="cmd" value="_cart">-->
							<!--		<input type="hidden" name="add" value="1">-->
							<!--		<input type="hidden" name="transmitv_item" value="Women Maroon Top">-->
							<!--		<input type="hidden" name="amount" value="899.99">-->
									<div type="submit" class="transmitv-cart ptransmitv-cart add-to-cart" onclick = "ChqSignIN(0)">
										Add to Cart
									</div>
									
								<!--</form>-->
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
							<!--<form action="#" method="post">-->
							<!--		<input type="hidden" name="cmd" value="_cart">-->
							<!--		<input type="hidden" name="add" value="1">-->
							<!--		<input type="hidden" name="transmitv_item" value="Women Maroon Top">-->
							<!--		<input type="hidden" name="amount" value="899.99">-->
									<div type="submit" class="transmitv-cart ptransmitv-cart add-to-cart" onclick = "ChqSignIN(0)">
										Add to Cart
									</div>
									
								<!--</form>-->
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
							<!--<form action="#" method="post">-->
							<!--		<input type="hidden" name="cmd" value="_cart">-->
							<!--		<input type="hidden" name="add" value="1">-->
							<!--		<input type="hidden" name="transmitv_item" value="Women Maroon Top">-->
							<!--		<input type="hidden" name="amount" value="899.99">-->
									<div type="submit" class="transmitv-cart ptransmitv-cart add-to-cart" onclick = "ChqSignIN(0)">
										Add to Cart
									</div>
									
								<!--</form>-->
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
<!-- //products-->
<!--<section class="w3l-content-5">-->
	<!-- /content-6-section -->
<!--	<div class="content-5-main">-->
<!--		<div class="container">-->
<!--			<div class="content-info-in row">-->
<!--				<div class="content-gd col-md-6 offset-lg-3 text-center">-->
<!--					<h3 class="hny-title two">-->
<!--						Tons of Products & Options to-->
<!--						<span>change</span></h3>-->
<!--					<p>Ea consequuntur illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit totam-->
<!--						animi consequatur saepe blanditiis.Lorem ipsum dolor sit amet,Ea consequuntur illum facere-->
<!--						aperiam sequi optio consectetur adipisicing elit..</p>-->
<!--					<a href="ChooseCatagery.php" class="read-more-btn2 btn">-->
<!--						Shop Now-->
<!--					</a>-->

<!--				</div>-->

<!--			</div>-->

<!--		</div>-->
<!--	</div>-->
<!--</section>-->
<!-- //content-6-section -->
<!--<section class="w3l-post-grids-6">-->
	<!-- /post-grids-->
<!--	<div class="post-6-mian py-5">-->
<!--		<div class="container py-lg-5">-->
<!--				<h3 class="hny-title text-center mb-0 ">Latest Blog <span>Posts</span></h3>-->
<!--				<p class="mb-5 text-center">Handpicked Favourites just for you</p>-->
<!--			<div class="post-hny-grids row mt-5">-->
<!--				<div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">-->
<!--					<a href="#">-->
<!--						<figure>-->
<!--							<img class="img-fluid" src="assets/images/bg1.jpg" alt="blog-image">-->
<!--						</figure>-->
<!--					</a>-->

<!--					<div class="blog-thumbhny-caption">-->
<!--						<ul class="blog-info-list">-->
<!--							<li><a href="#admin">By admin</a></li>-->
<!--							<li class="date-post">-->
<!--								Aug 10, 2020</li>-->
<!--						</ul>-->
<!--						<h4><a href="#">Here to bring your life style to the next level.</a></h4>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">-->
<!--					<a href="#">-->
<!--						<figure>-->
<!--							<img class="img-fluid" src="assets/images/bg2.jpg" alt="blog-image">-->
<!--						</figure>-->
<!--					</a>-->
<!--					<div class="blog-thumbhny-caption">-->
<!--						<ul class="blog-info-list">-->
<!--							<li><a href="#admin">By admin</a></li>-->
<!--							<li class="date-post">-->
<!--								Aug 10, 2020</li>-->
<!--						</ul>-->
<!--						<h4><a href="#">Here to bring your life style to the next level.</a></h4>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">-->
<!--					<figure>-->
<!--						<img class="img-fluid" src="assets/images/bg3.jpg" alt="blog-image">-->
<!--					</figure>-->
<!--					<div class="blog-thumbhny-caption">-->
<!--						<ul class="blog-info-list">-->
<!--							<li><a href="#admin">By admin</a></li>-->
<!--							<li class="date-post">-->
<!--								Aug 10, 2020</li>-->
<!--						</ul>-->
<!--						<h4><a href="#">Here to bring your life style to the next level.</a></h4>-->
<!--					</div>-->
<!--				</div>-->

<!--				<div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">-->
<!--					<figure>-->
<!--						<img class="img-fluid" src="assets/images/bg4.jpg" alt="blog-image">-->
<!--					</figure>-->
<!--					<div class="blog-thumbhny-caption">-->
<!--						<ul class="blog-info-list">-->
<!--							<li><a href="#admin">By admin</a></li>-->
<!--							<li class="date-post">-->
<!--								Aug 10, 2020</li>-->
<!--						</ul>-->
<!--						<h4><a href="#">Here to bring your life style to the next level.</a></h4>-->
<!--					</div>-->
<!--				</div>-->

<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->
<!-- //post-grids-->
<section class="w3l-customers-sec-6">
	<div class="customers-sec-6-cintent py-5">
		<!-- /customers-->
		<div class="container py-lg-5">
				<h3 class="hny-title text-center mb-0 ">Customers <span>Love</span></h3>
				<p class="mb-5 text-center">What People Say</p>
			<div class="row customerhny my-lg-5 my-4">
				<div class="col-md-12">
					<div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">

						<ol class="carousel-indicators">
							<li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#customerhnyCarousel" data-slide-to="1"></li>
						</ol>
						<!-- Carousel items -->
						<div class="carousel-inner">

							<div class="carousel-item active">
								<div class="row">
									<div class="col-md-3">
										<div class="customer-info text-center">
											<div class="feedback-hny">
												<span class="fa fa-quote-left"></span>
												<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
													adipisicing elit. Labore rem, dicta assumenda mollitia molestias
													quas nihil quasis.</p>
											</div>
											<div class="feedback-review mt-4">
												<img src="assets/images/c1.jpg" class="img-fluid" alt="">
												<h5>Smith Roy</h5>

											</div>
										</div>
									</div>
									<div class="col-md-3">
											<div class="customer-info text-center">
													<div class="feedback-hny">
														<span class="fa fa-quote-left"></span>
														<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
															adipisicing elit. Labore rem, dicta assumenda mollitia molestias
															quas nihil quasis.</p>
													</div>
													<div class="feedback-review mt-4">
														<img src="assets/images/c2.jpg" class="img-fluid" alt="">
														<h5>Lora Grill</h5>
		
													</div>
												</div>
									</div>
									<div class="col-md-3">
											<div class="customer-info text-center">
													<div class="feedback-hny">
														<span class="fa fa-quote-left"></span>
														<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
															adipisicing elit. Labore rem, dicta assumenda mollitia molestias
															quas nihil quasis.</p>
													</div>
													<div class="feedback-review mt-4">
														<img src="assets/images/c3.jpg" class="img-fluid" alt="">
														<h5>Laura Sten</h5>
		
													</div>
												</div>
									</div>
									<div class="col-md-3">
											<div class="customer-info text-center">
													<div class="feedback-hny">
														<span class="fa fa-quote-left"></span>
														<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
															adipisicing elit. Labore rem, dicta assumenda mollitia molestias
															quas nihil quasis.</p>
													</div>
													<div class="feedback-review mt-4">
														<img src="assets/images/c4.jpg" class="img-fluid" alt="">
														<h5>John Lee</h5>
		
													</div>
												</div>
									</div>
								</div>
								<!--.row-->
							</div>
							<!--.item-->

							<div class="carousel-item">
								<div class="row">
									<div class="col-md-3">
											<div class="customer-info text-center">
													<div class="feedback-hny">
														<span class="fa fa-quote-left"></span>
														<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
															adipisicing elit. Labore rem, dicta assumenda mollitia molestias
															quas nihil quasis.</p>
													</div>
													<div class="feedback-review mt-4">
														<img src="assets/images/c4.jpg" class="img-fluid" alt="">
														<h5>John Lee</h5>
		
													</div>
												</div>
									</div>
									<div class="col-md-3">
											<div class="customer-info text-center">
													<div class="feedback-hny">
														<span class="fa fa-quote-left"></span>
														<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
															adipisicing elit. Labore rem, dicta assumenda mollitia molestias
															quas nihil quasis.</p>
													</div>
													<div class="feedback-review mt-4">
														<img src="assets/images/c3.jpg" class="img-fluid" alt="">
														<h5>Laura Sten</h5>
		
													</div>
												</div>
									</div>
									<div class="col-md-3">
											<div class="customer-info text-center">
												<div class="feedback-hny">
													<span class="fa fa-quote-left"></span>
													<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
														adipisicing elit. Labore rem, dicta assumenda mollitia molestias
														quas nihil quasis.</p>
												</div>
												<div class="feedback-review mt-4">
													<img src="assets/images/c1.jpg" class="img-fluid" alt="">
													<h5>Smith Roy</h5>
	
												</div>
											</div>
										</div>
										<div class="col-md-3">
												<div class="customer-info text-center">
														<div class="feedback-hny">
															<span class="fa fa-quote-left"></span>
															<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
																adipisicing elit. Labore rem, dicta assumenda mollitia molestias
																quas nihil quasis.</p>
														</div>
														<div class="feedback-review mt-4">
															<img src="assets/images/c2.jpg" class="img-fluid" alt="">
															<h5>Lora Grill</h5>
			
														</div>
													</div>
										</div>
								</div>
								<!--.row-->
							</div>
							<!--.item-->

						</div>
						<!--.carousel-inner-->
					</div>
					<!--.Carousel-->

				</div>
			</div>
		</div>
	</div>
</section>
<!-- //customers-->
<section class="w3l-subscription-6">
	<!--/customers -->
	<div class="subscription-infhny">
		<div class="container-fluid">

			<div class="subscription-grids row">

				<div class="subscription-right form-right-inf col-lg-6 p-md-5 p-4">
					<div class="p-lg-5 py-md-0 py-3">
						<h3 class="hny-title">Join us for FREE to get instant <span>email updates!</span></h3>
							<p>Subscribe and get notified at first on the latest update and offers!</p>

						<form action="#" method="post" class="signin-form mt-lg-5 mt-4">
							<div class="forms-gds">
								<div class="form-input">
									<input type="email" name="" placeholder="Your email here" required="">
								</div>
								<div class="form-input"><button class="btn">Join</button></div>
							</div>
						</form>
					</div>
				</div>
				<div class="subscription-left forms-25-info col-lg-6 ">

				</div>
			</div>

			<!--//customers -->
		</div>
</section>
<!-- //customers-6-->


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
                                      <li><a href="#" onclick = "document.getElementById('Tshirt_MarketPlace_Container').style.display = 'block'">Sell Your Designe</a></li>
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
    include "assets/php/forMarketplaceSection.php"
?>
  
<?php
    include "assets/php/CartBox.php"
?>
       <?php
        include "assets/php/signin.php";
    ?>
<?php
    include "assets/php/TshirtCustomBlock.php"
?>

    </section>
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

<!--pop-up-box-->
<script src="assets/js/jquery.magnific-popup.js"></script>
<!--//pop-up-box-->
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

  });
</script>
<!--//search-bar-->
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

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-2.1.4.min.js"></script>
<!--/login-->
