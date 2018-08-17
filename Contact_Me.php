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

<body>
<?php
include 'webtop.html';
?>
<script>
document.getElementById('topnav-ContactMe').setAttribute("style","background-color:#F5F5F5;color:#000080");
</script>
<div id="body">
	<div id="maintext">
		<h1 id="currenth">Contact Me</h1>
		<p style="text-align:center">Zhejiang University<br>College of life science<br>QiuShi1401 Biology Class<br>866 Yuhangtang Road, 310058<br>Hangzhou Zhejiang China<br><br>Phone: +86 17816872152<br><a href="mailto:song88180@zju.edu.cn">Email: song88180@zju.edu.cn</a></p>
	</div>
</div>
<?php
include 'dropdown.html';
?>
<script>
document.getElementById('drop-down-ContactMe').setAttribute("style","background-color:#F5F5F5;color:#000080");
</script>
</body>
</html>
