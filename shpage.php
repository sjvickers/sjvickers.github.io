<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<!-- InstanceBegin template="/Templates/SoCS.dwt" codeOutsideHTMLIsLocked="false" -->
<head>

<!-- #BeginEditable "doctitle" -->
<title>School of Computer Science - Dr Steve Vickers</title>
<!-- #EndEditable -->
  
  <?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/sys/includes/wwwlib.php");
    AddSysStylesheets();
  ?>

  <link href="/sys/style-sheets/sys-styles.css" rel="stylesheet" type="text/css" />
  <link href="/sys/style-sheets/sys-print.css" rel="stylesheet" type="text/css"
media="print" />
<!-- TemplateParam name="title" type="text" value="" -->
<!-- TemplateParam name="maintainer" type="text" value="" -->
<!-- TemplateParam name="maintaineremail" type="text" value="" -->

<script type="text/javascript"
  src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
</script>
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
  tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
});
</script> 
</head>
<body>

<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/sys/includes/wwwlib.php");

  SetPageTitle('PhD students of Steve Vickers: Sina Hazratpour');
  SetMaintainer('Steve Vickers', 'sjv@cs.bham.ac.uk');
  PageStart()
?>

<!-- #BeginEditable "content" -->

<p><a href="https://sinhp.github.io/">Sina Hazratpour</a> completed his PhD thesis
"<a href="hazratpourPhD.pdf">A Logical Study of some 2-categorical Aspects of Toposes</a>"
in 2019 at the School of Computer Science, University of Birmingham, under <a href="index.html">my</a>  supervision.</p>
<p>
Some of the most important results were written up as a joint paper with me,
"<a href="papersfull.php#FibConFibTop">Fibrations of AU-contexts beget fibrations of toposes</a>".


<h3>
THESIS ABSTRACT</h3>

<h4>
"A Logical Study of some 2-categorical Aspects of Toposes"</h4>
<p>
PhD Thesis, School of Computer Science, University of Birmingham, 2019. 324 pages.</p>
<p>
Summary</p>
<p>
There are two well-known topos-theoretic models of point-free generalized
spaces: the original Grothendieck toposes (relative to classical sets), and a
relativized version (relative to a chosen elementary topos S with a natural
number object) in which the generalized spaces are the bounded geometric
morphisms from an elementary topos E to S, and they form a 2-category
BTop/S. However, often it is not clear what a preferred choice for the base
S should be.
</p><p>
In this work, we review and further investigate a third model of generalized
spaces, based on the 2-category Con of 'contexts for Arithmetic Universes
(AUs)' presented by AU-sketches which originally appeared in Vickers's work in
<a href="papersfull.php#AUSk">[Vic19]</a> and <a href="papersfull.php#AUClTop">[Vic17]</a>.
</p><p>
We show how to use the AU techniques to get simple proofs of conceptually
stronger, base-independent, and predicative (op)fibration results in ETop, the
2-category of elementary toposes equipped with a natural number object, and
arbitrary geometric morphisms. In particular, we relate the strict Chevalley
fibrations, used to define fibrations of AU-contexts, to non-strict Johnstone
fibrations, used to define fibrations of toposes.
</p><p>
Our approach brings to light the close connection of (op)fibration of toposes,
conceived as generalized spaces, with topological properties. For example, every
local homeomorphism is an opfibration and every entire map (i.e. fibrewise
Stone) is a fibration.
</p>



<!-- #EndEditable -->

<?php PageEnd(); ?>
</body>
<!-- InstanceEnd -->
</html>
