<!doctype html lang="en">
<head>
<meta name="description" content="yeah i'm a pokemon master suck it">
<meta name="viewport" content="initial-scale=1.0" />
<meta name="robots" content="noai, noimageai">

<title>MASTERBALL / GYM</title>

<link rel="shortcut icon" type="image/x-icon" href="../mball.ico" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="initial-scale=1.0">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="bag.js"></script>
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
	
<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700&display=swap" rel="stylesheet">


<style type="text/css">

	*{
		image-rendering: pixelated;
	}

#container{
	width: 20em;
	margin: 12% auto;
	font: normal 100%/160% 'Inconsolata', monospace;
}

#container img{
	height: 50px;
}

.intro, .nav{
	border-image-slice: 30% 30% 30% 30% fill;
border-image-width: 20px 20px 20px 20px;
border-image-outset: 0px 0px 0px 0px;
border-image-repeat: stretch stretch;
border-image-source: url("border.png");
border-style: solid;
	padding: 25px;
	margin-bottom: 2em;
}

.nav{
	font-size: 120%;
}

ul#choose{
	list-style-type: none;
	-webkit-padding-start: 0!important;
	-moz-padding-start: 0!important;
	padding-start: 0!important;
	margin: 0;
}

#choose li{
	width: 48%;
	display: inline-block;
}

#choose li a:link, #choose li a:visited{
	color: #000;
	text-decoration: none;
	text-transform: uppercase;
	letter-spacing: 0;
}

#choose li a:hover:before, #choose li a:active:before, #choose li a:focus:before{
	content:"> ";
}

#select{
	text-transform: uppercase;
	font: normal 100% 'Inconsolata', monospace;
	text-align: center;
	margin-bottom: 1em;
}

#bag{
	width: 40em;
	margin: 12% auto;
	font: normal 100%/160% 'Inconsolata', monospace;
}

#openbag, #bag{
	padding: 25px;
	border-radius: 10px;
}

#openbag{
	text-transform: uppercase;
	border-image-slice: 30% 30% 30% 30% fill;
border-image-width: 20px 20px 20px 20px;
border-image-outset: 0px 0px 0px 0px;
border-image-repeat: stretch stretch;
border-image-source: url("border.png");
border-style: solid;
	width: 30%;
	margin: 0 auto;
	font-size: 120%;
}

#openbag ul{
	list-style-type: none;
	-webkit-padding-start: 0!important;
	-moz-padding-start: 0!important;
	padding-start: 0!important;
margin: 0;}

#openbag li a:link, #openbag li a:visited{
	color: #000;
	text-decoration: none;
}

#openbag li a:hover:before, #openbag li a:focus:before, #bag li a:hover:before, #bag li a:focus:before{
	content:"> ";
}

#bag {
  display: none;
}

#bag ul > li, #bag ul > li li{
	text-transform: uppercase;
	list-style-type: none;
}

#bag ul > li li li{
	text-transform: none;
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

* {cursor: url('/gam1284.png'), auto !important;}

  @media only screen and (max-width: 430px) and (min-width: 0px) {

html {
-webkit-text-size-adjust: none;
}

#bag{
	width: 95%;
}

#openbag{
	width: 60%;
}
    
}

</style>

</head>

<body>


<div id="container">

<div id="gym">
<center><img src="guy.png" alt="gym guide from pokemon emerald"></center>
<div class="intro">Yo, champ in the making! This gym uses STEEL type Pok&eacute;mon, so be sure to stock up on your FIRE, GROUND, and FIGHTING moves!</div>

<div class="nav"><ul id="choose">
					<li><a href="fight">Fight</a></li>
					<li><a href="javascript:void(0);" value="Click" onclick="switchBag();changeThat()"/>Bag</a></li>
					<li><a href="pkmn">Pok&eacute;mon</a></li>
					<li><a href="flee">Run</a></li>
					</ul>
					</div>

</div>

</div>

<div id="bag" style="display: none;">

<div id="select">Select an item</div>

<div id="content">

<div id="openbag"><ul><li><a onclick='changeThis()'>Bicycle</a></li>
<li><a href="/map" title="">Town Map</a></li>
<li><a href="/trainer" title="">Vs. Seeker</a></li>
<li><a href="/wild" title="">Exp. Share</a></li>
<li><a href="/secretbase" title="">Basement Key</a></li>
<li><a href="/guestbook" title="">Xtransceiver</a></li>
<li><a href="/home" title="(pretend this is a key item)">Masterball</a> x 1</li>
<li><a href="javascript:void(0);" value="Click" onclick="switchBag();changeThat()"/>Close Bag</a></li></ul></div>

	
</div>

</div>

</div>











</body>

</html>