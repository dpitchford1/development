<h2 class="invisible-text">Resources Main Sections</h2>
<nav class="navigation-wrapper" role="navigation">
	<h2 class="invisible-text">Primary Content</h2>
	<ul class="inline-bullet">
		<li><a <? if (stripos($_SERVER['REQUEST_URI'],'/resources/') !== false) {echo 'class="selected"';} ?> href="<?= $paths['global']['resources'] ?>">Main</a></li></li>
		<li><a <? if (stripos($_SERVER['REQUEST_URI'],'/design/') !== false) {echo 'class="selected"';} ?> href="<?= $paths['global']['resources'] ?>design/">Design</a></li>
		<li>Development</li>
		<li>Docs &amp; Reading</li>
		<li><a <? if (stripos($_SERVER['REQUEST_URI'],'/fonts/') !== false) {echo 'class="selected"';} ?> href="<?= $paths['global']['resources'] ?>fonts/">Fonts</a></li>

		<li>PS &amp; Illustrator Templates</li>
		<li>Vectors</li>
		<li>CMS</li>
		<li>Case Studies</li>
	</ul>
	
	<!--<h2>Secondary Content</h2>
	<ul class="inline-bullet">	
		<li>Audio</li>
		<li>Blueprints</li>
		<li>Clothing Templates</li>
		<li>Desktops</li>
		<li>Flags</li>
		<li>Gifs</li>
		<li>Line Art</li>
		<li>Logos &amp; Symbols</li>
		<li>Painting Resources</li>
	</ul>-->
</nav>