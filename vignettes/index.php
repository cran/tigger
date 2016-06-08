<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" type-"text/css" href="QuSAGE.css" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>TIgGER - Kleinstein Lab</title>

<?php  include_once("counts.php"); ?>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<style>
pre {
  background: #ffffff;
  padding: 1em;
  border: 1px #aaaaaa dashed;
  font-family: 'Lucida Console',monaco,monospace;
  margin-top: 1em;
  margin-bottom: 1em;
  overflow-x: auto;
  white-space: pre;
  max-width: 550px;
}
</style>

</head>
<body onload="$.post('increment.php', {id: 'page'})">
<div class="header">
	<H1>TIgGER</H1>
	<div class="subtitle">Tool for Immunoglobulin Genotype Elucidation via Rep-Seq </div>
</div>
<div class="content">
	High-throughput sequencing of B cell immunoglobulin receptors is providing unprecedented insight into adaptive immunity. A key step in analyzing these data involves assignment of the germline V, D and J gene segment alleles that comprise each immunoglobulin sequence by matching them against a database of known V(D)J alleles. However, this process will fail for sequences that utilize previously undetected alleles, whose frequency in the population is unclear. We have created TIgGER, a computational method that significantly improves V(D)J allele assignments by first determining the complete set of gene segments carried by an individual, including novel alleles. The application of TIgGER identifies a surprisingly high frequency of novel alleles, highlighting the critical need for this approach.
<h2>Supplementary Data:</h2>
<ul>
<li><a href=Novel-Alleles.fasta>NovelAlleles.fasta</a> - The novel V segment alleles identified by TIgGER (and presented in Table 2 of the paper cited below)</li>
<li><a href=Allele-Evidence.pdf>AlleleEvidence.pdf</a> - Summaries of evidence for the V segment alleles identified by TIgGER</li>
</ul>
<p>
<h2>Download:</h2>
TIgGER is available as a package in the <a href="http://www.rstudio.com/products/rstudio/download/">R programming language</a>.
The download below contains the source package and can be loaded into R with the following command:
<FONT FACE="courier">install.packages("YOUR-FILE-PATH/tigger_0.2.2.tar.gz", repos=NULL, type="source")</FONT>
(Note that the newest version, 0.2.2, succeeds version 2.1. This is so that the TIgGER version numbers will follow those of of the other Change-O packages.)

<ul>
	<li>
		<A HREF="downloadHelper.php?dbTable=tigger&downloadFile=tigger_0.2.2.tar.gz">
			TIgGER v0.2.2
		</A>
	</li>
	<li><a href="Tigger-Vignette.pdf">Vignette (usage example)</a></li>
	<li><a href="Tigger-Reference.pdf">Reference manual (function documentation)</a></li>
</ul>

	<h2>Citing TIgGER:</h2>
	<p>
	When including the results of the TIgGER package in a publication, please cite the following paper:
	<p><i>Daniel Gadala-Maria, Gur Yaari, Mohamed Uduman, Steven H. Kleinstein (2015) "Automated analysis of high-throughput B cell sequencing data reveals a high frequency of novel immunoglobulin V gene segment alleles." <a href="http://www.pnas.org/content/112/8/E862.full"></i>PNAS <i>112(8), E862-E870</a></i></p>
	</p>
	<p>
	</p>
<h2>Other Ig Tools</h2>
<ul>
<li>
	<a href="http://clip.med.yale.edu/presto">pRESTO</a> - Toolkit for processing raw reads from high-throughput sequencing of lymphocyte repertoires<br>
</li>
<li>
	<a href="http://clip.med.yale.edu/changeo">Change-O</a> - Toolkit for clonal assignment, lineage reconstruction, diversity analysis, mutation profiling and selection analysis.
<br>
</li>

<li>
	<a href="http://selection.med.yale.edu/baseline">BASELINe</a> - Bayesian estimation of antigen-driven selection<br>
</li>
<li>
	<a href="http://clip.med.yale.edu/shm">S5F</a> - A 5-mer microsequence context model of somatic hypermutation targeting and substitution rates<br>
</li>
<li>
<a href="http://www.ihmmune.unsw.edu.au/unswig.php">UNSWIg repertoire</a> - The University of New South Wales database, which classifies alleles according to certainty and contains alleles not in the IMGT database
</li>
<li><a href="http://www.imgt.org/HighV-QUEST/">IMGT/HighV-QUEST</a> - The IMGT tool for aligning samples to the IMGT germline database alleles
</li>
<li>
<a href="http://www.imgt.org/genedb/">IMGT/GENE-DB</a> - The IMGT database of germline alleles
</li>
</ul>
	<div class="contact">
	For questions, comments, or requests, please contact Steven Kleinstein at <a href="mailto:steven.kleinstein@yale.edu">steven.kleinstein@yale.edu</a>
	</div>
	<div class="copyright">
	&copy; 2015 Yale University. All rights reserved.
	</div>
</div>
</body>
</html>
