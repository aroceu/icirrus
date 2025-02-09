<html>
<head>

<title>MASTERBALL / SECRET BASE</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Silkscreen&family=VT323&display=swap" rel="stylesheet">

<link rel="shortcut icon" type="image/x-icon" href="../mball.ico" />


<style type="text/css">

	*{
		margin: 0;
		padding: 0;
	}

body{
	background: url('bg.png');
	font: normal 100% 'VT323';
}

#base{
	position: absolute;
	top:16px;
	left:16px;
	background: url('base.png');
	height: 448px;
	width: 448px;
	background-size: cover;
}

#bluebrick{
	background: url('bluebrick-1.png');
	background-size: cover;
	height: 66px;
	width: 34px;
	position: relative;
	top: 10px;
	left: 30px;
}

#bluebrick:hover{
	background: url('bluebrick-2.png');
	background-size: cover;
	height: 66px;
	width: 34px;
}

#redbrick{
	background: url('redbrick-1.png');
	background-size: cover;
	height: 66px;
	width: 34px;
	position: relative;
	top: -3px;
	left: 30px;
}

#redbrick:hover{
	background: url('redbrick-2.png');
	background-size: cover;
	height: 66px;
	width: 34px;
}

#poster{
	background: url('poster-1.png');
	background-size: cover;
	height: 34px;
	width: 34px;
	position: relative;
	top: 30px;
	left: 90px;
}

#poster:hover{
	background: url('poster-2.png');
	background-size: cover;
	height: 34px;
	width: 34px;
}

#pc{
	background: url('pc-1.png');
	background-size: cover;
	height: 33px;
	width: 28px;
	position: relative;
	top: 122px;
  left: 130px;
}

#pc:hover{
	background: url('pc-2.png');
	background-size: cover;
	height: 33px;
	width: 28px;
}

#collectibles{
	background: url('collectibles-1.png');
	background-size: cover;
height: 42px;
  width: 32;
  position: relative;
  top: 80px;
  left: 163px;
}

#collectibles:hover{
	background: url('collectibles-2.png');
	background-size: cover;
height: 42px;
  width: 32;
}

#smallplush{
	background: url('smallplush-1.png');
	background-size: cover;
height: 33px;
  width: 30px;
  position: relative;
top: -217px;
  left: 289px;
}

#smallplush:hover{
	background: url('smallplush-2.png');
	background-size: cover;
height: 33px;
  width: 30px;
}

#bigplush{
	background: url('bigplush-1.png');
	background-size: cover;
height: 61px;
  width: 69px;
  position: relative;
top: -224px;
  left: 334px;
}

#bigplush:hover{
	background: url('bigplush-2.png');
	background-size: cover;
height: 61px;
  width: 69px;
}

#container{
	position: relative;
	left: 15%;
	width: 50%;
	margin: 1em auto;
}

#content{
		background: url('box.png') repeat;
		clip-path: polygon(
    0px calc(100% - 14px),
    2px calc(100% - 14px),
    2px calc(100% - 10px),
    4px calc(100% - 10px),
    4px calc(100% - 6px),
    6px calc(100% - 6px),
    6px calc(100% - 4px),
    10px calc(100% - 4px),
    10px calc(100% - 2px),
    14px calc(100% - 2px),
    14px 100%,
    calc(100% - 14px) 100%,
    calc(100% - 14px) calc(100% - 2px),
    calc(100% - 10px) calc(100% - 2px),
    calc(100% - 10px) calc(100% - 4px),
    calc(100% - 6px) calc(100% - 4px),
    calc(100% - 6px) calc(100% - 6px),
    calc(100% - 4px) calc(100% - 6px),
    calc(100% - 4px) calc(100% - 10px),
    calc(100% - 2px) calc(100% - 10px),
    calc(100% - 2px) calc(100% - 14px),
    100% calc(100% - 14px),
    100% 14px,
    calc(100% - 2px) 14px,
    calc(100% - 2px) 10px,
    calc(100% - 4px) 10px,
    calc(100% - 4px) 6px,
    calc(100% - 6px) 6px,
    calc(100% - 6px) 4px,
    calc(100% - 10px) 4px,
    calc(100% - 10px) 2px,
    calc(100% - 14px) 2px,
    calc(100% - 14px) 0px,
    14px 0px,
    14px 2px,
    10px 2px,
    10px 4px,
    6px 4px,
    6px 6px,
    4px 6px,
    4px 10px,
    2px 10px,
    2px 14px,
    0px 14px
  );
		padding-bottom: 1em;
		border: 20px #4f3c2d ridge;
}

h1{
	font: normal 280% 'Silkscreen';
	letter-spacing: 2px;
	text-shadow: 2.5px 2.5px 0 #46894e;
	text-align: center;
padding: 0.5em;
  width: 90%;
  margin: 0 auto;
  border-bottom: 10px solid #4f3c2d;
}

.textnav{
	position: fixed;
	font: normal 150% 'Silkscreen';
	width: 448px;
	bottom: 16px;
	left: 16px;
	text-transform: lowercase;
	letter-spacing: -2px;
}

.textnav ul{
	list-style-type: none;
}

.textnav a:link, .textnav a:visited{
	color: #fff;
	text-decoration: none;
		text-shadow: 0.08em 0.08em 0 #195b39;
}

.textnav a:hover, .textnav a:focus{
	box-shadow: inset 0 -20px 0 0 #e0a8bc;
}

h1 a{
	text-decoration: none;
	color: #fff;
}

h1 a:hover{
	color:  #4f3c2d;
		text-shadow: 2.5px 2.5px 0 #fff;

}

li a img{
	height: 16px;
}

</style>

</head>

<body>

	<div id="base">

		<a href="inventory/posters" target="mainframe"><div id="poster"></div></a>
		<a href="inventory/clothes" target="mainframe"><div id="bluebrick"></div></a>
		<a href="inventory/accessories" target="mainframe"><div id="redbrick"></div></a>
		<a href="about" target="mainframe"><div id="pc"></div></a>
		<a href="inventory/collectibles" target="mainframe"><div id="collectibles"></div></a>
		<a href="inventory/plushies/small" target="mainframe"><div id="smallplush"></div></a>
		<a href="inventory/plushies/big" target="mainframe"><div id="bigplush"></div></a>


	</div>

	<div class="textnav">
			<ul>
				<li><a href="inventory/plushies/small" target="mainframe">Small Plushies</a></li>
				<li><a href="inventory/plushies/big" target="mainframe">Big Plushies</a>
				<li><a href="inventory/posters" target="mainframe">Posters</a></li>
				<li><a href="inventory/collectibles" target="mainframe">Collectibles</a></li>
				<li><a href="inventory/accessories" target="mainframe">Accessories</a></li>
				<li><a href="inventory/clothes" target="mainframe">Clothes</a></li>
				<li><a href="about" target="mainframe">About</a></li>
				<li><a href="/home"><img src="masterball.gif"> Exit</a></li>
			</li>
		</ul>

	</div>

	<div id="container">
		<div id="content">
		<h1><a href="main.php" target="mainframe">my secret base</a></h1>

		<iframe src="main.php" name="mainframe" height="700px" width="98%" title="IFrame" style="border: none; padding: 0 1%;">

		


	</div>
	</div>

</body>


</html>