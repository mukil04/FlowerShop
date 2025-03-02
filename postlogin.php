<?php
$con= mysql_connect("localhost","root","");
mysql_select_db("flower",$con);

$uname = $_POST['uname'];
$password = $_POST['password'];

echo "$uname $password";

if($uname=="admin" && $password=="flowers")
{

?>
<script>
alert("login verified");
window.location="adminpage.php";
</script>
<?
}
else
{

?>
<script>
alert("login failed");
window.location="index.html";
</script>
<?
}

?>