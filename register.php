<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="register.css" type="text/css" rel="stylesheet"/>
</head>

<body style="background-image:url(img/black-retro-lilz-tattoo_177501.jpg);">
<form action="after_reg.php" method="post">
<h1 align="center" style="color:#55EDF4; font-size:70px;" > REGISTER </h1>
<table align="center">
<tr> <h1 align="center" style="color:#55EDF4;" > All fields marked * are compulsary </h1></tr>
 <tr>
 <td><label style="color:#55EDF4;">Full Name</label></td>
 <td><input type="text" name="fname" placeholder="FULL NAME"/>*</td></tr>
  <tr>
  <tr>
 <td><label style="color:#55EDF4;">Middle Name</label></td>
 <td><input type="text" name="mname" placeholder="MIDDLE NAME"/></td></tr>
  <tr>
  <tr>
 <td><label style="color:#55EDF4;">Last Name</label></td>
 <td><input type="text" name="lname" placeholder="LAST NAME"/></td></tr>
  <tr>
 <td><label style="color:#55EDF4;">Gender</label>*</td>
 <td class="change">Male<input type="radio" name="gender" value="male"/>
 Female<input type="radio" name="gender" value="female"/></td></tr>
 <tr>
 <td><label style="color:#55EDF4;">Email</label></td>
 <td><input type="email" name="email" placeholder="EMAIL"/>*</td></tr>
  <tr>
 <td><label style="color:#55EDF4;">Contact No.</label></td>
 <td><input type="number" name="contact" placeholder="PHONE NUMBER"/>*</td></tr>
  <tr>
 <td><label style="color:#55EDF4;">City</label></td>
 <td><input type="text" name="city" placeholder="CITY"/></td></tr>
  <tr>
 <td><label style="color:#55EDF4;">Address</label></td>
 <td><input type="text" name="address" placeholder="ADDRESS"/>*</td></tr>
  <tr>
 <td><label style="color:#55EDF4;">Username </label></td>
 <td><input type="text" name="user" placeholder="USERNAME"/>*</td>
 <td><button type="button" onClick="check()">Check</button></td>
 </tr>
  <tr>
 <td><label style="color:#55EDF4;">Password</label></td>
 <td><input type="password" name="pass" placeholder="PASSWORD"/>*</td></tr>
 <tr>
 <td><label style="color:#55EDF4;">User Id</label></td>
 <td><input type="number" name="id" placeholder="ID"/></td></tr>
  
 <tr><td></td>
 <td><input type="submit" value="Register" name="Register"/></td></tr>
 </table>
</form>

</body>
</html>