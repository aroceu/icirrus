<html lang="en">
<head>
      <meta name="description" content="yeah i'm a pokemon master suck it">
      <meta name="viewport" content="initial-scale=1.0" />
              <meta name="robots" content="noai, noimageai">

<title>MASTERBALL / WILD AREA</title>

<meta name="viewport" content="initial-scale=1.0">

<link rel="shortcut icon" type="image/x-icon" href="../../mball.ico" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
<style type="text/css">

  * {
  box-sizing: border-box;
}

  body{
    background: #385830;
    margin: 0;
padding: 0;
font: normal 120% 'VT323', monospace;
letter-spacing: 1px;
  }

  #grass{
 background: #385830 url('bg.png') no-repeat center center;
 background-size: cover;
height: 500px;
  width: 700px;
  margin: 5em auto 0;
  }

  #bag{
position: relative;
  background: url('bag.png') no-repeat center center;
    background-size: auto;
  background-size: cover;
  height: 150px;
  width: 261px;
  margin: auto;
  top: 35px;
  right: 0;
  bottom: 0;
  left: 5px;
  }

  .ball{
        position: absolute;
  }

  .ball img{
    height: 60px;
    width: 60px;
  }

  .one{
top: 120px;
  left: -60px;
  }

  .two {
top: 180px;
  left: 95px;
  }

  .three{
top: 120px;
  right: -60px;
  }

  .ball:hover{
    transform: rotate(15deg);
  }

  input{
    position: absolute;
  }


  .content {
            order: 1;
            width: 100%;
            margin: 1em 0;
            display: none;
        }

  .radiobutton {
            display: none;
        }

.radiobutton:checked + label + .content {
            display: initial;
        }

        .radiobutton:checked + .content {
            display: initial;
        }

         .box {
            background-color: #fff;
  width: 400px;
  margin: 15em -30%;
  padding: 1em;
  border-radius: 5px;
  border: 8px double #5389a0;
  font-size: 120%;
        }

        .box a:link, .box a:visited{
          color: #cc0055;
          text-decoration: none;
        }

        .box a:hover{
          color: #0075a8;
        }

        .preview{
          background: #fff;
  border-radius: 150px;
  height: 150px;
  width: 150px;
  margin-left: 45px;
  margin-bottom: -150px;
  position: relative;
  top: -40px;
        }

        .nobg{
          background: none;
        }

        .preview img{
          width: 100px;
  position: relative;
  top: 25px;
  left: 25px;
        }

        .radiobutton:checked + label {
 background: url('select.png') no-repeat;
  position: absolute;
  padding-top: 52px;
  margin-top: -52px;
}

#footer{
  text-align: center;
  color: #88D870;
  text-transform: uppercase;
  font-size: 110%;
  margin: 1.5em 0;
}

#footer a:link, #footer a:visited{
  color: #fff;
  text-decoration: none;
}

#footer a:hover, #footer a:focus{
  color:#88D870;
}

  @media only screen and (max-width: 599px) and (min-width: 0px) {

html {
-webkit-text-size-adjust: none;
}

#grass{
height: 350px;
    width: 100vw;
    margin: 5em auto 0;
  }

#bag{
top: -10px;
    height: 135px;
    width: 235px;
  }

  .one {
  top: 120px;
  left: -40px;
}

.two {
  top: 165px;
  left: 90px;
}

.three {
  top: 120px;
  right: -35px;
}

.ball img {
  height: 50px;
  width: 50px;
}

.preview {
  margin-left: 45px;
  margin-bottom: -150px;
  position: relative;
  top: -40px;
}

.box {
  width: auto;
  margin: 300px -10vw;
  padding: 1em;
}

#footer{
  margin: 120px auto 1em;
}

}

</style>

</head>

<body>

  <div id="grass">

  <div id="bag">

     <input type="radio" id="pokego" name="pokeball" class="radiobutton">
    <label for="pokego" class="ball one"><img src="ball.png"></label>
    <div class="content">

        <div class="preview">
          <a href="go"><img src="moltres-galarian.png"></a>
        </div>

        <div class="box pokego">
        <a href="go">POK&eacute;MON GO</a> - My pok&eacute;go log. Warning for long image loading.
        </div>
    </div>

    <input type="radio" id="tcgp" name="pokeball" class="radiobutton two">
    <label for="tcgp" class="ball two"><img src="ball.png"></label>
    <div class="content">

      <div class="preview">
          <a href="tcgp"><img src="jigglypuff.png"></a>
        </div>

        <div class="box tcgp">
        <a href="tcgp">TCGP</a> - My (pocket) trading card collection. Rare cards only.
        </div>
    </div>


    <input type="radio" id="other" name="pokeball" class="radiobutton three">
    <label for="other" class="ball three"><img src="ball.png"></label>
    <div class="content">

      <div class="preview nobg">
      </div>

        <div class="box other">
        This ball appears to be empty. For now...
        </div>
    </div>

</div>

</div>

<div id="footer">

  <a href="https://icirr.us/home">Retreat from the tall grass...</a>
  <br />(go back to home)

</div>

</body>

</html>