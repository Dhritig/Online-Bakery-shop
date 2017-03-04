<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="main.css" type="text/css" rel="stylesheet"/>
<style>
body{
	background-image:url(img/download.jpg);
	background-size:cover;
	background-attachment:fixed;
}
.table1{
	width:70px;
}
</style>
</head>

<body>
<div class="header"> <h1 align="left" style="color:#BC2123; font-size:80px;"> Bake My Day ! ^_^ ! </div>
<div class="content">


<div class="content1">
<h3><U>SELECT CATEGORIES</U></h3>
<form action="search.php" method="post">
<table class="table1">
<tr>

<td colspace="2"><select name="categories">
<option value="biscuit">biscuit</option>
<option value="cake">cake</option>
<option value="cookies">cookies</option>
<option value="pastries">pastries</option>
</select></td></tr>
<tr><td><input type="submit" value="search" name="search"></td></tr></table></form>
<h2 align="center">OR</h2>
<h3>SORT BY PRICE</h3>
<form action="sort.php" method="post">
<table>
<tr>
<td><label>FROM</label></td>
<td><input type="text" name="from"></td></tr>
<tr><td><label>TO</label></td>
<td><input type="text" name="to"></td>
<tr><td><input type="submit" value="sort" name="sort"></td></tr>
<tr><td></td>
<td><input type="submit" value="logout" name="logout"></td>
</table></form></div><div class="content2">
<div class="pic1">
</div>

<div class="pic2">
</div>
<div class="pic3">
</div>
<div class="pic4">
</div>
<div class="pic5">
</div>
<div class="pic6">
</div>
<div class="pic7">
</div>
<div class="pic8">
</div>
<div class="pic9">
</div></div> </div>
</body>
</html>