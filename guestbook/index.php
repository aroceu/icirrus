<!-- 

LICENSE FOR POKETCH DESIGN:

Copyright (c) 2024 by NZSloh (https://codepen.io/NZSloh/pen/bGLQGGe)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

-->

<html lang="en">
<head>
      <meta name="description" content="yeah i'm a pokemon master suck it">
      <meta name="viewport" content="initial-scale=1.0" />
              <meta name="robots" content="noai, noimageai">

<title>MASTERBALL / GUESTBOOK</title>
<meta name="viewport" content="initial-scale=1.0">

<link rel="shortcut icon" type="image/x-icon" href="mball.ico" />

<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

<style type="text/css">
body {
        height: 100vh;
        margin: 0;
        display: grid;
        place-items: center;
        background-color: #f05860;
        overflow: hidden;
}
#semicircle {
        position: absolute;
        height: 95%;
        width: 110%;
        border-radius: 0 15% 15% 0;
        background-color: #e0e0e0;
}
#breakline {
        position: absolute;
        right: 2%;
        top: 49%;
        height: 2%;
        width: 95%;
        background-color: #080808;
        z-index: 3;
}
#redsemi1 {
        position: absolute;
        right: 5%;
        top: 2.5%;
        height: 95%;
        width: 90%;
        border-radius: 0 500px 500px 0;
        background-color: #f84048;
        z-index: 2;
        box-shadow: inset 0rem 2rem 0.5rem #f85868,
                inset 0.25rem -0.5rem 0.25rem #c83048;
        border: solid 0px #c83048;
}
#btn-semi {
        position: absolute;
        right: -1.5%;
        top: 15%;
        height: 70%;
        width: 15%;
        border-radius: 0 500px 500px 0;
        background-color: #080808;
        z-index: 2;
}

#screen {
        position: absolute;
        left: 10%;
        top: 5%;
        height: 90%;
        width: 70%;
        background-color: #70b070;
        z-index: 2;
        scrollbar-color: #385030;
}
#square {
        position: absolute;
        left: 9.5%;
        top: 4%;
        height: 92%;
        width: 71%;
        background-color: #202020;
        z-index: 2;
}
#stripe {
        position: absolute;
        left: 20%;
        height: 100%;
        width: 50%;
        background-color: #202020;
        z-index: 1;
}
#output-box {
        position: absolute;
        left: 1%;
        top: 3%;
        height: 15%;
        width: 98%;
        background-color: #202020;
        z-index: 3;
}
#output {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-end;
        align-content: center;
        position: absolute;
        left: 2%;
        top: 5%;
        height: 90%;
        width: 96%;
        background-color: #70b070;
        z-index: 3;
}
.previous-operand {
        color: #102818;
        font-family: "LED Digital 7", sans-serif;
        font-size: calc(0.6vw + 0.6vh + 0.25vmin);
}
.current-operand {
        color: #102818;
        font-family: "LED Digital 7", sans-serif;
        font-size: calc(0.6vw + 6vh + 0.25vmin);
}
.button {
        text-indent: 100000000px;
        white-space: nowrap;
        overflow: hidden;
        background-color: #70b070;
        height: 18%;
        width: 14%;
        z-index: 3;
        border: solid #202020 5px;
        box-shadow: inset -0em -0.75em #508050;
}
.lg-button {
        text-indent: 100000000px;
        white-space: nowrap;
        overflow: hidden;
        background-color: #70b070;
        height: 18%;
        width: 29%;
        z-index: 3;
        border: solid #202020 5px;
        box-shadow: inset -0em -0.75em #508050;
}

.button:active {
        transform: translate(0, 13%);
        height: 16%;
        box-shadow: none;
}
.lg-button:active {
        transform: translate(0, 13%);
        height: 16%;
        box-shadow: none;
}

.equal {
        position: absolute;
        left: 57%;
        top: 80%;
}

.decimal {
        position: absolute;
        left: 42%;
        top: 80%;
}

.zero {
        position: absolute;
        left: 12%;
        top: 80%;
}

.divide {
        position: absolute;
        left: 72%;
        top: 60.5%;
}
.x {
        position: absolute;
        left: 57%;
        top: 60.5%;
}

.three {
        position: absolute;
        left: 42%;
        top: 60.5%;
}

.two {
        position: absolute;
        left: 27%;
        top: 60.5%;
}

.one {
        position: absolute;
        left: 12%;
        top: 60.5%;
}

.minus {
        position: absolute;
        left: 72%;
        top: 41%;
}

.plus {
        position: absolute;
        left: 57%;
        top: 41%;
}

.four {
        position: absolute;
        left: 12%;
        top: 41%;
}

.five {
        position: absolute;
        left: 27%;
        top: 41%;
}

.six {
        position: absolute;
        left: 42%;
        top: 41%;
}

.clear {
        position: absolute;
        left: 57%;
        top: 21.5%;
}

