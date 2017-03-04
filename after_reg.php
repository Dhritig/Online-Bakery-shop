<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
if($_POST['Register'])
{
	include('lib.php');
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$city=$_POST['city'];
	$address=$_POST['address'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$id=$_POST['id'];
	$data=mysql_query("SELECT * FROM `customer` WHERE `user_id`='$id'");
	
	$row=mysql_fetch_array($data);
	$num_rows=mysql_num_rows($data);
	if($num_rows>0){
		echo "User Already Exist";
	}
	else {
		$data=mysql_query("INSERT INTO `register` (`fname`,`mname`,`lname`,`gender`,`email`,`contact`,`city`,`address`,`username`,`password`,`user_id`) VALUES('$fname','$mname','$lname','$gender','$email','$contact','$city','$address','$user','$pass','$id')");
		
		
		if($data)
		{
			echo "Thank You for registering. Please Login to Continue.";
		}
		$data=mysql_query("INSERT INTO `customer` (`user_id`,`password`) VALUES ('$id','$pass')");
}
}

?>
</body>
</html>