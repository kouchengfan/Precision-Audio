 <?php
	session_start();
	require_once("php/dbconnect.php");
	
	// query for getting learn history
	$sqlbrands = "SELECT * FROM `brands`";
	$resultBrands = $link->query($sqlbrands);
			
	$sqlSaleBrands = "SELECT * FROM `sale_brands`";
	$resultSaleBrands = $link->query($sqlSaleBrands);
	
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name = "format-detection" content = "telephone=no">
	<link rel="icon" href="img/icon.png">
    <title>標緻音響有限公司</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
	    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
	<?php include('includes/branding.php');?> <!-- import branding part here-->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">首頁</a></li>
                        <li><a href="products.php">產品</a></li>
                        <li><a href="stores.php">經銷商</a></li>
                        <li class="active"><a href="display.php">陳列室</a></li>
                        <li><a href="news.php">最新消息</a></li>
                        <li><a href="warranty.php ">保修登記</a></li>
                        <li><a href="download.php">下載中心</a></li>
                        <li><a href="contact.php">聯絡我們</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    

					<!-- Full Page Image Background Carousel Header -->
					<header id="myCarousel" class="carousel slide">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
							<li data-target="#myCarousel" data-slide-to="4"></li>
							<li data-target="#myCarousel" data-slide-to="5"></li>
							<li data-target="#myCarousel" data-slide-to="6"></li>
						</ol>

						<!-- Wrapper for Slides -->
						<div class="carousel-inner">
							<div class="item active">
								<!-- Set the first background image using inline CSS below. -->
								<div class="fill" style="background-image:url('showroom/showroom1.jpg');"></div>
								<div class="carousel-caption">
								</div>
							</div>
							<div class="item ">
								<!-- Set the first background image using inline CSS below. -->
								<div class="fill" style="background-image:url('showroom/showroom2.jpg');"></div>
								<div class="carousel-caption">
								</div>
							</div>
							<div class="item ">
								<!-- Set the first background image using inline CSS below. -->
								<div class="fill" style="background-image:url('showroom/showroom3.jpg');"></div>
								<div class="carousel-caption">
								</div>
							</div>
							<div class="item ">
								<!-- Set the first background image using inline CSS below. -->
								<div class="fill" style="background-image:url('showroom/showroom4.jpg');"></div>
								<div class="carousel-caption">
								</div>
							</div>
							<div class="item ">
								<!-- Set the first background image using inline CSS below. -->
								<div class="fill" style="background-image:url('showroom/showroom5.jpg');"></div>
								<div class="carousel-caption">
								</div>
							</div>
							<div class="item ">
								<!-- Set the first background image using inline CSS below. -->
								<div class="fill" style="background-image:url('showroom/showroom6.jpg');"></div>
								<div class="carousel-caption">
								</div>
							</div>
							<div class="item ">
								<!-- Set the first background image using inline CSS below. -->
								<div class="fill" style="background-image:url('showroom/showroom7.jpg');"></div>
								<div class="carousel-caption">
								</div>
							</div>
							
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<span class="icon-prev"></span>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
							<span class="icon-next"></span>
						</a>

					</header>
					
    <div style="padding-top:80px;" class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
					<h2 class="section-title" style="color:#ffffff">代理品牌</h2>
                    <div class="latest-product">
                        <div class="product-carousel">
							<?php
								if ($resultBrands->num_rows > 0) {
									while($row = $resultBrands->fetch_assoc()) {
									
							?>
								<div class="single-product">
									<div class="product-f-image">
										<a target="_blank" href="<?php echo $row['Brand_URL']?>"><img src="brands/<?php echo $row['Brand_Name']?>.jpg" alt="<?php echo $row['Brand_Name']?>"></a>
									</div>
								</div>							
							<?php
									} 
								}	
							?>
		
                        </div>
                    </div>
				</div>
            </div>
        </div>
    </div> <!-- End brands area -->	

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
					<h2 class="section-title">經銷品牌</h2>
                    <div class="latest-product">
                        <div class="product-carousel">
							<?php
								if ($resultSaleBrands->num_rows > 0) {
									while($row = $resultSaleBrands->fetch_assoc()) {
									
							?>
								<div class="single-product">
									<div class="product-f-image">
										<a target="_blank" href="<?php echo $row['Sale_Brands_URL']?>"><img src="brands/<?php echo $row['Sale_Brands_Name']?>.jpg" alt="<?php echo $row['Sale_Brands_Name']?>"></a>
									</div>
								</div>							
							<?php
									} 
								}	
							?>
		
                        </div>
                    </div>
				</div>
            </div>
        </div>
    </div> <!-- End main content area -->

	<?php include('includes/footer.php');?> <!-- import branding part here-->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    </script>
	
</body>
</html>