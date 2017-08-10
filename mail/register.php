<?php

$brandName = $_POST['brandName'];
$dateOfPurchase = $_POST['dateOfPurchase'];
$model = $_POST['model'];
$serialNo = $_POST['serialNo'];
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
	
// Create the email and send the message
$to = 'finny@precisionaudio.com.hk, info@precisionaudio.com.hk'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "標緻音響公司保修登記:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nBrand Name 牌子: $brandName\n\nDate of Purchase 購買日期: $dateOfPurchase\n\nModel No. 型號: $model\n\nSerial No. 機身編號:$serialNo\n\nName of Customer 顧客姓名:$name\n\nAddress 地址:$address\n\nEmail 電郵 :$email";
$headers = "From: noreply@precisionaudio.com.hk\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>