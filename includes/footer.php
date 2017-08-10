   
<?php

	session_start();
	require_once("php/dbconnect.php");
	$sqlProductBrand1 = "SELECT `Product_Brand` , `Product_Series` FROM `products` GROUP BY  `Product_Brand` ASC limit 0, 6";
	$resultProductBrand1 = $link->query($sqlProductBrand1);
	$sqlProductBrand2 = "SELECT `Product_Brand` , `Product_Series` FROM `products` GROUP BY  `Product_Brand` ASC limit 6, 6";
	$resultProductBrand2 = $link->query($sqlProductBrand2);	
?>
   <div class="footer-top-area">
        <div class="container">
            <div class="row">            
               
				<div class="col-md-3 col-sm-6 ">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">產品分類</h2>
                        <ul>
						
							<?php
								if ($resultProductBrand1->num_rows > 0) {
									while($row = $resultProductBrand1->fetch_assoc()) {
							?>								
                            <li><a href="products.php?productBrand=<?php echo $row['Product_Brand']?>"><?php echo $row['Product_Brand']?></a></li>
							
							<?php
									} 
								}	
							?>					


                        </ul>                        
                    </div>
                </div>
				
				<div class="col-md-3 col-sm-6">
                    <div class="footer-menu2">
						<h2 class="footer-wid-title2">&nbsp;</h2>
                        <ul>
							<?php
								if ($resultProductBrand2->num_rows > 0) {
									while($row = $resultProductBrand2->fetch_assoc()) {
							?>								
                            <li><a href="products.php?productBrand=<?php echo $row['Product_Brand']?>"><?php echo $row['Product_Brand']?></a></li>
							
							<?php
									} 
								}	
							?>		
                        </ul>                        
                    </div>
                </div>
				
				<div class="col-md-6 col-sm-10">
                    <div class="footer-about-us">
                        <h2>陳列室地址</h2>
                        <p>香港干諾道中24-25號，
						中華總商會大廈三樓01室&nbsp;&nbsp;( &nbsp;港鐵中環站A出口&nbsp; )
						</p>
						<p>
						Unit 01,3rd Floor,
						The Chinese General Chamber
						of Commerce Bldg.
						No.24-25 Connaught Road Central,
						Central,Hong Kong.
						(Central Station Exit A) 
						</p>
						
                        <h2>聯絡我們</h2>
						<p>Tel：+852 2341 1939 / +852 2905 1919 </p>
						<p>Email：info@precisionaudio.com.hk </p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>						
                    </div>
                </div>
				
              
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                        <p>Copyright &copy;2016 Precision Audio Limited</p>

                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->