<?php require_once "nhl-vars.php"; ?>
<?php /*
	echo "<pre>";
	print_r($nhl);
	echo "</pre>";
*/ ?>

<form class="wrapper cf">
	<label class="form-label" for="nhl-nav">Choose a Team:</label>
	<div class="fancy-select fancy-select-lg">
		<select onChange="if(this.selectedIndex!=0) self.location=this.options[this.selectedIndex].value" id="nhl-nav">
			<option value="" selected>Select a Team</option>
		<?php foreach ($nhl as $teams => $values) { ?>
			<option value="#<?=$values['LongName']?>"><?=$values['FullName']?></option>
		<?php } ?>
		</select>
	</div>
	<p class="sg-toggler"><a href="nhl-raw" onclick="toggled('nhl-raw'); return false;">View just data</a></p>
</form>

<div class="wrapper" id="nhl-raw" style="display: none;">
	<table class="data-table">
		<caption>NHL Raw Data</caption>
		<thead class="data-table-head">
			<tr>
				<th scope="col" class="table-fullname">Full Names</th>
				<th scope="col" class="table-longname">Long Names</th>
				<th scope="col" class="table-shortname">Short Names</th>
				<th scope="col" class="hex-values">Hex Values</th>
			</tr>
		</thead>

		<tbody class="data-table-body">
			<?php foreach ($nhl as $teams => $values) { ?>
			<tr>
				<td><?=$values['FullName']?></td>
				<td><?=$values['LongName']?></td>
				<td><?=$values['ShortName']?></td>
				<td>
					<?php foreach ($values['TeamColours'] as $colors => $color_value) {	?>
						<span class="hex-value"><?=$color_value?></span>
					<?php }	?>
				</td>
			</tr>
			<?php }	?>

		</tbody>
	</table>
</div>


<?php /** START TEAM */ ?>

<?php foreach ($nhl as $teams => $values) { ?>
<article class="wrapper">
	<h3 class="sg-subheading" style="color: <?=$values['HeadingColour']?>" id="<?=$values['LongName']?>">
		<span class="ico-inline ico-25-inline <?=$values['ShortName']?>--25x25"><?=$values['FullName']?></span>
	</h3>
	
	<?php if ($values['TeamColours']) { ?>
	<div class="span-of-2">
		<h3 class="sg-tileheading">Primary Colours</h3>

		<ul class="sg-colors">
			<?php foreach ($values['TeamColours'] as $colors => $color_value) {	?>
			<li>
				<span style="background: <?=$color_value?>" class="sg-swatch">&nbsp;</span>
				<p class="sg-label"><?=$color_value?></p>
			</li>
			<?php }	?>
		</ul>
	</div>
	<?php } ?>

	<?php if ($values['SecondaryColours']) { ?>
	<div class="span-of-2 cf">
		<h3 class="sg-tileheading">Secondary Colours</h3>

		<ul class="sg-colors border-left">
			<?php foreach ($values['SecondaryColours'] as $colors => $color_value) {	?>
			<li>
				<span style="background: <?=$color_value?>" class="sg-swatch">&nbsp;</span>
				<p class="sg-label"><?=$color_value?></p>
			</li>
			<?php }	?>
		</ul>
	</div>
	<?php } ?>

	<div class="span-of-2 clear">
		<h4 class="sg-tileheading clear">Logos - Inline <small>(With a bg colour)</small></h4>
		<ul class="sg-logos <?=$values['ShortName']?>">
			<li>
				<img src="img/team_logos/59x59/hockey/nhl/<?=$values['LongName']?>.png" alt="">
				<p class="sg-label">59x59</p>
			</li>
			<li>
				<img src="img/team_logos/90x90/hockey/nhl/<?=$values['LongName']?>.png" alt="">
				<p class="sg-label">90x90</p>
			</li>
			<li>
				<img class="bgcolor" src="img/team_logos/170x170/hockey/nhl/<?=$values['LongName']?>.png" alt="">
				<p class="sg-label">170x170</p>
			</li>
			<li>
				<img src="img/team_logos/200x200/hockey/nhl/<?=$values['LongName']?>.png" alt="">
				<p class="sg-label">200x200</p>
			</li>
		</ul>
	</div>

	<div class="span-of-2 cf">
		<h4 class="sg-tileheading">Logos - As Backgrounds <small>(With a bg colour)</small></h4>
		<ul class="sg-logos <?=$values['ShortName']?>">
			<li>
				<span class="ico-59 ico <?=$values['ShortName']?>--59x59"></span>
				<p class="sg-label">59x59</p>
			</li>
			<li>
				<span class="ico-90 ico <?=$values['ShortName']?>--90x90"></span>
				<p class="sg-label">90x90</p>
			</li>
			<li>
				<span class="ico-170 ico <?=$values['ShortName']?>--170x170"></span>
				<p class="sg-label">170x170</p>
			</li>
			<li>
				<span class="bgcolor ico-200 ico <?=$values['ShortName']?>--200x200"></span>
				<p class="sg-label">200x200</p>
			</li>
		</ul>
	</div>

	<div class="content-wrapper">
		<h3 class="sg-tileheading">Textual Icons</h3>
		<p class="ico-inline ico-25-inline <?=$values['ShortName']?>--25x25">Some text to show bg on a paragraph</p>
		<p class="ico-inline ico-25-inline <?=$values['ShortName']?>--25x25"><a href="">Text to show bg on a paragraph with a link</a></p>
	</div>
</article>
<?php } ?>