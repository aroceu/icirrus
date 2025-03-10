<!doctype html lang="en">
<head>
<meta name="description" content="yeah i'm a pokemon master suck it">
<meta name="viewport" content="initial-scale=1.0" />
<meta name="robots" content="noai, noimageai">

<title>MASTERBALL / GUESTBOOK</title>

<link rel="shortcut icon" type="image/x-icon" href="../mb.gif" />

<link href="https://fonts.googleapis.com/css2?family=Clicker+Script&family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

<style type="text/css">

   body{
                background: url('bg4.png') repeat;
                font: normal 100%/160% 'Lato', sans-serif;
                color: #333;
                overflow-x: hidden;
        }

#interviewers{
        background: url('gabbyty.png') no-repeat;
        background-size: cover;
        height: 384px;
        width: 198px;
        position: absolute;
        top: -10px;

}

#container{
        width: 80vw;
        position: absolute;
        top: 15vh;
        left: 20vw;
}

#guestbook{
  width: 70%;
  background: #fff;
  margin-left: 150px;
  min-height: 100vh;
  border: #e8abad double 15px;
  border-radius: 20px;
  padding: 0 0em;
}

h1{
        text-align: center;
        font: normal 350% 'Clicker Script', cursive;
        color: #e8abad;
        font-weight: bold;
        text-transform: lowercase;
}

h1 img{
        vertical-align: text-top;
}

.blurb{
        padding: 0 2em 2em;
}

hr{
        border-top: 5px solid #e8abad;
        border-bottom: none;
        width: 80%;
        margin: 0 auto;
}

code{
        color: #d18e90;
        font-weight: bold!important;
        font: normal 115% monospace;
}

a:link, a:visited{
        color: #d18e90;
        font-weight: bold;
        text-decoration: none;
}

a:hover, a:focus{
        color: #e8bf9d;
}

a.close:link, a.close:visited{
        display: block;
  border: 2px solid #d18e90;
  width: fit-content;
  padding: 0.5em 1em;
  text-align: center;
}

img.smallgabbyty{
        image-rendering: pixelated;
}

  @media only screen and (max-width: 430px) and (min-width: 0px) {

html {
-webkit-text-size-adjust: none;
}

#container {
  width: auto;
  position: static;
}

#interviewers{
        display: none;
}

#guestbook{
        width: auto;
  margin: 0 auto;
}
    
}


</style>

</head>

<body>
<div id="container">

        <div id="interviewers"></div>

        <div id="guestbook">
        <h1>That's the perfect clincher! <img src="gabbyty-small.png" class="smallgabbyty"></h1>

        <div class="blurb"><p>Thanks for visiting my Pok&eacute;mon website :) Here's a guestbook if you'd like to leave a comment, question, or anything else. Private inquiries can be directed to <code>icirruscity@pm.me</code>.</p>

                <p align="center"><a href="/home" class="close">close out of the guestbook</a></p></div>

        <hr />

        <div id="comments">

                <div id="c_widget"></div>
        <script src="comment-widget.js"></script>
</div>

        <hr />

        <p align="center" class="footer"><a href="/home">clear</a> / <a href="/docs">documentation</a> / <a href="/map">sitemap</a></p>

        </div>

        </div>

</div>

</body>

</html>