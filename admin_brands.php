
<?php
	session_start();
	
	require_once("php/dbconnect.php");
	
		
	if (isset($_POST['uploadBrand']))
	{

	   $error = false;
	   if (empty($_POST["brandName"])) {
		   $EnameErr = "Brand Name is required";
		   $error = true;
	   }
	   
	   if (empty($_POST["brandURL"])) {
		   $EnameErr = "Brand URL is required";
		   $error = true;
	   }
	   
	   if (empty($_POST["type"])) {
		   $EnameErr = "Brand Type is required";
		   $error = true;
	   }
	   
	   $filename = $_FILES["fileToUpload"]["name"];
	   $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	
		
	   if (empty($file_basename)) {
		   $EnameErr = "File is required";
		   $error = true;
		}
			
		$filename = $_FILES["fileToUpload"]["name"];
		$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
		$file_ext = substr($filename, strripos($filename, '.')); // get file name
		$filesize = $_FILES["fileToUpload"]["size"];
		$typeError = false;
		$sizeError = false;
		$exsError = false;
		
	if ($file_ext != ".jpg")
	{	
		
		$typeError = true;

	}
	
	if ($filesize > 12000000){
		
		$sizeError = true;
		
	}
	
	$brandName = $_POST['brandName'];
	$brandURL = $_POST['brandURL'];
	$brandType = $_POST['type'];		
	$filename = $_FILES["fileToUpload"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["fileToUpload"]["size"];
	$allowed_file_types = array('.jpg');		
	$newfilename = $brandName. $file_ext;	
	
	if (file_exists("brands/" . $newfilename))
	{
		$exsError = true;
	}	
	
	
	
	if ($error) {
	?>
		<html>
		<head>
			<script src="sweetAlert/sweetalert.min.js"></script> 
			<link rel="stylesheet" type="text/css" href="sweetAlert/sweetalert.css">
		</head>
		</html>			
		<script>
			swal("Error!", "請填寫所有資料", "error")
	   	</script>   			
	<?php
		
	} elseif ($typeError){
		
			?>
				<html>
				<head>
					<script src="sweetAlert/sweetalert.min.js"></script> 
					<link rel="stylesheet" type="text/css" href="sweetAlert/sweetalert.css">
				</head>
				</html>			
				<script>
					swal("Error!", "檔案類型不符", "error")
				</script> 		
			<?php		
		
		
	}elseif ($sizeError){
		
			?>
				<html>
				<head>
					<script src="sweetAlert/sweetalert.min.js"></script> 
					<link rel="stylesheet" type="text/css" href="sweetAlert/sweetalert.css">
				</head>
				</html>			
				<script>
					swal("Error!", "上傳文件超出大小限制", "error")
				</script> 		
			<?php
	
	} elseif($exsError) {

				
			?>
				<html>
				<head>
					<script src="sweetAlert/sweetalert.min.js"></script> 
					<link rel="stylesheet" type="text/css" href="sweetAlert/sweetalert.css">
				</head>
				</html>			
				<script>
					swal("Error!", "同名品牌已存在", "error")
				</script> 		
			<?php		
	
	
	
	
	}else {
		
	
	
		$brandName = $_POST['brandName'];
		$brandURL = $_POST['brandURL'];
		$brandType = $_POST['type'];				
	 	
	 	if ($brandType == 'agent') {
			$sqlAddBrand = "INSERT INTO `brands` (`Brand_Name`,`Brand_Pic`,`Brand_URL`) 
			VALUES ('$brandName', '$brandName', '$brandURL')";
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "brands/" . $newfilename);
			if ($link->query($sqlAddBrand) === TRUE) {
			?>
				<html>
				<head>
					<script src="sweetAlert/sweetalert.min.js"></script> 
					<link rel="stylesheet" type="text/css" href="sweetAlert/sweetalert.css">
				</head>
				</html>	
				<script>
					swal("代理品牌已成功添加", "'<?php echo $brandName; ?>' 已添加", "success");	
				</script>
			<?php
			} 						
	 	} elseif ($brandType == 'sale') {
	 		$sqlAddBrand = "INSERT INTO `sale_brands` (`Sale_Brands_Name`,`Sale_Brands_Pic`,`Sale_Brands_URL`) 
	 		VALUES ('$brandName', '$brandName', '$brandURL')";
			$newfilename = $brandName. $file_ext;
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "brands/" . $newfilename);

			if ($link->query($sqlAddBrand) === TRUE) {
			?>
				<html>
				<head>
					<script src="sweetAlert/sweetalert.min.js"></script> 
					<link rel="stylesheet" type="text/css" href="sweetAlert/sweetalert.css">
				</head>
				</html>	
				<script>
					swal("經銷品牌已成功添加", "'<?php echo $brandName; ?>' 已添加.", "success");	
				</script>
			<?php		  
			} 	
 		}

	}   

	}
		
		
		
		
		
	if (isset($_POST['deleteBrand'])) {
	$deleteBrand = $_POST["deleteBrand"];
    $sqldeleteBrand = "DELETE FROM  `brands` WHERE  `Brand_Name` =  '$deleteBrand'";
	$cover = $deleteBrand.'.jpg';  
   	
	$link->query($sqldeleteBrand);
	unlink("brands/".iconv('utf-8','big5', $cover));
	
	

		?>
			<html>
			<head>
				<script src="sweetAlert/sweetalert.min.js"></script> 
				<link rel="stylesheet" type="text/css" href="sweetAlert/sweetalert.css">
			</head>
			</html>	
			<script>
				swal("所選品牌已刪除", "", "success");	
			</script>
		<?php
	
	}

	if (isset($_POST['deleteSaleBrand'])) {
	$deleteSaleBrand = $_POST["deleteSaleBrand"];
    $sqldeleteSaleBrand = "DELETE FROM  `sale_brands` WHERE  `Sale_Brands_Name` =  '$deleteSaleBrand'";
	$cover = $deleteSaleBrand.'.jpg'; 
     	
	$link->query($sqldeleteSaleBrand);
	unlink("brands/".iconv('utf-8','big5', $cover));
	
		?>
			<html>
			<head>
				<script src="sweetAlert/sweetalert.min.js"></script> 
				<link rel="stylesheet" type="text/css" href="sweetAlert/sweetalert.css">
			</head>
			</html>	
			<script>
				swal("所選品牌已刪除", " ", "success");	
			</script>
		<?php
		
	}


