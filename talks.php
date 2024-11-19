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
</head>
<body>

<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/sys/includes/wwwlib.php");

  SetPageTitle('Steve Vickers: Talks');
  SetMaintainer('Steve Vickers', 'sjv@cs.bham.ac.uk');
  PageStart()
?>

<!-- #BeginEditable "content" -->
<p> <a name="RAviaL"></a>
"<a href="RAviaLhandout.pdf">Real analysis via logic</a>" <br>
Talk 7 September 2024 for
<a href="https://blc24.github.io/">British Logic Colloquium BLC24</a>, Birmingham University.
<br>
My recent work with Ming Ng has started to investigate real analysis in a <i>point-free</i> style, suited to topos theory.
I explain how much of this can be explained as logical phenomena.
The space of real numbers is described as a logical theory (for geometric logic), for which real numbers are the models; continuous maps are described by constructions that respect the constraints of geometric logic.
<br>
I shall briefly introduce some examples by which logical constructions provide techniques that are less common in the usual development, or even impossible there. 
</p>

<p> <a name="FTCptfree"></a>
"<a href="FTCptfreeSlides.pdf">The Fundamental Theorem of Calculus, point-free</a>" <br>
Talk 30 May 2024 for
<a href="https://topos.site/events/topos-colloquium/">Topos Institute Colloquium</a>.
<br>
Without going too deeply into the underlying topos theory, I first give a short account of what point-free topology is, how it's done using geometric reasoning, and why one might bother.
<br>
I then present as an example the Fundamental Theorem of Calculus (that differentiation is the inverse of integration) and an application to differentiating logs. This is an important step in point-free real analysis, and relates strongly to the work initiated in Ming Ng's thesis. It also illustrates some characteristic features of point-free reasoning, such as a focus on one-side reals and a use of hyperspaces and related constructions.
</p>

<p> <a name="GeologCons"></a>
"<a href="GeologConsSlides.pdf">Is geometric logic constructive?</a>" <br>
Talk January 2024 at
<a href="https://www.dagstuhl.de/en/seminars/seminar-calendar/seminar-details/24021">Dagstuhl Seminar 24021</a>, "From proofs to computation in geometric logic and generalizations".
<br>
"Constructive" is in the strict sense, where "there exists" means "we can construct".
I discuss various aspects of the question, and how it might be answered.
</p>

<p><a name="CIRM"></a>
"<a href="CIRMTalkSlides.pdf">Dependent type theory of point-free topological spaces</a>"<br>
Talk May 2023 for <a href="http://conferences.cirm-math.fr/2319.html">Type theory, constructive mathematics and geometric logic</a>, CIRM, Marseille.<br>
It explains why point-free topology contains a hidden dependent type theory waiting to get out.
</p>

<p><a name="PalmgrenMem"></a>
"<a href="PalmgrenMem.pdf">Arithmetic universes: Home of free algebras</a>"<br>
Invited talk Nov 2020 for <a href="http://logic.math.su.se/palmgren-memorial/">Erik Palmgren memorial conference</a>, Stockholm.<br>
It outlines my <a href="https://www.cs.bham.ac.uk/~sjv/papersfull.php#PHLCC">joint paper with Erik Palmgren</a>,
and explains
(I) how AUs hit sweet spot for the Initial Model Theorem;
(II) the algebraic approach to classifying categories that is suggested there;
and (III) how the AU-logic potentially provides foundations for continuous mathematics.
</p>


<p><a name="IntervalPadova"></a>
"<a href="IntervalNotePadova.pdf">The interval object [-1, 1]</a>"
(given Sep 2017 for Department of Mathematics, Padova University) -
outlines
<a href="http://www.cs.bham.ac.uk/~sjv/papersfull.php#IntervalNote"><i>The
  localic compact interval is an Escard&oacute;-Simpson interval object</i></a>;
 also comments on localic surjections.
</p>

