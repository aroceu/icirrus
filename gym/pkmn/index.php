<!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="initial-scale=1.0">

	<title>GYM / PKMN</title>

  <link rel="shortcut icon" type="image/x-icon" href="../../mball.ico" />

	<link href="https://fonts.googleapis.com/css2?family=Tiny5&display=swap" rel="stylesheet">

	<style type="text/css">

		*{
			margin: 0;
			padding: 0;
			  box-sizing: border-box;
		}

		body{
			background: url('bg.png') no-repeat scroll;
			background-size: cover;
			font: normal 100% 'Tiny5', monospace;
			color: #444;
		}

		#main{
			width: 85%;
			margin: 3em auto;
		}

		.container {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
  width: 100%;
}

.left, .right {
  flex: 50%;
  max-width: 50%;
}

		#stufful{
			background: url('stufful-d.png') no-repeat;
			background-size: cover;
			height: 330px;
			width: 250px;
			position: fixed;
			bottom: 0;
			left: 0;
		}

		#rowlet{
			background: url('rowlet.gif') no-repeat;
			background-size: cover;
			height: 150px;
			width: 150px;
			position: absolute;
			top: 300px;
			left: 41%;
		}

		#jumpluff{
			background: url('jumpluff.gif') no-repeat;
			background-size: cover;
			height: 290px;
			  width: 235px;
			  position: absolute;
			  top: 100px;
			  left: 0;
		}

		#chikorita{
			background: url('chikorita.gif') no-repeat;
			background-size: cover;
			height: 275px;
			  width: 210px;
			    position: absolute;
			    top: 0;
			    left: 42%;
		}

		#cleffa{
			background: url('cleffa.gif') no-repeat;
			background-size: cover;
			height: 195px;
			  width: 220px;
			  position: absolute;
			  top: 185px;
			  right: 2%;
		}

		#horsea{
			background: url('horsea.gif') no-repeat;
			background-size: cover;
			height: 312px;
			  width: 206px;
			  position: absolute;
			  top: 500px;
			  left: 44%;
		}

		#cyndaquil{
			background: url('cyndaquil.gif') no-repeat;
			background-size: cover;
			height: 220px;
  width: 260px;
  position: absolute;
  top: 660px;
  left: 8%;
		}

		#phanpy{
			background: url('phanpy.gif') no-repeat;
			background-size: cover;
			height: 190px;
  width: 183px;
  position: absolute;
  top: 800px;
  right: 1%;
		}

		#furret{
			background: url('furret.gif') no-repeat;
			background-size: cover;
			height: 240px;
  width: 245px;
  position: absolute;
  top: 1000px;
  left: 41%;
		}

		.box{
			background: #fff;
			padding: 15px;
			width: fit-content;
			margin: 2em auto;
			text-align: center;
			border: 5px double #d6688b;
			box-shadow: 0.15em 0.15em 0.3em #333;
		}

		.transparent{
			padding: 15px;
			width: fit-content;
			margin: 0 auto;
			text-align: center;
		}

		h2{
			color: #f9d1d5;
		}

		#plushies img{
			padding: 0 23.5px;
		}

		#gpx{
			margin-top: 3em;
			border: 2px solid #68c0d6;
			border-radius: 30px;
			padding: 10px 30px;
		}

		#ichooseyou a:link, #ichooseyou a:visited{
			color: #fff;
			letter-spacing: 1px;
			font-style: italic;
			text-shadow: 0.1em 0.1em 0em #d6688b;
			text-decoration: none;
		}

		#ichooseyou a:hover, #ichooseyou a:focus{
			color: #f9d1d5;
		}

		#ichooseyou{
			font-size: 180%;
		}

		img.kingdra-icon{
			vertical-align: sub;
		}

		.right .row:first-child{
			margin-top: 0!important;
		}

		.right .box:last-child{
			margin-bottom: 0!important;
		}

		.row{
			text-align: center;
			margin: 2em auto;
		}

		#dressup{
			background: none;
			padding: 0;
		}

		#pet{
			background: url('wood.jpg') repeat;
		}

		#plushies, #credits{
						background: url('dotted.png') repeat;

		}

		img.shroomish{
			transform: rotate(30deg);
			height: 270px;
			float: right;
		}

		a img:hover{
			background: #f9d1d5;
		}

		#credits{
			clear: both;
			margin-top: 23em;
			width: 65%;
			color: #444;
		}

		#credits a:link, #credits a:visited{
			color: #68c0d6;
		}

		#credits a:hover, #credits a:focus{
			color: #d6688b;
		}

		#exit a:link, #exit a:visited{
			color: #d6688b;
			text-transform: uppercase;
		}

		#exit a:hover, #exit a:focus{
			color: #444;
		}

		#mobilenote{
			display: none;
		}


@media only screen and (max-width: 1025px) and (min-width: 0px) {
html {
-webkit-text-size-adjust: 100%;
margin: 0 0 2em;
padding: 0;
}

#main{
	width: auto;
}

