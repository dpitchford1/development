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
			<li><a href="#nhl">NHL</a></li>
			<li><a href="#nba">NBA</a></li>
			<li><a href="#mlb">MLB</a></li>
			
			<li><a href="#nfl">NFL</a></li>
			<li><a href="#ahl">AHL</a></li>
			<li><a href="#chl">CHL</a></li>
			<li><a href="#ohl">OHL</a></li>
			<li><a href="#whl">WHL</a></li>
			<li><a href="#qmjhl">QMJHL</a></li>
		</ul>

	</nav>
	<section class="region" id="nhl">
		<h2 class="sg-heading">NHL - Colours and Logos</h2>

		<?php include "includes/nhl-page.php"; ?>
		
		<p class="top-of-page"><a href="#main-content">Top of page</a></p>
	</section>

	<section class="region" id="nba">
		<h2 class="sg-heading">NBA - Colours and Logos</h2>

		<p class="top-of-page"><a href="#main-content">Top of page</a></p>
	</section>

	<section class="region" id="mlb">
		<h2 class="sg-heading">MLB - Colours and Logos</h2>

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

<!--
--------------------------------------------------
MLB
--------------------------------------------------
Arizona Diamondbacks
Atlanta Braves
Baltimore Orioles
Boston Red Sox
Chicago Cubs
Chicago White Sox
Cincinnati Reds
Cleveland Indians
Colorado Rockies
Detroit Tigers
Houston Astros
Kansas City Royals
Los Angeles Angels of Anaheim
Los Angeles Dodgers
Miami Marlins
Milwaukee Brewers
Minnesota Twins
New York Mets
New York Yankees
Oakland Athletics
Philadelphia Phillies
Pittsburgh Pirates
San Diego Padres
San Francisco Giants
Seattle Mariners
St. Louis Cardinals
Tampa Bay Rays
Texas Rangers
Toronto Blue Jays
Washington Nationals


=======================================================================================
=======================================================================================

--------------------------------------------------
NBA
--------------------------------------------------
Atlanta Hawks
Boston Celtics 
Brooklyn Nets (previously the New Jersey Nets)
Charlotte Bobcats
Chicago Bulls
Cleveland Cavaliers
Dallas Mavericks
Denver Nuggets
Detroit Pistons
Golden State Warriors
Houston Rockets
Indiana Pacers
LA Clippers
LA Lakers
Memphis Grizzlies
Miami Heat
Milwaukee Bucks
Minnesota Timberwolves
New Orleans Pelicans (previously the Hornets)
New York Knicks
Oklahoma City Thunder
Orlando Magic
Philadelphia Sixers
Phoenix Suns
Portland Trail Blazers
Sacramento Kings
San Antonio Spurs
Toronto Raptors
Utah Jazz
Washington Wizards


=======================================================================================
=======================================================================================

--------------------------------------------------
NFL
--------------------------------------------------
Arizona Cardinals
Atlanta Falcons
Baltimore Ravens
Buffalo Bills
Carolina Panthers
Chicago Bears
Cincinnati Bengals
Cleveland Browns
Dallas Cowboys
Denver Broncos
Detroit Lions
Green Bay Packers
Houston Texans
Indianapolis Colts
Jacksonville Jaguars
Kansas City Chiefs
Miami Dolphins
Minnesota Vikings
New England Patriots
New Orleans Saints
New York Giants
New York Jets
Oakland Raiders
Philadelphia Eagles
Pittsburgh Steelers
San Diego Chargers
San Francisco 49ers
Seattle Seahawks
St. Louis Rams
Tampa Bay Buccaneers
Tennessee Titans
Washington Redskins



=======================================================================================
=======================================================================================

THE REST OF HOCKEY

--------------------------------------------------
AHL
--------------------------------------------------
Abbotsford Heat
Adirondack Phantoms
Albany Devils
Binghamton Senators
Bridgeport Sound Tigers
Charlotte Checkers
Chicago Wolves
Grand Rapids Griffins
Hamilton Bulldogs
Hartford Wolf Pack
Hershey Bears
Iowa Wild
Lake Erie Monsters
Manchester Monarchs
Milwaukee Admirals
Norfolk Admirals
Oklahoma City Barons
Portland Pirates
Providence Bruins
Rochester Americans
Rockford IceHogs
San Antonio Rampage
Springfield Falcons
St. John's IceCaps
Syracuse Crunch
Texas Stars
Toronto Marlies
Utica Comets
Wilkes-Barre Scranton Penguins
Worcester Sharks


--------------------------------------------------
CHL
--------------------------------------------------
Allen Americans
Arizona Sundogs
Brampton Beast
Denver Cutthroats
Missouri Mavericks
Quad City Mallards
Rapid City Rush
St. Charles Chill
Tulsa Oilers
Wichita Thunder


--------------------------------------------------
OHL
--------------------------------------------------
Barrie Colts
Belleville Bulls
Erie Otters
Guelph Storm
Kingston Frontenacs
Kitchener Rangers
London Knights
Mississauga Steelheads
Niagara IceDogs
North Bay Battalion
Oshawa Generals
Ottawa 67's
Owen Sound Attack
Peterborough Petes
Plymouth Whalers
Saginaw Spirit
Sarnia Sting
Sault Ste. Marie Greyhounds
Sudbury Wolves
Windsor Spitfires


--------------------------------------------------
WHL
--------------------------------------------------
Brandon Wheat Kings
Calgary Hitmen
Edmonton Oil Kings
Everett Silvertips
Kamloops Blazers
Kelowna Rockets
Kootenay Ice
Lethbridge Hurricanes
Medicine Hat Tigers
Moose Jaw Warriors
Portland Winterhawks
Prince Albert Raiders
Prince George Cougars
Red Deer Rebels
Regina Pats
Saskatoon Blades
Seattle Thunderbirds
Spokane Chiefs
Swift Current Broncos
Tri-City Americans
Vancouver Giants
Victoria Royals


--------------------------------------------------
QMJHL
--------------------------------------------------
Acadie-Bathurst Titan
Baie-Comeau Drakkar
Blainville-Boisbriand Armada
Cape Breton Screaming Eagles
Charlottetown Islanders
Chicoutimi Saguenéens
Drummondville Voltigeurs
Gatineau Olympiques
Halifax Mooseheads
Moncton Wildcats
Québec Remparts
Rimouski Océanic
Rouyn-Noranda Huskies
Saint John Sea Dogs
Shawinigan Cataractes
Sherbrooke Phoenix
Val-d'Or Foreurs
Victoriaville Tigres

-->

</body>
</html>
