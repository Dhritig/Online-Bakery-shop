<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body style="background-image:url(img/black-retro-lilz-tattoo_177501.jpg);">
<?php 
if($_POST['sort'])
{
	include('lib.php');
	$from=$_POST['from'];
	$to=$_POST['to'];
	$data=mysql_query("SELECT * FROM `biscuit` WHERE `price` BETWEEN '$from' AND '$to' " );
	echo "<table  class='table1' cellpadding='2' >";
	$data1=mysql_query("SELECT * FROM `cake` WHERE `price` BETWEEN '$from' AND '$to' " );
	echo "<table  class='table1' cellpadding='2' >";
	$data2=mysql_query("SELECT * FROM `cookies` WHERE `price` BETWEEN '$from' AND '$to' " );
	echo "<table  class='table1' cellpadding='2' >";
$data3=mysql_query("SELECT * FROM `pastries` WHERE `price` BETWEEN '$from' AND '$to' " );
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
	while($row=mysql_fetch_array($data1)){
	
	echo "<tr>";
	echo "<td style='color:#55EDF4;'>".$row['name']."</td>";
	echo '<td><img src="img/'.$row['image'].'" height="250" width="400" /></td>';
	echo "<td style='color:#55EDF4;'>".$row['price']."</td>";
	
    echo "</tr>";

	
	}
	while($row=mysql_fetch_array($data2)){
	
	echo "<tr>";
	echo "<td style='color:#55EDF4;'>".$row['name']."</td>";
	echo '<td><img src="img/'.$row['image'].'" height="250" width="400" /></td>';
	echo "<td style='color:#55EDF4;'>".$row['price']."</td>";
	
    echo "</tr>";

	
	}
	while($row=mysql_fetch_array($data3)){
	
	echo "<tr>";
	echo "<td style='color:#55EDF4;'>".$row['name']."</td>";
	echo '<td><img src="img/'.$row['image'].'" height="250" width="400" /></td>';
	echo "<td style='color:#55EDF4;'>".$row['price']."</td>";
	
    echo "</tr>";

	
	}
echo "</table>";

}
?>
</body>
</html>