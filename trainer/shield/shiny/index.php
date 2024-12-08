<html>
<head>

	<title>TRAINER / SHIELD / SHINIES</title>

	<link href="https://fonts.googleapis.com/css?family=Kranky|Playfair+Display:400,400i,600,600i|Inconsolata:400,700|Lato:400,400i,700,700i&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="shiny.png" />
<meta name="viewport" content="initial-scale=1.0" />

	<style type="text/css">

		body{
			background: rgb(221,2,98);
			background: linear-gradient(90deg, rgba(221,2,98,1) 0%, rgba(221,2,98,1) 22%, rgba(243,204,144,1) 100%);
			background: -moz-linear-gradient(90deg, rgba(221,2,98,1) 0%, rgba(221,2,98,1) 22%, rgba(243,204,144,1) 100%);
			background: -webkit-linear-gradient(90deg, rgba(221,2,98,1) 0%, rgba(221,2,98,1) 22%, rgba(243,204,144,1) 100%);
			height: 100%;
		background-repeat: no-repeat;
		background-attachment: fixed;
			color: #fff;
			font: normal 100%/140% 'Playfair Display', sans-serif;
			text-shadow: 0.1em 0.1em 0.5em #F3CC90;
		}

		#container{
			margin: 5em auto;
			width: 60em;
		}

		#top{
			font: normal 3.2em 'Kranky';
			text-align: center;
			text-transform: uppercase;
			text-shadow: 0.2em 0.2em 0.5em rgb(221,2,98);
		}

		#nav{
			float: left;
			width: 40%;
			margin: 3.5% 2.5%;
		}

		#nav ul{
			list-style-type: none;
    		padding-inline-start: 0!important;
		}

		#header{
			width: 59em;
			margin: 1em auto;
		}

		#chat{
			float:right;
			width: 55%;
		}

		#nav ul li a{
			display:block;
			text-align: center;
			color: #F3CC90;
			text-decoration: none;
			font: normal 180% 'Kranky', sans-serif;
			text-transform: uppercase;
			border-bottom: none;
			text-shadow: 0.1em 0.1em 0.5em #dd0262;
		}

		#nav ul li a:hover{
			color: #e7386a;
			text-shadow: 0.1em 0.1em 0.5em #F3CC90;
		}

		#content{
			margin-top: 21em;
		}

		a:link, a:visited{
			color: #F3CC90;
			text-decoration: none;
			font-style: italic;
			font-weight: bold;
			text-shadow: 0.1em 0.1em 0.5em #dd0262;
		}

		a:hover{
			color: #e7386a;
			text-shadow: none;
		}

		#comp, #apri{
			clear: both;
		}

		.pkmn img{
			display: block;
			height: 100px;
			margin: 0 auto;
		}

		img.bird{
			padding-top: 25px;
			height: 50px!important;
			padding-bottom: 25px;
		}

		img.bigbirb{
			height: 180px;
			margin-top: -50px;
			margin-bottom: -30px;
		}

		img.wiggle{
			height: 90px!important;
			padding-bottom: 10px;
		}

		img.boy{
			height: 55px!important;
			padding-top: 45px;
		}

		.pkmn b{
			font-weight: normal;
			text-transform: uppercase;
			color: #F3CC90;
		}

		.pkmn td{
			width: 90%;
			text-align: left;
			font-size: 88%;
		}

		.mon td:first-child{
			text-align: right;
		}

		a.movesetlink{
			display: block;
			color: #fff;
			padding: 3px 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 90%;
		}

		.moveset{
		text-transform: lowercase;
		letter-spacing: 2px;
		}

		.moveset td{
			text-align: center;
			padding: 3px;
			width: 50%!important;
		}


		td:nth-child(2) img {
		    height: 15px!important;
		    width: 15px!important;
		    display: inline;
		    vertical-align: text-bottom;
		}

		.pkmn{
		    width: 31.1%;
		    float: left;
		    margin: 0 1.1% 1.5em;
		}

		#apri .pkmn:nth-child(3+n){float: right;}

		#pokes{width: 60em; clear: both; margin: 0 auto;}
		.mon td:first-child{width: 10%; vertical-align: top;}
		#footer a:hover{color: #fff; text-shadow: none!important;}

		#footer{
	padding: 1.5em 0 1em;
	margin: 1em auto 0;
	text-align: center;
	font: normal 170%/160% 'Kranky';
	text-transform: uppercase;
	clear: both;
}

