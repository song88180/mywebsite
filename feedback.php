<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Feedback|Song, Siliang</title>
<link rel="stylesheet" type="text/css" href="basic_style.css" />
<link rel="stylesheet" type="text/css" href="Admin_login.css" />
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

</script>
</head>

<body style="position:relative">
	<!---->
	<div id="bgDiv" style="display:none;"></div>
<div id="loginBox" style="position:absolute; left:367px; top:150px;display: none;" >
        <div class="title" id="Mdown"><span class="t1">Login</span><span class="t2" title="关闭" onClick="login.style.display='none';bgDiv.style.display='none'">X</span></div>
         <div class="login">
                   <form method="post" action="Admin_login.php">
                    <table>
                        <tr>
                            <td>Username:</td><td><input type="text"name="username" size="12" maxlength="10" value="root"/></td>
                        </tr>
                        <tr>
                            <td>Password: </td><td><input type="password"name="password" size="12" maxlength="10" autocomplete="off"/></td>
                        </tr>
                        <tr>
                            <td></td><td><button class="submit" type="submit">Login</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
<!---->
<?php
include 'webtop.html';
?>
<script>
document.getElementById('topnav-Feedback').setAttribute("style","background-color:#F5F5F5;color:#000080");
</script>
<div id="body">
	<div id="maintext">
	<a style="float:right" href="javascript:" onClick="bgDiv.style.display='';loginBox.style.display='';">Administrator mode</a>
	<h1 id="currenth">Feedback</h1>
	<!---->
		

		<script type="text/javascript">
            var IsMousedown, LEFT, TOP, login;
            document.getElementById("Mdown").onmousedown=function(e) {
                login = document.getElementById("loginBox");
                IsMousedown = true;
                e = e||event;
                LEFT = e.clientX - parseInt(login.style.left);
                TOP = e.clientY - parseInt(login.style.top);
                document.onmousemove = function(e) {
                    e = e||event;
                    if (IsMousedown) {
                        login.style.left = e.clientX - LEFT + "px";
                        login.style.top = e.clientY - TOP + "px";
                    }
                }
                document.onmouseup=function(){
                    IsMousedown=false;
                }
            }
			</script>
<!---->
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
