<?php
$con= mysql_connect("localhost","root","");
mysql_select_db("flower",$con);

$name = $_POST['name'];
$area = $_POST['area'];
$ph = $_POST['ph'];
$purpose = $_POST['purpose'];
$address = $_POST['address'];
$type = $_POST['type'];
$weight = $_POST['weight'];
$cart = $_POST['cart'];

//echo "$cart $type";


if($type=="jasmine")
{
   $rate = $weight * 100;

	echo "Your Cash amount is $rate";
}

else if($type=="Oleander")
{
   $rate = $weight * 120;

	echo "Your Cash amount is $rate";
}
else if($type=="peruvian Lily")
{
   $rate = $weight * 80;

	echo "Your Cash amount is $rate";
}
else if($type=="Gazaniya")
{
   $rate = $weight * 170;

	echo "Your Cash amount is $rate";
}
else if($type=="Bauhinia white")
{
   $rate = $weight * 200;

	echo "Your Cash amount is $rate";
}

$d = date('Y-m-d');


mysql_query("insert into sale(name,area,ph,purpose,address,type,weight,cart,rate,date)values('$name','$area','$ph','$purpose','$address','$type','$weight','$cart','$rate','$d')");


?>

<body bgcolor="#FF8989">
<br>

<form name="l1" action="postcart.php" method="post">

<?php

if($cart == "cash")
{

echo "<center><h2>Your Cart Payment.. Processing...  <a href='payment.php?id=$rate'>Click here </a>";

}
else
{

?>


<center>
<img src="images/perfume.png" width=150 height=150> &nbsp; &nbsp; &nbsp; &nbsp;
<img src="images/agarpathi.jpg" width=150 height=150> &nbsp; &nbsp; &nbsp; &nbsp;
<br>
Return Good Types : <select name="gtype">
<option>--</option>
<option>Perfums</option>
<option>Agarpathi</option>
</select>
 <br>
<br>
Select Product : <select name="product">
<option>--</option>
<option>CEO</option>
<option>FOFF</option>
</select>
 <br>
<br>
Cash : <input type="text" name="cash"> <br>
<br>Weight / No. :  <input type="text" name="no"> <br>
<br><input type="hidden" name="cart">

<input type="submit" name="submit" value="Return">
<br><br>
<table border=1 width=60%>
<tr>
<th>S. No
<th>Perfums Name
<th>Rate
</tr>
<tr>
<td>1
<td>CEO Men
<td>300
</tr>
</table>
<?php
}
?>