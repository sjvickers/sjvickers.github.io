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

  SetPageTitle('Steve Vickers: Papers');
  SetMaintainer('Steve Vickers', 'sjv@cs.bham.ac.uk');
  PageStart()
?>

<!-- #BeginEditable "content" -->

<p>
This is a complete list of my academic papers, with abstracts and dowloadable preprint versions where available.</p>
<p>
Elsewhere, you can also find -
<ul>
<li>a briefer <a href="papers.php">summary of the papers</a></li>
<li><a href="talks.php">slides</a> from selected talks</li>
<li>a list of my papers <a href="MyBiblio.bib">in bibtex format</a></li>
<li>links to papers of my <a href="phds.php">PhD students</a></li>
</ul>

<h4> Note on .ps papers</h4>
<p>
Some of the older .ps papers (PreFrPrePre, GeoTh+DBs, Infosys and
QuProc) have been prepared from original Microsoft Word documents. They
will differ from the published versions, certainly in format and
perhaps
also in details of content. Also, some of those .ps files have not been
tested on a printer, so please report any problems with them by
emailing
me (s.j.vickers) at cs.bham.ac.uk.
</p>
<h2> Contents (most recent first)</h3>
<ul>
  <li><a href="#Ostrowski">A point-free look at Ostrowski's Theorem and absolute values</a></li>
  <li><a href="#ExpDiff">The Fundamental Theorem of Calculus point-free, with applications to exponentials and logarithms</a></li>
  <li><a href="#PtfreePtwise">Generalized point-free spaces, pointwise</a></li>
  <li><a href="#ExpLog">Point-free construction of real exponentiation</a></li>
  <li><a href="#FibConFibTop">Fibrations of AU-contexts beget fibrations of toposes</a></li>
  <li><a href="#AUClTop">Arithmetic universes and classifying toposes</a></li>
  <li><a href="#AUSk">Sketches for arithmetic universes</a></li>
  <li><a href="#IntervalNote">The localic compact interval is an Escard&oacute;-Simpson
      interval object</a></li>
  <li><a href="#CohGeom">A coherent account of geometricity</a>
    </li>
  <li><a href="#GeomFib">Geometric constructions preserving fibrations</a></li>
  <li><a href="#FishLoc">Positivity relations on a locale</a></li>
  <li><a href="#SamsonFest">Domain theory in topical form</a></li>
  <li><a href="#SVWspectraGeom">Gelfand spectra in Grothendieck toposes using geometric mathematics</a></li>
  <li><a href="#BornQPL">The Born rule and structure of spectral bundles</a></li>
  <li><a href="#Riesz">A monad of valuation locales</a></li>
  <li><a href="#GeoAspects">Continuity and geometric logic</a></li>
  <li><a href="#NablaVVV">Generalized powerlocales via relation lifting</a></li>

  <li><a href="#ArithInd">An induction principle for consequence in arithmetic
      universes</a></li>
  <li><a href="#DcpoAlg">Presenting dcpos and dcpo algebras</a></li>

  <li><a href="#Ontology">Issues of logic, algebra and topology in ontology</a></li>

  <li><a href="#GeoFuzzy">Fuzzy sets and geometric logic</a></li>

  <li><a href="#ConnFT">Cosheaves and connectedness in formal topology</a></li>

  <li><a href="#integration">A localic theory of lower and upper integrals</a></li>

  <li><a href="#CViet">The connected Vietoris powerlocale</a></li>

  <li> <a href="#LocTopSpaces">Locales and toposes as spaces</a></li>

  <li> <a href="#PHLCC">Partial Horn logic and cartesian categories</a></li>

  <li> <a href="#SublocFT">Sublocales in formal topology</a></li>

  <li> <a href="#InfiniteTych">Some constructive roads to Tychonoff</a></li>

  <li> <a href="#LangCMLS">A language for configuring multi-level specifications</a></li>

  <li> <a href="#LocCompB">Localic completion of generalized metric spaces II: Powerlocales</a> </li>

  <li> <a href="#LocCompA">Localic completion of generalized metric spaces I</a></li>

  <li> <a href="#EntSys">Entailment systems for stably locally compact locales</a></li>

  <li> <a href="#UniCharPP">A universal characterization of the double powerlocale</a></li>

  <li> <a href="#CompLocFT">Compactness in locales and in formal topology</a></li>

  <li> <a href="#PPandExp">The double powerlocale and exponentiation:
a case study in geometric logic</a></li>

  <li> <a href="#LocSLTrS">Localic sup-lattices and tropological systems</a></li>

  <li> <a href="#PCS">Presheaves as Configured Specifications</a></li>

  <li> <a href="#SFP">Strongly Algebraic = SFP (Topically)</a></li>

  <li> <a href="#LocCQS">Localic Completion of Quasimetric Spaces</a></li>

  <li> <a href="#TCD">Topical Categories of Domains</a></li>

  <li> <a href="#TVCL">Topology via Constructive Logic</a></li>

  <li> <a href="#TPLVN">Toposes pour les vraiment nuls</a></li>

  <li> <a href="#CPPL">Constructive points of powerlocales</a></li>

  <li> <a href="#TPLN">Toposes pour les nuls</a></li>

  <li> <a href="#ReasProg">Reasoned Programming</a></li>

  <li> <a href="#LNP">Locales are not pointless</a></li>

  <li> <a href="#GLaSL">Geometric logic as a specification language</a></li>

  <li> <a href="#TGT">Towards a GeoZ toolkit</a></li>

  <li> <a href="#GLiCS">Geometric Logic in Computer Science</a></li>

  <li> <a href="#QOLPS">Quantales, Observational Logic and Process Semantics</a></li>

  <li> <a href="#ISCP">Information Systems for Continuous Posets</a></li>

  <li> <a href="#GTD">Geometric Theories and Databases</a></li>

  <li> <a href="#PPP">Preframe Presentations Present</a></li>

  <li> <a href="#SERB">Formal Implementation</a></li>
  <li> <a href="#TVL">Topology Via Logic</a></li>
  <li> <a href="#padic2">A fixpoint construction of the <i>p</i>-adic domain</a></li>
  <li> <a href="#padic1">An algorithmic approach to the <i>p</i>-adic integers</a></li>
  <li> <a href="#FourmanVic">Theories as categories</a></li>
</ul>


<h3> ABSTRACTS</h3>

<a name="Ostrowski"></a>

<h4>"A point-free look at Ostrowski's Theorem and absolute values"</h4>
<p>(with Ming Ng and based on some of <a href="mnpage.php">his thesis</a> work)</p>
<p>
Submitted for publication.
</p>
<p>
Versions archived at <a href="https://arxiv.org/abs/2308.14758">arXiv:2308.14758</a>
</p>
<p>
This paper investigates the absolute values on Z valued in the upper reals (i.e. reals for which only a right Dedekind section is given). These necessarily include multiplicative seminorms corresponding to the finite prime fields F_p. As an Ostrowski-type Theorem, the space of such absolute values is homeomorphic to a space of prime ideals (with co-Zariski topology) suitably paired with upper reals in the range [-\infty,1], and from this is recovered the standard Ostrowski's Theorem for absolute values on Q.
<br>
Our approach is fully constructive, using, in the topos-theoretic sense, geometric reasoning with point-free spaces, and that calls for a careful distinction between Dedekinds vs. upper reals. This forces attention on topological subtleties that are obscured in the classical treatment. In particular, the admission of multiplicative seminorms points to connections with Berkovich and adic spectra. The results are also intended to contribute to characterising a (point-free) space of places of Q.
<br>
Maths Subject Classification MSC2020:
  18F10; 18F70, 03G30, 06D22
</p>

<hr>
<a name="ExpDiff"></a>

<h4>"The Fundamental Theorem of Calculus point-free, with applications to exponentials and logarithms"</h4>
<p>
Versions archived at <a href="https://arxiv.org/abs/2312.05228">arXiv:2312.05228</a>;
</p>
<a href="expDiffSlides.pdf">slides</a></p>
<p>
Working in point-free topology under the constraints of geometric logic, we prove the Fundamental Theorem of Calculus, and apply it to prove the usual rules for the derivatives of x^\alpha, \gamma^x, and log_\gamma x.
<br>
Maths Subject Classification MSC2020
  26E40; 26A24, 26A36, 18F10
<br>
  Keywords: Point-free topology, geometric logic
</p>

<hr>
<a name="PtfreePtwise"></a>

<h4>"Generalized point-free spaces, pointwise"</h4>
<p>
Archived at <a href="http://arxiv.org/abs/2206.01113">arXiv:2206.01113</a>
</p>
<p>
We survey foundational principles of Grothendieck's generalized spaces, including a critical glossary of the various, and often conflicting, terminological usages.
	
Known results using generalized points support a fully pointwise notation for these essentially point-free structures. This includes some from dependent type theory to deal with bundles as continuous space-valued maps, mapping base point to fibre.<br>
MSC2020 03G30; 18F10, 18F70
</p>

<hr>

<a name="ExpLog"></a>

<h4>"Point-free construction of real exponentiation"</h4>
<p>(with Ming Ng and based on some of <a href="mnpage.php">his thesis</a> work)</p>
<p>
<a href="https://lmcs.episciences.org/">Logical Methods in Computer Science</a> <b>18</b> no. 3 (2022), pp. 15:1--15:32.
<br>
DOI: <a href="https://doi.org/10.46298/lmcs-18(3:15)2022">10.46298/lmcs-18(3:15)2022</a> (open access)
</p>
<p>
Versions archived at <a href="http://arxiv.org/abs/2104.00162">arXiv:2104.00162</a>
</p>
<p>
We define a point-free construction of real exponentiation and logarithms, i.e. we construct the maps
$\exp\colon (0,\infty)\times \mathbb{R}\to(0,\infty),
(x,\zeta)\mapsto x^\zeta$ and
$\log\colon (1,\infty)\times(0,\infty)\to\mathbb{R},
(b,y)\mapsto \log_b(y)$,
and we develop familiar algebraic rules for them. The point-free approach is constructive, and defines the points of a space as models of a geometric theory, rather than as elements of a set -- in particular, this allows geometric constructions to be applied to points living in toposes other than Set. Our geometric development includes new lifting and gluing techniques in point-free topology, which highlight how properties of $\mathbb{Q}$ determine properties of real exponentiation.
This work is motivated by our broader research programme of developing a version of adelic geometry via topos theory. In particular, we wish to construct the classifying topos of places of $\mathbb{Q}$, which will provide a geometric perspective into the subtle relationship between $\mathbb{R}$ and $\mathbb{Q}_p$, a question of longstanding number-theoretic interest. <br>
MSC2020 26E40; 18F10, 18F40
</p>


