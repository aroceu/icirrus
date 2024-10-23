<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>GYM / BAG</title>

<link rel="shortcut icon" type="image/x-icon" href="../../mball.ico" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="idk.js"></script>
<script type="text/javascript">// <![CDATA[
		function ShowHide(divId)
		{
		if(document.getElementById(divId).style.display == 'none')
		{
		document.getElementById(divId).style.display='block';
		}
		else
		{
		document.getElementById(divId).style.display = 'none';
		}
		}
	// ]]>
		
		function changeThis() {
    var div = document.getElementById('select').innerHTML;
    if (div === 'Select an item') {
        document.getElementById('select').innerHTML = "There's a time and place for everything! But not now.";
    } else {
        document.getElementById('select').innerHTML = "Select an item";
    }
}

function changeThat() {
    var div = document.getElementById('select').innerHTML;
    if (div === "There's a time and place for everything! But not now.") {
        document.getElementById('select').innerHTML = "Select an item";
    } else {
        document.getElementById('select').innerHTML = "Select an item";
    }
}
	</script>
	
	<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Lato:400,400i,700,700i&display=swap" rel="stylesheet">


<style type="text/css">

body{
	background: #fff;
}

#select{
	text-transform: uppercase;
	font: normal 100% 'Inconsolata', monospace;
	text-align: center;
	margin-bottom: 1em;
}

#container{
	width: 40em;
	margin: 12% auto;
	font: normal 100%/160% 'Inconsolata', monospace;
}

#openbag, #map, #dowsing{
	border: 5px double #000;
	padding: 15px;
	border-radius: 10px;
}

#openbag{
	text-transform: uppercase;
	width: 30%;
	margin: 0 auto;
	font-size: 120%;
}

#openbag ul{
	list-style-type: none;
	-webkit-padding-start: 0!important;
margin: 0;}

#openbag li a:link, #openbag li a:visited{
	color: #000;
	text-decoration: none;
}

#openbag li a:hover:before, #openbag li a:focus:before, #map li a:hover:before, #map li a:focus:before, #dowsing a:hover:before, #dowsing a:focus:before{
	content:"> ";
}

#map, #dowsing {
  display: none;
}

#map ul > li, #map ul > li li, #dowsing ul > li, #dowsing ul > li li {
	text-transform: uppercase;
	list-style-type: none;
}

#map ul > li li li, #dowsing ul > li li li{
	text-transform: none;
}

#dowsing ul > li li li{
	margin: 0.5em 0;
}

a{
	color: #000;
	text-decoration: none;
}

a:hover, a:focus{
	cursor: pointer;
}

#footer{
	text-align: center;
}

#footer a:link, #footer a:visited{
	color: #000;
	font: normal 80% 'Inconsolata', monospace;
	text-transform: uppercase;
	margin: 0 auto;
	letter-spacing: 2px;
}

#footer a:hover, #footer a:focus, #footer a:active{
	text-decoration: underline;
}

</style>

</head>

<body>

<div id="container">

<div id="select">Select an item</div>

<div id="content">

<div id="openbag"><ul><li><a onclick='changeThis()'>Bicycle</a></li>
<li><a href="javascript:void(0);" value="Click" onclick="switchMap();changeThat()"/>Town Map</a></li>
<!-- <li><a href="javascript:void(0);" value="Click" onclick="switchDowsing();changeThat()"/>Dowsing Machine</a></li> -->
<li><a href="/" title="(pretend this is a key item)">Masterball</a> x 1</li>
<li><a href="../">Close Bag</a></li></ul></div>


<div id="map">
<ul><li><a href="javascript:void(0);" value="Click" onclick="switchMap();"/>Close Map</a></li>
<li><a onclick="javascript:ShowHide('ballin')">Masterball (index)
<ul class="mid" id="ballin" style="display: none;">
<li><a onclick="javascript:ShowHide('trainer')">Trainer</a>
<ul class="mid" id="trainer" style="display: none;">
<li>Ruby (2003)</li>
<li>Emerald (2006)</li>
<li>Diamond (2007)</li>
<li>Platinum (2009)</li>
<li>Fire Red (2011)</li>
<li>Heart Gold (2012)</li>
<li>Black (2011)</li>
<li>Black 2 (2012)</li>
<li>X (2013)</li>
<li>Y (2016)</li>
<li><a onclick="javascript:ShowHide('log')">OMEGA RUBY (2014)</a>
<ul class="mid" id="log" style="display: none;"><li>Casual playthrough log</li></ul></li>
<li>Moon (2016)</li>
<li>Let's Go Pikachu (2018)</li>
<li><a onclick="javascript:ShowHide('shieldshiny')">SHIELD (2020)</a>
<ul class="mid" id="shieldshiny" style="display: none;"><li>Shield Shinies</li></ul></li>
<li>Misc</li>
<li>Favorites</li>
<li>Shiny Gallery</li></ul></li>
<li><a onclick="javascript:ShowHide('gym')">Gym</a>
<ul class="mid" id="gym" style="display: none;">
<li><a onclick="javascript:ShowHide('fight')">FIGHT</a>
<ul class="mid" id="fight" style="display: none;"><li>Leader Alice would like to battle! (Bisharp)</li>
<li>Contact & Add (Aegislash)</li>
<li>Trainer Info (Sandslash)</li>
<li>Site Info (Aggron)</li>
<li>Linkback Buttons (Tinkaton)</li></ul></li>
<li><a onclick="javascript:ShowHide('bag')">BAG</a>
	<ul class="mid" id="bag" style="display: none;"><li>Site Map (town map)</li>
