<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include ('lib.php');
$data=mysql_query("SELECT * FROM `customer`");
echo "<table border='1'>";
while($row=mysql_fetch_array($data))
{
	echo "<tr>";
	echo "<td>".$row['username']."</td>";
	echo "<td>".$row['password']."</td>";
	echo '<td><img src="pics/'.$row['image'].'"height="100" width="100"/></td>';
	echo "</br>";
	
	echo '<td><a href="delete.php?id='.$row['id'].'">delete</a></td>';
	echo "</tr>";
}

echo "</table>";

?>
</body>
</html>