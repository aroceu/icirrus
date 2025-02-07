<html lang="en">
<head>
      <meta name="description" content="yeah i'm a pokemon master suck it">
      <meta name="viewport" content="initial-scale=1.0" />
              <meta name="robots" content="noai, noimageai">

<title>GYM / PKMN</title>

<meta name="viewport" content="initial-scale=1.0">

<link rel="shortcut icon" type="image/x-icon" href="mball.ico" />
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
    margin-top: 7em;
        padding-top: 25em;
    background: #385830 url('bg.png') no-repeat center center;
    background-size: contain;
  }

  #bag{
    position: absolute;
    background: url('bag.png') no-repeat center center;
    background-size: cover;
    height: 150px;
   top: 8em;
  left: 42%;
    width: 259px;
  }

  .ball{
        position: absolute;
  }

  .ball img{
    height: 60px;
    width: 60px;
  }

  .one{
    top: 6em;
  left: -3em;
  }

  .two{
    top: 10em;
  left: 4.5em;
  }

  .three{
    top: 6em;
  right: -1.5em;
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
  border: 3px double #006088;
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
          border-radius:150px;
          height: 150px;
          width: 150px;
          margin-left: 1.7em;
          margin-bottom: -7.8em;
          margin-top: -2em;
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

</style>

</head>

<body>

  <div id="grass">

  <div id="bag">

     <input type="radio" id="pokego" name="pokeball" class="radiobutton">
    <label for="pokego" class="ball one"><img src="ball.png"></label>
    <div class="content">

        <div class="preview">
          <a href="https://icirr.us/gym/pkmn/go"><img src="valor.png"></a>
        </div>

        <div class="box pokego">
        <a href="https://icirr.us/gym/pkmn/go">POK&eacute;MON GO</a> - My pok&eacute;go log. Warning for long image loading.
        </div>
    </div>

    <input type="radio" id="tcgp" name="pokeball" class="radiobutton two">
    <label for="tcgp" class="ball two"><img src="ball.png"></label>
    <div class="content">

      <div class="preview">
          <a href="https://icirr.us/gym/pkmn/tcgp"><img src="tcgp.png"></a>
        </div>

        <div class="box tcgp">
        <a href="https://icirr.us/gym/pkmn/tcgp">TCGP</a> - My (pocket) trading card collection. Rare cards only.
        </div>
    </div>


    <input type="radio" id="other" name="pokeball" class="radiobutton three">
    <label for="other" class="ball three"><img src="ball.png"></label>
    <div class="content">

      <div class="preview nobg">
      </div>

        <div class="box other">
        ???
        </div>
    </div>

</div>

</body>

</html>