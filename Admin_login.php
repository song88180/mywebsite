<?php
session_start();
$name=$_POST["username"];
$name=str_replace(['<','>','!','-','\'','\"','=','{','}','(',')','$'],['&lt;','&gt;','&#33;','&#45;','&#39;','&quot;','&#61;','&#123;','&#125;','&#40;','&#41;','\$'],$name);
$password=$_POST["password"];
$host="localhost";
$user="root";
$pwd="ssl199512";
$dbName="mywebsite";
$connID=mysqli_connect($host,$user,$pwd);
mysqli_select_db($connID,$dbName);
$sql = "SELECT id, user_name, password FROM login_info WHERE user_name='$name'";
$result=mysqli_query($connID,$sql); 
$row=mysqli_fetch_assoc($result);
if($row){
	if(password_verify($password, $row['password'])){
		$_SESSION['username']=$row['user_name'];
		$_SESSION['id']=$row['id'];
		echo "<script>alert('Login successful');location='feedback-admin.php'</script>";
		}
	else
	{
		echo "<script>alert('Wrong Password, try again');location='feedback.php'</script>";
		exit;
	}
}
else
{
	echo "<script>alert('Wrong Username, try again');location='feedback.php'</script>";
	exit;
}
exit;
?>