<a name="TACL2017"></a>
<p><b><i>TACL talks 2017</i></b></p>
<p>
The first four of these talks were given 22-23 June 2017 at the
<a href="http://www.cs.cas.cz/tacl2017/">TACL</a>
summer school, Olomouc, Czech Republic.
Their overall title is "ACLT: Algebra, Categories, Logic in Topology
- Grothendieck's generalized topological spaces (toposes)".
They survey how the ACL disciplines come together
to provide the mathematics of generalized spaces,
but at the same time get modified in various ways that might be unexpected to mainstream ACL practitioners.
</p><p>
The fifth TACL talk was an invited presentation given 28 June 2017
at the TACL workshop the following week in Prague.
</p>
<ol>
<li><a href="TACL1.pdf">Sheaves</a> sets out the intuitions of
sheaves as continuous set-valued maps.</li>
<li><a href="TACL2.pdf">Theories and models</a> -
the categorical approach to many-sorted first-order theories.</li>
<li><a href="TACL3.pdf">Classifying categories</a> - 
the mathematics generated by a generic model.</li>
<li><a href="TACL4.pdf">Toposes and geometric reasoning</a> -
how to "do generalized topology".</li>
<li><a href="TACL5.pdf">Arithmetic universes as generalized point-free spaces</a> -
describes how arithmetic universes can fulfill the same
role as Grothendieck toposes in giving mathematical substance to
a good range of generalized spaces,
but in a way that is independent of any choice of base topos.
</ol>
</p>

<p><a name="Japan"></a>
"<a href="AUSkJapan.pdf">Arithmetic universes as generalized
point-free spaces</a>"
(given 17 Apr 2017 for Japan Advanced Institute for Science and Technology and 19 Apr 2017 for Kyoto University) -
describes the background for Grothendieck toposes as
generalized topological spaces,
and how that leads into the recent work with arithmetic universes.
</p>