<hr>

<a name="FibConFibTop"></a>
<h4>"Fibrations of AU-contexts beget fibrations of toposes"</h4>
<p>(with Sina Hazratpour)</p>
<p>
<a href="http://www.tac.mta.ca/tac/">Theory and Applications of Categories</a>
<b>35</b> no. 16 (2020), pp. 562-593.
</p>
<p>
Final version: <a href="FibConFibTop.pdf">pdf</a>.
<br/>Earlier archived version at <a href="http://arxiv.org/abs/1808.08291">arXiv:1808.08291</a>
</p>
<p>
Suppose an extension map $U\colon \mathbb{T}_1 \to \mathbb{T}_0$
in the 2-category $\mathfrak{Con}$ of contexts for
arithmetic universes satisfies a Chevalley criterion for being an (op)fibration in $\mathfrak{Con}$.
If $M$ is a model of $\mathbb{T}_0$ in an elementary topos $\mathcal{S}$ with nno, then the classifier
$p\colon \mathcal{S}[\mathbb{T}_1 /M] \to \mathcal{S}$ satisfies the representable definition of being an (op)fibration
in the 2-category $\mathfrak{ETop}$ of elementary toposes (with nno) and geometric morphisms.
<br>
MSC2020 18D30; 03G30, 18F10, 18C30, 18N10
</p>
<p>
The significance of the results for the AU programme lies in the question of how to construct colimits of generalized spaces.
For the original topos implementation,
this comes cheaply as colimits of Grothendieck toposes are limits
of the underlying categories.
However, there can still be a need to find a geometric description of
the points,
and this can be seen in
"<a href="#TopCat">Topical categories of domains</a>".
There coproducts and lifted spaces (which classify partial points,
and are cocommas of a unique map to 1 with an identity map)
are constructed using the bagtoposes of
"<a href="#GTD">Geometric theories and databases</a>".
This need is even stronger in $\mathfrak{Con}$,
where the generalized spaces are taken as <i>being</i>
the AU analogues of geometric theories.
Johnstone showed that the bagtoposes are partial products,
a generalization of exponentials,
but for its correct 2-categorical characterization the notion of partial product depends on an analysis of the (op)fibration properties.
For these reasons I expect an understanding of (op)fibrations in
$\mathfrak{Con}$ to be important in constructing colimits there.
The present paper gives that understanding and connects it to
the established theory for toposes.
</p>

<hr>

<a name="AUClTop"></a>
<h4>"Arithmetic universes and classifying toposes"</h4>
<p>
<a href="http://cahierstgdc.com/index.php/volume-lviii-2017/">Cahiers de topologie et g&eacute;om&eacute;trie diff&eacute;rentielle cat&eacute;gorique</a>
<b>58</b> no. 4 (2017), pp. 213-248.
</p>
<p>
Preprint: <a href="AUClTop.pdf">pdf</a>.
<br/>Archived version at <a href="http://arxiv.org/abs/1701.04611">arXiv:1701.04611</a>
</p>
<p>
  The paper uses structures in $\mathfrak{Con}$,
  the author's 2-category of sketches for arithmetic universes (AUs),
  to provide constructive, base-independent results for Grothendieck toposes (bounded $\mathcal{S}$-toposes)
  as generalized spaces.
<br/>
  The main result is to show how an extension map
  $U\colon \mathbb{T}_1 \to \mathbb{T}_0$ can be viewed as a bundle,
  transforming base points (models of $\mathbb{T}_0$ in any elementary topos $\mathcal{S}$ with nno)
  to fibres (generalized spaces over $\mathcal{S}$).
<br/>
  Features of the work include comparison of strict and non-strict models,
  using properties of the objects of $\mathfrak{Con}$;
  the use of Gray tensor products to relate syntactic transformation of models
  by 1-cells in $\mathfrak{Con}$ and semantic transformations by non-strict AU-functors;
  and the use of 2-fibrations to index over a 2-category of base toposes $\mathcal{S}$.
</p><p>
  Maths Subject Classification
    18B25; 18D05 18D30 18C30 03G30
<br/>  
  Keywords: geometric theory, 2-fibration, sketch, Gray tensor
</p>
<p>
  See also the talks for <a href="talks.php#YamCATS">YaMCATS</a>
  and <a href="talks.php#TACL2017">TACL</a>.
</p>

<hr>

<a name="AUSk"></a>
<h4>"Sketches for arithmetic universes"</h4>
<p>
<a href="http://logicandanalysis.org/index.php/jla/article/view/340/152">Journal of Logic and Analysis</a> <b>11(FT4)</b> (2019) pp. 1-56</p>
<p>
Preprint version: <a href="AUSk.pdf">pdf</a>.
<br/>
Archived Aug 2016 at
<a href="http://arxiv.org/abs/1608.01559">arXiv:1608.01559</a>.
</p>
<p>
  A theory of sketches for arithmetic universes (AUs) is developed.
<br/>
  A restricted notion of sketch, called here <i>context</i>,
  is defined with the property that every non-strict model is uniquely isomorphic to a strict model.
  This allows us to reconcile the syntactic, dealt with strictly using universal algebra,
  with the semantic, in which non-strict models must be considered.
<br/>
  For any context $\mathbb{T}$, a concrete construction is given of the AU $\mathbf{AU}\langle\mathbb{T}\rangle$
  freely generated by it.
<br/>
  A 2-category $\mathfrak{Con}$ of contexts is defined, with a full and faithful 2-functor to the 2-category
  of AUs and strict AU-functors,
  given by $\mathbb{T} \mapsto \mathbf{AU}\langle\mathbb{T}\rangle$.
  It has finite pie limits,
  and also all pullbacks of a certain class of "extension" maps.
  Every object, morphism or 2-cell of $\mathfrak{Con}$ is a finite structure.
<br/>
  Maths Subject Classification 18C30; 03G30
</p>
<p>
  See also the talks for <a href="talks.php#OASIS">OASIS</a>,
  <a href="talks.php#AUSkPadova">Padova</a> and <a href="talks.php#TACL2017">TACL</a>.
</p>

<hr>

<a name="IntervalNote"></a>
<h4>"The localic compact interval is an Escard&oacute;-Simpson interval object"</h4>
<p>
Mathematical Logic Quarterly <b>63(6)</b> (2017), pp. 614-629
</p>
<p>
Online ISSN: 1521-3870
<br/>
<a href="http://dx.doi.org/10.1002/malq.201500090">doi: 10.1002/malq.201500090</a>
</p>
<p>
Preprint version June 2015: <a href="IntervalNote.pdf">pdf</a>
<br/>
Archived version at
<a href="http://arxiv.org/abs/1506.07995">arXiv:1506.07995</a>
</p>
<p>
The locale corresponding to the real interval $[-1,1]$ is an interval object, in the sense
  of Escard\'{o} and Simpson, in the category of locales.
  The map $c\colon 2^\omega \to [-1,1]$, mapping a stream $s$ of signs $\pm 1$ to
  $\Sigma_{i=1}^\infty s_i 2^{-i}$, is a proper localic surjection;
  it is also expressed as a coequalizer.
</p>
<p>See also the talk at <a href="talks.php#IntervalPadova">Padova</a>.

<hr>

<a name="CohGeom"></a>
<h4>"A coherent account of geometricity"</h4>
<p>
(Steven Vickers and Christopher Townsend)
</p>
<p>
Unpublished.
</p>
<p>
Preprint version April 2014: <a href="CohGeom.pdf">pdf</a>.
</p>
<p>
A "bundle endofunctor preserving proneness" for a cartesian category $\mathcal{C}$
is an endofunctor $\mathfrak{T}_\bullet$ of the arrow category $\mathcal{C}^{\downarrow}$,
the identity on codomains, that preserves the property of morphisms of being pullback squares.
Such a $\mathfrak{T}_\bullet$ is "slicewise strong",
restricting to a strong endofunctor $\mathfrak{T}_\bullet$ on every slice $\mathcal{C}/B$,
and with that structure preserved by pullback between slices.
<br>
In the other direction, a strong endofunctor $T$ on $\mathcal{C}$ extends to a bundle endofunctor
$T_\bullet$ on $\mathcal{C}$, which preserves proneness if $T$ preserves coreflexive equalizers.
<br>
If a bundle endofunctor $\mathfrak{T}_\bullet$ preserving proneness also preserves coreflexive equalizers,
then it is naturally isomorphic to the $T_\bullet$ arising from $T = \mathfrak{T}_1$.
<br>
Combining these, bundle endofunctors for $\mathcal{C}$ preserving proneness and coreflexive equalizers
are equivalent to strong endofunctors on $\mathcal{C}$ preserving coreflexive equalizers;
this latter structure is inherited by all slices and preserved by pullback between them.
<br>
The results extend to situations where $\mathfrak{T}_\bullet$ and $T$ are monads.
<br>
We propose that the structure of bundle endofunctor preserving proneness is a satisfactory
categorical abstraction of the notion of geometric construction when $\mathcal{C}$ is the
category $\mathbf{Loc}$ of locales.
The powerlocales give rise to bundle monads on $\mathbf{Loc}$ preserving proneness
and coreflexive equalizers;
likewise for the covariant powerobject monad on any topos.
</p>

<hr>

