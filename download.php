<?php
	session_start();
	require_once("php/dbconnect.php");

	$results_per_page = 8;
	if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
	$start_from = ($page-1) * $results_per_page;
	$sqldownloads = "SELECT * FROM `downloads` ORDER BY `download_ID` DESC LIMIT $start_from, ".$results_per_page;
	$resultDownloads = $link->query($sqldownloads);			
	
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
                        <li><a href="products.php">產品</a></li>
                        <li><a href="stores.php">經銷商</a></li>
                        <li><a href="display.php">陳列室</a></li>
                        <li><a href="news.php">最新消息</a></li>
                        <li><a href="warranty.php">保修登記</a></li>
                        <li class="active"><a href="download.php">下載中心</a></li>
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
				<h2 class="section-title">下載中心</h2>

							<?php
								if ($resultDownloads->num_rows > 0) {
									while($row = $resultDownloads->fetch_assoc()) {
									
							?>
							<div class="col-md-3 col-sm-6 ">							
								<div class="single-product">
																
									<div class="product-f-image">
											<img src="downloads/<?php echo $row['download_File']?>.jpg" alt="">
											<div onclick="" class="product-hover">
												<a href="downloads/<?php echo $row['download_File']?>.pdf" target="_blank" class="view-details-link"><i class="fa fa-link"></i> 了解更多</a>
											</div>
									</div>
										
										<h2 style="font-size:15px; line-height: 20px;"><a href="downloads/<?php echo $row['download_File']?>.pdf"><?php echo $row['download_Name']?></a></h2>

								</div>
							</div>								
							<?php
									} 
								}	
							?>  

            </div>  				
        </div>
		    <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
						  

							
							<?php 
							$sql = "SELECT COUNT(download_ID) AS total FROM `downloads`";
							$result = $link->query($sql);
							$row = $result->fetch_assoc();
							$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results
							
							if ($page>1){ 
							?>							
                            <li>
                              <a href="download.php?page=<?php echo ($page-1) ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>							
							<?php							
							};
							?>
							
							<?php 
							for ($i=1; $i<=$total_pages; $i++) {
							?>
							
                            <li><a href="download.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
							
							<?php
							};	
							if ($page<$total_pages){
							?>
													
                            <li>
                              <a href="download.php?page=<?php echo ($page+1) ?>" aria-label="Next">
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