<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Research|Song, Siliang</title>
<link rel="stylesheet" type="text/css" href="basic_style.css" />
<style type="text/css">
#maintext{
	width:100%;
	height:100%;
	padding:20px;
	box-sizing: border-box;
}
#maintext h3{
	margin:40px 50px 10px 50px;
}
#maintext p{
	margin:10px 50px 10px 50px;
}
#currenth{
	margin:10px 0px 10px 0px;
}
.feedback{
	padding:10px;
	margin:0 0 10px 0;
	background-color:#DBDBDB;
}
.nametime{
	padding:10px 10px 10px 10px;
}
.comment{
	padding:10px 10px 10px 30px;
	word-wrap:break-word;
}
.name{
	color:#0000FF;
	font-size:20px;
}
.time{
	color:#6B6B6B;
	font-size:15px;
}
.delete1{
	width:50px;
	height:50px;
	float:right;
	cursor:pointer;
}
.delete2{
	width:50px;
	height:50px;
	float:right;
	background-color:#EEEEEE;
	cursor:pointer;
}
</style>
<script>
function changetext(a){
	if(a.className=='hind'){
		a.className='show';
		} 
	else{
		a.className='hind';
		}
}
function deletecomment(i){
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    window.location.reload(true);
    }
	}
	xmlhttp.open("POST","deletecomment.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("i="+i);
}
</script>
</head>

<body>
<?php
	session_start();
	if (isset($_SESSION['username'])&&isset($_SESSION['id'])){
	}
	else{
		echo "<script>alert('Please Login to use Administrator Mode');location='feedback.php'</script>";
		exit(0);
	}
?>
<?php
include 'webtop.html';
?>
<script>
document.getElementById('topnav-Feedback').setAttribute("style","background-color:#F5F5F5;color:#000080");
</script>
<div id="body">
	<div id="maintext">
	<a style="float:right" href="Logout.php" >Logout</a>
	<h1 id="currenth">Feedback</h1>
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "ssl199512";
		$dbname = "mywebsite";
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if (!$conn) {
			die("连接失败: " . mysqli_connect_error());
		}
 
		$sql = "SELECT id, name, comment,date FROM comment order by date";
		$result = mysqli_query($conn, $sql);
		$i=0;
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$comment=str_replace(['<','>','!','-','\'','\"','=','{','}','(',')'],['&lt;','&gt;','&#33;','&#45;','&#39;','&quot;','&#61;','&#123;','&#125;','&#40;','&#41;'],$row["comment"]);
				$name=str_replace(['<','>','!','-','\'','\"','=','{','}','(',')'],['&lt;','&gt;','&#33;','&#45;','&#39;','&quot;','&#61;','&#123;','&#125;','&#40;','&#41;'],$row["name"]);
				echo "<div class='feedback'>
						<div class='delete1' onMouseMove=\"this.className='delete2'\" onMouseOut=\"this.className='delete1'\" onclick=\"deletecomment(".$row["id"].")\">
						<img src='img/web/delete.png' style='width:100%; height:100%'></img>
						</div>
						<div class='nametime'><span class='name'>".$name."</span> <span class='time'>".$row["date"]."</div> <div class='comment'>".$comment."</div></div>";
			}
		} else {
			echo "0 结果";
		}
		mysqli_close($conn);
		?>
		<h2>Make Comments</h2>
		<form action="feedbackrecord.php" method="post">
		Name: <input type="text" name="name" /> <br>
		<textarea wrap="virtual" name="comment" style="width:80%; height:70px;margin:10px 0;resize: none;" ></textarea><br>
		<input type="submit" value="submit" />
		</form>

	</div>
</div>
<?php
include 'dropdown.html';
?>
<script>
document.getElementById('drop-down-Feedback').setAttribute("style","background-color:#F5F5F5;color:#000080");
</script>
</body>
</html>