#footer a{
	color: #F3CC90;
	text-shadow: 0.05em 0.05em 0.3em #F3CC90;
	text-decoration: none;
	border-bottom: none;
	font-style: normal!important;
}

.mobilenote{
	display: none;
}

@media only screen and (max-width: 768px) and (min-width: 431px) {

html {
-webkit-text-size-adjust: none;
}

#container{
	width: 95%;
}

#header {
  width: 85%;
}

#nav {
  float: none;
  width: auto;
}

#chat {
  float: none;
  width: auto;
  margin: 0 auto;
}

#content{
			margin-top: 10em;
		}

.mobilenote{
	display: block;
}

}

  @media only screen and (max-width: 430px) and (min-width: 0px) {

html {
-webkit-text-size-adjust: none;
}

#top{
	font: normal 2em 'Kranky';
}

#container{
	width: 95%;
}

#header {
  width: 85%;
}

#nav {
  float: none;
  width: auto;
}

#chat {
  float: none;
  width: auto;
  margin: 0 auto;
}

#content{
			margin-top: 3em;
		}
    
.pkmn {
  width: auto;
  float: none;
}

table.mon{
	width: 50% !important;
	margin: 0 auto;
}

.mobilenote{
	display: block;
}

}



	</style>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://kingdra.net/x/lib/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="https://kingdra.net/x/animatedcollapse.js">
