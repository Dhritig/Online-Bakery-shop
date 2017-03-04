<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include ('lib.php');

$user=$_POST['user'];
$pass=$_POST['pass'];

$image=$_FILES['image']['tmp_name'];

echo $user;
echo $pass;
echo $image;
$image=$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],"pics/".$image);
$data=mysql_query("INSERT INTO`customer`(`username`,`password`,`image`)VALUES('$user','$pass','$image')");

if($data)
{
	echo "one row inserted";
}

?>

</body>
</html>