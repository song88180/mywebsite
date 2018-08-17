<?php
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['id']);
	echo "<script>alert('Logout successful');location='feedback.php'</script>";
	exit;
?>