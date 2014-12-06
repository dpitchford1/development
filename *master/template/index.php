<?php require_once($_SERVER['DOCUMENT_ROOT'].'/development/init.php'); ini_set('display_errors', 1); ?>
<!DOCTYPE HTML>
<html dir="ltr" lang="en-CA">
<!--[if IE]><![endif]-->
<head>
	<title>Home - Resources Archive</title>
	
	<?php include $inc_global . "head.php"; ?>

	<link rel="stylesheet" href="/development/media/css/modules/patterns.css" media="only screen and (min-width: 10em)" type="text/css">
</head>
<body class="page-body development" id="page-body" lang="en">

<div class="site-wrapper">

	<?php /* site header start */ ?>
	<?php # include "includes/header.php"; ?>	

	<div class="main-content-wrapper grid-setup">
		
		<!--start main content-->
		<main class="grid-cell main-content" id="main-content" role="main">
			<h2 class="content-title sizes-L">Development - Sitemap</h2>

			<ul class="counted-list">
				<!-- <li>four
					<ul class="counted-list">
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</li> -->
				<li>Books &amp; Docs</li>
				
				<li>Resources
					<ul class="counted-list">
						<li>Cheat Sheets</li>
						<li>Design
							<ul class="counted-list">
								<li>Browser PSD's</li>
								<li>Brushes</li>
								<li>Device Templates</li>
								<li>Icons</li>
								<li>Identity Templates</li>
								<li>Interface-Grid-UI Templates</li>
								<li>Lynda.com</li>
								<li>Patterns
									<ul class="counted-list">
										<li>Colour Pattern Pack</li>
									</ul>
								</li>
								<li>Sketch Sheets</li>
								<li>Style Tiles</li>
								<li>UI Templates</li>
							</ul>
						</li>
						<li>Development
							<ul class="counted-list">
								<li>Code Samples
									<ul class="counted-list">
										<li>CSS</li>
										<li>JS</li>
										<li>.NET</li>
										<li>Ruby</li>
									</ul>
								</li>
								<li>Docs</li>
								<li>Tools</li>
								<li>Frameworks</li>
							</ul>
						</li>
						<li>Fonts</li>
					</ul>
					
				</li>
				<li>Work
					<ul class="counted-list">
						<li>Alliance / Canwest / Shaw - Archive</li>
						<li>Rogers
							<ul class="counted-list">
								<li>Connected Rogers</li>
								<li>Connected for Business</li>
								<li>Target</li>
								<li>Portal</li>
								<li>Teams Guide</li>
								<li>Player Card</li>
							</ul>
						</li>
						<li>Personal</li>
						<li>Screens</li>
						<li>Resume</li>
					</ul>

				</li>
				<li>Style Guide</li>
				<!-- <li>three</li>
				<li>four
					<ul class="counted-list">
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</li>
				<li>five</li>
				<li>six</li>
				<li>seven</li> -->

			</ul>
			
			<div id="fonts" class="sg-pattern">
				<!-- <h3 class="sg-heading">Design</h3>
				
				<h4 class="sg-subheading">Browser PSD's</h4>
				
				<h4 class="sg-subheading">Brushes</h4>
				
				<h4 class="sg-subheading">Device Templates</h4>
				
				<h4 class="sg-subheading">Icons</h4>
				
				<h4 class="sg-subheading">Identity Templates</h4>
				
				<h4 class="sg-subheading">Interface-Grid-UI Templates</h4>
				
				<h4 class="sg-subheading">Lynda.com</h4>
				
				<h4 class="sg-subheading">Patterns</h4> -->
				<h5 class="content-title sizes-XSM">Colour Pattern Pack</h5>
				<ul class="sg-colors">
					<li>
						<span class="sg-swatch"><span class="pat pattern-across"></span></span>
						<span class="sg-label">across.jpg</span>
					</li>
					<li>
						<span class="sg-swatch"><span class="pat pattern-arrows"></span></span>
						<span class="sg-label">arrows.jpg</span>
					</li>
					<li>
						<span class="sg-swatch"><span class="pat pattern-bridge"></span></span>
						<span class="sg-label">bridge.jpg</span>
					</li>
					<li>
						<span class="sg-swatch"><span class="pat pattern-cross"></span></span>
						<span class="sg-label">cross.jpg</span>
					</li>
					<li>
						<span class="sg-swatch"><span class="pat pattern-face"></span></span>
						<span class="sg-label">face.jpg</span>
					</li>
					<li>
						<span class="sg-swatch"><span class="pat pattern-fish"></span></span>
						<span class="sg-label">fish.jpg</span>
					</li>
					<li>
						<span class="sg-swatch"><span class="pat pattern-heart"></span></span>
						<span class="sg-label">heart.jpg</span>
					</li>
					<li>
						<span class="sg-swatch"><span class="pat pattern-uparrow"></span></span>
						<span class="sg-label">uparrow.jpg</span>
					</li>
					<!--<li><a href="colourpatterns.pat">Download Palette</a></li>
					<li><a href="colourpatterns.psd">Download PSD</a></li>-->
				</ul>
				
			</div>
			
			<!--<h3>Design</h3>
			<h3>Development</h3>
			<h3>Docs &amp; Reading</h3>
			<h3>Fonts</h3>
			<h3>PS & Illustrator Templates</h3>
			<h3>Vectors</h3>
			<h3>CMS</h3>
			<h3>Case Studies</h3>-->
			
			
			
			<?php /* start watch 
			<?php include "includes/content-watch-this-week.php"; ?>*/ ?>
			
			<?php /* start what's new 
			<?php include "includes/content-listing-content.php"; ?>*/ ?>
			
		</main>
	
		<?php /* start aside */ ?>
		<aside class="grid-cell aside" role="complementary">
			<h2 class="content-title sizes-L">Bookmarks &amp; Links</h2>
			<section class="aux-content aux-list" aria-labelledby="Tools" role="region">
				<h3 class="content-title sizes-M" id="Tools">Tools</h3>
				<ul class="no-bullet">
					<li><a href="">css3 generator</a></li>
					<li><a href="">Base64 IMG Converter</a></li>
					<li><a href="">Base64 SVG Converter</a></li>
					<li><a href="">Base64 Font Converter</a></li>
					<li><a href=""></a></li>
				</ul>
			</section>
			
			<section class="aux-content aux-list" aria-labelledby="Frameworks" role="region">
				<h3 class="content-title sizes-M" id="Frameworks">Frameworks</h3>
				<ul class="no-bullet">
					<li><a href="">html5 Boilerplate</a></li>
					<li><a href="">960 grid</a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
				</ul>
			</section>
			
			<section class="aux-content aux-list" aria-labelledby="Tools" role="region">
				<h3 class="content-title sizes-M" id="Frameworks">Frameworks</h3>
			</section>
			
		</aside>
	
	</div><!-- end main content wrapper -->

</div><!--end site wrapper-->

</body>
</html>