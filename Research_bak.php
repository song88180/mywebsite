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
document.getElementById('topnav-Research').setAttribute("style","background-color:#F5F5F5;color:#000080");
</script>
<div id="body">
	<div id="maintext">
		<h1 id="currenth">Research</h1>
		<h3>East China-Taiwan Joint Ecology Field Practice (in Taiwan), 07/19/2015-08/06/2015</h3> 
		<p>This is a cooperation program between Zhejiang University and Donghua University. We focused on several topics on ecology at Hualian, Taiwan, which include bird biodiversity investigation, soil microbial ecology, Aquatic insects biodiversity investigation, Frog and Toad biodiversity investigation, relation between fish body size and age. We took courses and did field works, in the end, we wrote reports and did the final presentation. In the program, I practiced ecology field works and learnt to do the statistical analysis on observing data.</p>

		<h3>Hymenoptera Taxonomy & Phylogeny Practice in Xuexin Chen Lab, the Institute of Insect sciences, Zhejiang University, 11/01/2015-07/2017 </h3>
		<p>1)	I studied the taxonomy and basic biology about Hymenoptera on family level, and studied the taxonomy focusing on the family Braconidae on sub family level. I observed specimens under stereo microscope, and classify them by checking the keys. Now I can quickly classify a Hymenoptera into family, or subfamily.</p>
		<p>2)	I studied how to do phylogenetic analysis, and got familiar with common phylogenetic software, e.g. MrBayes, RAxML, PAML,BEAST. With the help of a doctoral student, I began my first project focusing on relationship between parasitic behavior and mitochondrial DNA evolution of hymenoptera. Although we failed to find any correlation between parasitism and selection pressure on mtDNA, we found correlation between social behavior and mtDNA selection pressure.</p>

		<h3>Investigation of the Effects of Urbanization on soil arthropod Biodiversity, 09/2016-07/2017</h3> 
		<p>This is a project carried by undergraduate researchers in an ecology lab led by Professor Ping-Ding. We chose sample points with different urbanization level across Zijingang campus and Zhijiang campus of ZJU. In each sample point, we set up 3 pitfall traps. We check the traps once a week, for 10 weeks in total. We specifically investigate the biodiversity of spiders and beetles, and calculate the richness and α diversity. I helped with most of the field setting up and checking works, and also with classification of beetles (on family level).</p>

		<h3>Phylogeny of Ambystomatidae project in Shaffer Lab, Department of Ecology and Evolutionary Biology, University of California, Los Angeles, 07/09/2017-09/15/2017 </h3>
		<p>This project is about using targeted gene enrichment method to reveal the phylogeny of Ambystomatidae (a salamander family). We use the RNA probes for 5237 exon genes, which is about 3.5 million bp. I selected and picked representative samples, and did DNA extraction and library preparation for 190 samples. In the meantime, I learnt how to process NGS raw data. I didn’t get the sequence results before I leave, but I will continue to do phylogenetic analysis on lab server once I get the sequence data.</p>

		<h3>Lepidoptera opsin gene screening project in Pierce Lab, Department of Organismic and Evolutionary Biology, Harvard University, 10/06/2017-present</h3>
		<p>In this project, I was screening opsin genes in Lepidoptera species. I try to compare the difference of opsin genes, including sequence, types and copy number of opsin, between diurnal and nocturnal species. The project is still going on currently. I have practiced my molecular biology skills, and learnt how to investigate a specific group of genes.</p>
</p>
	</div>
</div>
<?php
include 'dropdown.html';
?>
<script>
document.getElementById('drop-down-Research').setAttribute("style","background-color:#F5F5F5;color:#000080");
</script>
</body>
</html>
