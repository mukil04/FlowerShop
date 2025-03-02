<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Flower Shop - My Account</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrap">
  <div class="header">
    <div class="logo"><a href="#"><img src="images/logo.gif" alt="" border="0" /></a></div>
    <div id="menu">
      <?php
require("menu.php");
?>
    </div>
  </div>
  <div class="center_content">
    <div class="left_content">
      <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Received Flowers up to date</div>
      <div class="feat_prod_box_details">

<table width=100% border=5>
<tr>
<th>Name
<th>Area
<th>Cell No
<th>Purpose
<th>Address
<th>Date
</tr>

<?php

$con = mysql_connect("localhost","root","");
mysql_select_db("flower",$con);

$res = mysql_query("select * from sale");
while($row = mysql_fetch_array($res))
{
$name = $row['name'];  
$area = $row['area'];
$ph = $row['ph'];
$purpose = $row['purpose'];
$address = $row['address'];
$date = $row['date'];
      
echo "<tr><td>$name<td>$area<td>$ph<td>$purpose<td>$address<td>$date</tr>";

}

?>
</table>

<br><br>

<center>Return Good Details </center><br>


<table width=100% border=5>
<tr>
<th>Date
<th>Return Type
<th>Weight
<th>Cart Type
<th>Goods Type
<th>Rate
<th>Return Product 
</tr>

<?php

$con = mysql_connect("localhost","root","");
mysql_select_db("flower",$con);

$res = mysql_query("select * from sale");
while($row = mysql_fetch_array($res))
{
$date = $row['date'];  
$type = $row['type'];
$weight= $row['weight'];
$cart = $row['cart'];
$gtype = $row['gtype'];
$rate = $row['rate'];
$product = $row['product'];
     
echo "<tr><td>$date<td>$type<td>$weight<td>$cart<td>$gtype<td>$rate<td>$product</tr>";

}

?>
</table>


<br><br>





<div class="contact_form">
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <!--end of left content-->
    <div class="right_content">
      
      <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" /></span>About Our Shop</div>
      <div class="about">
        <p> <img src="images/about.gif" alt="" class="right" /> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. </p>
      </div>
      <div class="right_box">
        <div class="title"><span class="title_icon"><img src="images/bullet4.gif" alt="" /></span>Promotions</div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/promo_icon.gif" alt="" /></span> <a href="#"><img src="images/thumb1.gif" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/promo_icon.gif" alt="" /></span> <a href="#"><img src="images/thumb2.gif" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/promo_icon.gif" alt="" /></span> <a href="#"><img src="images/thumb3.gif" alt="" class="thumb" border="0" /></a> </div>
        </div>
      </div>
      <div class="right_box">
        <div class="title"><span class="title_icon"><img src="images/bullet5.gif" alt="" /></span>Categories</div>
        <ul class="list">
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
          <li><a href="#">hollidays gifts</a></li>
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
          <li><a href="#">hollidays gifts</a></li>
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
        </ul>
        <div class="title"><span class="title_icon"><img src="images/bullet6.gif" alt="" /></span>Partners</div>
        <ul class="list">
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
          <li><a href="#">hollidays gifts</a></li>
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
          <li><a href="#">hollidays gifts</a></li>
          <li><a href="#">accesories</a></li>
        </ul>
      </div>
    </div>
    <!--end of right content-->
    <div class="clear"></div>
  </div>
  <!--end of center content-->
 
</div>
</body>
</html>
