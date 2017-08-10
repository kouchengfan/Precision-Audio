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
                        <li class="active"><a href="warranty.php">保修登記</a></li>
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
				<h2 class="section-title">標緻音響公司保修登記</h2>
				<div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Brand Name 牌子 </label>
                                <input type="text" class="form-control" placeholder="Brand Name 牌子 " id="brandName" required data-validation-required-message="請輸入牌子.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Date of Purchase 購買日期</label>
                                <input type="text" class="form-control" placeholder="Date of Purchase 購買日期" id="dateOfPurchase" required data-validation-required-message="請輸入購買日期.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Model No. 型號</label>
                                <input type="text" class="form-control" placeholder="Model No. 型號" id="model" required data-validation-required-message="請輸入型號.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Serial No. 機身編號</label>
                                <input type="text" class="form-control" placeholder="Serial No. 機身編號" id="serialNo" required data-validation-required-message="請輸入機身編號">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>						
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name of Customer 顧客姓名</label>
                                <input type="text" class="form-control" placeholder="Name of Customer 顧客姓名" id="name" required data-validation-required-message="請輸入名字">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Address 地址</label>
                                <input type="text" class="form-control" placeholder="Address 地址" id="address" required data-validation-required-message="請輸入地址">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email 電郵</label>
                                <input type="email" class="form-control" placeholder="Email 電郵" id="email" required data-validation-required-message="請輸入電郵">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>						
                        <p></br>
						<h4>Important Notice 重要事項</h4>
1. This warranty covers normal use and all manufacturing defects for one year from the date of sale to the original purchaser. (TWO YEAR FOR LINN PRODUCTS)</br>
2. This warranty does not cover any appearance item, accessories (e.g. Laser head, cartridges, Stylus, tape head, antenna, connecting cable, remote control, audio racks and stands).</br>
3. Any damaged or defected caused by accident, negligence, misuse or abuse will not be covered by this warranty.</br>
4. This warranty is not valid if the product has been repaired. Aligned, altered or misused by individuals or service personnel other than those of out authorised technicians.</br>
5. This warranty excludes transportation and packing charges. Any door to door service or transportation shall be pre-paid by the Purchaser.</br>
6. Altered, defaced or removed serial number and will invalidate these warranty terms.</br>
7. This warranty does not cover any conversion of operating voltage or frequency.</br>
8. This warranty covers normal domestic use only and does not apply for commercial or communal use.</br>
9. A reasonable parts and labour charge will be charged to the Purchaser after warranty period is exceeded and a quotation can be requested for repair and service.</br>
10. Any information is subject to change without notice.</br>
11. Precision Audio Limited assumes no responsibility or liability for any errors or inaccuracies that may appear in this warranty.</br></br>

1. 由購買日期起，免費保用壹年包括人工及零件。﹝LINN產品為2年保用﹞</br>
2. 此保用不包括：機身、外殼、面板、面網、雷射唱頭、黑膠唱盤之唱頭、唱針、天線、遙控器及其他配件。</br>
3. 產品倘因意外、疏忽、不小心使用或輸入不適當之電壓而導致損壞者慨不保用。</br>
4. 如產品非經本公司技術人員修理、調校、更改線路、採用非原廠零件時，保用即時失效，本公司亦有權不予維修。</br>
5. 保用期內並不包括運費、包裝等費用在內，若需上門修理，費用另計。</br>
6. 機身編號或本保用証之資料擅自塗改或刮去，保用即時失效。</br>
7. 保用並不包括電壓、頻率之變改。</br>
8. 如貨品用作商業用途時，保用即時失效。</br>
9. 貨品超逾保用期後，斟量收回人工及零件費用。</br>
10. 如有任何更改，恕不另行通告。</br>
11. 本公司對以上之條款有保留之權利。</br>

文義有異時，以英文本為主！</br>
客戶熱線 Service Hotline：2341 1939</br>
維修熱線  Repair Hotline：2905 1919</br>
網址 Website ： www.precisionaudio.com.hk</br></p>					
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
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
	
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/register.js"></script>		
</body>
</html>