<p><a name="YaMCATS"></a>
"<a href="AUClTopYaMCat.pdf">Grothendieck toposes fibred over elementary toposes</a>"
(given 13 Feb 2017 for
<a href="http://www2.le.ac.uk/departments/mathematics/extranet/staff-material/staff-profiles/simona-paoli/yorkshire-and-midlands-category-theory-seminar-yamcats">YaMCATS</a> -
Yorkshire and Midlands Category Theory Seminar, University of Leicester) -
describes the way that <a href=
"http://www.cs.bham.ac.uk/~sjv/papersfull.php#AUClTop"><i>Arithmetic
universes and classifying toposes</i></a>
proves base-independent results about classifying toposes,
by fibring over a 2-category of elementary toposes.
</p>
<p>
<a name="AUSkPadova"></a>
"<a href="AUSkPadova.pdf">Arithmetic universes and type theory</a>"
(given 9 Feb 2017 at the University of Padova) -
discusses two levels at which <a href=
"http://www.cs.bham.ac.uk/~sjv/papersfull.php#AUSk"><i>Sketches for arithmetic universes</i></a>
suggests connections between arithmetic universes and dependent type theory.
</p>
<p>
<a name="OASIS"></a>
"<a href="OasisTalk.pdf">Sketches for arithmetic universes</a>"
(given 21 Oct 2016 for
<a href="http://www.cs.ox.ac.uk/seminars/oasis/">OASIS</a> -
Oxford Advanced Seminar for Informatic Structures,
Department of Computer Science, University of Oxford) -
presents the <a href=
"http://www.cs.bham.ac.uk/~sjv/papersfull.php#AUSk">paper
with the same name</a>.
</p>
<p>
"<a href="BMCtalk.pdf">Coherence for geometricity - BMC</a>" (given 31 March 2015 at the <a
href="http://www.bmc-bamc.org.uk/home">British Mathematics Colloquium</a>, Cambridge;</br>
and "<a href="5WFToptalk.pdf">Coherence for geometricity - 5WFTop</a>" (given 8 June 2015 at the <a
href="http://staff.math.su.se/palmgren/5wftop.html">5th Workshop on Formal Topology</a>, Institut Mittag-Leffler, Stockholm -
These two different talks on the same topic describe a technique forproving coherence of constructive
constructions on locales, by reducing from toposes to arithmetic universes.
</p>
<p>
"<a href="toposophy1.pdf">Spectral bundles as fibrations and opfibrations</a>" (given 14 December 2012 at the <a
href="http://www.ru.nl/math/research/vmconferences/quantum-toposophy/">1st Workshop on Quantum Toposophy</a>,
Radbout University Nijmegen) - explains how the contrasting "contravariant" and "covariant" topos
approaches to quantum theory can be understood more generally in a bundle picture using opfibrations and fibrations,
and presents a general result showing that both classes are preserved by geometric constructions such as the valuation locale (a point-free topological analogue of the Giry monad).
<a href="http://www.youtube.com/watch?v=GdEBV-Pbfps">Video</a>
by the
<a href="http://www.cs.ox.ac.uk/quantum/content/">Oxford Quantum Talks Archive</a>.
</p>

<p> <a name="4WFTop"></a>
<i>WFTop tutorial 2012</i></p>
<p>
This three-part tutorial on "Formal Topology and Geomeric Logic"
was presented at the 4th Workshop on Formal Topology,
Ljubljana, June 2012.
</p><p>
It develops the idea, originating in Grothendieck's work,
that continuity in a greatly generalized sense can be understood
as adherence to principles of geometricity.
</p>
<ol>
<li>"<a href="LjubljanaSlides1.pdf">Space = geometric theory</a>"</li>
<li>"<a href="LjubljanaSlides2.pdf">Map = geometric transformation of points to points</a>"</li>
<li>"<a href="LjubljanaSlides3.pdf">Bundle = geometric transformation of points to spaces</a>"</li>
</ol>
</p>
<p>
"Bundles"
(<a href="http://www.youtube.com/watch?v=Co_54w_kHc4">video</a>
by the
<a href="http://www.cs.ox.ac.uk/quantum/content/">Oxford Quantum Talks Archive</a>;
talk given at the Bellairs McGill-Oxford
<a href="http://www.cs.mcgill.ca/~prakash/Bellairs/11/wshop11.html">Workshop on Quantum and Classical Information Flow</a>, Bellairs, 9-14th April 2011) -
explains how the idea of bundle can be used to introduce toposes
(sheaves as fibrewise discrete bundles), and how geometricity
is a general condition for reasoning to work fibrewise;
relates these ideas to topos approaches to quantum foundations.
</p>
<p>
"<a href="JVDefenceSlides.pdf">The fibrewise Vietoris hyperspace</a>" (given 13 December 2010 at the <a href="http://www.jacobvosmaer.nl/MLSD">Workshop on
Modal Logic and Stone Duality</a>, Amsterdam) -
explains how the Vietoris powerlocale can be generalized to a construction fibrewise
on localic bundles, and how it relies on the constructivity (topos-valid + geometric)
of the Vietoris powerlocale: thus constructive reasoning has a classical payoff.</p>
<p>
"<a href="PSSL91Slides.pdf">Arithmetic universes as generalized spaces</a>" (given 27 November 2010 at the
<a href="http://staff.science.uva.nl/~ciancia/PSSL91/">Peripatetic Seminar on Sheaves and Logic PSSL91</a>, Amsterdam) -
a presentation of the ideas in
"<a href="papersfull.php#ArithInd">An induction principle for consequence in arithmetic universes</a>".
An earlier presentation,
"<a href="GenovaSlides.pdf">Surviving without function types: Life in an arithmetic universe</a>"
was given 22 June 2010 at the
<a href="http://ct2010.disi.unige.it/">International Category Theory Conference CT2010</a>, Genova.</p>
<p> <a name="Bordeaux"></a>
"<a href="BordeauxSlides.pdf">Aspects of geometric logic</a>" (given 12 November 2010 at the
<a href="http://www.labri.fr/perso/retore/LCS">Workshop on Logic, Categories and Semantics</a>, Bordeaux) -
gives a broad survey of geometric logic and its unique selling points.
Written up as "<a href="papersfull.php#GeoAspects">Continuity is Geometricity</a>".
</p> 
<p>
"<a href="PalermoSlides.pdf">Points in geometric point-free topology</a>" (given 6 September 2010 at the
<a href="http://www.math.unipa.it/~ngambino/Workshop/workshop.html">Workshop on Constructive Topology</a>, Palermo) -
explains how geometricity makes it possible to reason validly about point-free spaces
in terms of their points.</p> 
<p>
"<a href="teaching/MGS2010">Quantum Topos Theory</a> (given 28 March - 1 April 2010
at the Midland Graduate School in Foundations of Computer Science) -
a series of 4 lectures with exercise classes to give a conceptual overview
of toposes, quantum theory and the topos approach to quantum theory.</p>
<p>
"<a href="GeometricitySlides.pdf">Geometricity</a>"
(given 3rd December 2009 at the Department of Computing, Imperial College) -
outlines how geometricity relates to fibrewise point-free topology.</p>
<p>
"<a href="M2CSlides.pdf">The Topos Approach in the Qubit Case</a>"
(given 18th December 2008 at the
<a href="http://www.informatics.sussex.ac.uk/users/im74/QNET/QNWS3/index.html">3rd
QNET Workshop, Edinburgh</a>) -
outlines how the topos approach to quantum mechanics (Imperial, Nijmegen) might
be varied to take into account the topology on the space of classical
contexts, with illustration from the qubit case.</p>
<p>
"<a href="SchoolSeminar.pdf">Aspects of Topology</a>" (Departmental Seminar, School of Computer Science, University of Brimingham) - Introduces topology and some of its application in theoretical computer science in the "point-free" form, and then leads on to toposes and a novel use (Imperial, Nijmegen) in the formulation of quantum mechanics. </p> 
<p>
"<a href="FormalTopos.pdf">On the Trail of the Formal Topos</a>" -
<a href="http://www.math.unipd.it/60thsambin/">Advances in Constructive Topology and Logical Foundations</a>,
Padua 8-11 October 2008.
Discusses routes for extracting predicative content from topos theory.</p>
<p>
"<a href="LocalesBundlesTalk.pdf">Locales via Bundles</a>" -
<a href="http://www.cs.ru.nl/~heunen/lgqt/">Sheaves in Geometry and
Quantum Theory</a>, Nijmegen 3-5 Spetember 2008;
slightly briefer version
(<a href="http://www.youtube.com/watch?v=ml1lqRylkLw">video</a>
by the
<a href="http://www.cs.ox.ac.uk/quantum/content/">Oxford Quantum Talks Archive</a>)
given at
<a href="http://categorieslogicphysics.wikidot.com/">Categories, Logic
and Physics</a>, Oxford, 23-24 August 2008. Introduces locales through the idea of bundles, with reference to the topos approaches to quantum theory.</p>
<p>
<a name="LinzTalk"></a>
"<a href="LinzTalk.pdf">Fuzzy Sets and Geometric Logic</a>" -
<a href="http://www.flll.uni-linz.ac.at/research/linz2008/index.html">29th
Linz Seminar on Fuzzy Set Theory</a>: Foundations of Lattice-Valued Mathematics
with Applications to Algebra and Topology, Linz 12-16 February 2008.
Explains sheaf accounts of fuzzy sets in terms of geometric logic.</p>
<p>
"<a href="SchemasAsToposes.ppt">Schemas as
Toposes</a>" - Open University on 2nd July 2002. </p>
<p>
Also, some research seminars I gave in 2003-4 (primarily
for PhD students) on Category Theory and "Topology via Logic".</p>
<p>
<a href="Introduction to category theory.pdf">Category Theory</a>: comprises lectures I gave
at Imperial introducing categories as part of an MSc module on
Mathematical Structures for Computer Science.</p>
<p>
On my book <a href="http://www.cs.bham.ac.uk/~sjv/papersfull.php#TVL"><span
 style="font-style: italic;">Topology via Logic</span></a>:
 In many ways the lectures followed the book, but they went beyond it in
bringing out the deep relationship with constructive logic.
Here are the slides:
<ol>
<li><a href="TopViaLogic 1 - Topological spaces.pdf">Topological spaces</a></li>
<li><a href="TopViaLogic 2 - Geometric theories.pdf">Geometric theories</a></li>
<li><a href="TopViaLogic 3 - Lindenbaum algebras.pdf">Lindenbaum algebras</a></li>
<li><a href="TopViaLogic 4 - Continuous maps.pdf">Continuous maps</a></li>
<li><a href="TopViaLogic 5 - Predicate geometric logic.pdf">Predicate geometric logic</a></li>
<li><a href="TopViaLogic 6 - Sort constructors.pdf">Sort constructors</a></li>
<li><a href="TopViaLogic 7 - Essentially propositional theories.pdf">Essentially propositional theories</a></li>
<li><a href="TopViaLogic 8 - Dedekind sections.pdf">Dedekind sections</a></li>
</ol>
</p>





<!-- #EndEditable -->

<?php PageEnd(); ?>
</body>
<!-- InstanceEnd -->
</html>
