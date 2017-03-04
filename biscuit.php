<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
body
{
	background-image:url(img/black-retro-lilz-tattoo_177501.jpg);
	background-size:cover;
	
}
.table1{
	height:300px;
	width:600px;
	
}
</style>
<body>
<h1 align="center" style="color:#55EDF4;">BAKE MY DAY</h1>
<h2  style="color:#55EDF4;">BUISCUIT</h2>
<?php
include('lib.php');


$data=mysql_query("SELECT * FROM `biscuit`");
echo "<table  class='table1' cellpadding='2' >";

echo "<tr>";
	echo "<td style='color:#FFF;'>NAME</td>";
	echo "<td style='color:#FFF;'>IMAGE</td>";
	echo "<td style='color:#FFF;'>PRICE</td>";
	echo "</tr>";
while($row=mysql_fetch_array($data)){
	
	echo "<tr>";
	echo "<td style='color:#55EDF4;'>".$row['name']."</td>";
	echo '<td><img src="img/'.$row['image'].'" height="250" width="400" /></td>';
	echo "<td style='color:#55EDF4;'>".$row['price']."</td>";
	
    echo "</tr>";

	
	}
echo "</table>";




?>


</body>
</html>