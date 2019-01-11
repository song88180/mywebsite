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
	<?php
        $which = "UMich";
        include("showimg.php");
        ?>
</div>
<?php
include 'dropdown.html';
?>
<script>
document.getElementById('drop-down-Photo').setAttribute("style","background-color:#F5F5F5;color:#000080");
</script>
</body>