<a name="GeomFib"></a>
<h4>"Geometric constructions preserve fibrations"</h4>
<p>
(Bertfried Fauser and Steven Vickers)
</p>
<p>
Unpublished.
</p>
<p>
Archived at <a href="http://arxiv.org/abs/1411.2457">arXiv:1411.2457</a>.
</p>
<p>
  Let $\mathcal{C}$ be a representable 2-category,
  and $\mathfrak{T}_\bullet$ a 2-endofunctor of
  the arrow 2-category $\mathcal{C}^\downarrow$ such that
  (i) $\mathsf{cod} \mathfrak{T}_\bullet
        = \mathsf{cod} \colon \mathcal{C}^\downarrow \rightarrow \mathcal{C}$ and
  (ii) $\mathfrak{T}_\bullet$  preserves proneness (cartesianness)
  of morphisms in $\mathcal{C}^\downarrow$.
  Then $\mathfrak{T}_\bullet$  preserves fibrations and opfibrations in $\mathcal{C}$.

  The proof takes Street's characterization of (e.g.) opfibrations as pseudoalgebras
  for 2-monads $\mathfrak{L}_B$ on slice categories $\mathcal{C}/B$
  and develops it by defining a 2-monad $\mathfrak{L}_\bullet$  on $\mathcal{C}^\downarrow$
  that takes change of base into account, and uses known results on the lifting
  of 2-functors to pseudoalgebras.
</p>

<hr>

<a name="FishLoc"></a>
<h4>"Positivity relations on a locale"</h4>
<p>
(Francesco Ciraulo and Steven Vickers)
</p>
<p>
<a href="http://www.journals.elsevier.com/annals-of-pure-and-applied-logic">Annals of Pure and Applied Logic</a>
<b>167</b> (2016), pp. 806-819
<br>
(special issue for articles on the topics of the
4th Workshop on Formal Topology (4WFTop), Ljubljana 2012)<br>
Published on-line 20-Apr-2016
</p>
<p>
ISSN 0168-0072,<br>
<a href="http://dx.doi.org/10.1016/j.apal.2016.04.009">doi:10.1016/j.apal.2016.04.009</a>
</p>
<p>
Preprint version January 2015: <a href="FishLoc.pdf">pdf</a>.
</p>
<p>
This paper analyses the notion of a <i>positivity relation</i>
of Formal Topology from the point of view of the theory of Locales. It is shown that a positivity relation on a locale corresponds
to a suitable class of points of its lower powerlocale.
In particular, closed subtopologies associated to the
positivity relation correspond to overt
(that is, with open domain) weakly closed sublocales.
Finally, some connection is revealed between positivity
relations and localic suplattices
(these are algebras for the powerlocale monad).
</p>

<hr>

<a name="SamsonFest"></a>
<h4>"Domain theory in topical form"</h4>
<p>
In Coecke, Ong, Panangaden (ed.)
"Computation, Logic, Games, and Quantum Foundations.
The Many Facets of Samson Abramsky"<br>
Springer LNCS <b>7860</b> (2013), pages 348--349
</p>
<p>
ISSN 0302-9743, ISBN 978-3-642-38163-8,<br>
<a href="http://dx.doi.org/10.1007/978-3-642-38164-5_24">doi:10.1007/978-3-642-38164-5_24</a>
</p>
<p>
Preprint version: <a href="SamsonFestschrift.pdf">pdf</a>.
</p>
<p>
Describes how
"<a href="#TCD">Topical categories of domains</a>"
developed out of Abramsky's "Domain theory in logical form".
</p>

<hr>

<a name="SVWspectraGeom"></a>
<h4>"Gelfand spectra in Grothendieck toposes using geometric mathematics"</h4>
<p>
(Bas Spitters, Steven Vickers and Sander Wolters)</p>
<p>
In <i>Proceedings of the 9th International Workshop on Quantum Physics and Logic (QPL 2012)</i>, Brussels 2012
(ed. Duncan, Panangaden).</br>
Electronic Proceedings in Theoretical Computer Science
<b>158</b> (2014), pp. 77 - 107. <br>
ISSN 2075-2180,
<a href="http://dx.doi.org/10.4204/EPTCS.158.7">doi:10.4204/EPTCS.158.7</a>
</p>
<p>
Preprint version: <a href="SVWspectraGeom.pdf">pdf</a>,
or <a href="http://arxiv.org/abs/1310.0705">arXiv 1310.0705</a>.
</p>
<p>
In the topos approach to quantum theory by Heunen, Landsman and Spitters, one associates to any
unital C*-algebra <i>A</i>, a topos <i>T(A)</i>
of sheaves on a locale and a commutative C*-algebra A within
that topos.
The Gelfand spectrum of A is a locale &Sigma;
in this topos, which is equivalent to a bundle
over the base locale. We further develop this external presentation of the locale &Sigma;, by noting that the
construction of the Gelfand spectrum in a general topos can be described using geometric logic.
As a consequence, the spectrum, seen as a bundle, is computed fibrewise.
<br>
As a by-product of the geometricity of Gelfand spectra,
we find an explicit external description
of the spectrum whenever the topos is a functor category.
As an intermediate result we show that
locally perfect maps compose, so that the externalization of a locally compact locale in a topos of
sheaves over a locally compact locale is locally compact, too.</p>

<hr>

<a name="BornQPL"></a>
<h4>"The Born rule as structure of spectral bundles"</h4>
<p>
(Extended abstract)<br>
(Bertfried Fauser, Guillaume Raynaud and Steven Vickers)</p>
<p>
In <i>Proceedings of the 8th International Workshop on Quantum Physics and Logic (QPL 2011)</i>, Nijmegen 2011
(ed. Jacobs, Selinger, Spitters).</br>
Electronic Proceedings in Theoretical Computer Science
<b>95</b> (2012), pp. 81 - 90. <br>
ISSN 2075-2180,
<a href="http://dx.doi.org/10.4204/EPTCS.95.8">doi:10.4204/EPTCS.95.8</a>
</p>
<p>
Preprint version: <a href="BornQPL.pdf">pdf</a><br>
</p>
<p>
Topos approaches to quantum foundations are described in a unified way by means of spectral bundles,
where the base space is a space of contexts and each fibre is its spectrum.
Differences in variance are due to the the bundle being a fibration or opfibration.
Relative to this structure, the probabilistic predictions of the Born rule in finite dimensional
settings are then described as a section of a bundle of valuations.
The construction uses in an essential way the geometric nature of the valuation locale monad.
</p>

<hr>

<a name="Riesz"></a>
<h4>"A monad of valuation locales"</h4>
<p>
</p>
<p>
Preprint version: <a href="Riesz.pdf">pdf</a><br>
</p>
<p>
If <i>X</i> is a locale then its valuation locale has for its points the valuations on
<i>X</i>. This construction is the functor part of a strong monad on the category of
locales, a localic analogue of the Giry monad. It is commutative, i.e. product valuations
exist and a Fubini Theorem holds. An analogue of the Riesz Representation theorem holds.
Concrete representations are given for the tensor product of lattices and for
the modular monoid. The work conforms with the constructive constraints of
geometric logic.
</p>

<hr>

<a name="GeoAspects"></a>
<h4>"Continuity and geometric logic"</h4>
<p>
Journal of Applied Logic <b>12 (1)</b> (2014), pages 14-27<br>
</p><p>
ISSN: 1570-8683;
<a href="http://dx.doi.org/10.1016/j.jal.2013.07.004">doi:
10.1016/j.jal.2013.07.004</a>.
</p>
<p>
Preprint version: <a href="GeoAspects.pdf">pdf</a><br>
Reports my Bordeaux talk
"<a href="talks.php#Bordeaux">Aspects of geometric logic</a>".
</p>
<p>
This paper is largely a review of known results about various
aspects of geometric logic.
Following Grothendieck's view of toposes as
generalized spaces,
one can take geometric morphisms as generalized continuous maps.
The constructivist constraints of geometric logic guarantee
the continuity of maps constructed,
and can do so from two different points of view:
for maps as point transformers and maps as bundles.</p>

<hr>

<a name="NablaVVV"></a>
<h4>"Generalized powerlocales via relation lifting"</h4>
<p>
(Yde Venema, Steven Vickers and Jacob Vosmaer)
</p><p>
Mathematical Structures in Computer Science
<b>23 (1)</b> (2013), pages 142-199.
</p><p>
ISSN: 0960-1295;
<a href="http://dx.doi.org/10.1017/S0960129512000229">doi:
10.1017/S0960129512000229</a>.
</p><p>
Preprint version: <a href="nabla-VVV.pdf">pdf</a>
<br>
</p>
<p>
This paper introduces an endofunctor <i>V<sub>T</sub></i> on the category of frames, parametrized by
an endofunctor <i>T</i> on the category Set that satisfies certain constraints.
This generalizes Johnstone's
construction of the Vietoris powerlocale, in the sense that his construction is obtained by taking for <i>T</i> the finite covariant power set funtor.
Our construction of the <i>T</i>-powerlocale <i>V<sub>T</sub> L</i> out of a frame
<i>L</i> is based on ideas from coalgebraic logic and makes explicit the connection between the Vietoris construction and Moss's coalgebraic cover modality.</p>
<p>
We show how to extend certain natural transformations between set functors to natural transformations between <i>T</i>-powerlocale functors.
Finally, we prove that the operation <i>V<sub>T</sub></i> preserves
some properties of frames, such as regularity, zero-dimensionality, and the combination of zerodimensionality
and compactness.</p>

<hr>

