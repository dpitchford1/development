<?php
/* Template Name: Teams Guides */
?>
<?php
$display_sidebar = get_post_meta( get_the_ID(), 'sn_display_sidebar', true );
$divclass = $display_sidebar['sn_display_sidebar'] == 1 ? 'row_two_column_with_fixed' : 'row_one_column';


?>

<?php get_header(); ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/guides.css">

<div class="container body-content">

	<div class="<?php echo $divclass; ?>">
		<!-- BEGIN: Static code -->
		<div class="column">

			<h1><?php the_title() ?></h1>
			
			<?php /* STYLE GUIDE PATTERN ### COLOURS */ ?>
			<div class="region sg-pattern" id="colours">
				<div class="region" id="nhl">
					<h2 class="sg-heading">NHL - Colours and Logos</h2>


					<?php /** START TEAM */ ?>
					<h3 class="sg-subheading" style="color: #91764B">Anaheim Ducks</h3>

					<h3 class="sg-tileheading">Team Colours</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#000;" class="sg-swatch">&nbsp;</span>
							<p class="sg-label">#000</p>
						</li>
						<li>
							<span style="background:#91764B;" class="sg-swatch">&nbsp;</span>
							<p class="sg-label">#91764B</p>
						</li>
						<li>
							<span style="background:#EF5225;" class="sg-swatch">&nbsp;</span>
							<p class="sg-label">#EF5225</p>
						</li>
					</ul>
					<p class="ico-inline ico-25-inline nhl-anh--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-anh--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-anh">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/anaheim-ducks.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/anaheim-ducks.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/anaheim-ducks.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/anaheim-ducks.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-anh">
						<li class="logo-59">
							<span class="ico-59 ico nhl-anh--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico nhl-anh--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico nhl-anh--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico nhl-anh--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>


					<?php /** START TEAM */ ?>
					<h3 class="sg-subheading" style="color: #000">Boston Bruins</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#000;" class="sg-swatch">&nbsp;</span>
							<p class="sg-label">#000</p>
						</li>
						<li>
							<span style="background:#FFC422;" class="sg-swatch">&nbsp;</span>
							<p class="sg-label">#FFC422</p>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<p class="sg-label">#fff</p>
						</li>
					</ul>
					<p class="ico-inline ico-25-inline nhl-bos--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-bos--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-bos">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/boston-bruins.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/boston-bruins.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/boston-bruins.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/boston-bruins.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-bos">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-bos--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-bos--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-bos--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="ico-200 ico-bg nhl-bos--200x200 bgcolor"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>
					
					
					<?php /** START TEAM */ ?>
					<h3 class="sg-subheading" style="color: #002E62">Buffalo Sabres</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#002E62;" class="sg-swatch">&nbsp;</span>
							<p class="sg-label">#002E62</p>
						</li>
						<li>
							<span style="background:#FDBB2F;" class="sg-swatch">&nbsp;</span>
							<p class="sg-label">#FDBB2F</p>
						</li>
						<li>
							<span style="background:#AEB6B9;" class="sg-swatch">&nbsp;</span>
							<p class="sg-label">#AEB6B9</p>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<p class="sg-label">#fff</p>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-buf--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-buf--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-buf">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/buffalo-sabres.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/buffalo-sabres.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/buffalo-sabres.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/buffalo-sabres.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-buf">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-buf--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-buf--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-buf--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-buf--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>


					
					<?php /** START TEAM */ ?>
					<h3 class="sg-subheading" style="color: #E03A3E">Calgary Flames</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#E03A3E;" class="sg-swatch">&nbsp;</span>
							<p class="sg-label">#E03A3E</p>
						</li>
						<li>
							<span style="background:#FFC758;" class="sg-swatch">&nbsp;</span>
							<p class="sg-label">#FFC758</p>
						</li>
						<li>
							<span style="background:#000;" class="sg-swatch">&nbsp;</span>
							<p class="sg-label">#000</p>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<p class="sg-label">#fff</p>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-cgy--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-cgy--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-cgy">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/calgary-flames.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/calgary-flames.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/calgary-flames.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/calgary-flames.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-cgy">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-cgy--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-cgy--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-cgy--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-cgy--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>


					
					<?php /** START TEAM */ ?>
					<h3 class="sg-subheading" style="color: #E03A3E">Carolina Hurricanes</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#E03A3E;" class="sg-swatch">&nbsp;</span>
							<p class="sg-label">#E03A3E</p>
						</li>
						<li>
							<span style="background:#000;" class="sg-swatch">&nbsp;</span>
							<p class="sg-label">#000</p>
						</li>
						<li>
							<span style="background:#8E8E90;" class="sg-swatch">&nbsp;</span>
							<p class="sg-label">#8E8E90</p>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<p class="sg-label">#fff</p>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-car--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-car--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-car">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/carolina-hurricanes.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/carolina-hurricanes.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/carolina-hurricanes.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/carolina-hurricanes.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-car">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-car--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-car--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-car--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-car--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>
					
						
						
					<?php /** START TEAM */ ?>
					<h3 id="chicago-blackhawks" class="sg-subheading" style="color: #E3263A">Chicago Blackhawks</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#E3263A;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#E3263A</span>
						</li>
						<li>
							<span style="background:#000;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#000</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-chi--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-chi--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-chi">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/chicago-blackhawks.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/chicago-blackhawks.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/chicago-blackhawks.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/chicago-blackhawks.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-chi">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-chi--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-chi--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-chi--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-chi--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>
					
					
					
					<?php /** START TEAM */ ?>
					<h3 id="colorado-avalanche" class="sg-subheading" style="color: #8B2942">Colorado Avalanche</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#8B2942;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#8B2942</span>
						</li>
						<li>
							<span style="background:#01548A;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#01548A</span>
						</li>
						<li>
							<span style="background:#000;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#000</span>
						</li>
						<li>
							<span style="background:#A9B0B8;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#A9B0B8</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-col--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-col--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-col">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/colorado-avalanche.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/colorado-avalanche.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/colorado-avalanche.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/colorado-avalanche.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-col">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-col--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-col--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-col--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-col--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>
					
					
					
					<?php /** START TEAM */ ?>
					<h3 id="columbus-blue-jackets" class="sg-subheading" style="color: #00285C">Columbus Blue Jackets</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#00285C;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#00285C</span>
						</li>
						<li>
							<span style="background:#E03A3E;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#E03A3E</span>
						</li>
						<li>
							<span style="background:#A9B0B8;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#A9B0B8</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-cls--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-cls--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-cls">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/columbus-blue-jackets.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/columbus-blue-jackets.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/columbus-blue-jackets.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/columbus-blue-jackets.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-cls">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-cls--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-cls--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-cls--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-cls--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>
					
					
					
					<?php /** START TEAM */ ?>
					<h3 id="dallas-stars" class="sg-subheading" style="color: #006A4E">Dallas Stars</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#006A4E;" class="sg-swatch">&nbsp;</span>			
							<span class="sg-label">#006A4E</span>
						</li>
						<li>
							<span style="background:#000;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#000</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
						<li>
							<span style="background:#E03A3E;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#FFC422</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-dal--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-dal--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-dal">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/dallas-stars.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/dallas-stars.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/dallas-stars.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/dallas-stars.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-dal">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-dal--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-dal--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-dal--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-dal--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>


					
					<?php /** START TEAM */ ?>
					<h3 id="detroit-redwings" class="sg-subheading" style="color: #EC1F26">Detroit Redwings</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#EC1F26;" class="sg-swatch">&nbsp;</span>	
							<span class="sg-label">#EC1F26</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-det--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-det--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-det">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/detroit-red-wings.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/detroit-red-wings.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/detroit-red-wings.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/detroit-red-wings.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-det">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-det--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-det--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-det--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-det--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>
					
					
					
					<?php /** START TEAM */ ?>
					<h3 id="edmonton-oilers" class="sg-subheading" style="color: #003777">Edmonton Oilers</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#003777;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#003777</span>
						</li>
						<li>
							<span style="background:#E66A20;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#E66A20</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-edm--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-edm--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-edm">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/edmonton-oilers.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/edmonton-oilers.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/edmonton-oilers.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/edmonton-oilers.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-edm">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-edm--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-edm--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-edm--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-edm--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>
					
					
					
					<?php /** START TEAM */ ?>
					<h3 id="florida-panthers" class="sg-subheading" style="color: #C8213F">Florida Panthers</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#C8213F;" class="sg-swatch">&nbsp;</span>		
							<span class="sg-label">#C8213F</span>
						</li>
						<li>
							<span style="background:#002E5F;" class="sg-swatch">&nbsp;</span>		
							<span class="sg-label">#002E5F</span>
						</li>
						<li>
							<span style="background:#D59C05;" class="sg-swatch">&nbsp;</span>		
							<span class="sg-label">#D59C05</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>		
							<span class="sg-label">#fff</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-fla--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-fla--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-fla">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/florida-panthers.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/florida-panthers.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/florida-panthers.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/florida-panthers.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-fla">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-fla--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-fla--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-fla--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-fla--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>



					<?php /** START TEAM */ ?>
					<h3 id="los-angeles-kings" class="sg-subheading" style="color: #000000">Los Angeles Kings</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#000;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#000</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
						<li>
							<span style="background:#AFB7BA;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#AFB7BA</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-la--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-la--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-la">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/los-angeles-kings.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/los-angeles-kings.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/los-angeles-kings.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/los-angeles-kings.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-la">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-la--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-la--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-la--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-la--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>
					
					
					
					<?php /** START TEAM */ ?>
					<h3 id="minnesota-wild" class="sg-subheading" style="color: #025736">Minnesota Wild</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#025736;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#025736</span>
						</li>
						<li>
							<span style="background:#BF2B37;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#BF2B37</span>
						</li>
						<li>
							<span style="background:#EFB410;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#EFB410</span>
						</li>
						<li>
							<span style="background:#EEE3C7;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#EEE3C7</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-min--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-min--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-min">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/minnesota-wild.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/minnesota-wild.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/minnesota-wild.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/minnesota-wild.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-min">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-min--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-min--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-min--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-min--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>
					
					
					
					<?php /** START TEAM */ ?>
					<h3 id="montreal-canadiens" class="sg-subheading" style="color: #BF2F38">Montreal Canadiens</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#BF2F38;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#BF2F38</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
						<li>
							<span style="background:#213770;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#213770</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-mon--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-mon--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-mon">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/montreal-canadiens.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/montreal-canadiens.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/montreal-canadiens.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/montreal-canadiens.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-mon">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-mon--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-mon--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-mon--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-mon--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>


					
					<?php /** START TEAM */ ?>
					<h3 id="nashville-predators" class="sg-subheading" style="color: #FDBB2F">Nashville Predators</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#FDBB2F;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#FDBB2F</span>
						</li>
						<li>
							<span style="background:#002E62;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#002E62</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-nsh--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-nsh--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-nsh">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/nashville-predators.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/nashville-predators.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/nashville-predators.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/nashville-predators.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-nsh">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-nsh--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-nsh--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-nsh--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-nsh--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>


					
					<?php /** START TEAM */ ?>
					<h3 id="new-jersey-devils" class="sg-subheading" style="color: #E03A3E">New Jersey Devils</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#E03A3E;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#E03A3E</span>
						</li>
						<li>
							<span style="background:#E03A3E;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-nj--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-nj--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-nj">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/new-jersey-devils.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/new-jersey-devils.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/new-jersey-devils.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/new-jersey-devils.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-nj">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-nj--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-nj--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-nj--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-nj--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>


					
					<?php /** START TEAM */ ?>
					<h3 id="new-york-islanders" class="sg-subheading" style="color: #00529B">New York Islanders</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#00529B;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#00529B</span>
						</li>
						<li>
							<span style="background:#F57D31;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#F57D31</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-nyi--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-nyi--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-nyi">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/new-york-islanders.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/new-york-islanders.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/new-york-islanders.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/new-york-islanders.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-nyi">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-nyi--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-nyi--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-nyi--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-nyi--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>


					
					<?php /** START TEAM */ ?>
					<h3 id="new-york-rangers" class="sg-subheading" style="color: #0161AB">New York Rangers</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#0161AB;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#0161AB</span>
						</li>
						<li>
							<span style="background:#E6393F;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#E6393F</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-nyr--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-nyr--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-nyr">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/new-york-rangers.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/new-york-rangers.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/new-york-rangers.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/new-york-rangers.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-nyr">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-nyr--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-nyr--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-nyr--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-nyr--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>


					
					<?php /** START TEAM */ ?>
					<h3 id="ottawa-senators" class="sg-subheading" style="color: #E4173E">Ottawa Senators</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#E4173E;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#E4173E</span>
						</li>
						<li>
							<span style="background:#000;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#000</span>
						</li>
						<li>
							<span style="background:#D69F0F;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#D69F0F</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-ott--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-ott--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-ott">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/ottawa-senators.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/ottawa-senators.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/ottawa-senators.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/ottawa-senators.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-ott">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-ott--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-ott--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-ott--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-ott--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>


					
					<?php /** START TEAM */ ?>
					<h3 id="philadelphia-flyers" class="sg-subheading" style="color: #F47940">Philadelphia Flyers</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#F47940;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#F47940</span>
						</li>
						<li>
							<span style="background:#000;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#000</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-phi--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-phi--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-phi">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/philadelphia-flyers.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/philadelphia-flyers.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/philadelphia-flyers.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/philadelphia-flyers.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-phi">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-phi--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-phi--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-phi--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-phi--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>


					
					<?php /** START TEAM */ ?>
					<h3 id="phoenix-coyotes" class="sg-subheading" style="color: #8E0028">Phoenix Coyotes</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#8E0028;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#8E0028</span>
						</li>
						<li>
							<span style="background:#000;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#000</span>
						</li>
						<li>
							<span style="background:#EFE1C6;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#EFE1C6</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-pho--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-pho--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-pho">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/phoenix-coyotes.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/phoenix-coyotes.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/phoenix-coyotes.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/phoenix-coyotes.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-pho">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-pho--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-pho--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-pho--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-pho--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>


					
					<?php /** START TEAM */ ?>
					<h3 id="pittsburgh-penguins" class="sg-subheading" style="color: #000000">Pittsburgh Penguins</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#000;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#000</span>
						</li>
						<li>
							<span style="background:#D1BD80;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#D1BD80</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-pit--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-pit--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-pit">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/pittsburgh-penguins.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/pittsburgh-penguins.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/pittsburgh-penguins.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/pittsburgh-penguins.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-pit">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-pit--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-pit--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-pit--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-pit--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>


					
					<?php /** START TEAM */ ?>
					<h3 id="san-jose-sharks" class="sg-subheading" style="color: #05535D">San Jose Sharks</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#05535D;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#05535D</span>
						</li>
						<li>
							<span style="background:#F38F20;" class="sg-swatch">&nbsp;</span>			
							<span class="sg-label">#F38F20</span>
						</li>
						<li>
							<span style="background:#000;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#000</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-sj--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-sj--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-sj">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/san-jose-sharks.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/san-jose-sharks.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/san-jose-sharks.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/san-jose-sharks.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-sj">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-sj--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-sj--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-sj--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-sj--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>


					
					<?php /** START TEAM */ ?>
					<h3 id="st-louis-blues" class="sg-subheading" style="color: #0546A0">St Louis Blues</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#0546A0;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#0546A0</span>
						</li>
						<li>
							<span style="background:#FFC325;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#FFC325</span>
						</li>
						<li>
							<span style="background:#101F48;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#101F48</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-stl--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-stl--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-stl">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/st-louis-blues.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/st-louis-blues.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/st-louis-blues.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/st-louis-blues.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-stl">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-stl--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-stl--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-stl--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-stl--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>
					
					
					
					<?php /** START TEAM */ ?>
					<h3 id="tampa-bay-lightning" class="sg-subheading" style="color: #013E7D">Tampa Bay Lightning</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#013E7D;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#013E7D</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
						<li>
							<span style="background:#000;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#000</span>
						</li>
						<li>
							<span style="background:#C0C0C0;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#C0C0C0</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-tb--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-tb--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-tb">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/tampa-bay-lightning.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/tampa-bay-lightning.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/tampa-bay-lightning.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/tampa-bay-lightning.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-tb">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-tb--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-tb--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-tb--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-tb--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>


					
					<?php /** START TEAM */ ?>
					<h3 id="toronto-maple-leafs" class="sg-subheading" style="color: #003777">Toronto Maple Leafs</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#003777;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#003777</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-tor--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-tor--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-tor">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/toronto-maple-leafs-alt.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/toronto-maple-leafs-alt.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/toronto-maple-leafs-alt.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/toronto-maple-leafs-alt.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-tor">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-tor--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-tor--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-tor--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-tor--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>


					
					<?php /** START TEAM */ ?>
					<h3 id="vancouver-canucks" class="sg-subheading" style="color: #07346F">Vancouver Canucks</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#07346F;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#07346F</span>
						</li>
						<li>
							<span style="background:#047A4A;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#047A4A</span>
						</li>
						<li>
							<span style="background:#A8A9AD;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#A8A9AD</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-van--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-van--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-van">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/vancouver-canucks.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/vancouver-canucks.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/vancouver-canucks.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/vancouver-canucks.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-van">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-van--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-van--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-van--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-van--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					
					
					<?php /** START TEAM */ ?>
					<h3 id="washington-capitals" class="sg-subheading" style="color: #CF132B">Washington Capitals</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#CF132B;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#CF132B</span>
						</li>
						<li>
							<span style="background:#00214E;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#00214E</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
						<li>
							<span style="background:#000;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#000</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-was--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-was--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-was">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/washington-capitals.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/washington-capitals.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/washington-capitals.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/washington-capitals.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-was">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-was--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-was--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-was--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-was--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>
					
					
					
					<?php /** START TEAM */ ?>
					<h3 id="winnipeg-jets" class="sg-subheading" style="color: #002E62">Winnipeg Jets</h3>
					<ul class="sg-colors">
						<li>
							<span style="background:#002E62;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#002E62</span>
						</li>
						<li>
							<span style="background:#fff;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#fff</span>
						</li>
						<li>
							<span style="background:#0168AB;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#0168AB</span>
						</li>
						<li>
							<span style="background:#A8A9AD;" class="sg-swatch">&nbsp;</span>
							<span class="sg-label">#A8A9AD</span>
						</li>
					</ul>

					<p class="ico-inline ico-25-inline nhl-wpg--25x25">Some text to show bg on a paragraph</p>
					<p class="ico-inline ico-25-inline nhl-wpg--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>

					<h4 class="sg-tileheading">Logos - Inline &mdash; with BG color</h4>
					<ul class="sg-logos nhl-wpg">
						<li class="logo-59">
							<img src="/wp-content/themes/sportsnet/images/team_logos/59x59/hockey/nhl/winnipeg-jets.png" alt="">
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<img src="/wp-content/themes/sportsnet/images/team_logos/90x90/hockey/nhl/winnipeg-jets.png" alt="">
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<img class="bgcolor" src="/wp-content/themes/sportsnet/images/team_logos/170x170/hockey/nhl/winnipeg-jets.png" alt="">
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<img src="/wp-content/themes/sportsnet/images/team_logos/200x200/hockey/nhl/winnipeg-jets.png" alt="">
							<p class="sg-label">200x200</p>
						</li>
					</ul>

					<h4 class="sg-tileheading">Logos - As Backgrounds &mdash; with BG color</h4>
					<ul class="sg-logos nhl-wpg">
						<li class="logo-59">
							<span class="ico-59 ico-bg nhl-wpg--59x59"></span>
							<p class="sg-label">59x59</p>
						</li>
						<li class="logo-90">
							<span class="ico-90 ico-bg nhl-wpg--90x90"></span>
							<p class="sg-label">90x90</p>
						</li>
						<li class="logo-170">
							<span class="ico-170 ico-bg nhl-wpg--170x170"></span>
							<p class="sg-label">170x170</p>
						</li>
						<li class="logo-200">
							<span class="bgcolor ico-200 ico-bg nhl-wpg--200x200"></span>
							<p class="sg-label">200x200</p>
						</li>
					</ul>



				</div>
			</div>

		</div><!-- /.column -->
		<!-- END Static code -->

		<?php if ( $display_sidebar['sn_display_sidebar'] == 1 ) : ?>

			<?php get_sidebar( $sidebar ) ?>

		<?php else : ?>

			

		<?php endif ?>

	</div><!-- <?php echo $divclass; ?> -->
</div><!-- container body-content -->

<?php get_footer(); ?>