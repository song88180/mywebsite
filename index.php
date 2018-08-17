<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Home|Song, Siliang</title>
<link rel="stylesheet" type="text/css" href="basic_style.css?1" />
<style type="text/css">
   #box{
    position:relative;
	margin:0px auto;
	width:100%;
	height:0px;
	padding-bottom:60%;
   }
   #box .list {
   position:relative;
   padding:0px;
   padding-bottom:60%;
   margin:0px;
   width:100%;
   height: 100%;
   overflow: hidden;
   }
   #box .list li {
    position: absolute;
	padding:0px;
    width: 100%;
    height: auto;
    opacity: 0;
    transition: opacity 1s linear;
	overflow: hidden;
   }
   #box .list li.current {
    opacity: 1;
   }
   #box .count {
    position: absolute;
    right: 1px;
    bottom: 3px;
	margin:0px;
   }
   #box .count li {
    color: #fff;
    float: left;
    width: 20px;
    height: 20px;
    cursor: pointer;
    margin-right: 5px;
    overflow: hidden;
    background: #F;
    opacity: 0.5;
	border: 1.5px solid green;
	text-align:center;
   }
   #box .count li.current {
    color: #fff;
    opacity: 1.0;
    font-weight: bold;
    background: #f
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
document.getElementById('topnav-Home').setAttribute("style","background-color:#F5F5F5;color:#000080");
</script>
<div id="body">
  <div id="box">
    <ul class="list">
      <li class="current" style="opacity:1;"><img src="img/images/1.jpg" width="100%" height=auto/></li>
      <li style="opacity:0;"><img src="img/images/2.jpg" width="100%" height=auto/></li>
      <li style="opacity:0;"><img src="img/images/3.jpg" width="100%" height=auto/></li>
      <li style="opacity:0;"><img src="img/images/4.jpg" width="100%" height=auto/></li>
      <li style="opacity:0;"><img src="img/images/5.jpg" width="100%" height=auto/></li>
	  <li style="opacity:0;"><img src="img/images/6.jpg" width="100%" height=auto/></li>
	  <li style="opacity:0;"><img src="img/images/7.jpg" width="100%" height=auto/></li>
	  <li style="opacity:0;"><img src="img/images/8.jpg" width="100%" height=auto/></li>
	  <li style="opacity:0;"><img src="img/images/9.jpg" width="100%" height=auto/></li>
	  <li style="opacity:0;"><img src="img/images/10.jpg" width="100%" height=auto/></li>
	  <li style="opacity:0;"><img src="img/images/11.jpg" width="100%" height=auto/></li>
	  <li style="opacity:0;"><img src="img/images/12.jpg" width="100%" height=auto/></li>
	  <li style="opacity:0;"><img src="img/images/13.jpg" width="100%" height=auto/></li>
	  <li style="opacity:0;"><img src="img/images/14.jpg" width="100%" height=auto/></li>
	  <li style="opacity:0;"><img src="img/images/15.jpg" width="100%" height=auto/></li>
	  <li style="opacity:0;"><img src="img/images/16.jpg" width="100%" height=auto/></li>
	  <li style="opacity:0;"><img src="img/images/17.jpg" width="100%" height=auto/></li>
	  <li style="opacity:0;"><img src="img/images/18.jpg" width="100%" height=auto/></li>
	  <li style="opacity:0;"><img src="img/images/19.jpg" width="100%" height=auto/></li>
	  <li style="opacity:0;"><img src="img/images/20.jpg" width="100%" height=auto/></li>
    </ul>
    <ul class="count">
      <li class="current">1</li>
      <li class="">2</li>
      <li class="">3</li>
      <li class="">4</li>
      <li class="">5</li>
	  <li class="">6</li>
	  <li class="">7</li>
	  <li class="">8</li>
	  <li class="">9</li>
	  <li class="">10</li>
	  <li class="">11</li>
	  <li class="">12</li>
	  <li class="">13</li>
	  <li class="">14</li>
	  <li class="">15</li>
	  <li class="">16</li>
	  <li class="">17</li>
	  <li class="">18</li>
	  <li class="">19</li>
	  <li class="">20</li>
    </ul>
  </div>
  <p style="text-align:center"><font size="5">Hi, welcome to Song Siliang's personal website!<br>Still Under Construction</font></p>
  <br><br><br><br>
</div >
<?php
include 'dropdown.html';
?>
<script>
document.getElementById('drop-down-Home').setAttribute("style","background-color:#F5F5F5;color:#000080");
</script>

<script>
  var box=document.getElementById('box');
  var uls=document.getElementById('box').getElementsByTagName('ul');
  var imgs=uls[0].getElementsByTagName('li');
  var btn=uls[1].getElementsByTagName('li');
  var i=index=0; 
  var play=null;
  console.log(box,uls,imgs,btn);
  
  function show(a){    
    for(i=0;i<btn.length;i++ ){
      btn[i].className='';  
      btn[a].className='current';
    }
    for(i=0;i<imgs.length;i++){ 
      imgs[i].style.opacity=0;
      imgs[a].style.opacity=1;
    }
  }
  
  for(i=0;i<btn.length;i++){
    btn[i].index=i; 
    btn[i].onmouseover=function(){
      show(this.index);
      clearInterval(play); 
    }
	btn[i].onmouseout=function(){index=this.index;autoPlay();}
  }
  
 function autoPlay(){
    play=setInterval(function(){ 
    index++;
    index>=imgs.length&&(index=0);
    show(index);
	},4000)
  }
  autoPlay();
</script>
</body>
</html>