<a name="ArithInd"></a>
<h4>"An induction principle for consequence in arithmetic universes"</h4>
<p>
(Maria Emilia Maietti and Steven Vickers)
</p><p>
Journal of Pure and Applied Algebra
<b>216 (8-9)</b> (2012), pages 2049-2067.
</p><p>
ISSN: 0022-4049;
<a href="http://dx.doi.org/10.1016/j.jpaa.2012.02.040">doi:
10.1016/j.jpaa.2012.02.040</a>.
</p><p>
Preprint version: <a href="ArithInd.pdf">pdf</a>
<br>
Presentations: <a href="PSSL91Slides.pdf">Amsterdam</a> and
<a href="GenovaSlides.pdf">Genova</a>.</p>
<p>
Suppose in an arithmetic unverse we have two predicates &phi; and &psi; for
natural numbers, satisfying a base case &phi;(0)&rarr;&psi;(0) and an
induction step that, for generic <i>n</i>, the hypothesis
&phi;(<i>n</i>)&rarr; &psi;(<i>n</i>)
allows one to deduce
&phi;(<i>n</i>+1)&rarr; &psi;(<i>n</i>+1).
Then it is
already true in that arithmetic universe that
(&forall; <i>n</i>)(&phi;(<i>n</i>)&rarr; &psi;(<i>n</i>)).
This is substantially harder than in a topos, where cartesian
closedness allows one to form an exponential
&phi;(<i>n</i>)&rarr; &psi;(<i>n</i>).</p>
<p>
The principle is applied to the question of locatedness of Dedekind sections.</p>
<p>
The development analyses in some detail a notion of "subspace" of an
arithmetic universe, including open or closed subspaces and a boolean algebra
generated by them.
There is a lattice of subspaces generated by the opens and the closeds,
and it is isomorphic to the free Boolean algebra over the distributive lattice
of subobjects of 1 in the arithmetic universe.</p>

<hr>

<a name="DcpoAlg"></a>
<h4>"Presenting dcpos and dcpo algebras"</h4>
<p>
(Achim Jung, M. Andrew Moshier and Steven Vickers)
</p><p>
In <i>Proceedings of the 24th Conference on the Mathematical
Foundations of Programming Semantics (MFPS XXIV)</i>
(ed. Bauer, Mislove),
Electronic Notes in Theoretical Computer Science
<b>218</b> (2008), pp. 209 - 229. <br>
ISSN 1571-0661;
<a href="http://dx.doi.org/10.1016/j.entcs.2008.10.013">doi:10.1016/j.entcs.2008.10.013</a></p>
<p>
Preprint version: <a href="dcpoAlg.pdf">pdf</a></p>
<p>
Dcpos can be presented by a preorder of generators and inequational relations
expressed as covers. Algebraic operations on the generators (possibly with their
results being ideals of generators) can be extended to the dcpo presented,
provided the covers are "stable" for the operations. The resulting dcpo algebra
has a natural universal characterization and satisfies all the inequational laws
satisfied by the generating algebra.</p>
<p>
Applications include known "coverage theorems" from locale theory.</p>

<hr>

<a name="Ontology"></a>
<h4>"Issues of logic, algebra and topology in ontology"</h4>
<p>
Chapter 22 in
"<a href="http://www.springer.com/philosophy/ontology/book/978-90-481-8846-8">Theory
  and Applications of Ontology: Computer Applications</a>"
(ed. Poli, Healy, Kameas),
vol. 2 of "Theory and Applications of Ontology", Springer, 2010.
<br>ISBN 978-90-481-8846-8
<br>Copyright Springer.</p>
<p>
Preprint version: <a href="Ontology.pdf">pdf</a></p>
<p>
When one uses a particular logical formalism, one makes an <i>ontological
commitment</i> to being able to interpret the symbols involved. We discuss this
in a case study of geometric logic, being aided by a presentation of the logic
as a sequent calculus. We also discuss the connections of geometric logic with
topology and algebra.</p>

<hr>

<a name="GeoFuzzy"></a>
<h4>"Fuzzy sets and geometric logic"</h4>
<p>
Fuzzy Sets and Systems <b>161</b> (2010), pp. 1175 - 1204.<br>
ISSN 0165-0114;
<a href="http://dx.doi.org/10.1016/j.fss.2009.06.013">doi:
10.1016/j.fss.2009.06.013</a>.</p>
<p>
Preprint version: <a href="GeoFuzzy.pdf">pdf</a></p>
<p>
Hoehle has identified fuzzy sets, valued in a frame (complete Heyting
algebra) &Omega;, with certain sheaves over &Omega;: the subsheaves of
constant sheaves More general sheaves can be got as quotients of the fuzzy
sets. His principal approach to sheaves over &Omega;, and topos-theoretic
constructions on them, is via complete &Omega;-valued sets.</p>
<p>
In this paper we show how the <i>geometric</i> fragment of those constructions
can be described in a natural "stalkwise" manner, provided one works also
with incomplete &Omega;-valued sets.</p>
<p>
Our exposition examines in detail the interactions between different technical
expressions of the notion of sheaf, and highlights a conceptual view of sheaf
as "continuous set-valued map".</p>
<p>You can also view my <a href="LinzTalk.pdf">slides</a> for the invited talk I gave
on this topic at the 29th Linz Seminar on Fuzzy Set Theory, February 2008.</p>

<hr>

<a name="ConnFT"></a>
<h4>"Cosheaves and connectedness in formal topology"</h4>
<p>
Annals of Pure and Applied Logic <b>163</b> (2012), pp. 157-174.<br>
ISSN 0168-0072;
<a href="http://dx.doi.org/10.1016/j.apal.2011.06.024">doi:10.1016/j.apal.2011.06.024</a></p>
<p>
Preprint version: <a href="ConnFT.pdf">pdf</a></p>
<p>
The localic definitions of cosheaves, connectedness and local connectedness
are transferred from impredicative topos theory to predicative formal
topology. A formal topology is locally connected (has base of connected opens)
iff it has a cosheaf &pi;<sub>0</sub> together with certain additional structure and
properties that constrain &pi;<sub>0</sub> to be the connected components cosheaf. In
the inductively generated case, complete spreads (in the sense of Bunge and
Funk) corresponding to cosheaves are defined as formal topologies. Maps
between the complete spreads are equivalent to homomorphisms between the
cosheaves. A cosheaf is the connected components cosheaf for a locally
connected formal topology iff its complete spread is a homeomorphism, and in
this case it is a terminal cosheaf.</p>
<p>
A new, geometric proof is given of the topos-theoretic result that a cosheaf
is a connected components cosheaf iff it is a "strongly terminal" point of
the symmetric topos, in the sense that it is terminal amongst all the
<i>generalized</i> points of the symmetric topos. It is conjectured that a
study of sites as "formal toposes" would allow such geometric proofs to be
incorporated into predicative mathematics.</p>
<p>
<i>Key words:</i> Formal topology, predicative, locally connected,
cosheaf, symmetric topos, complete spread
<br>
<i>2008 MSC:</i> Primary 03F60; Secondary 54D05, 54B20, 18F10</p>

<hr>

<a name="integration"></a>
<h4>"A localic theory of lower and upper integrals"</h4>
<p>
Mathematical Logic Quarterly <b>54 (1)</b> (2008), pp. 109 - 123.<br>
ISSN 0942-5616 (print), 1521-3870 (online);
<a href="http://dx.doi.org/10.1002/malq.200710028">doi:10.1002/malq.200710028</a></p>
<p>
Preprint version: <a href="integration.pdf">pdf</a></p>
<p>
An account of lower and upper integration is given. It is constructive in the
sense of geometric logic. If the integrand takes its values in the
non-negative lower reals, then its lower integral with respect to a valuation
is a lower real. If the integrand takes its values in the non-negative upper
reals, then its upper integral with respect to a covaluation and with domain
of integration bounded by a compact subspace is an upper real. Spaces of
valuations and of covaluations are defined.</p>
<p>
Riemann and Choquet integrals can be calculated in terms of these lower and
upper integrals.</p>

<hr>

<a name="CViet"></a>
<h4>"The connected Vietoris powerlocale"</h4>
<p>
Topology and its Applications <b>156</b> (2009), pp. 1886-1910.<br>
ISSN: 0166-8641;
<a href="http://dx.doi.org/10.1016/j.topol.2009.03.043">doi:10.1016/j.topol.2009.03.043</a></p>
<p>
Preprint version: <a href="CViet.pdf">pdf</a></p>
<p>
The Vietoris powerlocale <i>VX</i>
is a point-free analogue of the Vietoris
hyperspace. In this paper we introduce and study a sublocale
<i>V<sup>c</sup>X</i> whose
points are those points of <i>VX</i>
that (considered as sublocales of <i>X</i>)
satisfy a constructively strong connectedness property.
<i>V<sup>c</sup>X</i> is a strong monad on
the category of locales. The strength gives rise to a product map<br>
x: <i>V<sup>c</sup>X</i> x <i>V<sup>c</sup>Y</i> -&gt;
<i>V<sup>c</sup></i>(<i>X</i> x <i>Y</i>),<br>
showing that the product of two of these connected sublocales is again connected.
If <i>X</i> is locally connected then <i>V<sup>c</sup>X</i>
is overt. In the case where <i>X</i>
is the localic completion of a generalized metric space <i>Y</i>, the points of
<i>V<sup>c</sup>X</i> are characterized as certain Cauchy filters of formal
balls for the finite power set F<i>Y</i>
with respect to a Vietoris metric.</p>
<p>
The results are applied to the particular case of the point-free real
line,
giving a choice-free constructive version of the Intermediate
Value Theorem and Rolle's Theorem.</p>
<p>
The work is constructive in the sense of topos-validity with natural numbers
object. Its geometric aspects (preserved under inverse image functors) are
stressed, and exploited to give a pointwise development of the point-free
locale theory. The connected Vietoris powerlocale itself is a geometric construction.</p>

<hr>

