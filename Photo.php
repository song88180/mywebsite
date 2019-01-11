<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Research|Song, Siliang</title>
<link rel="stylesheet" type="text/css" href="basic_style.css" />
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
.cover{
	width:150px;
	height:100%;
	float:left;
	overflow:hidden;
}
.photo-intro{
	width:100%;
	height:100%;
	padding-left:160px;
	box-sizing: border-box;
}
.photo-title{
	margin:0px; padding:0px;overflow: hidden; text-overflow: ellipsis; white-space:nowrap;
}
.photo-text{
	display: -webkit-box ;  
    overflow: hidden;  
    text-overflow: ellipsis;  
    word-break: break-all;  
    -webkit-box-orient: vertical;  
    -webkit-line-clamp: 3;
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
<div id="body" style="overflow:hidden; box-sizing: border-box; padding:10px;">
	<div id="pwd"> <a href="index.php">Home</a> / <a href="Photo.php">Photo</a></div>
	<div class="photoclass" >
		<div class="cover">
		<a href="Photo_ZJU.php">
		<img src="img/ZJU/cover.jpg" height="100%" width="auto">
		</a>
		</div> 
		<div class="photo-intro">
			<h2 class="photo-title">
			Zhejiang University
			</h2>
			<div class="photo-text">
			In Zhejiang University
			</div>
		</div>
	</div>
	<div class="photoclass" >
		<div class="cover">
		<a href="Photo_UCLA.php">
		<img src="img/UCLA/cover.jpg" height="100%" width="auto">
		</a>
		</div> 
		<div class="photo-intro">
			<h2 class="photo-title">
			UCLA
			</h2>
			<div class="photo-text">
			In UCLA
			</div>
		</div>
	</div>
	<div class="photoclass" >
		<div class="cover">
		<a href="Photo_Harvard.php">
		<img src="img/Harvard/cover.jpg" height="100%" width="auto">
		</a>
		</div> 
		<div class="photo-intro">
			<h2 class="photo-title">
			Harvard
			</h2>
			<div class="photo-text">
			In Harvard
			</div>
		</div>
	</div>
	<div class="photoclass" >
                <div class="cover">
                <a href="Photo_UMich.php">
                <img src="img/UMich/cover.jpg" height="100%" width="auto">
                </a>
                </div>
                <div class="photo-intro">
                        <h2 class="photo-title">
                        UMich
                        </h2>
                        <div class="photo-text">
                        In UMich
                        </div>
                </div>
        </div>

	<div id="maintext">
	</div>
</div>
<?php
include 'dropdown.html';
?>
<script>
document.getElementById('drop-down-Photo').setAttribute("style","background-color:#F5F5F5;color:#000080");
</script>
</body>
