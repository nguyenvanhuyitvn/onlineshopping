<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Online Shop</title>
	<link rel="stylesheet" href="./public/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
	<link rel="stylesheet" href="./public/css/main.css">
	<link rel="stylesheet" href="./public/css/owl.carousel.css">
	<link rel="stylesheet" href="./public/css/owl.theme.css">

</head>
<body>
	<header id="header">
		<div class="top black-bg">
			<div class="container pt-2">
				<div class="row">
					<div class="col-md-12 text-left">
					   <p class="text-white">Welcome to my Shop</p>
					</div>
				</div>
			</div>
		</div>
		<div class="middle-menu">
			<div class="container pt-2">
				<div class="row">
					<div class="col-md-3">
						<a href="#">
							<img src="./public/images/logo.png" alt="" class='img-fluid pt-2'>
						</a>
					</div>
					<div class="col-md-9 ">
						<nav class="navbar navbar-expand-lg navbar-light justify-content-end">
							<ul class="navbar-nav ">
								<li class="nav-item">
									<form action="" method="post">
										<div class="input-group">
											<input type="text" class="form-control" id="search" placeholder="Tìm kiếm...">
											<span class="input-group-btn">
												<button type="submit" class="btn btn-default">Tìm kiếm</button>
											</span>
										</div>
									</form>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><i class="fas fa-shopping-cart mx-2"></i>Cart</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"><i class="fas fa-user mx-2"></i>Register or Login</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-header black-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-sm navbar-light">
							<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="collapsibleNavId">
								<ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
									<li class="nav-item active">
										<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Product</a>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
										<div class="dropdown-menu" aria-labelledby="dropdownId">
											<a class="dropdown-item" href="#">Bread</a>
											<a class="dropdown-item" href="#">Salad</a>
											<a class="dropdown-item" href="#">Sandwich</a>
											<a class="dropdown-item" href="#">Spaghetti</a>
											<a class="dropdown-item" href="#">Steak</a>
										</div>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Blogs</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Contact us</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header><!-- /header -->	
	<main>
		<section class="section-1 ">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="./public/images/slider/slider-1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="./public/images/slider/slider-2.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="./public/images/slider/slider-1.jpg" class="d-block w-100" alt="...">
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
		</section>
		<section class="section-2 banner-area row-col-decrease pt-100 pb-75 clearfix">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="banner-left-side mb-20">
						<div class="single-banner">
							<div class="hover-style">
								<a href="#"><img src="public/images/banner/banner-1.jpg" alt="" style="height: 100%" class="img-fluid"></a>
							</div>
						</div>
					</div>
					</div>
					<div class="col-md-6">
						<div class="banner-right-side mb-20">
							<div class="single-banner mb-20">
								<div class="hover-style">
									<a href="#"><img src="public/images/banner/banner-2.jpg" alt="" class="img-fluid"></a>
								</div>
							</div>
							<div class="single-banner">
								<div class="hover-style">
									<a href="#"><img src="public/images/banner/banner-3.jpg" alt="" class="img-fluid"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-3">
			<?php require_once "./products/topproduct.php"; ?>
		</section>
	</main>
	<script src="./public/js/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="./public/js/bootstrap.min.js"></script>
	<script src="./public/js/main.js" type="text/javascript" charset="utf-8"></script>
	<script src="./public/js/owl.carousel.js" type="text/javascript" charset="utf-8"></script>
	<script>
		$(document).ready(function() {
			$(".owl-carousel").owlCarousel({
			navigation :true,// Show next and prev buttons
			slideSpeed : 300,
			paginationSpeed : 400,
			items : 1,
			itemsDesktop :false,
			itemsDesktopSmall :false,
			itemsTablet:false,
			itemsMobile :false
			});
		});
	</script>
</body>
</html>