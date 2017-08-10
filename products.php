 <?php
	session_start();
	require_once("php/dbconnect.php");
	
	// query for getting learn history
	$sqlProductBrand = "SELECT `Product_Brand` , `Product_Series` FROM `products` GROUP BY  `Product_Brand` ASC";
	$resultProductBrand = $link->query($sqlProductBrand);

	
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
                        <li><a href="index.php">首頁</a></li>
                        <li class="active"><a href="products.php">產品</a></li>
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
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">			
				<div class="col-sm-6 col-md-3">
					<div class="left-sidebar">
						<h2>產品分類</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php
								if ($resultProductBrand->num_rows > 0) {
									while($row = $resultProductBrand->fetch_assoc()) {
							?>							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="products.php?productBrand=<?php echo $row['Product_Brand']?>">
											<?php echo $row['Product_Brand']?>
										</a>
									</h4>
								</div>
							</div>
							<?php
									} 
								}	
							?>

						</div><!--/category-products-->
					
					</div>
				</div>
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->

						<?php 
						if(isset($_GET['productBrand'])) {
						?>
							<h2 class="title text-center"><?php echo $_GET['productBrand'];?></h2>
						<?php
						
						$results_per_page = 8;
						if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
						$start_from = ($page-1) * $results_per_page;
						$sqldisplayproducts = "SELECT * FROM `products` WHERE `Product_Brand` = '".$_GET['productBrand']."' ORDER BY `product_ID` DESC LIMIT $start_from, ".$results_per_page;
						$resultx = $link->query($sqldisplayproducts);
	
						?>
						<?php
								if ($resultx->num_rows > 0) {
									while($row = $resultx->fetch_assoc()) {
						?>
							<div class="col-md-3 col-sm-6 ">
								<div class="single-product">
									<div class="product-f-image">
											<img src="products/<?php echo $row['Product_Pic']?>.jpg" alt="">
												<div onclick="" class="product-hover">
													<a href="single-product.php?id=<?php echo $row['Product_ID']?>"  onclick="" class="view-details-link"><i class="fa fa-link"></i> 了解更多</a>
												</div>
											</div>
											
											<a href="single-product.php?id=<?php echo $row['Product_ID']?>"><div class="productinfo text-center">
												<p style="width: 180px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; "><?php echo $row['Product_Name']?></p>
											</div></a>
								</div>	
							</div>	
						<?php
								}
							}
						} else {
						?>
							<h2 class="title text-center">最新產品</h2>						
						<?php
								$sqlproducts = "SELECT * FROM  `products` ORDER BY  `Product_ID` DESC LIMIT 8";
								$resultProducts = $link->query($sqlproducts);
								if ($resultProducts->num_rows > 0) {
									while($row = $resultProducts->fetch_assoc()) {
						?>


							<div class="col-md-3 col-sm-6 ">
								<div class="single-product">
									<div class="product-f-image">
											<img src="products/<?php echo $row['Product_Pic']?>.jpg" alt="">
												<div onclick="" class="product-hover">
													<a href="single-product.php?id=<?php echo $row['Product_ID']?>"  onclick="" class="view-details-link"><i class="fa fa-link"></i> 了解更多</a>
												</div>
											</div>
											
											<a href="single-product.php?id=<?php echo $row['Product_ID']?>" style="text-decoration:none"><div class="productinfo text-center">
												<p style="width: 180px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; "><?php echo $row['Product_Name']?></p>
											</div></a>
								</div>	
							</div>							
							<?php
									} 
								}
						}
						?>												
					</div><!--features_items-->			

            
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
						  

							
							<?php 
							$sql = "SELECT COUNT(product_ID) AS total FROM `products` WHERE `Product_Brand` = '".$_GET['productBrand']."'";
							$result = $link->query($sql);
							$row = $result->fetch_assoc();
							$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results
							
							if ($page>1){ 
							?>							
                            <li>
                              <a href="products.php?productBrand=<?php echo $_GET['productBrand']?>&page=<?php echo ($page-1) ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>							
							<?php							
							};
							?>
							
							<?php 
							for ($i=1; $i<=$total_pages; $i++) {
							?>
							
                            <li><a href="products.php?productBrand=<?php echo $_GET['productBrand']?>&page=<?php echo $i ?>"><?php echo $i ?></a></li>
							
							<?php
							};	
							if ($page<$total_pages){
							?>
													
                            <li>
                              <a href="products.php?productBrand=<?php echo $_GET['productBrand']?>&page=<?php echo ($page+1) ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
							
							<?php
							};
							?>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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
}
  </body>
</html>