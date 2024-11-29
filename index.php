<html lang="en">
<head>
      <meta name="description" content="yeah i'm a pokemon master suck it">
              <meta name="robots" content="noai, noimageai">

<title>MASTERBALL</title>
<meta name="viewport" content="initial-scale=1.0">

<link rel="shortcut icon" type="image/x-icon" href="mball.ico" />

<style type="text/css">

		@font-face {
    font-family: Futura;
    src: url('http://kingdra.net/x/futura.ttf') format(futura.ttf);
}

body{
	background: url('bg.png') repeat-x top;
	margin: 0;
}

#left, #right{
	width: 210px;
	height: 800px;
	position: absolute;
	top: 0;
}

#left{
	left: 0;
	background: url('left.png');
	z-index: -1;
}

#right{
	right: 0;
	background: url('right.png');
	z-index: -1;
}

#center{
	background: url('button.png');
	left: 50%;
	top: 474px;
transform: translateX(-50%);
position: absolute;
width: 197px;
height: 202px;
}

#center:hover, #center:focus{
	background: url('button002.png');
}

#header{
	margin: 2.5em auto;
	text-align: center;
	color: #fff;
	font: normal 5em 'Futura', 'Century Gothic', sans-serif;
	letter-spacing: 3px;
	text-transform: uppercase;
}

#navleft{
	position: absolute;
	left: 11.5em;
	top: 537px;
	float: left;
}

#navright{
	position: absolute;
	right: 8.5em;
	top: 537px;
	float: right;
}

#navleft ul, #navright ul{
	-webkit-padding-start: 0!important;
}

#navleft ul li, #navright ul li{
	display: inline;
	list-style-type: none;
	padding-right: 5em;
}

#navleft ul li a:link, #navleft ul li a:visited, #navright ul li a:link, #navright ul li a:visited{
	text-decoration: none;
	color: #fff;
	font: normal 230% 'Futura', 'Century Gothic', sans-serif;
	text-transform: uppercase;
	letter-spacing: 3px;
}

#navleft a:focus, #navleft a:hover, #navleft a:active, #navright a:focus, #navright a:hover, #navright a:active{
	color: #f30000!important;
}

#blurb{
	width: 50vw;
  margin: -5em auto;
  text-align: center;
  font: normal 150% 'Futura';
  color: #fff;
}

#blurb a:link, #blurb a:visited{
	color: #F2B3F4;
	text-decoration: none;
}

#blurb a:hover, #blurb a:focus{
	color: #ff0000;
}

#mobile{
display: none;
}

#m{
	display: none;
}

/* tablets and landscape */

@media only screen and (max-width: 960px) and (min-width: 430px) {

html {
-webkit-text-size-adjust: none;
}

body{
	background: #fff;
	margin: 0;
	background: url('buttbg.png') repeat-x;
}

#mobile{
	margin: 1em auto;
	font: normal 150%/160% 'Futura';
	padding: 3em 0;
	text-align: center;
	display: block;
}

.text{
	width: 90%;
	margin: 0 auto;
	color: #c8413d;
}

#center{
	background: url('button.png');
	left: 50%;
	top: 274px;
	transform: translateX(-50%);
	position: absolute;
	width: 197px;
	height: 202px;
}

#center:hover, #center:focus{
	background: url('button002.png');
}

#header {
  margin: 1em auto;
  text-align: center;
  color: #fff;
  font: normal 3em 'Futura', 'Century Gothic', sans-serif;
}

#blurb{
	margin: -1em auto;
}

#left, #right{
	width: 113px;
	height: 600px;
	position: absolute;
	top: 0;
}

#left{
	left: 0;
	background: url('leftbutt.png');
	z-index: -1;
}

#right{
	right: 0;
	background: url('rightbutt.png');
	z-index: -1;
}

}

/** mobile (basically the same but instead of saying masterball it just has M) **/

  @media only screen and (max-width: 430px) and (min-width: 0px) {

html {
-webkit-text-size-adjust: none;
}

body{
	background: #fff;
	margin: 0;
	background: url('buttbg.png') repeat-x;
}

#mobile{
	margin: 1em auto;
	font: normal 150%/160% 'Futura';
	padding: 3em 0;
	text-align: center;
	display: block;
}

.text{
	width: 90%;
	margin: 0 auto;
	color: #c8413d;
}

#center{
	background: url('button.png');
	left: 50%;
	top: 274px;
	transform: translateX(-50%);
	position: absolute;
	width: 197px;
	height: 202px;
}

#center:hover, #center:focus{
	background: url('button002.png');
}

#header {
  display: none;
}

#blurb{
	margin: -1em auto;
}

#left, #right{
	width: 113px;
	height: 600px;
	position: absolute;
	top: 0;
}

#left{
	left: 0;
	background: url('leftbutt.png');
	z-index: -1;
}

#right{
	right: 0;
	background: url('rightbutt.png');
	z-index: -1;
}

#m{
	display: block;
	margin: 1em auto;
  text-align: center;
  color: #fff;
  font: normal 3.5em 'Futura', 'Century Gothic', sans-serif;
}
    
}



</style>

</head>

<body>

<div id="header">MASTERBALL</div>
<div id="m">M</div>


<div id="left"></div>
<div id="right"></div>
<div id="blurb"><i>open the ball or <a href="home">click here</a> to get started!</i></div>
<a href="home"><div id="center"></div></a>

</body>
</html>