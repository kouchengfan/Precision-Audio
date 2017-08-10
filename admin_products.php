
<?php
	session_start();
	
	require_once("php/dbconnect.php");
	if (isset($_POST['uploadProduct']))
	{

	   $error = false;
	   if (empty($_POST["productName"])) {
		   $EnameErr = "Product Name is required";
		   $error = true;
	   }
	   if (empty($_POST["productBrand"])) {
		   $EnameErr = "Product Brand is required";
		   $error = true;
	   }
	
	   if (empty($_POST["productSeries"])) {
		   $EnameErr = "Product Series is required";
		   $error = true;
	   }
	   
	   if (empty($_POST["productDesciption"])) {
		   $EnameErr = "Product Desciption is required";
		   $error = true;
	   }	   

	   $covername = $_FILES["coverToUpload"]["name"];
	   $cover_basename = substr($covername, 0, strripos($covername, '.')); // get file extention	 
	
		
	   if (empty($cover_basename)) {
		   $EnameErr = "File is required";
		   $error = true;
		}
			

		$cover_ext = substr($covername, strripos($covername, '.')); // get file name		
		$filesize = $_FILES["coverToUpload"]["size"];
		$typeError = false;
		$sizeError = false;
		$exsError = false;
		
	if ($cover_ext != ".jpg")
	{	
		
		$typeError = true;

	}
	
	if ($filesize > 120000000){
		
		$sizeError = true;
		
	}
	
	$productBrand = $_POST['productBrand'];	
	$productSeries = $_POST['productSeries'];	
	$productName = $_POST['productName'];	
	$productDesciption = $_POST['productDesciption'];				
	$sqlAddNew = "INSERT INTO `products` (`product_Brand`,`product_Series`,`product_Name`,`product_Pic`,`product_Description`) 
	VALUES ('$productBrand', '$productSeries', '$productName', '$productName', '$productDesciption')";
	$newcovername = $productName. $cover_ext;
	
	if (file_exists("products/" . $newcovername))
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
					swal("Error!", "同名產品已存在", "error")
				</script> 		
			<?php				

	
	
	}else {
		
		
	$productBrand = $_POST['productBrand'];	
	$productSeries = $_POST['productSeries'];	
	$productName = $_POST['productName'];
	$picName = date(ymdhis). "-".rand(0,10);
	$productDesciption = $_POST['productDesciption'];				
	$sqlAddNew = "INSERT INTO `products` (`product_Brand`,`product_Series`,`product_Name`,`product_Pic`,`product_Description`) 
	VALUES ('$productBrand', '$productSeries', '$productName', '$picName', '$productDesciption')";
	$newcovername = $picName. $cover_ext;
	move_uploaded_file($_FILES["coverToUpload"]["tmp_name"], "products/".iconv('utf-8','big5', $newcovername));	
			
			if ($link->query($sqlAddNew) === TRUE) {
			?>
				<html>
				<head>
					<script src="sweetAlert/sweetalert.min.js"></script> 
					<link rel="stylesheet" type="text/css" href="sweetAlert/sweetalert.css">
				</head>
				</html>	
				<script>
					swal("產品已成功添加", "'<?php echo $productName; ?>' 已添加", "success");	
				</script>
			<?php
			} 						


	}   

	}
		
		

		


	if (isset($_POST['deleteProduct'])) {
	$deleteProduct = $_POST["deleteProduct"];
    $sqldeleteNew = "DELETE FROM  `products` WHERE  `product_Pic` =  '$deleteProduct'";
	$cover = $deleteProduct.'.jpg';
	
	$link->query($sqldeleteNew);
		unlink("products/".iconv('utf-8','big5', $cover));
		?>
			<html>
			<head>
				<script src="sweetAlert/sweetalert.min.js"></script> 
				<link rel="stylesheet" type="text/css" href="sweetAlert/sweetalert.css">
			</head>
			</html>	
			<script>
				swal("所選產品已刪除", " ", "success");	
			</script>
		<?php
		
	}

?>

<?php

	// query for getting news list
	$sqlnews = "SELECT * FROM `news`";
	$resultNews = $link->query($sqlnews);

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
	
    <!-- bootstrap -->
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>  

    <!-- x-editable (bootstrap version) -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.4.6/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.4.6/bootstrap-editable/js/bootstrap-editable.min.js"></script>
    
	
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
						<h1>產品管理</h1>
						
						<div class="search">
						<div class="actLeadClaims">
							<?php
							$queryBrands ="SELECT `product_brand` FROM `products` GROUP BY `product_brand` ORDER BY `product_brand`";
							$resultBrands = $link->query($queryBrands);

							?>
							<form>
							<select style="margin-top:30px;" name="brands" id="brands_list"  onChange="showWorkshop()">
							<option value="">請選擇品牌</option>
								<?php
									if ($resultBrands->num_rows > 0) { 
										while($row = $resultBrands ->fetch_assoc()) {
										$brands = $row['product_brand'];
								?>
										<option value="<?php echo $brands; ?>"><?php echo $brands; ?></option>
								<?php           
										} 
									} 
								?>
								
							</select>
							</form>							
						</div>
						<div id="Brands_List"></div>						
						<h1>添加產品</h1>														
						</div>
						<div class="actLeadClaims">
							

							<form action="" method="post" enctype="multipart/form-data">
			
								<fieldset>
								
									<label>產品名稱:</label>
									<input type="text" name="productName">
									<label>產品品牌:</label>
									<input type="text" name="productBrand">									  
									<label>產品系列:</label>
									<input type="text" name="productSeries">		
									
									<label>產品簡介:</label>
									<textarea rows="6" name="productDesciption">	</textarea>														  
									
									<label>產品圖片:(只限JPG之圖像格式, 最大限制為10MB)</label>
									<input type="file" name="coverToUpload" id="coverToUpload">
								</fieldset>
								<input type="submit" value="添加產品" name="uploadProduct">										
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
				
				<script>
					function showWorkshop() {
						var str = document.getElementById('brands_list').value;
						if (str == "") {
							document.getElementById("Brands_List").innerHTML = "";
							return;
						} else {
							if (window.XMLHttpRequest) {
								// code for IE7+, Firefox, Chrome, Opera, Safari
								xmlhttp = new XMLHttpRequest();
							} else {
								// code for IE6, IE5
								xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
							}
							xmlhttp.onreadystatechange = function() {
								if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
									document.getElementById("Brands_List").innerHTML = xmlhttp.responseText;
								}
							}
							xmlhttp.open("GET","php/get_products.php?brand="+ str,true);
							xmlhttp.send();
						}
					}
					
					
					$(document).ready(function() {
						//toggle `popup` / `inline` mode
						$.fn.editable.defaults.mode = 'inline';     
						
						//make username editable
						$('#username').editable();
						
						//make status editable
						$('#status').editable({
							type: 'select',
							title: 'Select status',
							placement: 'right',
							value: 2,
							source: [
								{value: 1, text: 'status 1'},
								{value: 2, text: 'status 2'},
								{value: 3, text: 'status 3'}
							]
					   
							//uncomment these lines to send data on server
							,pk: 1
							,url: '/post'
							
						});
					});					
				</script>	
	
</body>
</html>




