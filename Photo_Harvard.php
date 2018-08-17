<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Photo|Song, Siliang</title>
<link rel="stylesheet" type="text/css" href="basic_style.css" />
<link rel="stylesheet" type="text/css" href="lightbox2-master/dist/css/lightbox.css" />
<style type="text/css">
a{text-decoration:none;}
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

.photoclass{
	width:100%;
	height:150px;
	padding:10px;
	box-sizing: border-box;
	border-bottom:2px dotted #CDC8B1;
}

#body img {
    transition-duration:0.5s;
}

#body img:hover {
    transform: scale(1.1);
   
}
#pwd{
	text-align:left;
	margin:10px;
}

#pwd a{
	font-weight:bold;
	color:#000080
}
</style>
<script src="lightbox2-master/dist/js/lightbox-plus-jquery.js"></script>
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
document.getElementById('topnav-Photo').setAttribute("style","background-color:#F5F5F5;color:#000080");
</script>
<div id="body" style="overflow:hidden; box-sizing: border-box; padding:10px; text-align:center">
	<div id="pwd"> <a href="index.php">Home</a> / <a href="Photo.php">Photo</a> / <a href="Photo_Harvard.php">Harvard</a></div>
	<a href="img/Harvard/1.jpg" data-lightbox="Harvard" data-title="hahahahahah" >
	<img src="img/Harvard/thumbnail/1.jpg" height="200px" style="margin:10px;">
	</a>
	<a href="img/Harvard/2.jpg" data-lightbox="Harvard">
	<img src="img/Harvard/thumbnail/2.jpg" height="200px" style="margin:10px;">
	</a>
	<a href="img/Harvard/3.jpg" data-lightbox="Harvard">
	<img src="img/Harvard/thumbnail/3.jpg" height="200px" style="margin:10px;">
	</a>
	<a href="img/Harvard/4.jpg" data-lightbox="Harvard">
	<img src="img/Harvard/thumbnail/4.jpg" width="200px" style="margin:10px;">
	</a>
	<a href="img/Harvard/5.jpg" data-lightbox="Harvard">
	<img src="img/Harvard/thumbnail/5.jpg" height="200px" style="margin:10px;">
	</a>
	<a href="img/Harvard/6.jpg" data-lightbox="Harvard">
	<img src="img/Harvard/thumbnail/6.jpg" width="200px" style="margin:10px;">
	</a>
	<a href="img/Harvard/7.jpg" data-lightbox="Harvard">
	<img src="img/Harvard/thumbnail/7.jpg" width="200px" style="margin:10px;">
	</a>
	<a href="img/Harvard/8.jpg" data-lightbox="Harvard">
	<img src="img/Harvard/thumbnail/8.jpg" height="200px" style="margin:10px;">
	</a>
	<a href="img/Harvard/9.jpg" data-lightbox="Harvard">
	<img src="img/Harvard/thumbnail/9.jpg" width="200px" style="margin:10px;">
	</a>
	<a href="img/Harvard/10.jpg" data-lightbox="Harvard">
	<img src="img/Harvard/thumbnail/10.jpg" height="200px" style="margin:10px;">
	</a>
	<a href="img/Harvard/11.jpg" data-lightbox="Harvard">
	<img src="img/Harvard/thumbnail/11.jpg" height="200px" style="margin:10px;">
	</a>
	<a href="img/Harvard/12.jpg" data-lightbox="Harvard">
	<img src="img/Harvard/thumbnail/12.jpg" height="200px" style="margin:10px;">
	</a>
</div>
<?php
include 'dropdown.html';
?>
<script>
document.getElementById('drop-down-Photo').setAttribute("style","background-color:#F5F5F5;color:#000080");
</script>
</body>