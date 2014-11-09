<?php ?>
<!doctype html>
<html class="no-js no-touch" dir="ltr" lang="en-CA">
<!--[if IE]><![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="dns-prefetch" href="//www.sportsnet.ca">
	<title>Sportsnet Teams and Leagues Reference Guide</title>
	<link rel="stylesheet" href="media/css/fonts.css" type="text/css">
	<link rel="stylesheet" href="media/css/normalize.3.0.2.css" type="text/css">
	<link rel="stylesheet" href="media/css/base-layout.css" type="text/css">
	<link rel="stylesheet" href="media/css/style-guide.css" type="text/css">
	<link rel="stylesheet" href="media/css/theme.css" type="text/css">
	<link rel="stylesheet" href="media/css/enhanced.css" type="text/css">
	<link rel="stylesheet" href="media/css/team-icons.css" type="text/css">
	<link rel="stylesheet" href="media/css/team-icons-svg.css" type="text/css">

	<!-- OLD IE CSS and html5 structure -->
	<!--[if (lte IE 8)&(!IEMobile 7)]>
	<link rel="stylesheet" href="css/oldIE.css" type="text/css">
	<![endif]-->

	<?php /* JS SETUP - toggle css classes and IE10 viewport fix */ ?>
	<script>var doc = window.document; function addLoadEvent(b){var a=window.onload;if(typeof window.onload!=="function"){window.onload=b}else{window.onload=function(){a();b()}}}; doc.documentElement.className = document.documentElement.className.replace(/\bno-js\b/g, '') + ' js';</script>
	<script type="text/javascript">if (doc.querySelector && doc.addEventListener) { (function() { if (navigator.userAgent.match(/IEMobile\/10\.0/)) { var msViewportStyle = doc.createElement("style"); msViewportStyle.appendChild( doc.createTextNode("@-ms-viewport{width:auto!important}") ); doc.getElementsByTagName("head")[0].appendChild(msViewportStyle); } })(); }</script>
	<!-- <script type="text/javascript" src="includes/func.js"></script> -->


	<link rel="shortcut icon" type="image/x-icon" href="http://www.sportsnet.ca/sn_favicon.ico">

	<?php /* MOBILE SPECIFIC */ ?>
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">

    <?php /* APPLE SPECIFIC */ ?>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Sportsnet Reference Guide">



</head>

<body>
<?php /* START: HEADER */ ?>
<header class="site-wrapper site-header" role="banner">
	<div class="site-wrapper fluid">
		<div class="logo">Sportsnet</div>
		<h1 class="brand-title">Sportsnet Teams and Leagues Reference Guide</h1>
	</div>
</header>

<?php /* START: MAIN CONTENT */ ?>
<main class="site-wrapper fluid" id="main-content" role="main">
	
	<?php /* START: MAIN MENU */ ?>
	<nav class="wrapper">
		<h2>Choose a League:</h2>
		<ul class="inline-bullet main-menu">
			<li><a href="#nhl">NHL</a></li>
			<li><a href="#nba">NBA</a></li>
			<li><a href="#mlb">MLB</a></li>
			<li><a href="#nfl">NFL</a></li>
			<!-- 
			<li><a href="#ahl">AHL</a></li>
			<li><a href="#chl">CHL</a></li>
			<li><a href="#ohl">OHL</a></li>
			<li><a href="#whl">WHL</a></li>
			<li><a href="#qmjhl">QMJHL</a></li> -->
		</ul>

	</nav>

	<?php /* START: NHL */ ?>
	<section class="region" id="nhl">
		<h2 class="sg-heading">NHL - Colours and Logos</h2>

		<?php include "includes/nhl-page.php"; ?>
		
		<p class="top-of-page"><a href="#main-content">Top of page</a></p>
	</section>

	<?php /* START: NBA */ ?>
	<section class="region" id="nba">
		<h2 class="sg-heading">NBA - Colours and Logos</h2>

		<?php include "includes/nba-page-svg.php"; ?>
		<?php /* include "includes/nba-page.php"; */ ?>

		<p class="top-of-page"><a href="#main-content">Top of page</a></p>
	</section>

	<?php /* START: MLB */ ?>
	<section class="region" id="mlb">
		<h2 class="sg-heading">MLB - Colours and Logos</h2>

		<?php include "includes/mlb-page.php"; ?>

		<p class="top-of-page"><a href="#main-content">Top of page</a></p>
	</section>

	<?php /* START: NFL */ ?>
	<section class="region" id="nfl">
		<h2 class="sg-heading">NFL - Colours and Logos</h2>

		<?php include "includes/nfl-page.php"; ?>

		<!-- <p class="top-of-page"><a href="#main-content">Top of page</a></p> -->
	</section>

	

</main>

<nav class="sg-quick-menu">
	<h4><a href="nfl-raw" onclick="toggler('sg-quick-list'); return false;">Quick Menu</a></h4>
	<ul class="no-bullet sg-quick-menu-list" id="sg-quick-list" style="display: none;">
		<li><a href="#nhl">NHL</a></li>
		<li><a href="#nba">NBA</a></li>
		<li><a href="#mlb">MLB</a></li>
		<li><a href="#nfl">NFL</a></li>
	</ul>
</nav>

<nav id="nav" role="navigation">
    <div class="block">
        <h2 class="block-title">Chapters</h2>
        <ul>
            <li class="is-active">
                <a href="#">Chapter 1</a>
            </li><!--
         --><li>
                <a href="#">Chapter 2</a>
            </li><!--
         --><li>
                <a href="#">Chapter 3</a>
            </li><!--
         --><li>
                <a href="#">Chapter 4</a>
            </li><!--
         --><li>
                <a href="#">Chapter 5</a>
            </li>
        </ul>
        <a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
    </div>
</nav>

<?php /* START: FOOTER */ ?>
<footer class="site-wrapper site-footer" role="contentinfo">
	<div class="site-wrapper fluid">
		<div class="logo">Sportsnet</div>
		<p class="top-of-page"><a href="#main-content">Top of page</a></p>
	</div>
</footer>

<?php /* START: development workflow */ ?>
<link rel="stylesheet" href="/development/media/css/dev/debug.css" media="all">
<div id="devMenu">    
    <h6>Window Width: <span id="width"></span> px</h6>
    <div id="debug-features"> for debug output of features </div>
</div> 
<script src="/development/media/js/dev/working.js"></script>
<script>
    function widthSetter() { document.getElementById("width").innerHTML = window.innerWidth; }
    widthSetter();
    window.addEventListener("resize", widthSetter);
</script> 

<script>
function toggler(id) {
	var e = document.getElementById(id);
	e.style.display = ((e.style.display!='none') ? 'none' : 'block');
}
</script>

</body>
</html>
