<?php
$con= mysql_connect("localhost","root","");
mysql_select_db("flower",$con);

$gtype = $_POST['gtype'];
$cart = $_POST['cart'];
$no = $_POST['no'];
$product = $_POST['product'];
$cash = $_POST['cash'];

echo "$gtype";

mysql_query("update sale SET gtype='$gtype',no='$no',product='$product' where cart='goods'");

?>

<body bgcolor="GGFF89">
<Center>
<h1> Successfully return the Flowers </h1>
<br>
<a href="index.html">Back </a>
