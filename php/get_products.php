<?php

/*
	Author : Jason Tran
	Last Edited: 22 Oct 2015
*/

require_once("dbconnect.php");
$brand = ($_GET['brand']);

	$sql="SELECT * FROM `products` WHERE `Product_Brand` = '$brand'";
	$result = $link->query($sql);

echo "<h1>" .$_GET['brand']."</h1>";

//while($row = mysqli_fetch_array($result)) {
    //echo "<br><li> <a href='http://www.ldip.com.au/constellation/browse.php?Workshop=".$row['Product_Brand']."'>".$row['Product_Brand']."</a></li>";


							if ($result->num_rows > 0) {
								echo "
								<table>
								<tr>
								<th>產品品牌</th>
								<th>產品系列</th>
								<th>產品名稱</th>
								<th>產品簡介</th>
								<th>刪除</th>
								</tr>";
								
								while($row = $result->fetch_assoc()) {
									echo "<tr>";
									echo "<td>" . $row['Product_Brand']. "</td>";
									echo "<td>" . $row['Product_Series']. "</td>";
									echo "<td>" . $row['Product_Name']. "</td>";
									echo "<td>" . $row['Product_Description']. "</td>";
									echo "<td> <form action='' method='post'> <input type ='image' src='img/ban.png' width='25' height='25'> <input type='hidden' name='deleteProduct' value='".$row['Product_Pic']."'> </form> </td>";
									echo "</tr>";
								} 
								echo "</table>";
							}
							

	
?>