<a name="LocTopSpaces"></a>
<h4>"Locales and toposes as spaces"</h4>
<p>
Chapter 8 in "Handbook of Spatial Logics" (ed. Aiello,
Pratt-Hartman, van Bentham), Springer, 2007, pp. 429-496.
<br>ISBN 978-1-4020-5586-7
<br>Copyright Springer Science + Business Media
B.V.</p>
<p>
Preprint version: <a href="LocTopSpaces.pdf">pdf</a></p>
<p>
This chapter was written as an introduction for logicians to the
spatial content of geometric logic.</p>
<p>
It first outlines the established ideas of Lindenbaum algebras of
logical theories, and how they combine with Stone duality (between
Boolean algebras and Stone topological spaces) to give a correspondence
between theories in classical propositional logic and Stone spaces.
This enables one to treat logical theories as topological spaces.</p>
<p>
The aim of the chapter is to show how the same insights can be applied
to geometric logic, whose connectives mirror the axioms of topology,
even though its incompleteness means there is no exact Stone duality.</p>
<p>
An important part of this is the role of constructive reasoning. This
is paradoxical, since without classical principles (such as choice) it
becomes even harder to find the models needed to show completeness.
However, constructive reasoning can be applied to models in
non-classical mathematics, and in particular the internal mathematics
of sheaves. This has the effect of allowing access to a sufficiency of
models.</p>
<p>
The chapter also describes how the same principles apply to theories in
predicate geometric logic. However, the spaces are now <span
 style="font-style: italic;">generalized</span> in Grothendieck's sense
as toposes. The chapter describes how the categorical technicalities of
topos theory (e.g. in Mac Lane and Moerdijk) connects to the spatial
intuitions.</p>

<hr>

<a name="PHLCC"></a>
<h4>"Partial Horn logic and cartesian categories"</h4>
<p>
(Erik Palmgren and Steven Vickers)
</p><p>
Annals of Pure and Applied Logic <b>145 (3)</b> (2007), pp. 314 - 353.<br>
ISSN: 0168-0072;
<a href="http://dx.doi.org/10.1016/j.apal.2006.10.001">doi:10.1016/j.apal.2006.10.001</a></p>
<p>
Preprint version: <a href="partialalgebras.pdf">pdf</a></p>
<p>
A logic is developed in which function symbols are allowed to represent
partial functions. It has the usual rules of logic
(in the form of a sequent calculus) except that the substitution rule
has to be modified. It is developed here in its minimal form,
with equality and conjunction, as "partial Horn logic".</p>
<p>
Various kinds of logical theory are equivalent:
<ul>
  <li>partial Horn theories</li>
  <li>"quasi-equational" theories, partial Horn theories
without predicate symbols</li>
  <li>cartesian theories</li>
  <li>essentially algebraic theories</li>
</ul></p>
<p>
The logic is sound and complete with respect to models in
$\mathbf{Set}$, and sound with respect to
models in any cartesian (finite limit) category.</p>
<p>
The simplicity of the quasi-equational form allows an easy predicative
constructive proof of the free partial model theorem
for cartesian theories: that if a theory morphism is given from one
cartesian theory to another, then the forgetful
(reduct) functor from one model category to the other has a left
adjoint.</p>
<p>
Various examples of quasi-equational theory are studied, including
those of cartesian categories and of other
classes of categories. For each quasi-equational theory $\mathbb{T}$ another,
$\mathrm{Cart}\varpi\mathbb{T}$, is
constructed, whose models are cartesian categories equipped with models
of $\mathbb{T}$.
Its initial model, the "classifying category" for $\mathbb{T}$, has properties
similar to those of the
syntactic category, but more precise with respect to strict cartesian
functors.</p>
<p>
MSC: Primary 18C10. Secondary 03C05, 03G30, 08A55, 08B05, 08B20, 18C05.</p>
<p>
<i>Keywords:</i>
Cartesian theory, essentially algebraic, free algebra, classifying category, syntactic
category, partial algebra.</p>

<hr>

<a name="SublocFT"></a>
<h4>"Sublocales in formal topology"</h4>
<p>
Journal of Symbolic Logic <b>72 (2)</b> (2007) 463-482<br>
ISSN: 0022-4812;
<a href="http://dx.doi.org/10.2178/jsl/1185803619">doi:10.2178/jsl/1185803619</a></p>
<p>
Preprint version: <a href="SublocFT.pdf">pdf</a></p>
<p>
The paper studies how the localic notion of sublocale transfers to
formal topology. For any formal topology (not necessarily with
positivity predicate) we define a sublocale to be a cover relation that
includes that of the formal topology. The family of sublocales has
set-indexed joins. For each set of base elements there are
corresponding open and closed sublocales, boolean complements of each
other. They generate a boolean algebra amongst the sublocales. In the
case of an inductively generated formal topology, the collection of
inductively generated sublocales has coframe structure.</p>
<p>
Overt sublocales and weakly closed sublocales are described, and
related via a new notion of "rest closed" sublocale to the binary
positivity predicate. Overt, weakly closed sublocales of an inductively
generated formal topology are in bijection with "lower powerpoints",
arising from the impredicative theory of the lower powerlocale.</p>
<p>
Compact sublocales and fitted sublocales are described. Compact fitted
sublocales of an inductively generated formal topology are in bijection
with "upper powerpoints", arising from the impredicative theory of the
upper powerlocale.</p>

<hr>

<a name="InfiniteTych"></a>
<h4>"Some constructive roads to Tychonoff"</h4>
<p>
In: Laura Crosilla and Peter Schuster (eds.)
<i>From Sets and Types to Topology and Analysis:
Practicable Foundations for Constructive Mathematics</i>,
pp. 223 - 238. Oxford Logic Guides <b>48</b>,
Oxford University Press (2005).<br>
ISBN: 0-19-856651-4. <a href="http://www.oup.co.uk/isbn/0-19-856651-4">Click
here for more details</a>.</p>
<p>
Preprint version: <a href="InfiniteTych.pdf">pdf</a></p>
<p>
The Tychonoff Theorem is discussed with respect to point-free topology,
from the point of view of both topos-valid and predicative mathematics.</p>
<p>
A new proof is given of the infinitary Tychonoff Theorem using
predicative, choice-free methods for possibly undecidable index set. It
yields a complete description of the finite basic covers of the product.</p>

<hr>

<a name="LangCMLS"></a>
<h4>"A language for configuring multi-level specifications"</h4>
<p>
(Gillian Hill and Steven Vickers)</p>
<p>
Final journal version appeared as:<br>
<br>
Theoretical Computer Science <b>351</b>
(2006) 146 - 166<br>
ISSN: 0304-3975;
<a href="http://dx.doi.org/10.1016/j.tcs.2005.09.065">doi:10.1016/j.tcs.2005.09.065</a></p>
<p>
The preprint version is closer to the original conference
version, in:<br>
<br>
Rattray, C., Maharaj, S. and Shankland, C. (eds)
<i>Algebraic Methodology and Software Technology</i>,
10th International Conference, AMAST 2004,
Stirling, Scotland, pp. 196-210. Springer Lecture Notes in Computer
Science 3116 (2004).<br>
ISBN 3-540-22381-9</p>
<p>
Preprint version: <a href="LangCMLS.ps">ps</a></p>
<p>
This paper shows how systems can be built from their component parts
with specified sharing. Its principle contribution is a modular
language
for configuring systems. A configuration is a description in the new
language of how a system is constructed hierarchically from
specifications of its component parts. Category theory has been used to
represent the composition of specifications that share a component part
by constructing colimits of diagrams. We reformulated this application
of category theory to view both configured specifications and their
diagrams as algebraic presentations of presheaves. The framework of
presheaves leads naturally to a configuration lanaguage that expresses
structuring from instances of specifications, and also incorporates a
new notion of instance reduction from a particular configuration . The
language now expresses the hierarchical structuring of multi-level
configured specifications. The syntax is simple because it is
independent of any specification language; structuring a diagram to
represent a configuration is simple because there is no need to
calculate a colimit; and combining specifications is simple because
structuring is by configuration morphisms with no need to flatten
either
specifications or their diagrams to calculate colimits.</p>


<hr>

