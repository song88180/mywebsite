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
		<h3>Hymenoptera Taxonomy & Phylogeny Practice, Xuexin Chen Lab, the Institute of Insect sciences, Zhejiang University, 11/01/2015-07/2017 </h3>
		<p>1)	I studied morphology, taxonomy and basic biology about Hymenoptera on family level, and further studied the taxonomy of family Braconidae. I observed specimens under stereo microscope, and classified them by checking the keys.</p>
		<p>2)	I learned how to do phylogenetic analysis, and got familiar with common phylogenetic software, e.g. MrBayes, RAxML, PAML, BEAST. With the help of a doctoral student, I began my first project investigating the influence of parasitic behavior and sociality on mitochondrial DNA evolution of Hymenoptera. We collected published mtDNA coding sequences of 42 species from 23 families, then applied PAML branch model to infer the shift of dN/dS ratio between social - non-social, parasitic - non-parasitic group.</p>

		<h3>Phylogeny of Ambystomatidae project, Shaffer Lab, Department of Ecology and Evolutionary Biology, University of California, Los Angeles, 07/09/2017-09/15/2017 </h3>
		<p>This project is about using targeted gene enrichment method to reveal the phylogeny of Ambystomatidae (a salamander family). We use the RNA probes for 5237 exon genes, which is about 3.5 million bp in total. I selected and picked representative samples, and did DNA extraction and library preparation for 190 samples (4-6 per species). In the meantime, I learned how to process NGS data and do SNP calling. I didn’t get the sequenin results before I leave, so the postdoc in the lab took over the project. The paper is in process recently, and probably could be published in 2019. The paper would show the most comprehensive phylogeny of Ambystomatidae.</p>

		<h3>Lepidoptera LW opsin evolution diurnal and nocturnal species, Pierce Lab, Department of Organismic and Evolutionary Biology, Harvard University, 10/06/2017-04/01/2018</h3>
		 <p>In this project, I studied the evolution of opsin genes with the goal of comparing spectral sensitivities between diurnal and nocturnal species of Lepidoptera. Under the supervision of a postdoc, we screen long wavelength opsins from 10 different species of moths and butterflies, and make expression constructs to transfect them into cell lines for future functional tests. For the bioinformatic work, we mined databases of insect genomes to look for opsin motifs. This training enabled me to develop a script to automate the process of finding potential opsin orthologs from the public genome and proteome datasets even without existing annotation.</p>
		<h3>Elucidating a large inversion in <i>Heliconius erato</i> chromosome 2, Mallet Lab, Department of Organismic and Evolutionary Biology, Harvard University, 05/06/2018-09/04/2018</h3>
		<p>This was a remote project that I did in China (due to visa restriction), collaborating via Skype. The project was to analyze the genomes of <i>Heliconius</i> butterflies, a model system for studying genome evolution and the consequences of introgression. To investigate the history and functional significance of a large inversion that had been recently identified in <i>Heliconius</i> by the lab, I worked with colleagues to explore differences between the selective pressure acting on the inversion and that acting on the rest of the genome. By analyzing published transcriptomes, we were able to identify differentially expressed genes between Heliconius erato and Heliconius sara in the inversion region.</p>
		<h3>Using machine learning to predict tRNA genotype fitness landscape, Zhang Lab, Department of Ecology and Evolutionary Biology, University of Michigan, 09/05/2018 - present</h3>
		<p> The lab previously mapped the fitness landscape of a yeast tRNA gene (Arg-CCU) by quantifying the fitness of over 65,000 yeast strains each carrying a mutant version of the tRNA gene. Despite the large size of the data, the fitness of many mutants was not measured. Working with a postdoctoral fellow in the lab, I aim to predict the fitness of these mutants using the existing data and machine learning methods. We have tried methods of VAE model, random forest, linear regression, and gradient boosting, and have made significant progress in this project. We hope to have a more complete fitness landscape of the tRNA gene in the next few months, which will help understand the genotype-fitness relationship that is key to explaining and predicting evolution.</p>
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
