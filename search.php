<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
if($_POST['search'])
{
	include('lib.php');
	$choice=$_POST['categories'];
	
	if($choice=='biscuit')
	{
		header('location:biscuit.php');
	}
	elseif($choice=='cake')
	{
		header('location:cake.php');
	}
	elseif($choice=='cookies')
	{
		header('location:cookies.php');
	}
	elseif($choice=='pastries')
	{
		header('location:pastries.php');
	}
	
}
?>
</body>
</html>