<?php
$i=$_POST["i"];
$host="localhost";
$user="root";
$pwd="ssl199512";
$dbName="mywebsite";
$connID=mysqli_connect($host,$user,$pwd);
mysqli_select_db($connID,$dbName);
$sql = "delete from comment where id=$i";
mysqli_query($connID,$sql); 
?>
