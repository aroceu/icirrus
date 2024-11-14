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



<!doctype html>

<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700&display=swap" rel="stylesheet">


<title>GYM / FIGHT</title>
<link rel="shortcut icon" type="image/x-icon" href="../../mball.ico" />

<style type="text/css">

body{
	margin: 0;
	background: #B0DDE8;
}

#top{
	background: ;
	height: 100%;
	width: 100%;
}

.box{
	background: #fff;
	padding: 2em 2em 2em;
	box-shadow: 0.5em 0.5em 0em #82B1CA;
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

#info, #add, #trainer, #pokego, #about, #linkback, #footer{
	font: normal 95%/160% 'Inconsolata', monospace, monospace;
	color: #444;
}

a:link, a:visited{
	color: #82B1CA;
}

a:hover, a:active, a:focus{
	text-decoration: none;
}

b{ color: #82B1CA; text-transform: uppercase;}

#info, #about, #trainer{
	text-align: left;
}

blockquote{
	background: #e2f3f7;
	padding: 1em;
	box-shadow: 0.2em 0.2em 0em #B0DDE8;
	color: #82B1CA;
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

}

.tooltip {
    position: relative;
    display: inline-block;
}

.tooltip .tooltiptext {
    visibility: hidden;
    background-color: #B0DDE8;
    color: #fff;
    text-align: left;
    padding: 5px;
    box-shadow: 0.2em 0.2em 0 #82B1CA;
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
    	text-shadow: 0.05em 0.05em 0 #e2f3f7;
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
    box-shadow: 0.1em 0.1em 0 #e2f3f7;
}

input#submit{
    width: 100%;
    color: #83B1C9;
    text-transform: uppercase;
    	text-shadow: 0.05em 0.05em 0 #e2f3f7;
}

</style>

</head>

<body>

<div id="footer"><a href="../">Back To Gym</a> :: <a href="/">Masterball</a></div>


<div id="top">

<div class="box"> <div class="pkmn"><a href="javascript:animatedcollapse.toggle('info')" class="tooltip"><img src="bisharp.gif"><span class="tooltiptext">welcome to my gym</span></a> <a href="javascript:animatedcollapse.toggle('add')" class="tooltip"><img src="aegislash.gif"> <span class="tooltiptext">contact & add me!</span></a> <a href="javascript:animatedcollapse.toggle('trainer')" class="tooltip"><img src="aggron.gif"><span class="tooltiptext">trainer info</span></a> <a href="javascript:animatedcollapse.toggle('about')" class="tooltip"><img src="excadrill.gif"><span class="tooltiptext">site info</span></a> <a href="javascript:animatedcollapse.toggle('linkback')" class="tooltip"><img src="tinkaton.png"><span class="tooltiptext">linkback/buttons</span></a> 

<div id="info">
	<p align="center"><a href="https://github.com/aroceu/icirrus">View this project on Github</a></p>


<p align="center">Detailed updates are at	<span style='white-space: nowrap;'><a href='https://masterball.dreamwidth.org/profile'><img src='https://www.dreamwidth.org/img/silk/identity/community.png' alt='[community profile] ' width='16' height='16' style='vertical-align: text-bottom; border: 0; padding-right: 1px;' /></a><a href='https://masterball.dreamwidth.org/'><b>masterball</b></a></span></p>

</div>
</div>

<div id="add"><?php

// OPTIONS - PLEASE CONFIGURE THESE BEFORE USE!

$yourEmail = "leader@icirr.us"; // the email address you wish to receive these mails through
$yourWebsite = "Masterball (icirr.us)"; // the name of your website
$thanksPage = 'http://icirr.us/gym/fight/youwon'; // URL to 'thanks for sending mail' page; leave empty to keep message on the same page 
$maxPoints = 4; // max points a person can hit before it refuses to submit - recommend 4
$requiredFields = "name,email,comments"; // names of the fields you'd like to be required as a minimum, separate each field with a comma

ob_start();

// DO NOT EDIT BELOW HERE
$error_msg = array();
$result = null;

$requiredFields = explode(",", $requiredFields);