.nine {
        position: absolute;
        left: 42%;
        top: 21.5%;
}

.eight {
        position: absolute;
        left: 27%;
        top: 21.5%;
}

.seven {
        position: absolute;
        left: 12%;
        top: 21.5%;
}

#equal {
        background-color: #385030;
        position: absolute;
        top: 30%;
        left: 15%;
        width: 0.5rem;
        height: 0.5rem;
        box-shadow: 0.5rem 0 #385030, 1rem 0 #385030, 1.5rem 0 #385030,
                0rem 1rem #385030, 0.5rem 1rem #385030, 1rem 1rem #385030, 1.5rem 1rem #385030;
}
#decimal {
        background-color: #385030;
        position: absolute;
        top: 60%;
        left: 30%;
        width: 0.5rem;
        height: 0.5rem;
}
#zero {
        background-color: #385030;
        position: absolute;
        top: 20%;
        left: 15%;
        width: 0.5rem;
        height: 0.5rem;
        box-shadow: 0.5rem 0 #385030, 1rem 0 #385030, 1.5rem 0 #385030,
                0rem 0.5rem #385030, 0rem 1rem #385030, 0rem 1.5rem #385030, 0rem 2rem #385030,
                0.5rem 2rem #385030, 1rem 2rem #385030, 1.5rem 2rem #385030,
                1.5rem 1.5rem #385030, 1.5rem 1rem #385030, 1.5rem 0.5rem #385030;
}

#minus {
        background-color: #385030;
        position: absolute;
        top: 42%;
        left: 33.5%;
        width: 0.5rem;
        height: 0.5rem;
        box-shadow: 0.5rem 0 #385030, 1rem 0 #385030, 1.5rem 0 #385030;
}
#plus {
        background-color: #385030;
        position: absolute;
        top: 42%;
        left: 33.5%;
        width: 0.5rem;
        height: 0.5rem;
        box-shadow: 0.5rem 0 #385030, 1rem 0 #385030, 1.5rem 0 #385030,
                0.75rem -0.75rem #385030, 0.75rem -0.25rem #385030, 0.75rem 0.25rem #385030,
                0.75rem 0.75rem #385030;
}

#divide {
        background-color: #385030;
        position: absolute;
        top: 42%;
        left: 33.5%;
        width: 0.5rem;
        height: 0.5rem;
        box-shadow: 0.5rem 0 #385030, 1rem 0 #385030, 1.5rem 0 #385030,
                0.75rem -0.75rem #385030, 0.75rem 0.75rem #385030;
}

#multiply {
        background-color: #70b070;
        position: absolute;
        top: 40%;
        left: 25%;
        width: 0.5rem;
        height: 0.5rem;
        box-shadow: 1rem 0 #385030, 1.5rem 0 #385030, 1rem 0.5rem #385030,
                1.5rem 0.5rem #385030, 0.75rem -0.25rem #385030, 0.5rem -0.5rem #385030,
                1.75rem -0.25rem #385030, 2rem -0.5rem #385030, 0.75rem 0.75rem #385030,
                0.5rem 1rem #385030, 1.75rem 0.75rem #385030, 2rem 1rem #385030;
}

#clear {
        background-color: #385030;
        position: absolute;
        top: 20%;
        left: 15%;
        width: 0.5rem;
        height: 0.5rem;
        box-shadow: 0.5rem 0 #385030, 1rem 0 #385030, 1.5rem 0 #385030,
                0rem 0.5rem #385030, 0rem 1rem #385030, 0rem 1.5rem #385030, 0rem 2rem #385030,
                0.5rem 2rem #385030, 1rem 2rem #385030, 1.5rem 2rem #385030,
                1.5rem 1.5rem #385030, 1.5rem 0.5rem #385030;
}

#nine {
        background-color: #385030;
        position: absolute;
        top: 20%;
        left: 35%;
        width: 0.5rem;
        height: 0.5rem;
        box-shadow: 0.5rem 0 #385030, 1rem 0 #385030, 1.5rem 0 #385030,
                0rem 0.5rem #385030, 0rem 1rem #385030, 1.5rem 2rem #385030,
                1.5rem 1.5rem #385030, 1.5rem 1rem #385030, 1.5rem 0.5rem #385030,
                1rem 1rem #385030, 0.5rem 1rem #385030;
}

#eight {
        background-color: #385030;
        position: absolute;
        top: 20%;
        left: 35%;
        width: 0.5rem;
        height: 0.5rem;
        box-shadow: 0.5rem 0 #385030, 1rem 0 #385030, 1.5rem 0 #385030,
                0rem 0.5rem #385030, 0rem 1rem #385030, 0rem 1.5rem #385030, 0rem 2rem #385030,
                0.5rem 2rem #385030, 1rem 2rem #385030, 1.5rem 2rem #385030,
                1.5rem 1.5rem #385030, 1.5rem 1rem #385030, 1.5rem 0.5rem #385030,
                1rem 1rem #385030, 0.5rem 1rem #385030;
}

