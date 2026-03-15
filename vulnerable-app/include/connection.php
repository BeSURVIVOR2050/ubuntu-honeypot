<?php
$sv = "localhost";
$db = "hackshop";
$un = "hackshop";
$pw = "hackshopuniquepassword";
$conn = mysqli_connect($host, $user, $passwd ,$db);
if (!$conn){
  die("DB Connection failed: " . mysqli_connect_error());
}
?>