.left, .right {
  flex: 100%;
  max-width: 100%;
}

#jumpluff, #chikorita, #cleffa, #horsea, #cyndaquil, #phanpy, #furret, #stufful, #rowlet{
	display: none;
}

#mobilenote{
	display: block;
}

.box, .row{
	margin: 0.75em auto;
}

#shroomish{
	text-align: center;
}

img.shroomish {
  transform: none;
  height: 200px;
  float: none;
}

#dressup img{
	max-width: 100%;
}

#gpx{
	margin: 0 auto;
}

#credits{
			clear: both;
			margin-top: 1em;
			color: #444;
			width: 90%;

		}

}

	</style>
</head>



<body>

<div id="main" class="container">

	<div id="mobilenote" class="box">
		This page is not optimized responsively, though it is accessible.<br /> For the full experience, please visit this page on desktop.
	</div>

	<div class="left">

<div class="box" id="pet">
	<h2>play with my pet!!</h2>
<iframe width="314" height="321" scrolling="no" src="https://gifypet.neocities.org/pet/pet.html?name=Duke&dob=1738990166&gender=m&element=Air&pet=https%3A%2F%2Fi.imgur.com%2FNOcbrrQ.gif&map=tree.jpg&background=wood.jpg&tablecolor=white&textcolor=white" frameborder="0"></iframe>
</div>

<div class="row">
<img src="clefairy.png"> <img src="gengar.png"> <img src="psyduck.png"> <img src="jigglypuff-sing.png"> <img src="pikachu.png"> <img src="toy.png"> <img src="slowpoke.png">
<br />
<img src="jigglypuff.png"> <img src="oddish.png"> <img src="growlithe.png"> <img src="ponyta.png"> <img src="rattata.png"> <img src="chansey.png"> <img src="nidoran.png">
</div>

<div id="shroomish">
<img src="shroomish.png" class="shroomish">
</div>

<div class="box" id="credits">

	<p>This page is an assortment of digital Pok&eacute;mon adoptables, collectibles, and little guys.</p>
	<p>Rowlet made with the <a href="https://benisland.neocities.org/petpet/">Petpet Generator</a>.
		<br />Whimsicott made with <a href="https://pamtre-berry.neocities.org/fun/dressup">Pokemon Contest Dress Up</a>.
		<br />Shroomish made with <a href="https://picrew.me/ja/image_maker/1075494">this picrew</a>.
		<br />TCG Pixel Stamps by <a href="https://newlambda.neocities.org/games/pokesprites
">:/newlambda</a>.
		<br />Pok&eacute;mon Stadium GIFs by <a href="https://bluemoonfalls.com/pages/general/stadium-gif-archive">Bluemoon Falls</a>.</p>
		<p>Stufful is by me :)</p>

</div>

</div>

<div class="right">

	<div class="row">
<img src="shellder.png"> <img src="haunter.png"> <img src="voltorb.png"> <img src="seadra.png"> <img src="horsea.png"> <img src="magikarp.png"> <img src="eevee.png">
</div>

<div class="box" id="gpx">
<a href="https://my.gpx.plus/aroceu" target="_blank"><img src="https://p.gpx.plus/uxjL.png" border="0" alt=""></a>
</div>

<div class="transparent" id="ichooseyou">
<a href="https://pkmn.caelestis.nu" rel="noopener noreferrer" style="border: 0px none; background: transparent;" title="I Choose You! :: Kingdra">I Choose You! <img src="kingdra-icon.png" class="kingdra-icon"></a></p>
</div>

<div class="box" id="plushies">
<a href="http://www.pokeplushies.com"><img src="http://www.pokeplushies.com/images/plushies/230_shiny.png"></a>
<a href="http://www.pokeplushies.com"><img src="http://www.pokeplushies.com/images/plushies/151.png"></a>
<a href="http://www.pokeplushies.com"><img src="http://www.pokeplushies.com/images/plushies/633.png"></a>
</div>

<div class="row">
<img src="vaporeon.png"> <img src="jolteon.png"> <img src="snorlax.png"> <img src="articuno.png"> <img src="dragonite.png"> <img src="mew.png"> <img src="squirtle.png">
</div>

<div class="box" id="dressup">
<a href="https://pamtre-berry.neocities.org/fun/dressup"><img src="whimsicott.png"></a>
</div>

<div class="box" id="exit">
	<a href="https://icirr.us/gym">Back to Gym</a> :: <a href="https://icirr.us/home">Masterball</a>

</div>

</div>

<div id="jumpluff"></div>

<div id="chikorita"></div>

<div id="cleffa"></div>

<div id="rowlet"></div>

<div id="cyndaquil"></div>

<div id="horsea"></div>

<div id="phanpy"></div>

<div id="furret"></div>

<div id="stufful"></div>

</body>

</html>