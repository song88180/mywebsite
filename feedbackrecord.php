
<?php
$name=$_POST["name"];
$comment=$_POST["comment"];
$host="localhost";
$user="root";
$pwd="ssl199512";
$dbName="mywebsite";
$connID=mysqli_connect($host,$user,$pwd);
mysqli_select_db($connID,$dbName);
$time = date('Y-m-d H:i:s');
$sql = "insert into comment (name,comment)  values('$name','$comment')";
mysqli_query($connID,$sql); 
header('Location:feedback.php');
exit;
?>
