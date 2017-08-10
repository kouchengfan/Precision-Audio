 <?php
	session_start();
	require_once("php/dbconnect.php");
	
	// query for getting learn history
	$sqlbrands = "SELECT * FROM `brands`";
	$resultBrands = $link->query($sqlbrands);
			
	$sqlnews = "SELECT * FROM `news`";
	$resultNews = $link->query($sqlnews);
	
	$sqlproducts = "SELECT * FROM  `products` ORDER BY  `Product_ID` DESC LIMIT 10";
	$resultProducts = $link->query($sqlproducts);
	
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
                        <li class="active"><a href="index.php">首頁</a></li>
                        <li> <a href="products.php">產品</a></li>
						<li><a href="stores.php">經銷商</a></li>
                        <li><a href="display.php">陳列室</a></li>
                        <li><a href="news.php">最新消息</a></li>
                        <li><a href="warranty.php">保修登記</a></li>
                        <li><a href="download.php">下載中心</a></li>
                        <li><a href="contact.php">聯絡我們</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="slider-area">
        <div class="zigzag-bottom"></div>
        <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">
            
            <div class="slide-bulletz">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="carousel-indicators slide-indicators">
                                <li data-target="#slide-list" data-slide-to="0" class="active"></li>
                                <li data-target="#slide-list" data-slide-to="1"></li>
                                <li data-target="#slide-list" data-slide-to="2"></li>
                            </ol>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="single-slide">
                        <div class="slide-bg slide-one"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>高級音響產品代理商</h2>
                                                <p>標緻音響有限公司成立於一九九九年，本著提供及推廣優質家庭影音產品為己任，多年來在市場上不遺餘力, 不斷搜羅世界各地最優秀的產品引進市場, 令客戶得到最稱心滿意的服務及產品為原則。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-two"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>高級音響產品代理商</h2>
                                                <p>標緻音響有限公司成立於一九九九年，本著提供及推廣優質家庭影音產品為己任，多年來在市場上不遺餘力, 不斷搜羅世界各地最優秀的產品引進市場, 令客戶得到最稱心滿意的服務及產品為原則。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-three"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>高級音響產品代理商</h2>
                                                <p>標緻音響有限公司成立於一九九九年，本著提供及推廣優質家庭影音產品為己任，多年來在市場上不遺餘力, 不斷搜羅世界各地最優秀的產品引進市場, 令客戶得到最稱心滿意的服務及產品為原則。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>        
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-volume-up"></i>
                        <p>產品展示</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-music"></i>
                        <p>高級視聽</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-signal"></i>
                        <p>專業調音</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-wrench"></i>
                        <p>保修服務</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">最新產品</h2>
                        <div class="product-carousel">
							<?php
								if ($resultProducts->num_rows > 0) {
									while($row = $resultProducts->fetch_assoc()) {
									
							?>						
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="products/<?php echo $row['Product_Pic']?>.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="single-product.php?id=<?php echo $row['Product_ID']?>" class="view-details-link"><i class="fa fa-link"></i> 了解更多</a>
                                    </div>
                                </div>
                                
                                <h2><a href=""><?php echo $row['Product_Name']?></a></h2>
 					
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
    
    <div class="brands-area">
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
                    <div class="latest-product">
                        <h2 class="section-title">最新消息</h2>
                        <div class="product-carousel">
							<?php
								if ($resultNews->num_rows > 0) {
									while($row = $resultNews->fetch_assoc()) {
									
							?>
							
								<div class="single-product">
																
									<div class="product-f-image">
											<img src="news/<?php echo $row['new_File']?>.jpg" alt="">
											<div onclick="" class="product-hover">
												<a href="news/<?php echo $row['new_File']?>.pdf" target="_blank" class="view-details-link"><i class="fa fa-link"></i> 了解更多</a>
											</div>
									</div>
										
										<h2 style="font-size:15px; line-height: 20px;"><a href="news/<?php echo $row['new_Name']?>"><?php echo $row['new_Name']?></a></h2>

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
  </body>
</html>