<a name="LocCompB"></a>
<h4>"Localic completion of generalized metric spaces II: Powerlocales"</h4>
<p>
(Steven Vickers)</p>
<p>
Journal of Logic and Analysis <b>1(11)</b> (2009) pp. 1-48.<br>
ISSN: 1759-9008;
<a href="http://dx.doi.org/10.4115/jla.2009.1.11">doi:10.4115/jla.2009.1.11</a>
</p>
<p>
Preprint version: <a href="LocCompPower.pdf">pdf</a></p>
<p>
(This paper is a greatly revised version of part of "<a href="#LocCQS">Localic
completion of quasimetric spaces</a>".)</p>
<p>
The work investigates the powerlocales (lower, upper, Vietoris) of localic
completions of generalized metric spaces. The main result is that all three
are localic completions of generalized metric powerspaces, on the Kuratowski
finite powerset. This is a constructive, localic version of spatial results of
Bonsangue et al. and of Edalat and Heckmann.</p>
<p>
As applications, a localic completion is always open, and is compact iff its
generalized metric space is totally bounded.</p>
<p>
The representation is used to discuss closed intervals of the reals, with the
localic Heine-Borel Theorem as a consequence.</p>
<p>
The work is constructive in the topos-valid sense.</p>
<p>
<i>Keywords:</i> locale, constructive, topos, metric, hyperspace, powerlocale.<br>
<i>AMS Subject Code Classifications:</i> Primary -- 54B20. Secondary -- 06D22,
03G30, 54E50, 03F60.</p>

<hr>

<a name="LocCompA"></a>
<h4>"Localic completion of generalized metric spaces I"</h4>
<p>
(Steven Vickers)</p>
<p>
Theory and Applications of Categories <b>14</b>
(2005), pp. 328-356.<br>
ISSN: 1201-561X.</p>
<p>
Free on-line at TAC:
<a href="http://www.tac.mta.ca/tac/volumes/14/15/14-15.pdf">pdf</a></p>
<p>
(This paper is a greatly revised version of part of
"<a href="#LocCQS">Localic completion of quasimetric spaces</a>".)</p>
<p>
We give a constructive localic
account of the completion of generalized metric spaces (gms's) in a
sense derived from that of Lawvere: a set <i>X</i>
equipped with a metric map from <i>X<sup>2</sup></i> to the interval of
upper reals (approximated from above but not from below) from 0 to
infinity inclusive, and satisfying the zero self-distance law
and the triangle inequality. The completion is then a locale whose
points can be viewed either as Cauchy filters of formal balls or
(following Lawvere's approach using enriched categories) as flat left
modules.</p>
<p>
Non-expansive functions between
the gms's lift to continuous maps between the completions.</p>
<p>
Various examples and constructions are given,
including finite products.</p>
<p>
The points of this completion are classically
equivalent to those of the "Yoneda completion" of Bonsangue et al.,
modified to use Cauchy nets instead of sequences.</p>
<p>
The exposition is constructive in the topos-valid sense and exploits
the use of geometric reasoning to approach locales and toposes as
"topology-free spaces".</p>

<hr>

<h4><a name="EntSys"></a>
"Entailment systems for stably locally compact locales"</h4>
<p>
(S.J. Vickers)</p>
<p>
Theoretical Computer Science <b>316</b>
(2004) (special issue on Domain Theory) pp. 259-296.<br>
ISSN: 0304-3975;
<a href="http://dx.doi.org/10.1016/j.tcs.2004.01.033">doi:10.1016/j.tcs.2004.01.033</a></p>
<p>
Preprint version: <a href="StabCompEnt.pdf">pdf</a>,
<a href="StabCompEnt.ps">ps</a></p>
<p>
The category $\mathbf{SCFr}_U$ of stably continuous
frames and preframe homomorphisms (preserving finite meets and directed
joins) is dual to the Karoubi envelope of a category
$\mathbf{Ent}$ whose objects are sets and whose
morphisms $X \rightarrow Y$ are upper closed relations between
the finite powersets $\mathcal{F}X$ and $\mathcal{F}Y$.
Composition of these morphisms is the "cut composition" of
Jung et al. that interfaces disjunction in the codomains with
conjunctions in the domains, and thereby relates to their <em>multi-lingual
sequent calculus</em>. Thus stably locally compact locales are
represented by "entailment systems" $(X,\vdash)$
in which $\vdash$, a generalization of entailment relations, is idempotent
for cut composition.</p>
<p>
Some constructions on stably
locally compact locales are represented in terms of entailment systems:
products, duality and powerlocales.</p>
<p>
Relational converse provides $\mathbf{Ent}$ with an involution, and this
gives a simple treatment of the duality of stably locally compact
locales. If $A$ and $ B$ are stably continuous frames, then
the internal preframe hom $A \pitchfork B$ is isomorphic to
$\hat{A} \otimes B$
where $\hat{A}$ is the Hofmann-Lawson dual.</p>
<p>
For a stably locally compact locale $X$, the lower powerlocale of
$X$ is shown to be the dual of
the upper powerlocale of the dual of $X$.</p>

<hr>

<h4><a name="UniCharPP"></a>
"A universal characterization of the double powerlocale"</h4>
<p>
(S.J. Vickers + C.F. Townsend)</p>
<p>
Theoretical Computer Science <b>316</b>
(2004) (special issue on Domain Theory) pp. 297-321.<br>
ISSN: 0304-3975;
<a href="http://dx.doi.org/10.1016/j.tcs.2004.01.034">doi:10.1016/j.tcs.2004.01.034</a></p>
<p>
Preprint version: <a href="VicTownUniCharPP.pdf">pdf</a></p>
<p>
The double powerlocale $\mathbb{P}(X)$ (found by composing, in either
order, the upper and lower powerlocale constructions $P_U$ and $P_L$)
is shown to be isomorphic in
$[\mathbf{Loc}^{op}, \mathbf{Set}]$
to the double exponential $\mathbb{S}^{\mathbb{S}^X}$
where $\mathbb{S}$ is the Sierpinski locale. Further,
$P_U(X)$ and $P_L(X)$ are shown
to be the subobjects of $\mathbb{P}(X)$ comprising, respectively, the
meet semilattice and join semilattice homomorphisms. A key lemma shows
that, for any locales $X$ and $Y$,
natural transformations from $\mathbb{S}^X$
(the presheaf $\mathbf{Loc}(- \times X, \mathbb{S})$) to $\mathbb{S}^Y$
(i.e. $\mathbf{Loc}(- \times Y, \mathbb{S})$) are
equivalent to dcpo morphisms from the frame $\Omega(X)$ of $X$
to that of $Y$. It is also shown that $\mathbb{S}^X$
has a localic reflection in
$[\mathbf{Loc}^{op}, \mathbf{Set}]$ whose
frame is $\mathbf{dcpo}(\Omega(X), \Omega(Y))$.</p>
<p>
The reasoning is constructive in
the sense of topos validity.</p>

<hr>

<h4><a name="CompLocFT"></a>
"Compactness in locales and in formal topology"</h4>
<p>
(S.J. Vickers)</p>
<p>
Annals of Pure and Applied Logic <b>137</b>
(2006), pp. 413-438. (Special issue for the Proceedings of the 2nd
Workshop on Formal Topology, Venice 2002.)<br>
ISSN: 0168-0072;
<a href="http://dx.doi.org/10.1016/j.apal.2005.05.028">doi:10.1016/j.apal.2005.05.028</a></p>
<p>
Preprint version: <a href="CompLocFT.pdf">pdf</a></p>
<p>
If a locale is presented by a
"flat site", it is shown how its frame can be presented by generators
and relations as a dcpo. A necessary and sufficient condition is
derived
for compactness of the locale (and also for its openness). Although its
derivation uses impredicative constructions, it is also shown
predicatively using the inductive generation of formal topologies.</p>
<p>
A predicative proof of the
binary Tychonoff theorem is given, including a characterization of the
finite covers of the product by basic opens. The discussion is then related to the double powerlocale.</p>

<hr>

<h4> <a name="PPandExp"></a>
"The double powerlocale and exponentiation: a case study in geometric logic"</h4>
<p>
(S.J. Vickers)</p>
<p>
Theory and Applications of Categories <b>12</b> (2004) pp. 372-422 </p>
<p>
Free on-line at TAC:
<a href="http://www.tac.mta.ca/tac/volumes/12/13/12-13.pdf">pdf</a></p>
<p>
If $X$ is a locale, then its double powerlocale
$\mathbb{P}(X)$ is defined to be $P_U(P_L(X))$
where $P_U$ and $P_L$ are the upper and lower powerlocale constructions.
We prove various results relating it to exponentiation of locales,
including the following.
First, if $X$ is a
locale for which the exponential $\mathbb{S}^X$ exists
(where $\mathbb{S}$ is the Sierpinski locale),
then $\mathbb{P}(X)$ is an exponential $\mathbb{S}^{\mathbb{S}^X}$.
Second, if in addition $W$
is a locale for which $\mathbb{P}(W)$ is homeomorphic to $\mathbb{S}^X$,
then $X$ is an
exponential $\mathbb{S}^W$.</p>
<p>
The work uses geometric reasoning, i.e.
reasoning stable under pullback along geometric morphisms, and this
enables the locales to be discussed using their points as though they
were spaces. It relies on a number of geometricity results including
those for locale presentations and for powerlocales.</p>

<hr>

<h4> <a name="LocSLTrS"></a>
"Localic sup-lattices and tropological systems"</h4>
<p>
(P. Resende + S.J. Vickers)</p>
<p>
Theoretical Computer Science <b>305</b>
(2003) (special issue on Topology in Computer Science) pp. 311-346.<br>
ISSN: 0304-3975;
<a href="http://dx.doi.org/10.1016/S0304-3975(02)00702-8">doi:10.1016/S0304-3975(02)00702-8</a></p>
<p>
Preprint version: <a href="loctropsys.ps">ps</a>,
<a href="loctropsys.pdf">pdf</a></p>
<p>
The approach to process semantics using quantales and modules is
topologized by considering tropological systems whose sets of states
are
replaced by locales and which satisfy a suitable stability axiom. A
corresponding notion of localic sup-lattice (algebra for the lower
powerlocale monad) is described, and it is shown that there are
contravariant functors from sup-lattices to localic sup-latices and,
for
each quantale <i>Q</i>, from left <i>Q</i>-modules to localic right <i>Q</i>-modules.
A proof technique for third completeness due to <a href="#QOLPS">Abramsky and
Vickers</a> is reset constructively, and an example of application to
failures semantics is given.</p>

<hr>

<h4> <a name="PCS"></a>"Presheaves as Configured Specifications"</h4>
<p>(S.J.Vickers + G.A.Hill)</p>
<p>
Formal Aspects of Computing <b>13</b> (2001) pp. 32-49. <br>
ISSN: 0934-5043 (printed), 1433-299X (electronic);
<a href="http://dx.doi.org/10.1007/PL00003938">doi:10.1007/PL00003938</a> </p>
<p>
Preprint version: <a href="PreshCS.ps">ps</a></p>
<p>
The paper addresses a notion of configuring systems, constructing
them from specified component parts with specified sharing. This notion
is independent of any underlying specification language and has been
abstractly identified with the taking of colimits in category theory.
Mathematically it is known that these can be expressed by presheaves
and
the present paper applies this idea to configuration. </p>
<p>
We interpret the category theory informally as follows. Suppose <i>C</i> is
a category whose objects are interpreted as specifications, and for
which each morphism <i>u</i>: <i>X</i> -&gt; <i>Y</i> is interpreted as contravariant
"instance reduction", reducing instances of specification <i>Y</i> to instances
of <i>X</i>. Then a presheaf <i>P</i> over <i>C</i> represents a collection of instances
that
is closed under reduction. We develop an algebraic account of
presheaves
in which we present configurations by generators (for components) and
relations (for shared reducts), and we outline a proposed configuration
language based on the techniques. Oriat uses diagrams to express
colimits of specifications, and we show that Oriat's category Diag(<i>C</i>)
of
finite diagrams is equivalent to the category of finitely presented
presheaves over <i>C</i>.</p>

<hr>

<h4> <a name="SFP"></a>"Strongly Algebraic = SFP (Topically)"</h4>
Mathematical Structures in Computer Science <b>11</b> (2001) pp.
717-742.
<p>ISSN 0960-1295;
<a href="http://dx.doi.org/10.1017/S0960129501003437">doi:10.1017/S0960129501003437</a> </p>
<p>
Preprint version: <a href="SFP.ps">ps</a>, <a href="SFP.pdf">pdf</a></p>
<p>
Certain "Finite Structure Conditions" on a geometric theory are
shown to be sufficient for its classifying topos to be a presheaf
topos.
The conditions assert that every homomorphism from a finite structure
of
the theory to a model factors via a finite model, and they hold in
cases
where the finitely presentable models are all finite. </p>
<p>The conditions are shown to hold for the theory of strongly
algebraic (or SFP) information systems and some variants, as well as
for
some other theories already known to be classified by presheaf toposes.
</p>
<p>The work adheres to geometric constructivism throughout and in
consequence provides <a href="#TCD">"topical" categories of domains</a>
(internal in the category of toposes and geometric morphisms) with an
analogue of Plotkin's double characterization of strongly algebraic
domains, by sets of minimal upper bounds and by sequences of finite
posets. <br>
</p>

<hr>

<h4> <a name="LocCQS"></a>"Localic Completion of Quasimetric Spaces"</h4>
<p>
Research Report DoC 97/2, Department of Computing, Imperial College
(1998).<br>
(This has now been superseded by <a href="#LocCompA">"Localic
completion of generalized metric spaces I"</a> and <a href="#LocCompB">"Localic
completion of generalized metric spaces II: Powerlocales"</a>.)
</p>
<p>
Preprint version: <a href="LocCQS.pdf">pdf</a></p>
<p>
We give a constructive localic account of the completion of
quasimetric spaces. In the context of Lawvere's approach, using
enriched
categories, the points of the completion are flat left modules over the
quasimetric space. The completion is a triquotient surjective image of
a
space of Cauchy sequences and can also be embedded in a continuous
dcpo,
the "ball domain". Various examples and constructions are given,
including the upper, lower and Vietoris powerlocales, which are
completions of finite powerspaces. The exposition uses the language of
locales as "topology-free spaces". <br>
</p>

<hr>

<h4> <a name="TCD"></a>"Topical Categories of Domains"</h4>
<p>Mathematical Structures in Computer Science <b>9</b> (1999)
pp.569-616.<br>
ISSN 0960-1295;
<a href="http://dx.doi.org/10.1017/S0960129599002741">doi:10.1017/S0960129599002741</a> </p>
<p>
Preprint version: <a href="TopCat.ps">ps</a>,
<a href="TopCat.pdf">pdf</a></p>
<p>
It is shown how many techniques of categorical domain theory can be
expressed in the general context of topical categories (where "topical"
means internal in the category Top of Grothendieck toposes with
geometric morphisms). The underlying topos machinery is hidden by using
a geometric form of constructive mathematics, which enables toposes as
"generalized topological spaces" to be treated in a transparently
spatial way, and also shows the constructivity of the arguments. The
theory of strongly algebraic (SFP) domains is given as a case study in
which the topical category is Cartesian closed. </p>
<p>Properties of local toposes and of lifting of toposes (sconing) are
summarized, and it is shown that the category of toposes has a fixpoint
object in the sense of Crole and Pitts. This is used to show that for a
local topos, all endomaps have initial algebras, and this provides a
general context in which to describe fixpoint constructions including
the solution of domain equations involving constructors of mixed
variance. Covariance with respect to embedding-projection pairs or
adjunctions arises in a natural way. </p>
<p>The paper also provides a summary of constructive results concerning
Kuratowski finite sets, including a novel strong induction principle;
and shows that the topical categories of sets, finite sets and
decidable
sets are not Cartesian closed (unlike the cases of finite decidable
sets
and strongly algebraic domains). <br>
</p>

<hr>

<h4> <a name="TVCL"></a>"Topology via Constructive Logic"</h4>
<p>
Moss, Ginzburg and de Rijke (eds) "Logic, Language and Computation Vol
II" (Proceedings of conference on Information-Theoretic Approaches to
Logic, Language, and Computation, 1996). CSLI Publications, Stanford
(1999) pp. 336-345.
<br>
ISBN 1575861801; 157586181X </p>
<p>
Preprint version: <a href="tvcl.ps">ps</a>, <a href="tvcl.pdf">pdf</a></p>
<p>
By working constructively in the sense of geometric logic, topology
can be hidden. This applies also to toposes as generalized topological
spaces. <br>
</p>

<hr>

<h4> <a name="TPLVN"></a>"Toposes pour les vraiment nuls"</h4>
<p>
In : Edalat, Jourdan and McCusker (eds) "Theory and Formal Methods
1996", Third Imperial College Department of Computing Workshop on
Theory
and Formal Methods, April 1996, pp. 1-12. Imperial College Press,
London, 1996.
<br>
ISBN 1-86094-031-5 </p>
<p>
Postprint version: <a href="TopPLVN.ps">ps</a>, 
<a href="TopPLVN.pdf">pdf</a></p>
<p>
Restriction to geometric logic can enable one to define topological
structures and continuous maps without explicit reference to
topologies.
This idea is illustrated with some examples and used to explain toposes
as generalized topological spaces. <br>
</p>

<hr>

<h4> <a name="CPPL"></a>"Constructive points of powerlocales"</h4>
<p>Mathematical Proceedings of the Cambridge Philosophical Society <b>122</b>
(1997), 207-222.<br>
ISSN 0305-0041;
<a href="http://dx.doi.org/10.1017/S0305004196001636">doi:10.1017/S0305004196001636</a> </p>
<p>
Preprint version: <a href="powerpoints.ps">ps</a>, <a href="powerpoints.pdf">pdf</a></p>
<p>
Results of Bunge and Funk and of Johnstone, providing constructively
sound descriptions of the global points of the lower and upper
powerlocales, are extended here to describe the generalized points and
proved in a way that displays in a symmetric fashion two complementary
treatments of frames: as suplattices and as preframes. We then also
describe the points of the Vietoris powerlocale. </p>
<p>In each of two special cases, an exponential $^D ($ being the
Sierpinski locale) is shown to be homeomorphic to a powerlocale: to the
lower powerlocale when D is discrete, and to the upper powerlocale when
D is compact regular. </p>

<hr>

<h4> <a name="TPLN"></a>"Toposes pour les nuls"</h4>
<p>
In: "Semantics Society Newsletter, Issue 4", 1995.Also available as
Research Report DoC 96/4, Department of Computing, Imperial College
(1996).</p>
<p>
Preprint version: <a href="TopPLN.ps">ps</a>, <a href="TopPLN.pdf">pdf</a></p>
<p>
An introduction to Grothendieck's idea of toposes as generalized
topological spaces. </p>
<p>
Sheaves are described as continuous set-valued functions, geometric
morphisms are described as continuous maps, and continuity itself is
explained as "genericity + geometricity". </p>

<hr>

<p><a name="ReasProg"></a><b>"Reasoned Programming"</b> </p>
<p>(K. Broda + S. Eisenbach + H. Khoshnevisan + S. Vickers) </p>
<p>Prentice Hall International Series in Computer Science (1994). </p>
<p>ISBN 0-13-098831-6 </p>
<p>Downloadable version: <a href="ReasProg.pdf">pdf</a></p>
<p>
Aimed at first or second year undergraduate students, <i>Reasoned
Programming</i> shows how to apply mathematical reasoning to the
development of the computer programs that users need, using logical
specifications to express these and then writing program code to
achieve
the objectives set out in the specifications. </p>
<p>
The book starts with functional programming (including tutorial
material written for Miranda) for its simplicity, but also shows how it
can be used as a reasoning tool for imperative programming. <br>
</p>

<hr>

<h4> <a name="LNP"></a>"Locales are not pointless"</h4>
<p>
In: Hankin, Mackie and Nagarajan (eds) "Theory and Formal Methods of
Computing 1994", 199-216, Imperial College Press.
<br>ISBN 1-86094-003-X </p>
<p>
Preprint version: <a href="lnp.ps">ps</a>,
<a href="lnp.ps.gz">ps.gz</a>,
<a href="lnp.pdf">pdf</a></p>
<p>
The Kripke-Joyal semantics is used to interpret the fragment of
intuitionistic logic containing conjunction, implication, equality and
universal quantification in the category of locales. An axiomatic
theory
is developed that can be interpreted soundly in two ways, using either
lower or upper powerlocales, so that pairs of separate results can be
proved as single formal theorems. </p>
<p>
Openness and properness of maps between locales are characterized by
descriptions using the logic, and it is proved that a locale is open
iff
its lower powerlocale has a greatest point. The entire account is
constructive and holds for locales over any topos. </p>

<hr>

<h4> <a name="GLaSL"></a>"Geometric logic as a specification language"</h4>
<p>In: Hankin, Mackie and Nagarajan (eds) "Theory and Formal Methods of
Computing 1994", 321-340, Imperial College Press.
<br>ISBN 1-86094-003-X </p>
<p>
Preprint version: <a href="GeoZ.ps.gz">ps.gz</a>, <a href="GeoZ.pdf">pdf</a></p>
<p>
The "observational content" of geometric logic is discussed and it
is proposed that geometric logic is an appropriate basis for a Z-like
specification language in which schemas are used as geometric theory
presentations. </p>
<p>A descriptional mechanism of "schema entailment", generalizing type
constructions and logical entailment, is defined and investigated in
some examples, and is also used in defining schema morphisms which are
discussed briefly in connection with schema connectives, and with
specifying and implementing operations. </p>
<hr>

<h4> <a name="TGT"></a>"Towards a GeoZ toolkit"</h4>
<p>
(M. Dawson + S.J. Vickers)</p>
<p>In: Hankin, Mackie and Nagarajan (eds) "Theory and Formal Methods of
Computing 1994", Imperial College Press.
<br>ISBN 1-86094-003-X </p>
<p>
Preprint version: <a href="Toolkit.ps.gz">ps.gz</a>,
<a href="Toolkit.pdf">pdf</a></p>
<p>
The use of Geometric Logic as the foundation of a specification
language called GeoZ is proposed <a href="#GLaSL">elsewhere</a>. In
this note we explore GeoZ from the perspective of practitioners,
already
familiar with the existing Z notation, by explaining the issues that
arise and the role of schema entailment in the GeoZ reformulation of
Z's
mathematical toolkit. </p>

<hr>

<h4> <a name="GLiCS"></a>"Geometric Logic in Computer Science"</h4>
<p>pp. 37-54 in G.L. Burn, S.J. Gay and M.D. Ryan (eds) "Theory and Formal
Methods 1993", Proceedings of the first Imperial College Department of
Computing workshop on Theory and Formal Methods, Springer Workshops in
Computer Science, 1993.
<br>ISBN 3-540-19842-3; 0-387-19842-3 </p>
<p>
Preprint version: <a  href="GLiCS.ps.gz">ps.gz</a>,
<a  href="GLiCS.ps">ps</a>,
<a  href="GLiCS.pdf">pdf</a></p>
<p>
We present an introduction to geometric logic and the mathematical
structures associated with it, such as categorical logic and toposes.
We also describe some of its applications in computer science including
its potential as a logic for specification languages. </p>

<hr>

<h4> <a name="QOLPS"></a>"Quantales, Observational Logic and Process
Semantics"</h4>
<p>
(S. Abramsky + S.J. Vickers)</p>
<p>pp.161-227 in Mathematical Structures in Computer Science vol. <b>3</b>
(1993).<br>
<a href="http://dx.doi.org/10.1017/S0960129500000189">doi:10.1017/S0960129500000189</a></p>
<p>
Preprint version: <a href="QuProc.ps.gz">ps.gz</a>,
<a href="QuProc.pdf">pdf</a></p>
<p>
Various notions of observing and testing processes are placed in a
uniform algebraic framework in which observations are taken as
constituting a quantale. General completeness criteria are stated, and
proved in our applications. </p>
<p>
NB - An earlier version of this paper was issued as a Departmental
Report. The new version is substantially revised in its discussion and
its mathematical techniques, though the overall approach is unchanged. </p>

<hr>

<h4> <a name="ISCP"></a>"Information Systems for Continuous Posets"</h4>
<p>
pp. 201-229 in "Theoretical Computer Science B" vol. <b>114</b>,
(1993)<br>
ISSN 0304-3975;
<a href="http://dx.doi.org/10.1016/0304-3975(93)90072-2">doi:10.1016/0304-3975(93)90072-2</a> </p>
<p>
Preprint version: <a href="Infosys.ps.gz">ps.gz</a>,
<a href="Infosys.pdf">pdf</a></p>
<p>
NB - This paper was previously entitled "Continuous Information
Systems". It has been renamed to avoid confusion with Raymond Hoofman's
paper. </p>
<p>
The method of information systems is extended from algebraic posets
to continuous posets by taking a set of tokens with an ordering that is
transitive and interpolative but not necessarily reflexive. This
develops results of Raney on completely distributive lattices and of
Hoofman on continuous Scott domains, and also generalizes Smyth's
"R-structures". Various constructions on continuous posets have neat
descriptions in terms of these continuous information systems; here we
describe Hoffmann-Lawson duality (which could not be done easily with
R-structures) and Vietoris power locales. We also use the method to
give
a partial answer to a question of Johnstone's: in the context of
continuous posets, Vietoris algebras are the same as localic
semilattices. </p>

<hr>

<h4> <a name="GTD"></a>"Geometric Theories and Databases"</h4>
<p>
pp. 288-314 in M.P. Fourman, P.T. Johnstone and A.M. Pitts (eds)
"Applications of Categories in Computer Science"
(Proceedings of the LMS Symposium, Durham 1991),
London Mathematical Society Lecture Note Series <b>177</b>,
Cambridge University Press, 1992.
<br>ISBN 0-521-42726-6 </p>
<p>
Preprint version: <a href="GeoTh+DBs.pdf">pdf</a></p>
<p>
Domain theoretic understanding of databases as elements of
powerdomains is modified to allow multisets of records instead of sets.
This is related to geometric theories and classifying toposes, and it
is shown that algebraic base domains lead to algebraic categories of
models in two cases analogous to the lower (Hoare) powerdomain and Gunter's
mixed powerdomain. </p>

<hr>

<h4> <a name="PPP"></a>"Preframe Presentations Present"</h4>
<p>
(P. Johnstone + S.J. Vickers)</p>
<p>pp. 193-212 in A. Carboni, M.C. Pedicchio and G. Rosolini (eds.)
Category Theory - Proceedings, Como 1990 (Springer Lecture Notes in
Mathematics <b>1488</b>,1991).
<br>ISBN 3-540-54706-1; 0-387-54706-1;
<a href="http://dx.doi.org/10.1007/BFb0084221">doi:10.1007/BFb0084221</a></p>
<p>
Preprint version: <a href="PreFrPrePre.pdf">pdf</a></p>
<p>
Preframes (directed complete posets with finite meets that
distribute over the directed joins) are the algebras for an infinitary
essentially algebraic theory, and can be presented by generators and
relations. This result is combined with a general argument concerning
categories of commutative monoids to give a very short proof of the
localic Tychonoff Theorem. It is also shown how frames can be presented
as preframes, a result analogous to Johnstone's construction of frames
from sites, and an application is given. </p>

<hr>

<h4><a name="SERB"></a>"Formal Implementation"</h4>
<p>Chapter = 25 in J.A. McDermid (ed.) The Software Engineer's
Reference Book, (Butterworth Scientific, London, 1991).
<br>ISBN 0-750-61040-9 </p>
<p>
An account of the formal logic of pre- and post-conditions. </p>

<hr>

<h4><a name="TVL"></a>"Topology via Logic"</h4>
<p>Cambridge Tracts in Theoretical Computer Science <b>5</b>
(Cambridge
University Press 1988).
<br>ISBN 0-521-36062-5; 0-521-57651-2 </p>
<p>
An advanced textbook on topology for computer scientists with three
unusual features. First, the introduction is from a localic viewpoint,
motivated by the logic of finite observations: this provides a more
direct approach than the traditional one based on abstracting
properties
of open sets in the real line. Second, the methods of locale theory are
freely exploited. Third, there is a substantial discussion of some
computer science applications. Although books on topology aimed at
mathematics exist, not book has been written specifically for computer
scientists, and as computer scientists become more aware of the
mathematical foundations of their discipline, it is appropriate that
such topics are presented in a form of direct relevance and
applicability. This book goes some way towards bridging the gap. </p>

<hr>

<h4><a name="padic2"></a>"A fixpoint construction of the <i>p</i>-adic
domain"</h4>
<p>pp. 270-289 in D.H. Pitt, A. Poigne and D.E. Rydeheard, Category
Theory and Computer Science (Proceedings of Edinburgh Workshop, 1986)
(Springer Lecture Notes in Computer Science <b>283</b>, 1987).
<br>ISBN 3-540-18508-9; 0-387-18508-9 </p>
<p>
The Kahn domain on <i>p</i> symbols can be given an arithmetic
structure so that its maximal elements are isomorphic to the <i>p</i>-adic
integers. This is described as a fixpoint of a functor in a category of
sheaves of rings. </p>

<hr>

<h4><a name="padic1"></a>"An algorithmic approach to the <i>p</i>-adic
integers"</h4>
<p>pp. 599-616 in M. Main, A. Melton, M. Mislove and D. Schmidt
Mathematical Foundations of Programming Language Semantics (Proceedings
of Tulane Workshop, 1987) (Springer Lecture Notes in Computer Science <b>298</b>,
1988).
<br>ISBN 3-540-19020-1; 0-387-19020-1 </p>
<p>
The ring of <i>p</i>-adic integers can be embedded as the maximal
elements in a Scott domain with algebraic structure. We show how
definitions and proofs in the mathematical theory of <i>p</i>-adics
can
be replaced by algorithms on the partial elements and formal
programming
methods working on the algorithms. Certain types of argumetns translate
naturally into non-deterministic algorithms using the Smyth power
domain. </p>

<hr>

<h4><a name="FourmanVic"></a>"Theories as Categories"</h4>
<p>(M.P. Fourman + S.J. Vickers) </p>
<p>pp. 434-448 in D. Pitt, S. Abramsky, A. Poign&eacute; and D. Rydeheard
(eds.) Category Theory and Computer Programming (Springer Lecture Notes
in Computer Science <b>240</b>, 1986).
<br>ISBN 3-540-17162-2; 0-387-17162-2 </p>
<p>
This paper is not, and is not intended to be, original. Its purpose
is to present a couple of examples from the folklore of topos theory,
the theory of classifying topoi in particular. This theory and its
applications spread initially without the benefit of widespread
publication. Many ideas were spread among a relatively small group,
largely by word of mouth. The result of this is that the literature
does
not provide an accessible introduction to the subject. Computer
scientists studying the logic of computing have recently become
interested in this area. They form our intended audience. In the space
(and time) available we can only hope to provide a small selection of
the many ideas missing from, or buried in, the literature. We attempt
to
give a perspective of the structure of the subject. Our selection is,
of
necessity, idiosyncratic, and our treatment brief. We hope that missing
technical details may be reconstructed from the literature. This may
require some diligence. [Yes, it did - SJV] </p>
<p>To apportion credit for the ideas presented here is difficult so
long after the event. Lawvere and Joyal have a special position in htis
subject. Their intuitions have shaped it. Many others, who participated
in the Peripatetic Seminars in Europe, the New York Topos Theory
Seminar
(which also wandered) and the Category Theory meetings at Oberwohlfach,
contributed also. Their contributions are, in general, better reflected
in their published works. Finally, to apportion blame, this paper
derives from notes taken by SJV of a talk by MPF. Any
misrepresentations
are the responsibility of the latter. </p>
<p><a href="#Top">Back to top</a> <br>
&nbsp; <br>
&nbsp; <br>
&nbsp; <br>
&nbsp; </p>


<!-- #EndEditable -->

<?php PageEnd(); ?>
</body>
<!-- InstanceEnd -->
</html>