?>

<?php

	// query for getting brand list
	$sqlbrands = "SELECT * FROM `brands`";
	$resultBrands = $link->query($sqlbrands);
	
	// query for getting brand list
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
    <link rel="stylesheet" href="form.css">	
    <link rel="stylesheet" href="css/responsive.css">
	<script type="text/javascript" src="js/map.js"></script><!-- import the map javascript file-->

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
                        <li><a href="download.php">下載中心</a></li>
                        <li><a href="contact.php">聯絡我們</a></li>
						<li class="active"><a href="admin_brands.php">管理介面</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    
    <div class="single-product-area">
        <div class="container">
            <div class="row">		


				<div class="wrap">

					<div class="content" style="width:60%;  margin-left:18%;">
						<h1>品牌管理</h1>
						<h2>代理品牌</h2></br>
						
						<?php 		
							if ($resultBrands->num_rows > 0) {
								echo "
								<table>
								<tr>
								<th>品牌</th>
								<th>網址</th>
								<th>刪除</th>

								</tr>";
								
								while($row = $resultBrands->fetch_assoc()) {
									$brand_Name = $row['Brand_Name'];
									echo "<tr>";
									echo "<td>" . $row['Brand_Name']. "</td>";
									echo "<td>" . $row['Brand_URL']. "</td>";
									echo "<td> <form action='' method='post'> <input type ='image' src='img/ban.png' width='25' height='25'> <input type='hidden' name='deleteBrand' value='".$brand_Name."'> </form> </td>";
									echo "</tr>";
								} 
								echo "</table>";
							}
						?>
						
						<h2>經銷品牌</h2></br>
						
						<?php 		
							if ($resultSaleBrands->num_rows > 0) {
								echo "
								<table>
								<tr>
								<th>品牌</th>
								<th>網址</th>
								<th>刪除</th>

								</tr>";
								
								while($row = $resultSaleBrands->fetch_assoc()) {
									$sale_brands_name = $row ['Sale_Brands_Name'];
									echo "<tr>";
									echo "<td>" . $row['Sale_Brands_Name']. "</td>";
									echo "<td>" . $row['Sale_Brands_URL']. "</td>";
									echo "<td> <form action='' method='post'> <input type ='image' src='img/ban.png' width='25' height='25'> <input type='hidden' name='deleteSaleBrand' value='".$sale_brands_name."'></form> </td>";
									echo "</tr>";
								} 
								echo "</table>";
							}
						?>
						
										<h2>添加品牌</h2>
				<div class="actLeadClaims">
				

					  	<form action="" method="post" enctype="multipart/form-data">
					  
						
						<fieldset>

						  <br><input type="radio" name="type" value="agent">代理品牌&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="type" value="sale">經銷品牌
						  <br>
						  <br>
						  
						  <label>品牌名稱:</label>
						  <input type="text" name="brandName">
						  
						  <label>品牌官網:</label>
						  <input type="text" name="brandURL">						  
						  

						<label>品牌商標:(只限JPG之圖像格式, 最大限制為2MB)</label>
						<input type="file" name="fileToUpload" id="fileToUpload"></br></br>

						
						<input type="submit" value="添加品牌" name="uploadBrand">
						<br>
						</fieldset>
					  </form>
				</div>

					</div>
					
					
					
	
					
					
						<?php include('includes/navigationMenu.php');?> <!-- import navigationMenu part here-->
				</div>

            </div>  				
        </div>
	</div>

    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                        <p>Copyright &copy;2016 Precision Audio Limited</p>

                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
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
	
	<!--map javascript-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBp-SDN_zbAXL73ZA1Th6aMS8bgvY3m2Aw"></script>
	
	<script>

		google.maps.event.addDomListener(window, 'load', initialize);

	</script>
	
</body>
</html>




