<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Crowdline</title>
  <script src="removeBanner.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/templatemo-style.css" rel="stylesheet" />
	<style>img[alt="www.000webhost.com"]{display:none};</style>
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body> 
<script>
var x=localStorage.getItem("USERID");
document.cookie="x =" + x ;
</script>
<?php 
session_start();
$id= $_COOKIE['x'];

							 // $id ="sandy@123";
        //                      $host="127.0.0.1";
        //                      $user="root";
        //                      $pass="";
        //                      $dbname="data";
        //                      $con=mysqli_connect($host,$user,$pass,$dbname);
        //                      $sql1 = "SELECT * FROM `image` WHERE 1";
        //                      $result = mysqli_query($con,$sql1); 
if(!empty($id)){
         $servername = "localhost";
         $username = "id15634323_mylocalhost";
         $password = "Mahakal.123@#$";
         $conn = new mysqli($servername, $username, $password,"id15634323_localhost");
         if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
         }
         $sql1 = "SELECT * FROM `maleproductsforsale` WHERE UserID='$id'";
         $result = mysqli_query($conn,$sql1); 
         $FolderName="uploads";
 ?>
	<div class="container" style="width :100%">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<!--<div class="placeholder">-->
		<!--	<div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">-->
		<!--		<div class="tm-header">-->
		<!--			<div class="row tm-header-inner">-->
		<!--				<div class="col-md-6 col-12">-->
		<!--					<img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" /> -->
		<!--					<div class="tm-site-text-box">-->
		<!--						<h1 class="tm-site-title">Simple House</h1>-->
		<!--						<h6 class="tm-site-description">new restaurant template</h6>	-->
		<!--					</div>-->
		<!--				</div>-->
		<!--				<nav class="col-md-6 col-12 tm-nav">-->
		<!--					<ul class="tm-nav-ul">-->
		<!--						<li class="tm-nav-li"><a href="index.html" class="tm-nav-link active">Home</a></li>-->
		<!--						<li class="tm-nav-li"><a href="about.html" class="tm-nav-link">About</a></li>-->
		<!--						<li class="tm-nav-li"><a href="contact.html" class="tm-nav-link">Contact</a></li>-->
		<!--					</ul>-->
		<!--				</nav>	-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</div>-->

		<!--<main>-->
		<!--	<header class="row tm-welcome-section">-->
		<!--		<h2 class="col-12 text-center tm-section-title">Welcome to Simple House</h2>-->
		<!--		<p class="col-12 text-center">Total 3 HTML pages are included in this template. Header image has a parallax effect. You can feel free to download, edit and use this TemplateMo layout for your commercial or non-commercial websites.</p>-->
		<!--	</header>-->
			
			<div class="tm-paging-links">
				<nav>
					<ul>
						<li class="tm-paging-item"><a href="artist_store.php" class="tm-paging-link active">Mens clothes art</a></li>
						<li class="tm-paging-item"><a href="artist_store_women.php" class="tm-paging-link active">Womens clothes art</a></li>
						<!--<li class="tm-paging-item"><a href="#" class="tm-paging-link">Noodle</a></li>-->
					</ul>
				</nav>
			</div>


			<!-- Gallery -->
			<div class="row tm-gallery">
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-pizza" class="tm-gallery-page">
				
							
							<?php
							while($row = mysqli_fetch_array($result)){
								?>

						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<?php
                        echo "
                        ";
                       echo "<img src='".$row['DesigneUsed']."' alt='Image' class='img-fluid tm-gallery-img' /><br>";
                        ?>
<!-- <img src="img/gallery/01.jpg" alt="Image" class="img-fluid tm-gallery-img" /> -->
							<figcaption>
								<h4 class="tm-gallery-title"><?php echo $row['ProductName']; ?></h4>
								<!--<p class="tm-gallery-description"></p>-->
								<!--<p class="tm-gallery-description">Product Quantity </p>-->
								<!--<p class="tm-gallery-description">Coustomer ID :</p>-->
								<!--<p class="tm-gallery-description">Artist_id : </p>-->
								<!--<p class="tm-gallery-price">Price :</p>-->
							</figcaption>
						</figure>
					</article>

				 <!-- gallery page 2 -->
  <?php
 }
}else{
    echo "First of all you have to login yourself";
}
?>

		</div>					
			

				<!-- </div> gallery page 3 -->
			</div>
			<!-- <div class="tm-section tm-container-inner"> -->
				<div class="row">
					<div class="col-md-6">
						<figure class="tm-description-figure">
							<!--<img src="img/img-01.jpg" alt="Image" class="img-fluid" />-->
						</figure>
					</div>
					<div class="col-md-6">
						<div class="tm-description-box"> 
							<!--<h4 class="tm-gallery-title">Maecenas nulla neque</h4>-->
							<!--<p class="tm-mb-45">Redistributing this template as a downloadable ZIP file on any template collection site is strictly prohibited. You will need to <a rel="nofollow" href="https://templatemo.com/contact">talk to us</a> for additional permissions about our templates. Thank you.</p>-->
							<!--<a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>-->
						</div>
					</div>
				</div>
			<!-- </div> -->
		</main>

		<footer class="tm-footer text-center">
			<!--<p>Copyright &copy; 2020 Simple House -->
            
   <!--         | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>-->
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
</body>
</html>