<!-- <li>Design Info & Credits (dowsing machine)</li> --></ul></li>
<li>Pok&eacute;mon (Pokemon Go Log)</li>
<li>Run (Exits/Affiliates)</li></ul></li>
</li></ul>
</div>

<!-- <div id="dowsing">
	<ul><li><a href="javascript:void(0);" value="Click" onclick="switchDowsing();"/>Put Away</a></li>
	<li><a onclick="javascript:ShowHide('found')">Found! (index)</a>
	<ul class="mid" id="found" style="display: none;">
	<li><a onclick="javascript:ShowHide('trainerdesign')">Trainer</a>
		<ul class="mid" id="trainerdesign" style="display: none"><li>Each section features the main colors of each game. The trainer sprite in the header is reflective of the gender (and, if applicable, game version) I chose when playing the game. Pok&eacute;mon sprites, including quality and animation, also reflect on the animation of the game. The generation pertains to the gen the game belongs to; but the year listed indicates the year I played the game (for example, that HeartGold is a gen IV game but I played it in 2012, after gen V was released)</li>
			<li>Nicknames, ribbons, abilities, stats, and other individual elements are only listed if applicable. Games available on the 3DS will have additional text-shadow and box-shadow elements, while games available on the Switch will have side borders on the page document, signifying the console the game is available on.</li>
			<li>All sections are designed to be semi-permanent, with modifications made only for consistency or mild stylistic choices. (Of course, not to say that I will never change the themes overall, but I don't anticipate it at the time of writing this.)</li> </ul></li>

	<li><a onclick="javascript:ShowHide('gymdesign')">Gym</a>
		<ul class="mid" id="gymdesign" style="display: none"><li>The gym front page is designed to appear and function reminiscent of the original Red and Green games. The gym guide, however, is from RSE in spirit of Hoenn being the first Pok&eacute;mon games I ever played and owned.</li>
			<li>"Fight" is... largely half-assed, mostly because there's no exceptionally awesome way to imitate pok&eacute;mon battles in CSS form while also giving site information. I do think if I was a gym leader, though, I would be ice-themed; and the five pok&eacute;mon listed are my favorite ice-types, thus the ones I would use as a leader. Walrein is shiny because my first shiny pok&eacute;mon was walrein.</li>
			<li>"Pok&eacute;mon" is my Pok&eacute;mon Go log. If you haven't played it, the design is more or less identical to the mobile design. I say this proudly because I did code and create the graphics myself, with a bit of help from official vectors; otherwise all I had was my own account for reference. My trainer sprite is usually my current sprite in-game, give or take a few weeks in the case that I change my in-game outfit. Counts and the 'dex are usually updated at least to the current month, and the gym archive is prior to the 2017 gym update. I keep them there because they're still special to me.</li>
			<li>"Bag" - you're looking at her now! I am most proud of the "Bicycle" flavor text, although the rest of this section is to provide miscellaneous site information and help. I want to add a Fishing Rod option, though I'm not sure what it would be for.</li>
			<li>"Run" are exits to other Po&eacute;mon-related websites that I like. Although the page title is from trying to run away from a trainer battle, the header is the exit text when visiting a Pok&eacute;mon Center in any core game, and the background design is the Love Ball, which has nothing to do with gender and is purely representative that these are websites I love.</li>
		</ul>
	</li>

	<li><a onclick="javascript:ShowHide('indexdesign')">Etc.</a>
		<ul class="mid" id="indexdesign" style="display: none">
			<li>All customized graphics (background on the index page; linkback buttons) are made/drawn by me.
			Everything is also coded by me! With the help of Dynamic Drive and LightBox in a couple of places.</li>
			<li>I procured most, if not all of the Pok&eacute;mon and trainer sprites from <a href="http://bulbapedia.bulbagarden.net">Bulbapedia</a>, <a href="http://www.pokestadium.com/">Pok&eacute;stadium</a>, and <a href="https://github.com/PokeAPI/">Pok&eacute;API</a> on GitHub. The Yellow overworld sprite is by <a href="https://liliebiehlina3siste.deviantart.com/art/PokemonSpecial-Sprites-Yellow-302559354">liliebiehlina3siste</a> on deviantART. </li></ul></li></ul>
</li></ul></div> -->

	
</div>

</div>

</div>


</body>

</html>