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
#myphoto{
	float:left;
	height:280px;
	margin:10px 20px 10px 0px;
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
document.getElementById('topnav-AboutMe').setAttribute("style","background-color:#F5F5F5;color:#000080");
</script>
<div id="body">
	<div id="maintext">
		<h1 id="currenth">About Me</h1>
		<p>
		<img src='/img/About_Me/myphoto.jpg' id='myphoto'>
		My name is Song, Siliang. I'm currently a undergraduate in Zhejiang University, China, major in biological science.
		</p>
		<p>
		I love nature. When I was a kid, I loved watching documentaries about wildlife. The beauty and mystery of nature in the video deeply fascinated me. I was hoping that one day I can dig deep into nature, feeling and exploring the world full of miracles.</p>
		<p>
		I love all kinds of animals. They are so incredible that almost every single species have their own unique ways to live on this planet. I love insects especially, the extraordinary diversity of their shapes and behavior patterns really appeals to me. I used to catch insects in the field, observing them for hours. I wished that I can work with wild animals in nature in the future.
		</p>
		<p>
		I'm also interested in applying bioinformatic methods in ecology and evolutionary study.
		</p>
		<p>
		For more information, see my <a href='/document/CV.pdf' target="_blank">CV</a><br><br><br><br>
		</p>
	</div>
</div>
<?php
include 'dropdown.html';
?>
<script>
document.getElementById('drop-down-AboutMe').setAttribute("style","background-color:#F5F5F5;color:#000080");
</script>

</body>
</html>
