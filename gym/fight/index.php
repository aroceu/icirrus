<!doctype html lang="en">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<script type="text/javascript" src="../../animatedcollapse.js">
/***********************************************
* Animated Collapsible DIV v2.4- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Please keep this notice intact
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/
</script>
<script type="text/javascript">

$(document).ready(function(){
animatedcollapse.addDiv('info', 'hide=1,fade=1, group=pkmn')
animatedcollapse.addDiv('add', 'hide=1,fade=1, group=pkmn')
animatedcollapse.addDiv('trainer', 'hide=1, fade=1, group=pkmn')
animatedcollapse.addDiv('about', 'hide=1, fade=1, group=pkmn')
animatedcollapse.addDiv('linkback', 'hide=1, fade=1, group=pkmn')
animatedcollapse.addDiv('more', 'hide=1, fade=1, group=pkmn')
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


<head>
<meta name="description" content="yeah i'm a pokemon master suck it">
<meta name="viewport" content="initial-scale=1.0" />
<meta name="robots" content="noai, noimageai">

<title>GYM / FIGHT</title>
<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700&display=swap" rel="stylesheet">

<link rel="shortcut icon" type="image/x-icon" href="../../mball.ico" />

<style type="text/css">

body{
	margin: 0;
	background: #80868e;
}

#top{
	background: ;
	height: 100%;
	width: 100%;
}

.box{
	background: #fff;
	padding: 2em 2em 2em;
	box-shadow: 0.5em 0.5em 0em #555;
	margin: 5em auto;
	width: 35em;
	text-align: center;
}

.pkmn img{
	opacity: 0.5;
}

.pkmn img:hover, .pkmn img:focus, .pkmn img:active{
	opacity: 1;
}

.pkmn{
}

#info, #add, #trainer, #pokego, #about, #linkback, #footer, #more{
	font: normal 95%/160% 'Inconsolata', monospace, monospace;
	color: #444;
}

a:link, a:visited{
	color: #555;
}

a:hover, a:active, a:focus{
	text-decoration: none;
}

b{ color: #555; text-transform: uppercase;}

#info, #about, #trainer, #more{
	text-align: left;
}

blockquote{
	background: #eaeaea;
	padding: 1em;
	box-shadow: 0.2em 0.2em 0em #80868e;
	color: #555;
	text-shadow: 0.05em 0.05em 0 #fff;
	font-size: 110%;
}

img.amaura{
	vertical-align: bottom;
    margin: 0 -10px;
}

#pokego h1{
	color: #f50302;
	text-align: left;
	text-transform: uppercase;
	text-shadow: 0.05em 0.05em 0 #aaa;
	font-style: italic;
}

#pokego img{
	width: 25%;
}

#footer{
	text-align: center;
margin-top: 5em;
margin-bottom: 0em;
text-transform: uppercase;
color: #fff;
}

#footer a:link, #footer a:visited{
	color: #fff;
}

.tooltip {
    position: relative;
    display: inline-block;
}

.tooltip .tooltiptext {
    visibility: hidden;
    background-color: #80868e;
    color: #fff;
    text-align: left;
    padding: 5px;
    box-shadow: 0.2em 0.2em 0 #555;
    position: absolute;
    z-index: 1;
    bottom: 100%;
    right: 15%;
    margin-left: -60px;
    font: normal 70% 'Inconsolata', monospace;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}

p.error, p.success {
			font-weight: bold;
			padding: 10px;
			border: 1px solid;
		}
		p.error {
			background: #ffc0c0;
			color: #900;
		}
		p.success {
			background: #b3ff69;
			color: #4fa000;
		}
		
form{
    margin: 0 auto;
    width: 90%;
    text-align: left;
}

form label{
    color: #83B1C9;
    text-transform: uppercase;
    	text-shadow: 0.05em 0.05em 0 #eaeaea;
    	vertical-align: top;
    	width: 25%;
    	float: left;
    	margin-left: 5%;
    
}

input, textarea{
    display: block;
    width: 70%;
        padding: 7px;
    font: normal 100% 'Inconsolata', monospace;
    border: 1px solid #83B1C9;
    box-shadow: 0.1em 0.1em 0 #eaeaea;
}

input#submit{
    width: 100%;
    color: #83B1C9;
    text-transform: uppercase;
    	text-shadow: 0.05em 0.05em 0 #eaeaea;
}

#mobileparty{
	display: none;
	margin: 0 auto;
	text-align: center;
}

img.corviknight{
	vertical-align: -2em;
  margin-left: -1em;
}

ul{
	list-style-type: circle;
	list-style-image: url('https://icirr.us/mb.png');
}

  @media only screen and (max-width: 768px) and (min-width: 0px) {

html {
-webkit-text-size-adjust: none;
}

#footer {
  margin-top: 3em;
}

#party{
	display: none;
}

.box {
  margin: 3em auto;
  width: 80%;
}

#mobileparty{
	display: block;
	font: normal 95%/160% 'Inconsolata', monospace, monospace;
	text-align: left;
}

#mobileparty #footer, #mobileparty #footer a:link, #mobileparty #footer a:visited{
	color: #555;
	text-shadow: 0.05em 0.05em 0 #fff;
} 

h1{
  color: #80868e;
  text-align: center;
  margin-top: 1.5em;
}

blockquote{
	margin: 2em 0 0;
}
    
}


</style>

</head>

<body>

<div id="footer"><a href="../">Back To Gym</a> :: <a href="/home">Masterball</a></div>


<div id="top">

<div class="box"> <div class="pkmn">

<div id="mobileparty">
	<center><img src="mobileparty.png" style="margin-bottom: -1em" alt="a party of steel pokemon: aegislash (shiny), aggron (shiny), mega mawile (shiny), excadrill (shiny), ferrothorn (shiny), and corviknight (shiny)"></center>

	<h1>welcome to my gym</h1>

	<p><a href="https://github.com/aroceu/icirrus">View this project on Github</a></p>

	<p>Detailed updates are at	<span style='white-space: nowrap;'><a href='https://masterball.dreamwidth.org/profile'><img src='https://www.dreamwidth.org/img/silk/identity/community.png' alt='[community profile] ' width='16' height='16' style='vertical-align: text-bottom; border: 0; padding-right: 1px;' /></a><a href='https://masterball.dreamwidth.org/'><b>masterball</b></a></span></p>

	<h1>contact & add me!</h1>

	<blockquote>3DS FC: 2896-1018-0581 (&#9734;a&#9734;)
    <br />SW: 3799-3686-0675 (ARROW.ink)</blockquote>
    
        <p>If you'd like to get in touch for whatever reason, feel free to <a href="https://icirr.us/guestbook">sign my guestbook</a> or email me at <b>icirruscity@pm.me</b>. </p>

    <h1>trainer info</h1>

    <blockquote><center>30s, Chinese-American, she/her/any<br />
    	<img src="water.png" style="vertical-align: baseline!important; height: 14px!important" alt="Water"><img src="fairy.png" style="vertical-align: baseline!important; height: 14px!important" alt="Fairy"></center></blockquote>

<p><br /> My overall playstyle when playing Pok&eacute;mon is focused on the collecting and completion aspects, as well as my enjoyment of the plots, characters, and general aesthetics. I have very rudimentary knowledge of competitive Pok&eacute;mon, but I do enjoy watching and understanding the more strategic elements of the franchise, including speedruns and Nuzlockes.</p>

<p><img src="clair.png" alt="clair" style="float: left; padding: 10px 10px 0 10px;">Other than that, I'm a casual and enthusiastic player. I like to keep up with news, and have played nearly every mainline series game since Ruby/Sapphire, with the exception of Ultra Sun/Moon, and Scarlet/Violet, both of which I own but have not found the chance to play yet.</p>

<p>I also enjoy the anime quite a bit, having watched nearly every episode from Kanto to Hoenn, with plans to (eventually) catch up. I'm even more enthusiastic about the manga, which I haven't read since 2013 and also need to catch up on.</p>

<p>Even when I'm not playing Pok&eacute;mon, it's still a constant in my life &mdash; from the plushies I own to the YouTube videos I watch. I'm usually thinking about Pok&eacute;mon more often than I'm not in some way, and I'm relentlessly optimistic sometimes even when others like to be more cynical about the games or new species. I like to pretend I know more than I do; but I also like seeing a Pok&eacute;mon and going, hey, I like that guy! Or watching someone else do the same.</p>

<p>I'm not much of a side game player, but the ones I have played include Pok&eacute;mon Ranger (the game was my brother's), Stadium (borrowed it from the public library when I was in high school), Rumble Blast on 3DS, Snap on the Switch, Unite (my old competitive Splatoon team got me to play it) and the personality test in Pok&eacute;mon Mystery Dungeon. I'm interested in fangames as well &mdash; I've played Pok&eacute;Rogue and I'd like to try out Pok&eacute;mon Fusion. I don't have a lot of experience with TCG, but I did just start playing the mobile game and do my pulls as often as my ADHD allows me to remember to..</p>

<p>My life since 2004 has just been me going "Pokemon!!!!!!" every so often, even now, over 20 years later. And I wouldn't have it any other way.</p>

<h1>site info</h1>

<blockquote><b>Site/Design Launch:</b> February 2017
<br /><b>Last Updated:</b> February 2025</blockquote>
<p><br /><b>Masterball / icirr.us</b> (both are correct) is an ongoing personal project and creative archive. It gets updated when I feel the drive or need to, because my love affair with Pokemon is ongoing. Pokemon is the piece of media that I've loved for the longest time, and I continue to be extremely invested in it with the same &mdash; or even more &mdash; intensity and passion as I did when I was a child. </p>

<p>In the same way, my love for architectural design comes through my interest in coding and websites. In particular, I've always been enamored by websites that feel like more an experience than a webpage, created with style and intent so intrinsically tied to the content that you had no choice but to know it had been turn on purpose. This project is my attempt to emulate that, these things I love creatively, for myself and through this franchise I also love without abandon. </p>

<p>If you've made it this far, thanks for visiting! I love sharing this passion project with others, especially in the hopes of them making websites for themselves as well. </p>

<p>See <a href="https://icirr.us/docs">documentation</a> for more information on the process and history of making this site.</p>

<p><small>Pok&eacute;mon &copy; GameFreak, Nintendo, & the Pok&eacute;mon Company. No copyright infringement intended.</small></p>

<p align="center"><img src="pkmntrainer.gif"></p>

<h1>linkback buttons</h1>
<center>
<p><img src="linkback/pixel20040.png" alt="200x40 button pixel style"></p>
<p><img src="linkback/pastel10050.png" alt="100x40 button pastel style"> <img src="linkback/pastel5050.png" alt="50x50 button pastel style"> <img src="linkback/pastel7550.png" alt="75x50 button pastel style">
<img src="linkback/pix10050.png" alt="100x40 button pixel style"> <img src="linkback/pix7550.png" alt="75x50 button pixel style"> <img src="linkback/pix50501.png" alt="50x50 button pixel style"> <img src="linkback/pix50502.png" alt="50x50 button pixel style without text"></p>
<p><img src="linkback/pastel8831.png" alt="88x31 button pastel style"> <img src="linkback/pix8831.png" alt="88x31 button pixel style"></p>
<p>Buttons for linking and whatnot. Please don't hotlink!</p>
</center>

<div id="footer"><a href="../">Back To Gym</a> :: <a href="/home">Masterball</a></div>

</div>

<div id="party"><a href="javascript:animatedcollapse.toggle('info')" class="tooltip"><img src="aegislash.gif" alt="shiny aegislash (welcome to my gym)"><span class="tooltiptext">welcome to my gym</span></a> <a href="javascript:animatedcollapse.toggle('add')" class="tooltip"><img src="aggron.gif" alt="shiny aggron (contact & add me)"> <span class="tooltiptext">contact & add me!</span></a> <a href="javascript:animatedcollapse.toggle('trainer')" class="tooltip"><img src="mawile-mega.gif" alt="shiny mega mawile (trainer info)"><span class="tooltiptext">trainer info</span></a> <a href="javascript:animatedcollapse.toggle('about')" class="tooltip"><img src="excadrill.gif" alt="shiny excadrill (site info)"><span class="tooltiptext">site info</span></a> <a href="javascript:animatedcollapse.toggle('linkback')" class="tooltip"><img src="ferrothorn.gif" alt="ferrothorn (linkback buttons)"><span class="tooltiptext">linkback/buttons</span></a> <a href="javascript:animatedcollapse.toggle('more')" class="tooltip"><img src="corviknight.gif" alt="corviknight (you might be looking for...)" class="corvi"><span class="tooltiptext">you might be looking for...</span></a></div>

<div id="info">
	<p align="center"><a href="https://github.com/aroceu/icirrus">View this project on Github</a></p>


<p align="center">Detailed updates are at	<span style='white-space: nowrap;'><a href='https://masterball.dreamwidth.org/profile'><img src='https://www.dreamwidth.org/img/silk/identity/community.png' alt='[community profile] ' width='16' height='16' style='vertical-align: text-bottom; border: 0; padding-right: 1px;' /></a><a href='https://masterball.dreamwidth.org/'><b>masterball</b></a></span></p>

</div>
</div>

<div id="add">
    
    
    <blockquote>3DS FC: 2896-1018-0581 (&#9734;a&#9734;)
    <br />SW: 3799-3686-0675 (ARROW.ink)</blockquote>
    
    <p>If you'd like to get in touch for whatever reason, feel free to <a href="https://icirr.us/guestbook">sign my guestbook</a> or email me at <b>icirruscity@pm.me</b>. </p>

</div>


<div id="trainer">
    
    <blockquote><center>30s, Chinese-American, she/her/any<br />
    	<img src="water.png" style="vertical-align: baseline!important; height: 14px!important" alt="Water"><img src="fairy.png" style="vertical-align: baseline!important; height: 14px!important" alt="Fairy"></center></blockquote>

<p><br /> My overall playstyle when playing Pok&eacute;mon is focused on the collecting and completion aspects, as well as my enjoyment of the plots, characters, and general aesthetics. I have very rudimentary knowledge of competitive Pok&eacute;mon, but I do enjoy watching and understanding the more strategic elements of the franchise, including speedruns and Nuzlockes.</p>

<p><img src="clair.png" alt="clair" style="float: left; padding: 10px 10px 0 10px;">Other than that, I'm a casual and enthusiastic player. I like to keep up with news, and have played nearly every mainline series game since Ruby/Sapphire, with the exception of Ultra Sun/Moon, and Scarlet/Violet, both of which I own but have not found the chance to play yet.</p>

<p>I also enjoy the anime quite a bit, having watched nearly every episode from Kanto to Hoenn, with plans to (eventually) catch up. I'm even more enthusiastic about the manga, which I haven't read since 2013 and also need to catch up on.</p>

<p>Even when I'm not playing Pok&eacute;mon, it's still a constant in my life &mdash; from the plushies I own to the YouTube videos I watch. I'm usually thinking about Pok&eacute;mon more often than I'm not in some way, and I'm relentlessly optimistic sometimes even when others like to be more cynical about the games or new species. I like to pretend I know more than I do; but I also like seeing a Pok&eacute;mon and going, hey, I like that guy! Or watching someone else do the same.</p>

<p>I'm not much of a side game player, but the ones I have played include Pok&eacute;mon Ranger (the game was my brother's), Stadium (borrowed it from the public library when I was in high school), Rumble Blast on 3DS, Snap on the Switch, Unite (my old competitive Splatoon team got me to play it) and the personality test in Pok&eacute;mon Mystery Dungeon. I'm interested in fangames as well &mdash; I've played Pok&eacute;Rogue and I'd like to try out Pok&eacute;mon Fusion. I don't have a lot of experience with TCG, but I did just start playing the mobile game and do my pulls as often as my ADHD allows me to remember to..</p>

<p>My life since 2004 has just been me going "Pokemon!!!!!!" every so often, even now 20 years later. And I wouldn't have it any other way.</p>
</div>

<div id="about"><br /><blockquote><b>Site/Design Launch:</b> February 2017
<br /><b>Last Updated:</b> February 2025</blockquote>
<p><br /><b>Masterball / icirr.us</b> (both are correct) is an ongoing personal project and creative archive. It gets updated when I feel the drive or need to, because my love affair with Pokemon is ongoing. Pokemon is the piece of media that I've loved for the longest time, and I continue to be extremely invested in it with the same &mdash; or even more &mdash; intensity and passion as I did when I was a child. </p>

<p>In the same way, my love for architectural design comes through my interest in coding and websites. In particular, I've always been enamored by websites that feel like more an experience than a webpage, created with style and intent so intrinsically tied to the content that you had no choice but to know it had been turn on purpose. This project is my attempt to emulate that, these things I love creatively, for myself and through this franchise I also love without abandon. </p>

<p>If you've made it this far, thanks for visiting! I love sharing this passion project with others, especially in the hopes of them making websites for themselves as well. </p>

<p><small>Pok&eacute;mon &copy; GameFreak, Nintendo, & the Pok&eacute;mon Company. No copyright infringement intended.</small></p>

<p align="center"><img src="pkmntrainer.gif"></p>
</div>

<div id="linkback"><br />
<p><img src="linkback/pixel20040.png" alt="200x40 button pixel style"></p>
<p><img src="linkback/pastel10050.png" alt="100x40 button pastel style"> <img src="linkback/pastel5050.png" alt="50x50 button pastel style"> <img src="linkback/pastel7550.png" alt="75x50 button pastel style">
<img src="linkback/pix10050.png" alt="100x40 button pixel style"> <img src="linkback/pix7550.png" alt="75x50 button pixel style"> <img src="linkback/pix50501.png" alt="50x50 button pixel style"> <img src="linkback/pix50502.png" alt="50x50 button pixel style without text"></p>
<p><img src="linkback/pastel8831.png" alt="88x31 button pastel style"> <img src="linkback/pix8831.png" alt="88x31 button pixel style"></p>
<p>Buttons for linking and whatnot. Please don't hotlink!</p>

</div>

<div id="more"><br />

	<p>You might also be looking for:</p>
	<ul>
		<li><a href="https://icirr.us/map">Site Map</a></li>
		<li><a href="https://icirr.us/guestbook">Guestbook</a></li>
		<li><a href="https://icirr.us/docs">Documentation</a></li>
	</ul>

</div>


</div>


</body>

</html>