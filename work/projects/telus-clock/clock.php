<?php

?>
<html>
<head>
  	<title>Telus Clock</title>
  	<link rel="stylesheet" href="css/clock.css" type="text/css">
    <script src="js/clock.js" type="text/javascript"></script>
</head>

<body>

    <div id="clock">
    	<div class="time"><span id="hours"></span>h<span id="mins"></span></div>
    	<div class="date"><span id="date"></span></div>
    </div>

<script type="text/javascript">

function displayTime() {
	var lang = moment().locale('fr-ca').tz("America/Montreal"),
		hours = moment(lang).format('HH'),
		min = moment(lang).format('mm A'),
		date = moment(lang).format('dddd LL');

	$('#hours').html(hours);
	$('#mins').html(min);
	$('#date').html(date);
	setTimeout(displayTime, 1000);
}
 
$(document).ready(function() {
	displayTime();
});

</script>








</body>
</html>