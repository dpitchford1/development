<?php ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sportsnet Teams and Leagues reference guide</title>

<link rel="stylesheet" href="css/normalize.3.0.2.css" type="text/css">
<link rel="stylesheet" href="css/base-layout.css" type="text/css">
<link rel="stylesheet" href="css/style-guide.css" type="text/css">
<link rel="stylesheet" href="css/theme.css" type="text/css">
<link rel="stylesheet" href="css/team-icons-svg.css" type="text/css">
<!-- <link rel="stylesheet" href="css/teams.css" type="text/css"> -->

 <link rel="shortcut icon" type="image/x-icon" href="http://www.sportsnet.ca/sn_favicon.ico">

</head>

<body>
<header class="site-wrapper site-header" role="banner">
	<div class="site-wrapper fluid">
		<div class="logo">Sportsnet</div>
		<h1 class="brand-title">Sportsnet Teams and Leagues Reference Guide</h1>
	</div>
</header>

<main class="site-wrapper fluid" id="main-content" role="main">
	
	<?php /* STYLE GUIDE PATTERN ### COLOURS */ ?>
	<nav class="wrapper">
		<h2>Choose a League:</h2>
		<ul class="inline-bullet">
			<!-- <li><a href="#nhl">NHL</a></li> -->
			<li><a href="#nba">NBA</a></li>
			<!-- <li><a href="#mlb">MLB</a></li> -->
			
			<!-- <li><a href="#nfl">NFL</a></li>
			<li><a href="#ahl">AHL</a></li>
			<li><a href="#chl">CHL</a></li>
			<li><a href="#ohl">OHL</a></li>
			<li><a href="#whl">WHL</a></li>
			<li><a href="#qmjhl">QMJHL</a></li> -->
		</ul>

	</nav>

	<section class="region" id="nba">
		<h2 class="sg-heading">NBA - Colours and Logos</h2>

		<?php include "includes/nba-page-svg.php"; ?>

		<p class="top-of-page"><a href="#main-content">Top of page</a></p>
	</section>

	

</main>	

<footer class="site-wrapper site-footer" role="contentinfo">
	<div class="site-wrapper fluid">
		<div class="logo">Sportsnet</div>
		<p class="top-of-page"><a href="#main-content">Top of page</a></p>
	</div>
</footer>

<script>
function toggler(id) {
	var e = document.getElementById(id);
	e.style.display = ((e.style.display!='none') ? 'none' : 'block');

}
</script>

</body>
</html>