#seven {
        background-color: #385030;
        position: absolute;
        top: 20%;
        left: 35%;
        width: 0.5rem;
        height: 0.5rem;
        box-shadow: 0.5rem 0 #385030, 1rem 0 #385030, 1.5rem 0 #385030,
                1.5rem 2rem #385030, 1.5rem 1.5rem #385030, 1.5rem 1rem #385030,
                1.5rem 0.5rem #385030;
}

#six {
        background-color: #385030;
        position: absolute;
        top: 20%;
        left: 35%;
        width: 0.5rem;
        height: 0.5rem;
        box-shadow: 0.5rem 0 #385030, 1rem 0 #385030, 1.5rem 0 #385030,
                0rem 0.5rem #385030, 0rem 1rem #385030, 0rem 1.5rem #385030, 0rem 2rem #385030,
                0.5rem 2rem #385030, 1rem 2rem #385030, 1.5rem 2rem #385030,
                1.5rem 1.5rem #385030, 1.5rem 1rem #385030, 1rem 1rem #385030,
                0.5rem 1rem #385030;
}

#five {
        background-color: #385030;
        position: absolute;
        top: 20%;
        left: 35%;
        width: 0.5rem;
        height: 0.5rem;
        box-shadow: 0.5rem 0 #385030, 1rem 0 #385030, 1.5rem 0 #385030,
                0rem 0.5rem #385030, 0rem 1rem #385030, 0rem 2rem #385030, 0.5rem 2rem #385030,
                1rem 2rem #385030, 1.5rem 2rem #385030, 1.5rem 1.5rem #385030,
                1.5rem 1rem #385030, 1rem 1rem #385030, 0.5rem 1rem #385030;
}

#four {
        background-color: #385030;
        position: absolute;
        top: 20%;
        left: 35%;
        width: 0.5rem;
        height: 0.5rem;
        box-shadow: 1rem 0 #385030, 0rem 0.5rem #385030, 0rem 1rem #385030,
                0rem 1.5rem #385030, 0.5rem 1.5rem #385030, 1rem 2rem #385030,
                1.5rem 1.5rem #385030, 1rem 1.5rem #385030, 1rem 1rem #385030,
                1rem 0.5rem #385030, 1rem 1rem #385030;
}

#three {
        background-color: #385030;
        position: absolute;
        top: 20%;
        left: 35%;
        width: 0.5rem;
        height: 0.5rem;
        box-shadow: 0.5rem 0 #385030, 1rem 0 #385030, 1.5rem 0 #385030,
                0rem 1rem #385030, 0rem 2rem #385030, 0.5rem 2rem #385030, 1rem 2rem #385030,
                1.5rem 2rem #385030, 1.5rem 1.5rem #385030, 1.5rem 1rem #385030,
                1.5rem 0.5rem #385030, 1rem 1rem #385030, 0.5rem 1rem #385030;
}

#two {
        background-color: #385030;
        position: absolute;
        top: 20%;
        left: 35%;
        width: 0.5rem;
        height: 0.5rem;
        box-shadow: 0.5rem 0 #385030, 1rem 0 #385030, 1.5rem 0 #385030,
                0rem 1rem #385030, 0rem 1.5rem #385030, 0rem 2rem #385030, 0.5rem 2rem #385030,
                1rem 2rem #385030, 1.5rem 2rem #385030, 1.5rem 1rem #385030,
                1.5rem 0.5rem #385030, 1rem 1rem #385030, 0.5rem 1rem #385030;
}
#one {
        background-color: #385030;
        position: absolute;
        top: 20%;
        left: 35%;
        width: 0.5rem;
        height: 0.5rem;
        box-shadow: 0.5rem 0 #385030, 0.5rem 0.5rem #385030, 0.5rem 1rem #385030,
                0.5rem 1.5rem #385030, 0rem 2rem #385030, 0.5rem 2rem #385030,
                1rem 2rem #385030;
}

.close{
 margin-left: 5%;
  margin-top: 75%;
  font: normal 100% 'Press Start 2P';
}

a:link .close , a:visited .close {
        color: #000!important;
        text-transform: lowercase;
}

#redsemi1:hover, #redsemi1:active{
        box-shadow: inset 0rem 2rem 0.5rem #c83048, inset 0.25rem -0.5rem 0.25rem #f85868;
}

</style>

<link href="http://fonts.cdnfonts.com/css/led-digital-7" rel="stylesheet">

</head>

<body>
<div id='stripe'></div>
<div id="semicircle">
        <div id="btn-semi">
                <a href="https://icirr.us/home"><div id="redsemi1">
                        <div class="close">Go Home</div>
                </div></a>
                <div id="breakline"></div>
        </div>
        <div id='square'></div>
        <div id='screen'>
                
        <div id="c_widget"></div>
        <script src="comment-widget.js"></script>
</div>

</div>

</body>

</html>