/***********************************************
* Animated Collapsible DIV v2.4- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Please keep this notice intact
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/
</script>
<script type="text/javascript">

$(document).ready(function(){
animatedcollapse.addDiv('comp', 'hide=1,fade=1, group=pkmn')
animatedcollapse.addDiv('apri', 'hide=1,fade=1, group=pkmn')
animatedcollapse.ontoggle=function($, divobj, state){ //fires each time a DIV is expanded/contracted
	//$: Access to jQuery
	//divobj: DOM reference to DIV being expanded/ collapsed. Use "divobj.id" to get its ID
	//state: "block" or "none", depending on state
}

animatedcollapse.init()

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1500);
        return false;
      }
    }
  });
});

});

</script>



</head>

<body>

	<div id="container">

		<div id="top">&#10023; Shield Shinies &#10023;</div>

		<div id="header">

			<div id="nav">

				<ul>
					<li><a href="#" rel="toggle[comp]">Competitive Shinies</a></li>
					<li><a href="#" rel="toggle[apri]">Apriball Shinies</a></li>
					<li><a href="https://pokedextracker.com/u/splatling/shield-shiny-dex">Shiny Dex</a></li>
				</ul>

			</div>

			<div id="chat">

				<p>Due to the shiny raid den exploit, shiny hunting has been extremely easy in this game. So I figured that instead of overwhelming my <a href="/trainer/shiny">shiny page</a> with all the shinies I've obtained, I'll just make an entire subsection to them instead.</p>

				<p>Below are shinies I've established mostly for competitive (Battle Tower Singles more than anything else) and rare shinies in rare pok&eacute;balls. I have both hosted many shiny dens myself, but as of 2022 only have interest in raiding (aka hoarding.) </p>

				<p class="mobilenote"><small>This page does not look fantastic responsively, but it still works.</small></p>

			</div>

		</div>

		<div id="content">

			<div id="comp">

				<div class="pkmn">
					<img src="comp/bisharp.gif" alt="bisharp">
					<table width="100%" class="mon"><tr><td><b>Bisharp&#9792;</b></td> <td>Saffron <img src="../../balls/beast.png" alt="beast ball"></td></tr>
					<tr><td><b>Shiny</b></td> <td>&squ;</td></tr>
					<tr><td><b>Ability</b></td> <td>Defiant</td></tr>
					<tr><td><b>Nature</b></td> <td>Lax</td></tr>
					<tr><td><b>Stats</b></td> <td>5IVs (-SpA)</td></tr>
					<tr><td><b>Obtained</b></td> <td>Hosted den</td></tr>
					</table>
				</div>

				<div class="pkmn">
					<img src="comp/aegislash.gif" alt="aegislash">
					<table width="100%" class="mon"><tr><td><b>Aegislash&#9794;</b></td> <td>Noodle <img src="../../balls/heavy.png" alt="heavy ball"></td></tr>
					<tr><td><b>Shiny</b></td> <td>&squ;</td></tr>
					<tr><td><b>Ability</b></td> <td>Stance Change</td></tr>
					<tr><td><b>Nature</b></td> <td>Jolly</td></tr>
					<tr><td><b>Stats</b></td> <td>4IVs (-Atk, -SpA)</td></tr>
					<tr><td><b>Obtained</b></td> <td>Hosted den</td></tr>
					</table>
				</div>

				<div class="pkmn">
					<img src="comp/toxapex.gif" alt="toxapex">
					<table width="100%" class="mon"><tr><td><b>Toxapex&#9794;</b></td> <td>Morganite <img src="../../balls/dream.png" alt="dream ball"></td></tr>
					<tr><td><b>Shiny</b></td> <td>&squ;</td></tr>
					<tr><td><b>Ability</b></td> <td>Regenerator</td></tr>
					<tr><td><b>Nature</b></td> <td>Hasty</td></tr>
					<tr><td><b>Stats</b></td> <td>5IVs (-Atk)</td></tr>
					<tr><td><b>Obtained</b></td> <td>Hosted den</td></tr>
					</table>
				</div>
				
			</div>

			<div id="apri">
				
				<div class="pkmn">
					<img src="apri/dhelmise.gif" alt="dhelmise">
					<table width="100%" class="mon"><tr><td><b>Dhelmise</b></td> <td>Cherry <img src="../../balls/love.png" alt="love ball"></td></tr>
					<tr><td><b>Shiny</b></td> <td>&#9734;</td></tr>
					<tr><td><b>Ability</b></td> <td>Steelworker</td></tr>
					<tr><td><b>Nature</b></td> <td>Lax</td></tr>
					<tr><td><b>Stats</b></td> <td>6IVs</td></tr>
					<tr><td><b>Obtained</b></td> <td>Raided den</td></tr>
					</table>
				</div>

				<div class="pkmn">
					<img src="apri/vikavolt.gif" alt="vikavolt">
					<table width="100%" class="mon"><tr><td><b>Vikavolt&#9794;</b></td> <td>Bappy <img src="../../balls/friend.png" alt="friend ball"></td></tr>
					<tr><td><b>Shiny</b></td> <td>&#9734;</td></tr>
					<tr><td><b>Ability</b></td> <td>Levitate</td></tr>
					<tr><td><b>Nature</b></td> <td>Bashful</td></tr>
					<tr><td><b>Stats</b></td> <td>1IV</td></tr>
					<tr><td><b>Obtained</b></td> <td>Hosted den</td></tr>
					</table>
				</div>

				<div class="pkmn">
					<img src="apri/flygon.gif" alt="flygon">
					<table width="100%" class="mon"><tr><td><b>Flygon&#9792;</b></td> <td>Lesbian <img src="../../balls/moon.png" alt="moon ball"></td></tr>
					<tr><td><b>Shiny</b></td> <td>&#9734;</td></tr>
					<tr><td><b>Ability</b></td> <td>Levitate</td></tr>
					<tr><td><b>Nature</b></td> <td>Rash</td></tr>
					<tr><td><b>Stats</b></td> <td>3IVs</td></tr>
					<tr><td><b>Obtained</b></td> <td>(First!) hosted den</td></tr>
					</table>
				</div>

				<div class="pkmn">
					<img src="apri/meowstic-f.gif" alt="meowstic female">
					<table width="100%" class="mon"><tr><td><b>Meowstic&#9792;</b></td> <td>Marmalade <img src="../../balls/fast.png" alt="fast ball"></td></tr>
					<tr><td><b>Shiny</b></td> <td>&#9734;</td></tr>
					<tr><td><b>Ability</b></td> <td>Keen Eye</td></tr>
					<tr><td><b>Nature</b></td> <td>Relaxed</td></tr>
					<tr><td><b>Stats</b></td> <td>4IVs</td></tr>
					<tr><td><b>Obtained</b></td> <td>Raided den</td></tr>
					</table>
				</div>

				<div class="pkmn">
					<img src="apri/milotic.gif" alt="milotic">
					<table width="100%" class="mon"><tr><td><b>Milotic&#9792;</b></td> <td>Ballet <img src="../../balls/lure.png" alt="lure ball"></td></tr>
					<tr><td><b>Shiny</b></td> <td>&#9734;</td></tr>
					<tr><td><b>Ability</b></td> <td>Marvel Scale</td></tr>
					<tr><td><b>Nature</b></td> <td>Calm</td></tr>
					<tr><td><b>Stats</b></td> <td>4IVs</td></tr>
					<tr><td><b>Obtained</b></td> <td>Raided den</td></tr>
					</table>
				</div>

				<div class="pkmn">
					<img src="apri/rapidash-galar.gif" alt="galarian rapidash">
					<table width="100%" class="mon"><tr><td><b>Rapidash&#9792;</b></td> <td>Starlight <img src="../../balls/moon.png" alt="moon ball"></td></tr>
					<tr><td><b>Shiny</b></td> <td>&squ;</td></tr>
					<tr><td><b>Ability</b></td> <td>Pastel Veil</td></tr>
					<tr><td><b>Nature</b></td> <td>Quiet</td></tr>
					<tr><td><b>Stats</b></td> <td>6IVs</td></tr>
					<tr><td><b>Obtained</b></td> <td>Hosted den</td></tr>
					</table>
				</div>

				<div style="clear: both;"></div>

				<div class="pkmn">
					<img src="apri/tsareena.gif" alt="tsareena">
					<table width="100%" class="mon"><tr><td><b>Tsareena&#9792;</b></td> <td>Empress <img src="../../balls/friend.png" alt="friend ball"></td></tr>
					<tr><td><b>Shiny</b></td> <td>&#9734;</td></tr>
					<tr><td><b>Ability</b></td> <td>Sweet Veil</td></tr>
					<tr><td><b>Nature</b></td> <td>Rash</td></tr>
					<tr><td><b>Stats</b></td> <td>5IVs</td></tr>
					<tr><td><b>Obtained</b></td> <td>Hosted den, 1 fucking skip</td></tr>
					</table>
				</div>

				<div class="pkmn">
					<img src="apri/eiscue.gif" alt="eiscue">
					<table width="100%" class="mon"><tr><td><b>Eiscue&#9794;</b></td> <td>Mel <img src="../../balls/dream.png" alt="dream ball"></td></tr>
					<tr><td><b>Shiny</b></td> <td>&#9734;</td></tr>
					<tr><td><b>Ability</b></td> <td>Ice Face</td></tr>
					<tr><td><b>Nature</b></td> <td>Bold</td></tr>
					<tr><td><b>Stats</b></td> <td>4IVs</td></tr>
					<tr><td><b>Obtained</b></td> <td>Hosted den</td></tr>
					</table>
				</div>

				<div class="pkmn">
					<img src="apri/morpeko.gif" class="boy" alt="morpeko">
					<table width="100%" class="mon"><tr><td><b>Morpeko&#9794;</b></td> <td>Jojo <img src="../../balls/level.png" alt="level ball"></td></tr>
					<tr><td><b>Shiny</b></td> <td>&#9734;</td></tr>
					<tr><td><b>Ability</b></td> <td>Hunger Switch</td></tr>
					<tr><td><b>Nature</b></td> <td>Relxased</td></tr>
					<tr><td><b>Stats</b></td> <td>5IVs</td></tr>
					<tr><td><b>Obtained</b></td> <td>Hosted den</td></tr>
					</table>
				</div>

			</div>

		</div>

		<div id="footer">

			<a href="/../trainer/shield">&#10023; Back to Shield &#10023;</a>

		</div>


</div>
</div>
</body>
</html>


