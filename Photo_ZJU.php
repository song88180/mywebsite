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
<div id="body" style="overflow:hidden; box-sizing: border-box; padding:10px;text-align:center">
	<div id="pwd"> <a href="index.php">Home</a> / <a href="Photo.php">Photo</a> / <a href="Photo_ZJU.php">ZJU</a></div>
	<a href="img/ZJU/1.jpg" data-lightbox="ZJU" data-title="hahahahahah" >
	<img src="img/ZJU/thumbnail/1.jpg" width="200px" style="margin:10px;">
	</a>
	<a href="img/ZJU/2.jpg" data-lightbox="ZJU">
	<img src="img/ZJU/thumbnail/2.jpg" width="200px" style="margin:10px;">
	</a>
	<a href="img/ZJU/3.jpg" data-lightbox="ZJU">
	<img src="img/ZJU/thumbnail/3.jpg" width="200px" style="margin:10px;">
	</a>
	<a href="img/ZJU/4.jpg" data-lightbox="ZJU">
	<img src="img/ZJU/thumbnail/4.jpg" height="200px" style="margin:10px;">
	</a>
	<a href="img/ZJU/5.jpg" data-lightbox="ZJU">
	<img src="img/ZJU/thumbnail/5.jpg" width="200px" style="margin:10px;">
	</a>
	<a href="img/ZJU/6.jpg" data-lightbox="ZJU">
	<img src="img/ZJU/thumbnail/6.jpg" width="200px" style="margin:10px;">
	</a>
	<a href="img/ZJU/7.jpg" data-lightbox="ZJU">
	<img src="img/ZJU/thumbnail/7.jpg" width="200px" style="margin:10px;">
	</a>
	<a href="img/ZJU/8.jpg" data-lightbox="ZJU">
	<img src="img/ZJU/thumbnail/8.jpg" height="200px" style="margin:10px;">
	</a>
	<a href="img/ZJU/9.jpg" data-lightbox="ZJU">
	<img src="img/ZJU/thumbnail/9.jpg" height="200px" style="margin:10px;">
	</a>
	<a href="img/ZJU/10.jpg" data-lightbox="ZJU">
	<img src="img/ZJU/thumbnail/10.jpg" width="200px" style="margin:10px;">
	</a>
</div>
<?php
include 'dropdown.html';
?>
<script>
document.getElementById('drop-down-Photo').setAttribute("style","background-color:#F5F5F5;color:#000080");
</script>
</body>