function clean($data) {
	$data = trim(stripslashes(strip_tags($data)));
	return $data;
}
function isBot() {
	$bots = array("Indy", "Blaiz", "Java", "libwww-perl", "Python", "OutfoxBot", "User-Agent", "PycURL", "AlphaServer", "T8Abot", "Syntryx", "WinHttp", "WebBandit", "nicebot", "Teoma", "alexa", "froogle", "inktomi", "looksmart", "URL_Spider_SQL", "Firefly", "NationalDirectory", "Ask Jeeves", "TECNOSEEK", "InfoSeek", "WebFindBot", "girafabot", "crawler", "www.galaxy.com", "Googlebot", "Scooter", "Slurp", "appie", "FAST", "WebBug", "Spade", "ZyBorg", "rabaz");

	foreach ($bots as $bot)
		if (stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false)
			return true;

	if (empty($_SERVER['HTTP_USER_AGENT']) || $_SERVER['HTTP_USER_AGENT'] == " ")
		return true;
	
	return false;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isBot() !== false)
		$error_msg[] = "No bots please! UA reported as: ".$_SERVER['HTTP_USER_AGENT'];
		
	// lets check a few things - not enough to trigger an error on their own, but worth assigning a spam score.. 
	// score quickly adds up therefore allowing genuine users with 'accidental' score through but cutting out real spam :)
	$points = (int)0;
	
	$badwords = array("adult", "beastial", "bestial", "blowjob", "clit", "cum", "cunilingus", "cunillingus", "cunnilingus", "cunt", "ejaculate", "fag", "felatio", "fellatio", "fuck", "fuk", "fuks", "gangbang", "gangbanged", "gangbangs", "hotsex", "hardcode", "jism", "jiz", "orgasim", "orgasims", "orgasm", "orgasms", "phonesex", "phuk", "phuq", "pussies", "pussy", "spunk", "xxx", "viagra", "phentermine", "tramadol", "adipex", "advai", "alprazolam", "ambien", "ambian", "amoxicillin", "antivert", "blackjack", "backgammon", "texas", "holdem", "poker", "carisoprodol", "ciara", "ciprofloxacin", "debt", "dating", "porn", "link=", "voyeur", "content-type", "bcc:", "cc:", "document.cookie", "onclick", "onload", "javascript");

	foreach ($badwords as $word)
		if (
			strpos(strtolower($_POST['comments']), $word) !== false || 
			strpos(strtolower($_POST['name']), $word) !== false
		)
			$points += 2;
	
	if (strpos($_POST['comments'], "http://") !== false || strpos($_POST['comments'], "www.") !== false)
		$points += 2;
	if (isset($_POST['nojs']))
		$points += 1;
	if (preg_match("/(<.*>)/i", $_POST['comments']))
		$points += 2;
	if (strlen($_POST['name']) < 3)
		$points += 1;
	if (strlen($_POST['comments']) < 15 || strlen($_POST['comments']) > 1500)
		$points += 2;
	if (preg_match("/[bcdfghjklmnpqrstvwxyz]{7,}/i", $_POST['comments']))
		$points += 1;
	// end score assignments

	if ( !empty( $requiredFields ) ) {
		foreach($requiredFields as $field) {
			trim($_POST[$field]);
			
			if (!isset($_POST[$field]) || empty($_POST[$field]) && array_pop($error_msg) != "Please fill in all the required fields and submit again.\r\n")
				$error_msg[] = "Please fill in all the required fields and submit again.";
		}
	}

	if (!empty($_POST['name']) && !preg_match("/^[a-zA-Z-'\s]*$/", stripslashes($_POST['name'])))
		$error_msg[] = "The name field must not contain special characters.\r\n";
	if (!empty($_POST['email']) && !preg_match('/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+' . '(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i', strtolower($_POST['email'])))
		$error_msg[] = "That is not a valid e-mail address.\r\n";
	if (!empty($_POST['url']) && !preg_match('/^(http|https):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+)(:(\d+))?\/?/i', $_POST['url']))
		$error_msg[] = "Invalid website url.\r\n";
	
	if ($error_msg == NULL && $points <= $maxPoints) {
		$subject = "New message via icirr.us";
		
		foreach ($_POST as $key => $val) {
			if (is_array($val)) {
				foreach ($val as $subval) {
					$message .= ucwords($key) . ": " . clean($subval) . "\r\n";
				}
			} else {
				$message .= ucwords($key) . ": " . clean($val) . "\r\n";
			}
		}
		$message .= "\r\n";
		$message .= 'IP: '.$_SERVER['REMOTE_ADDR']."\r\n";
		$message .= 'Browser: '.$_SERVER['HTTP_USER_AGENT']."\r\n";
		$message .= 'Points: '.$points;

		if (strstr($_SERVER['SERVER_SOFTWARE'], "Win")) {
			$headers   = "From: $yourEmail\r\n";
		} else {
$headers = "From: $yourWebsite\r\n";
		}
		$headers  .= "Reply-To: {$_POST['email']}\r\n";

		if (mail($yourEmail,$subject,$message,$headers)) {
			if (!empty($thanksPage)) {
echo "<script type='text/javascript'> document.location = 'http://icirr.us/gym/fight/youwon'; </script>";
				exit;
			} else {
				$result = 'Your mail was successfully sent.';
				$disable = false;
			}
		} else {
			$error_msg[] = 'Your mail could not be sent this time. ['.$points.']';
		}
	} else {
		if (empty($error_msg))
			$error_msg[] = 'Your mail looks too much like spam, and could not be sent this time. ['.$points.']';
	}
}
function get_data($var) {
	if (isset($_POST[$var]))
		echo htmlspecialchars($_POST[$var]);
}
?>
    
    
    <blockquote>3DS FC: 2896-1018-0581 (&#9734;a&#9734;)
    <br />SW: 3799-3686-0675 (ARROW.ink)</blockquote>
    
    <p>If you'd like to get in touch for whatever reason, hit me up at 
    <br /><b>leader @ icirr.us</b>. </p>
    <p><small>(This is a disposable email and you will get responses from my real email address.)</small></p>


</div>


<div id="trainer">
    
    <blockquote><center>30s, Chinese-American, she/her/any<br /></center></blockquote>

<p><br /> My overall playstyle when playing Pok&eacute;mon is very much focused on the collecting and completion aspect, as well as my enjoyment of the plots, characters, and general aesthetics. I have very, very rudimentary knowledge of competitive Pok&eacute;mon, but I do enjoy watching and understanding the more strategic elements of the franchise, including speedruns and Nuzlockes.</p>

<p><img src="clair.png" style="float: left; padding: 10px 10px 0 10px;">Other than that, I'm a very casual but also very enthusiastic player. I like to keep up with news, and have played nearly every mainline series game since Ruby/Sapphire, with the exception of Ultra Sun/Moon, and Scarlet/Violet, both of which I own but have not found the chance to play yet.</p>

<p>I also enjoy the anime quite a bit, having watched nearly every episode from Kanto to Hoenn, with plans to (eventually) catch up. I'm even more enthusiastic about the manga, which I haven't read since 2013 and also need to catch up on.</p>

<p>I own a lot of Pok&eacute;mon plushies and miscellaneous merch. I own a few things from the (very expensive) <a href="https://originalstitch.com/pokemon">Pokemon Original Stitch collection</a>: a Sceptile button-up, a Jigglypuff bandana, a Seadra bandana, and a Luvdisc face mask. I also have a really big sleeping Jigglypuff <i>and</i> Pikachu plushie that live on my bed.</p>

<p>Here is a numerical order of my favorite Pok&eacute;mon as of November 2024:</p>

<p align="center"><img src="favrank24nov.png" width="500"></p>
</div>

<div id="about"><br /><blockquote><b>Site/Design Launch:</b> February 2017
<br /><b>Last Updated:</b> October 2024</blockquote>
<p><br />I'd been meaning to make some sort of personal Pok&eacute;mon-related site for a while, but I was never into making webshrines or fansites. But then I figured it'd be pretty neat to archive all my pok&eacute;mon teams, since I love all of them and I play a <i>lot</i> of pok&eacute;mon. So this ended up happening.</p>
<p><b>Icirrus</b> is the URL of this website because Icirrus City (in Unova) is my favorite city in all of the Pok&eacute;mon regions &mdash; primarily for its music.</p>
</b>I chose <b>Masterball</b> as the name of this collection as a sort of egotistic title of how long and beyond semi-decent I've been playing Pok&eacute;mon. Also, masterballs are the most powerful item in the entire series (aside from maybe Max Revives, but that can't be made into one word) and I like to think I'm pretty powerful. Also, also, the few times I used Action Replays to hack the game, I got like three hundred masterballs.</p>
<p>Thanks for visiting this self-indulgent website!</p>
<p><small>Pok&eacute;mon &copy; GameFreak, Nintendo, & the Pok&eacute;mon Company. No copyright infringement intended.</small></p>
</div>

<div id="linkback"><br />
<p><img src="linkback/pixel20040.png"></p>
<p><img src="linkback/pastel10050.png"> <img src="linkback/pastel5050.png"> <img src="linkback/pastel7550.png">
<img src="linkback/pix10050.png"> <img src="linkback/pix7550.png"> <img src="linkback/pix50501.png"> <img src="linkback/pix50502.png"></p>
<p><img src="linkback/pastel8831.png"> <img src="linkback/pix8831.png"></p>
<p><small>Buttons for linking and whatnot. Please don't hotlink!</small></p>

</div></div>


</body>

</html>