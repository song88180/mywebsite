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
		My name is Song, Siliang. I earned my bachelor degree of biological science in Zhejiang University, China.
		</p>
		<p>
		When I was a boy, I was fasinated with insects. The extraordinary diversity of morphology and behavior really appeals to me. Later in my life, I get intersted in the power that shapes the incredible nature diversity -- Evolution</p>
		</p>
		<p>
		I'm also interested in applying computational methods in evolutionary study or sequencing analysis.
		</p>
		<p>
		For more information, see my <a href='/document/CV.pdf' target="_blank">CV</a><br><br><br><br>
		</p>
		<p>
		<br><br><br>
		Apart from genomic evolution study, some of my life goals include:
		</p>
		<p>
		1. <b>Establish a standard global database for all species</b> (especially for insects), which should contains text description, photos, videos, 3d render models, etc. The realistic ways to achieve this are 1) integrating existed databases and projects, 2) getting professors of different animal group involved to curate the database together, 3) taking advantage of the power of normal people, collecting species images, videos, and other informations from everyone. Once there are considerable records, deep learning image recognition could be applied to help scholars and normal people classify difficult samples. Somebody did similar things using AntWeb images: <a href = 'https://github.com/naturalis/FormicID' target='_blank'>FormicID</a>
		</p>
		<p>
		2. <b>Digital organism</b> is a self-replicating computer program that mutates and evolves. Although live in digital world, digital organisms share many higer level similarities with real organism, such as parasitism, coevolution, 'junk DNA',  using previously evolved building blocks to form new complex features, etc. In terms of potential application, 1) digital evolution might be able to generate a complex system (or digital organism) that can manage more complicated and intelligent tasks than a deep neuron network could do. 2) from lower level building blocks, we could hope that the digital organism evolve some features that have its counterpart in the real world, such as codon encoding system, centralization of nervous system. And we could easily look into details how these features evolved in a computer, which otherwise would be impossible to investigate in the real world. 3) One of the ultimate purposes of digital evolution study is to build a digital organism that fully represents a real-world cell or organism, in another world, create a real-world life in computer. If achieved, every biological or biomedical problem would be solved.</p>
<p>
Some of the classic work in this field: 1) Karl Sims's <a href='https://www.karlsims.com/evolved-virtual-creatures.html'>Evolved Virtual Creatures</a> 2) <a href='https://avida-ed.msu.edu/'> Avida </a>(and its predecessor <a href='https://www.youtube.com/watch?v=Wl5rRGVD0QI'>Tierra</a>) 3) <a href='http://www.evolvingai.org/research'>Evolving AI Lab</a>
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
