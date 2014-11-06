<?php require_once "nba-vars.php"; ?>

<?php /*
	echo "<pre>";
	print_r($nba);
	echo "</pre>";
*/ ?>

<form class="wrapper cf">
	<label class="form-label" for="nhl-nav">Choose a Team:</label>
	<div class="fancy-select fancy-select-lg">
		<select onChange="if(this.selectedIndex!=0) self.location=this.options[this.selectedIndex].value" id="nba-nav">
			<option value="" selected>Select a Team</option>
		<?php foreach ($nba as $teams => $values) { ?>
			<option value="#<?=$values['LongName']?>"><?=$values['FullName']?></option>
		<?php } ?>
		</select>
	</div>
	<p class="sg-toggler"><a href="nba-raw" onclick="toggler('nba-raw'); return false;">View just data</a></p>
</form>

<div class="wrapper" id="nba-raw" style="display: none;">
	<table class="data-table">
		<caption>NBA Raw Data</caption>
		<thead class="data-table-head">
			<tr>
				<th scope="col" class="table-fullname">Full Names</th>
				<th scope="col" class="table-longname">Long Names</th>
				<th scope="col" class="table-shortname">Short Names</th>
				<th scope="col" class="hex-values">Hex Values</th>
			</tr>
		</thead>

		<tbody class="data-table-body">
			<?php foreach ($nba as $teams => $values) { ?>
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

<?php foreach ($nba as $teams => $values) { ?>
<article class="wrapper">
	<h3 class="sg-subheading" style="color: <?=$values['HeadingColour']?>" id="<?=$values['LongName']?>"><?=$values['FullName']?></h3>

	<?php if ($values['TeamColours']) { ?>
	<h3 class="sg-tileheading">Team Colours</h3>

	<ul class="sg-colors">
		<?php foreach ($values['TeamColours'] as $colors => $color_value) {	?>
		<li>
			<span style="background: <?=$color_value?>" class="sg-swatch">&nbsp;</span>
			<p class="sg-label"><?=$color_value?></p>
		</li>
		<?php }	?>
	</ul>
	<?php } ?>

	<p><span class="i-inline-25-pl <?=$values['ShortName']?>--25x25">Some text to show bg on a paragraph</span></p>
	<p><span class="i-inline-25-pr <?=$values['ShortName']?>--25x25">Some text to show bg on a paragraph</span></p>
	<p><a class="ico-inline ico-25-inline <?=$values['ShortName']?>--25x25" href="">Text to show bg on a paragraph with a link</a></p>

	<h4 class="sg-tileheading">Logos - Inline</h4>
	<ul class="sg-logos <?=$values['ShortName']?>">
		<li>
			<img class="i-59" src="img/team_logos/svg/basketball/nba/<?=$values['LongName']?>.svg" onerror="this.src='img/team_logos/59x59/basketball/nba/<?=$values['LongName']?>.png';this.onerror=null;" alt="" width="59">
			<p class="sg-label">59x59</p>
		</li>
		<li>
			<img class="i-90" src="img/team_logos/svg/basketball/nba/<?=$values['LongName']?>.svg" onerror="this.src='img/team_logos/90x90/basketball/nba/<?=$values['LongName']?>.png';this.onerror=null;" alt="" width="90">
			<p class="sg-label">90x90</p>
		</li>
		<li>
			<img class="i-170" class="bgcolor" src="img/team_logos/svg/basketball/nba/<?=$values['LongName']?>.svg" onerror="this.src='img/team_logos/170x170/basketball/nba/<?=$values['LongName']?>.png';this.onerror=null;" alt="" width="170">
			<p class="sg-label">170x170</p>
		</li>
		<li>
			<img class="i-200" src="img/team_logos/svg/basketball/nba/<?=$values['LongName']?>.svg" onerror="this.src='img/team_logos/200x200/basketball/nba/<?=$values['LongName']?>.png';this.onerror=null;" alt="" width="200" height="200">
			<p class="sg-label">200x200</p>
		</li>
	</ul>

	<h4 class="sg-tileheading">Logos - As Backgrounds</h4>
	<ul class="sg-logos <?=$values['ShortName']?>">
		<li class="logo-59">
			<span class="i i-59 <?=$values['ShortName']?>--59x59"></span>
			<p class="sg-label">59x59</p>
		</li>
		<li class="logo-90">
			<span class="i i-90 <?=$values['ShortName']?>--90x90"></span>
			<p class="sg-label">90x90</p>
		</li>
		<li class="logo-170">
			<span class="i i-170 <?=$values['ShortName']?>--170x170"></span>
			<p class="sg-label">170x170</p>
		</li>
		<li class="logo-200">
			<span class="bgcolor i i-200 <?=$values['ShortName']?>--200x200"></span>
			<p class="sg-label">200x200</p>
		</li>
	</ul>
</article>
<?php } ?>





