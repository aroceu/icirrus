<?php include('../head.php');?> / FAVORITES</title>

<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200..700&display=swap" rel="stylesheet">


<style type="text/css">
body{
    background: #CCDCEC;
    color: #492C42;
}

.talk{
    color: #492C42;
}

#footer a:link, #footer a:visited{
    color: #492C42;
}

td:first-child{
    vertical-align: middle;
    text-align: center;
    font: bold italic 100% 'Futura', sans-serif;
    text-transform: uppercase;
    /** color: #492C42; **/
    color: #fff;
    background: #6995A0;
    width: 43%;
    text-decoration: none;
}

td:first-child:hover, td:first-child a:hover{
    color: #6995A0;
    background: #CCDCEC;
    cursor: pointer;
}

td{
    text-align: center;
}

#favlist{
    border-bottom: 5px solid #508DC3;
    padding-bottom: 2em;
}

.ships td, .ships td:nth-child(2){
    width: 25%!important;
    vertical-align: bottom!important;
    color: #6995A0;
}

.ships td:first-child a, .ships td:first-child{
    font-style: normal!important;
     font-size: 100%!important;
     text-transform: none;
     background: none;
     color: #6995A0;

}

.ships td:first-child a{
    width: 100%!important;
}

.ships td img{
    vertical-align: middle;
}

td.favtrainer:first-child{
    vertical-align: middle;
}

td:nth-child(2) img{
    height: auto!important;
    width: auto!important;
    width: 56%;
    vertical-align: top;
    padding: 0 0.5%;
}

.ships td:nth-child(2) img{
    vertical-align: middle;
    padding: 0;
    width: 57%;
}

td img.favtrainer{
    height: 50px!important;
}

.tooltip {
    position: relative;
    display: inline-block;
}

.tooltip .tooltiptext {
    display: none;
    background-color: #492C42;
    color: #fff;
    text-align: center;
    padding: 5px;
    box-shadow: 0.2em 0.2em 0 #909EA9;
    position: absolute;
    z-index: 1;
    bottom: -80%;
    right: -75%;
    margin-left: -100px;
    font: normal 70% 'Inconsolata';
    text-transform: none!important;
}

td:first-child .tooltip .tooltiptext{
    right: -400%;
    bottom: -200%;
    background-color: #fff;
    color: #492C42;
}

.ships td:first-child .tooltip .tooltiptext, .ships .tooltip .tooltiptext{
    display: none;
    background-color: #492C42!important;
    color: #fff;
    text-align: center;
    padding: 5px;
    box-shadow: 0.2em 0.2em 0 #909EA9;
    position: absolute;
    z-index: 1;
    bottom: -80%;
    right: 0%;
    margin-left: -100px;
    font: normal 70% 'Inconsolata';
    text-transform: none!important;
}

a.tooltip:hover{
    cursor: pointer;
}

.tooltip:hover .tooltiptext, .ships .tooltip:hover .tooltiptext, .ships td:first-child .tooltip:hover .tooltiptext{
    display: block;
}

h2{
        font: normal 200% 'Futura';
    letter-spacing: 7px;
    text-transform: lowercase;
    margin: 1em 0 0 0.1em;
    padding: 0.5em 0;
    border-top: 5px solid #508DC3;
}

.h2text{
    text-align: center;
    width: 43%;
}

h3{
        font: italic 200% 'Futura';
    letter-spacing: 7px;
    text-transform: lowercase;
    margin: 1em 0 0em 0.1em;
    padding: 0.5em 0;
    border-top: 5px solid #508DC3;
    text-align: center;
    	text-shadow: 0.05em 0.05em 0 #909EA9;

}

table#world td:nth-child(2){
    background: #fff;
    color: #555;
}

table.pokemons img{
    max-height: 30px;
    vertical-align: bottom;
}

#talk a:link, #talk a:visited{
    color: #508DC3;
}

#talk a:hover{
    color: #6995A0;
}

img.numerical{
    width: 500px;
}

@media only screen and (max-width: 768px) and (min-width: 0px) {

    .h2text {
  text-align: center;
  width: auto;
}

img.numerical{
    max-width: 100%;
}

.ships td {
  width: auto;
  display: block;
}

}

</style>

</head>

<body>

<div id="favs">

<div id="top">

<div class="container">

<div id="ava"><img src="clair.png"></div>
<div id="meta"><h1>FAV<i>ORITES</i></h1>
<div class="talk">The Pok&eacute;mon on this page (and their evolutionary stages) do not overlap with any of the species in my game parties unless I prefer a specific evolutionary stage a significant amount more than the others. Generally I like most of these for their aesthetics, or I trained one of them for fun at one point and got attached.
    <br />Any Sceptile evolutionary stages can be assumed to also be in any of the form categories, if applicable.
    <br />Hover over the categories to see unlisted favorites.</p></div></div>
</div></div>

<div id="favlist">

        <h2><div class="h2text">World</div></h2>

            <table align="center" width="100%" id="world">

        <tr><td class="favtrainer">Region</td> <td>Hoenn</td></tr>
        <tr><td class="favtrainer">Story Playthrough</td> <td>Gen 5 (Black/White)</td></tr>
        <tr><td class="favtrainer">Game</td> <td><img src="ships/heart.png">Legends Arceus<img src="ships/heart.png">, Omega Ruby, Emerald, Heart Gold</td></tr>
        <tr><td class="favtrainer">Type</td> <td><img src="Steel.png" style="vertical-align: baseline!important"></td></tr>
        <tr><td class="favtrainer">Team</td> <td><a class="tooltip"><img src="magma.png" style="height:22px!important"><span class="tooltiptext">Team Magma</span></a> <a class="tooltip"><img src="skull.png" style="height:22px!important"><span class="tooltiptext">Team Skull</span></a></td></tr>

    </table>

        <h2><div class="h2text">Humans</div></h2>

            <table align="center" width="100%">
        
        <tr><td class="favtrainer">Trainer</td>
                                <td><a class="tooltip"><img src="humans/yellow.png" class="favtrainer" ><span class="tooltiptext">Yellow, from Pok&eacute;mon Special (Favorite Overall Trainer)</span></a> <a class="tooltip"><img src="humans/gold.png" class="favtrainer tooltip"> <span class="tooltiptext">Gold/Ethan, from Johto (Favorite Male Trainer)</span></a> <a class="tooltip"><img src="humans/white.png" class="favtrainer tooltip"> <span class="tooltiptext">White/Hilda, from Unova (Favorite Female Trainer)</span></a></td></tr>

        <tr><td class="favtrainer"><a class="tooltip">Rival <span class="tooltiptext">Not listed (minor favorites): Brendan/May, Wally, Bianca, Gladion</span></a></td>
                                <td><a class="tooltip"><img src="humans/n.png" class="favtrainer"><span class="tooltiptext">N, from Unova (Favorite Overall Rival)</span></a>
                                    <a class="tooltip"><img src="humans/green.png" class="favtrainer"><span class="tooltiptext">Green, from Kanto</span></a>
                                    <a class="tooltip"><img src="humans/emma.png" class="favtrainer"><span class="tooltiptext">Emma, from Kalos</span></a>
                                    <a class="tooltip"><img src="humans/bede.png" class="favtrainer"><span class="tooltiptext">Bede, from Galar</span></a>
                                </td></tr>
                                
        <tr><td class="favtrainer"><a class="tooltip">Professor</a></td>
                                <td><a class="tooltip"><img src="humans/oak.png" class="favtrainer"><span class="tooltiptext">Professor Oak, from Kanto</span></a>
                                    <a class="tooltip"><img src="humans/juniper.png" class="favtrainer"><span class="tooltiptext">Professor Juniper, from Unova</span></a>
                                    <a class="tooltip"><img src="humans/sonia.png" class="favtrainer"><span class="tooltiptext">Sonia, from Galar</span></a>
                                </td></tr>

        <tr><td class="favtrainer"><a class="tooltip">Gym Leader/Warden <span class="tooltiptext">Not listed (minor favorites): Jasmine, Clair, Tate & Liza, Wallace, Maylene, Candice, Elesa, Skyla, Drayden, Cheren, Marlon, Ilima, Lana, Mina</span></a></td>
                                <td><a class="tooltip"><img src="humans/roxanne-gen6.png" class="favtrainer"><span class="tooltiptext">Roxanne, from Rustboro City in Hoenn (Favorite Overall & in Hoenn)</span></a>
                                <a class="tooltip"><img src="humans/sabrina.png" class="favtrainer"><span class="tooltiptext">Sabrina, from Saffrom City (Favorite Kanto)</span></a>
                                <a class="tooltip"><img src="humans/whitney.png" class="favtrainer"><span class="tooltiptext">Whitney, from Goldenrod City</span></a>
                                <a class="tooltip"><img src="humans/falkner.png" class="favtrainer"><span class="tooltiptext">Falkner, from Violet City (Favorite Johto)</span></a>
                                 <a class="tooltip"><img src="humans/flannery-gen6.png" class="favtrainer"><span class="tooltiptext">Flannery, from Lavaridge Town</span></a>
                                 <a class="tooltip"><img src="humans/winona-gen6.png" class="favtrainer"><span class="tooltiptext">Winona, from Fortree City</span></a>
                                <a class="tooltip"><img src="humans/volkner.png" class="favtrainer"><span class="tooltiptext">Volkner, from Sunyshore City (Favorite Sinnoh)</span></a>
                                <a class="tooltip"><img src="humans/cress.png" class="favtrainer"><span class="tooltiptext">Cress, from Striaton City (Favorite Unova)</span></a>
                                <a class="tooltip"><img src="humans/olivia.png" class="favtrainer"><span class="tooltiptext">Olivia, from Akala Island (Favorite Alola)</span></a>
                                <a class="tooltip"><img src="humans/arezu.png" class="favtrainer"><span class="tooltiptext">Arezu, from Crimson Mirelands (Favorite Hisui)</span></a>
                                </td></tr>

        <tr><td class="favtrainer">Elite Four</td>
                                <td>
                                    <a class="tooltip"><img src="humans/caitlin.png" class="favtrainer"><span class="tooltiptext">Caitlin, from Unova (Favorite Overall)</span></a>
                               <a class="tooltip"><img src="humans/karen.png" class="favtrainer"><span class="tooltiptext">Karen, from Johto</span></a>

                                <a class="tooltip"><img src="humans/phoebe.png" class="favtrainer"><span class="tooltiptext">Phoebe, from Hoenn</span></a>
                                <a class="tooltip"><img src="humans/grimsley.png" class="favtrainer"><span class="tooltiptext">Grimsley, from Unova</span></a>
                                <a class="tooltip"><img src="humans/siebold.png" class="favtrainer"><span class="tooltiptext">Siebold, from Kalos</span></a>
                                <a class="tooltip"><img src="humans/acerola.png" class="favtrainer"><span class="tooltiptext">Acerola, from Alola</span></a>
                                <a class="tooltip"><img src="humans/rika.png" class="favtrainer"><span class="tooltiptext">Rika, from Paldea</span></a>

                                </td>
                            </tr>

        <tr><td class="favtrainer">Champion</td>
                                <td><a class="tooltip"><img src="humans/steven.png" class="favtrainer"><span class="tooltiptext">Steven Stone, from Hoenn (Favorite Overall)</span></a>
                                <a class="tooltip"><img src="humans/cynthia.png" class="favtrainer"><span class="tooltiptext">Cynthia, from Sinnoh</span></a>
                                <a class="tooltip"><img src="humans/iris.png" class="favtrainer"><span class="tooltiptext">Iris, from Unova</span></a>
                                <a class="tooltip"><img src="humans/volo.png" class="favtrainer"><span class="tooltiptext">Volo, from Hisui</span></a>
                                </td></tr>

        <tr><td class="favtrainer">Battle Boss</td>
                                <td><a class="tooltip"><img src="humans/lucy.png" class="favtrainer"><span class="tooltiptext">Pike Queen Lucy, in the Battle Pike (Hoenn)</span></a>
                                <a class="tooltip"><img src="humans/morgan.png" class="favtrainer"><span class="tooltiptext">Battle Chatelaine Morgan, in the Battle Maison</span></a>
                                <a class="tooltip"><img src="humans/anabel-gen7.png" class="favtrainer"><span class="tooltiptext">Salon Maiden Anabel, in the Battle Tower (Hoenn)</span></a>
                                </td></tr>

        <tr><td class="favtrainer">Team Admins</td>
                                <td><a class="tooltip"><img src="humans/shellybattle.png" class="favtrainer"><span class="tooltiptext">Shelly, from Team Aqua (Hoenn) (Favorite Overall)</span></a>
                                <a class="tooltip"><img src="humans/colress.png" class="favtrainer"><span class="tooltiptext">Colress, from Team Plasma (Unova)</span></a>
                                <a class="tooltip"><img src="humans/malva.png" class="favtrainer"><span class="tooltiptext">Malva, from Team Flare (Kalos)</span></a>
                                </td>

                            </tr>
                            
         <tr><td class="favtrainer">Non-Character Players</td>
                                <td><a class="tooltip"><img src="humans/furisodegirl-pink.png" class="favtrainer"><span class="tooltiptext">Furisode Girl-Pink (gen 6) (Favorite Overall)</span></a>
                                <a class="tooltip"><img src="humans/acetrainerf-gen6xy.png" class="favtrainer"><span class="tooltiptext">Ace Trainer Female (gen 6)</span></a>
                                <a class="tooltip"><img src="humans/beauty-masters.png" class="favtrainer"><span class="tooltiptext">Beauty (masters)</span></a>
                                <a class="tooltip"><img src="humans/parasollady.png" class="favtrainer"><span class="tooltiptext">Parasol Lady</span></a>
                                <a class="tooltip"><img src="humans/veteranf.png" class="favtrainer"><span class="tooltiptext">Veteran Female</span></a>
                                
                                </td>

                            </tr>
                            
        <tr><td class="favtrainer">Special Trainers</td>
                                <td><a class="tooltip"><img src="humans/grimsley-gen7.png" class="favtrainer"><span class="tooltiptext">Grimsley, in Alola</span></a>
                                <a class="tooltip"><img src="humans/cogita.png" class="favtrainer"><span class="tooltiptext">Cogita, in Hisui</span></a>
                                <a class="tooltip"><img src="humans/ballguy.png" class="favtrainer"><span class="tooltiptext">Ball Guy, in Galar</span></a>
                                
                                </td>

                            </tr>

                            </table>

        <h2><div class="h2text">Categorized</div></h2>

            <table align="center" width="100%" class="pokemons">

                <tr><td>Eeveelution</td> <td><a class="tooltip"><img src="selective/umbreon.png"><span class="tooltiptext">Umbreon</span></a>
                <tr><td>Vivillon Pattern</td> <td><a class="tooltip"><img src="selective/vivillon-ocean.png"> <span class="tooltiptext">Ocean Pattern</span></a></td></tr>
                <tr><td>Nectar Style</td> <td><a class="tooltip"><img src="selective/oricorio-pompom.png"> <span class="tooltiptext">Pom-Pom</span></a></td></tr>
                <tr><td>Seasonal Forme</td> <td><a class="tooltip"><img src="selective/deerling-winter.png"><span class="tooltiptext">Winter Forme</span></a>
                                            <a class="tooltip"><img src="selective/sawsbuck-winter.png"> <span class="tooltiptext">Winter Forme</span></a></td></tr>
                <tr><td>Flower Color</td> <td><a class="tooltip"><img src="selective/flabebe.png"><span class="tooltiptext">Red (original)</span></a>
                                            <a class="tooltip"><img src="selective/floette.png"><span class="tooltiptext">Red (original)</span></a>
                                            <a class="tooltip"><img src="selective/florges.png"> <span class="tooltiptext">Red (original)</span></a></td></tr>
                <tr><td>Flavor</td> <td><a class="tooltip"><img src="selective/alcremie.png"><span class="tooltiptext">Caramel Swirl Berry</span></a></td></tr>
                <tr><td>Legendary</td> <td><a class="tooltip"><img src="selective/kyurem.png"><span class="tooltiptext">Kyurem (Overall Favorite Legendary)</span></a>
                                        <a class="tooltip"><img src="selective/latios.png"><span class="tooltiptext">Latios</span></a>
                                        <a class="tooltip"><img src="selective/giratina.png"><span class="tooltiptext">Giratina</span></a>
                                        <a class="tooltip"><img src="selective/regidrago.png"><span class="tooltiptext">Regidrago</span></a></td></tr>
                <tr><td>Trios</td> <td><a class="tooltip"><img src="selective/articuno.png"><span class="tooltiptext">Articuno (Legendary Birds)</span></a>
                                       <a class="tooltip"> <img src="selective/suicune.png"><span class="tooltiptext">Suicune (Legendary Beasts)</span></a>
                                        <a class="tooltip"><img src="selective/regice.png"><span class="tooltiptext">Regice (Legendary Titan)</span></a>
                                        <a class="tooltip"><img src="selective/mesprit.png"><span class="tooltiptext">Mesprit (Lake Guardian)</span></a>
                                        <a class="tooltip"><img src="selective/virizion.png"><span class="tooltiptext">Virizion (Swords of Justice)</span></a>
                                    </td></tr>

            </table>

            <h2><div class="h2text">Regional</div></h2>

                            <table align="center" width="100%" class="pokemons">
        
        <tr><td><a class="tooltip">Kanto <span class="tooltiptext">Not listed (in teams): Ponyta/Rapidash, Pidgeot, Arcanine</span></a></td> <td>
                                <a class="tooltip"><img src="kanto/bulbasaur.png"><span class="tooltiptext">Bulbasaur</span></a>
                                <a class="tooltip"><img src="kanto/jigglypuff.png"><span class="tooltiptext">Jigglypuff</span></a>
                                <a class="tooltip"><img src="kanto/diglett.png"><span class="tooltiptext">Diglett</span></a>
                                <a class="tooltip"><img src="kanto/cloyster.png"><span class="tooltiptext">Cloyster</span></a>
                                <a class="tooltip"><img src="kanto/ditto.png"><span class="tooltiptext">Ditto</span></a>
                                <a class="tooltip"><img src="kanto/dragonair.png"><span class="tooltiptext">Dragonair</span></a>
                                </td></tr>
        
        <tr><td><a class="tooltip">Johto <span class="tooltiptext">Not listed (in teams): Kingdra, Chikorita line, Furret, Marill line, Aipom line</span></a></td> <td>
                                <a class="tooltip"><img src="johto/cyndaquil.png"><span class="tooltiptext">Cyndaquil</span></a>
                                <a class="tooltip"><img src="johto/ampharos.png"><span class="tooltiptext">Ampharos</span></a>
                                <a class="tooltip"><img src="johto/slowking.png"><span class="tooltiptext">Slowking</span></a>
                                <a class="tooltip"><img src="johto/phanpy.png"><span class="tooltiptext">Phanpy</span></a>
                                </td>
                            </tr>
        
        <tr><td><a class="tooltip">Hoenn <span class="tooltiptext">Not listed (in teams): Treecko line, Aron line, Blaziken, Poochyena line, </span></a> <td>
                                <a class="tooltip"><img src="hoenn/taillow.png"><span class="tooltiptext">Taillow</span></a>
                                <a class="tooltip"><img src="hoenn/pelipper.png"><span class="tooltiptext">Pelipper</span></a>
                                <a class="tooltip"><img src="hoenn/masquerain.png"><span class="tooltiptext">Masquerain</span></a>
                                <a class="tooltip"><img src="hoenn/mawile.png"><span class="tooltiptext">Mawile</span></a>
                                <a class="tooltip"><img src="hoenn/manectric.png"><span class="tooltiptext">Manectric</span></a>
                                <a class="tooltip"><img src="hoenn/flygon.png"><span class="tooltiptext">Flygon</span></a>
                                <a class="tooltip"><img src="hoenn/altaria.png"><span class="tooltiptext">Altaria</span></a>
                                <a class="tooltip"><img src="hoenn/zangoose.png"><span class="tooltiptext">Zangoose</span></a>
                                <a class="tooltip"><img src="hoenn/milotic.png"><span class="tooltiptext">Milotic</span></a>
                                <a class="tooltip"><img src="hoenn/tropius.png"><span class="tooltiptext">Tropius</span></a>
                                </td></tr>

        <tr><td><a class="tooltip">Sinnoh <span class="tooltiptext">Not listed (in teams): Luxray</span></a></td> <td>
                                <a class="tooltip"><img src="sinnoh/roserade.png"><span class="tooltiptext">Roserade</span></a>
                                <a class="tooltip"><img src="sinnoh/drifloon.png"><span class="tooltiptext">Drifloon</span></a>
                                <a class="tooltip"><img src="sinnoh/buneary.png"><span class="tooltiptext">Buneary</span></a>
                                <a class="tooltip"><img src="sinnoh/lickilicky.png"><span class="tooltiptext">Lickilicky</span></a>
                                </td></tr>

        <tr><td><a class="tooltip">Unova <span class="tooltiptext">Not listed (in teams): Bisharp, Mienshao</span></a></td> <td>
                                <a class="tooltip"><img src="unova/scolipede.png"><span class="tooltiptext">Scolipede</span></a>
                                <a class="tooltip"><img src="unova/whimsicott.png"><span class="tooltiptext">Whimsicott</span></a>
                                <a class="tooltip"><img src="unova/darumaka.png"><span class="tooltiptext">Darumaka</span></a>
                                <a class="tooltip"><img src="unova/braviary.png"><span class="tooltiptext">Braviary</span></a>
                                <a class="tooltip"><img src="unova/deino.png"><span class="tooltiptext">Deino</span></a>
                                <a class="tooltip"><img src="unova/hydreigon.png"><span class="tooltiptext">Hydreigon</span></a>
                                </td></tr>

        <tr><td><a class="tooltip">Kalos <span class="tooltiptext">Not listed (in teams): Talonflame, Amaura line, Florges, Aegislash, Gogoat</span></a></td> <td>
                                <a class="tooltip"><img src="kalos/pancham.png"><span class="tooltiptext">Pancham</span></a>
                                <a class="tooltip"><img src="kalos/slurpuff.png"><span class="tooltiptext">Slurpuff</span></a>
                                <a class="tooltip"><img src="kalos/goomy.png"><span class="tooltiptext">Goomy</span></a>
                                                </td></tr>

        <tr><td><a class="tooltip">Alola <span class="tooltiptext">Not listed (in teams): Alolan Ninetales, Lycanroc, Stufful line</span></a></td> <td>
                                <a class="tooltip"><img src="alola/rowlet.png"><span class="tooltiptext">Rowlet</span></a>
                                <a class="tooltip"><img src="alola/salazzle.png"><span class="tooltiptext">Salazzle</span></a>
                                <a class="tooltip"><img src="alola/comfey.png"><span class="tooltiptext">Comfey</span></a>
                                <a class="tooltip"><img src="alola/mimikyu.png"><span class="tooltiptext">Mimikyu</span></a>
                                <a class="tooltip"><img src="alola/dhelmise.png"><span class="tooltiptext">Dhelmise</span></a>

                                                </td></tr>
                                                
        <tr><td><a class="tooltip">Galar <span class="tooltiptext">Not listed (in teams): Hatterene line, Dragapult, Polteageist, Corviknight</span></a></td> <td>
            <a class="tooltip"><img src="galar/dottler.png"><span class="tooltiptext">Dottler</span></a>
            <a class="tooltip"><img src="galar/applin.png"><span class="tooltiptext">Applin</span></a>
                                <a class="tooltip"><img src="galar/appletun.png"><span class="tooltiptext">Appletun</span></a>
                                <a class="tooltip"><img src="galar/snom.png"><span class="tooltiptext">Snom</span></a>
                                <a class="tooltip"><img src="galar/frosmoth.png"><span class="tooltiptext">Frosmoth</span></a>
                                <a class="tooltip"><img src="galar/eiscue.png"><span class="tooltiptext">Eiscue</span></a>


                                                </td></tr>
                            </table>

        <h2><div class="h2text">Forms</div></h2>

        <table align="center" width="100%" class="pokemons">

        <tr><td>Alolan Forms </td> <td>
            <a class="tooltip"><img src="alola/raichu-alola.png"><span class="tooltiptext">Alolan Raichu</span></a>
            <a class="tooltip"><img src="alola/sandshrew-alola.png"><span class="tooltiptext">Alolan Sandshrew</span></a>
            <a class="tooltip"><img src="alola/vulpix-alola.png"><span class="tooltiptext">Alolan Vulpix</span></a>
            <a class="tooltip"><img src="alola/dugtrio-alola.png"><span class="tooltiptext">Alolan Dugtrio</span></a>
            <a class="tooltip"><img src="alola/golem-alola.png"><span class="tooltiptext">Alolan Golem</span></a>
            <a class="tooltip"><img src="alola/muk-alola.png"><span class="tooltiptext">Alolan Muk</span></a>
            <a class="tooltip"><img src="alola/exeggutor-alola.png"><span class="tooltiptext">Alolan Exeggutor</span></a>
            <a class="tooltip"><img src="alola/marowak-alola.png"><span class="tooltiptext">Alolan Marowak</span></a>
                                </td></tr>
                                
        <tr><td>Galarian Forms </td> <td>
            <a class="tooltip"><img src="galar/ponyta-galar.png"><span class="tooltiptext">Galarian Ponyta</span>
            <a class="tooltip"><img src="galar/weezing-galar.png"><span class="tooltiptext">Galarian Weezing</span>
            <a class="tooltip"><img src="galar/slowpoke-galar.png"><span class="tooltiptext">Galarian Slowpoke</span>
            <a class="tooltip"><img src="galar/slowking-galar.png"><span class="tooltiptext">Galarian Slowking</span>
            <a class="tooltip"><img src="galar/articuno-galar.png"><span class="tooltiptext">Galarian Articuno</span>
            <a class="tooltip"><img src="galar/moltres-galar.png"><span class="tooltiptext">Galarian Moltres</span>
                                </td></tr>
                              
        <tr><td>Hisuian Forms </td> <td>
            <a class="tooltip"><img src="hisuian/growlitheh.png"><span class="tooltiptext">Hisuian Growlithe</span>
            <a class="tooltip"><img src="hisuian/lilliganth.png"><span class="tooltiptext">Hisuian Lilligant</span>
            <a class="tooltip"><img src="hisuian/zoruah.png"><span class="tooltiptext">Hisuian Zorua</span>
            <a class="tooltip"><img src="hisuian/zoroarkh.png"><span class="tooltiptext">Hisuian Zoroark</span>
                                </td></tr>

        <tr><td>Mega Evolutions</td> <td>
                <a class="tooltip"><img src="mega/charizard-mega-x.png"><span class="tooltiptext">Mega Charizard X</span></a>
                <a class="tooltip"><img src="mega/gengar-mega.png"><span class="tooltiptext">Mega Gengar</span></a>
                <a class="tooltip"><img src="mega/kangaskhan-mega.png"><span class="tooltiptext">Mega Kangaskhan</span></a>
                <a class="tooltip"><img src="mega/aerodactyl-mega.png"><span class="tooltiptext">Mega Aerodactyl</span></a>
                <a class="tooltip"><img src="mega/gardevoir-mega.png"><span class="tooltiptext">Mega Gardevoir</span></a>
                <a class="tooltip"><img src="mega/sableye-mega.png"><span class="tooltiptext">Mega Sableye</span></a>
                <a class="tooltip"><img src="mega/glalie-mega.png"><span class="tooltiptext">Mega Glalie</span></a>
                <a class="tooltip"><img src="mega/salamence-mega.png"><span class="tooltiptext">Mega Salamence</span></a>
                <a class="tooltip"><img src="mega/gallade-mega.png"><span class="tooltiptext">Mega Gallade</span></a>
                                    </td></tr>
                                    
        <tr><td>Gigantamax Forms</td> <td>
                <a class="tooltip"><img src="gmax/gengar-gmax.png"><span class="tooltiptext">Gigantamax Gengar</span></a>
                <a class="tooltip"><img src="gmax/corviknight-gmax.png"><span class="tooltiptext">Gigantamax Corviknight</span></a>
                <a class="tooltip"><img src="gmax/grimmsnarl-gmax.png"><span class="tooltiptext">Gigantamax Grimmsnarl</span></a>
                <a class="tooltip"><img src="gmax/flapple-gmax.png"><span class="tooltiptext">Gigantamax Appletun</span></a>
                <a class="tooltip"><img src="gmax/snorlax-gmax.png"><span class="tooltiptext">Gigantamax Snorlax</span></a>
                <a class="tooltip"><img src="gmax/lapras-gmax.png"><span class="tooltiptext">Gigantamax Lapras</span></a>
                                    </td></tr>

        <tr><td>Shiny</td> <td>
            <a class="tooltip"><img src="shiny/charizard.png"><span class="tooltiptext">Charizard</span></a>
            <a class="tooltip"><img src="shiny/ponyta.png"><span class="tooltiptext">Ponyta</span></a>
            <a class="tooltip"><img src="shiny/muk-alola.png"><span class="tooltiptext">Alolan Muk</span></a>
            <a class="tooltip"><img src="shiny/gengar-mega.png"><span class="tooltiptext">Mega Gengar</span></a>
            <a class="tooltip"><img src="shiny/marowak-alola.png"><span class="tooltiptext">Alolan Marowak</span></a>

            <a class="tooltip"><img src="shiny/aipom.png"><span class="tooltiptext">Aipom</span></a>
            <a class="tooltip"><img src="shiny/umbreon.png"><span class="tooltiptext">Umbreon</span></a>

            <a class="tooltip"><img src="shiny/ralts.png"><span class="tooltiptext">Ralts</span></a>
            <a class="tooltip"><img src="shiny/electrike.png"><span class="tooltiptext">Electrike</span></a>
            <a class="tooltip"><img src="shiny/camerupt-mega.png"><span class="tooltiptext">Mega Camerupt</span></a>
            <a class="tooltip"><img src="shiny/zangoose.png"><span class="tooltiptext">Zangoose</span></a>
            <a class="tooltip"><img src="shiny/glalie.png"><span class="tooltiptext">Glalie</span></a>
            <a class="tooltip"><img src="shiny/metagross.png"><span class="tooltiptext">Metagross</span></a>
            <a class="tooltip"><img src="shiny/groudon-primal.png"><span class="tooltiptext">Primal Groudon</span></a>

            <a class="tooltip"><img src="shiny/mothim.png"><span class="tooltiptext">Mothim</span></a>
            <a class="tooltip"><img src="shiny/buneary.png"><span class="tooltiptext">Buneary</span></a>
            <a class="tooltip"><img src="shiny/gallade-mega.png"><span class="tooltiptext">Mega Gallade</span></a>

            <a class="tooltip"><img src="shiny/emboar.png"><span class="tooltiptext">Emboar</span></a>
            <a class="tooltip"><img src="shiny/musharna.png"><span class="tooltiptext">Musharna</span></a>
            <a class="tooltip"><img src="shiny/whimsicott.png"><span class="tooltiptext">Whimsicott</span></a>
            <a class="tooltip"><img src="shiny/zorua.png"><span class="tooltiptext">Zorua</span></a>
            <a class="tooltip"><img src="shiny/chandelure.png"><span class="tooltiptext">Chandelure</span></a>

            <a class="tooltip"><img src="shiny/furfrou.png"><span class="tooltiptext">Furfrou</span></a>
            <a class="tooltip"><img src="shiny/sylveon.png"><span class="tooltiptext">Sylveon</span></a>
            <a class="tooltip"><img src="shiny/xerneas.png"><span class="tooltiptext">Xerneas</span></a>

            <a class="tooltip"><img src="shiny/primarina.png"><span class="tooltiptext">Primarina</span></a>
            <a class="tooltip"><img src="shiny/lycanroc-midnight.png"><span class="tooltiptext">Midnight Lycanroc</span></a>
            
            <a class="tooltip"><img src="shiny/sinistea.png"><span class="tooltiptext">Sinistea</span></a>
            <a class="tooltip"><img src="shiny/appletun.png"><span class="tooltiptext">Appletun</span></a>
            <a class="tooltip"><img src="shiny/zacian.png"><span class="tooltiptext">Zacian</span></a>
            <a class="tooltip"><img src="shiny/corviknight-gmax.png"><span class="tooltiptext">Gigantamax Corviknight</span></a>
            <a class="tooltip"><img src="shiny/snorlax-gmax.png"><span class="tooltiptext">Gigantamax Snorlax</span></a>
            <a class="tooltip"><img src="shiny/appletun-gmax.png"><span class="tooltiptext">Gigantamax Appletun</span></a>
            <a class="tooltip"><img src="shiny/grimmsnarl-gmax.png"><span class="tooltiptext">Gigantamax Grimmsnarl</span></a>
            <a class="tooltip"><img src="shiny/butterfree-gmax.png"><span class="tooltiptext">Gigantamax Butterfree</span></a>
            <a class="tooltip"><img src="shiny/gengar-gmax.png"><span class="tooltiptext">Gigantamax Gengar</span></a>


        </td></tr>
        
    </table>

    <h3>Numerical Species Ranking</h3>

    <p align="center"><img src="favrank24nov.png" class="numerical"></p>
    

    <h3>OTPs</h3>

    <table align="center" width="100%" class="ships">


        <tr>
            <td>
                <a class="tooltip"><img src="ships/red.png"><img src="ships/heart.png"><img src="ships/ethan.png"> <span class="tooltiptext">Red/Gold (Poli[HeartGold]shipping)</span></a></td>

            <td>
                <a class="tooltip"><img src="ships/black.png"><img src="ships/heart.png"><img src="ships/white.png"> <span class="tooltiptext">Black/White (Chess[Agency]Shipping)</span></a>
            </td>

            <td>
                <a class="tooltip"><img src="ships/dia.png"><img src="ships/heart.png"><img src="ships/platina.png"><img src="ships/heart.png"><img src="ships/pearl.png"> <span class="tooltiptext">Diamond[Lucas]/Platinum[Dawn]/Pearl[Barry] (Entourage[Scarf]Shipping)</span></a>
            </td>

            <td>
                <a class="tooltip"><img src="ships/steven.png"><img src="ships/heart.png"><img src="ships/wallace.png"><span class="tooltiptext">Steven/Wallace (OriginShipping)</span></a>
            </td>

            

        </tr>

        <tr>

            <td>
                <a class="tooltip"><img src="ships/lisia.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/may-contest.png" class="favtrainer"> <span class="tooltiptext">Lisia/May (ContestQueenShipping)</span></a></td>

            <td>
                <a class="tooltip"><img src="ships/cheren.png"><img src="ships/heart.png"><img src="ships/bianca.png"> <span class="tooltiptext">Cheren/Bianca (DualRivalShipping)</span></a>
            </td>

            <td>
            
                <a class="tooltip"><img src="ships/shauna.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/serena.png" class="favtrainer"> <span class="tooltiptext">Shauna/Serena (BoutiqueShipping)</span></a>
            </td>

            <td>
                <a class="tooltip"><img src="ships/gladion.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/hau.png" class="favtrainer"><span class="tooltiptext">Gladion/Hau (CutebonesShipping)</span></a>
            </td>

        <tr>
            <td>
                <a class="tooltip"><img src="ships/selene.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/lillie.png" class="favtrainer"> <span class="tooltiptext">Moon/Lillie (OceanflowerShipping)</span></a></td>

            <td>
                <a class="tooltip"><img src="ships/may-small.png"><img src="ships/heart.png"><img src="ships/leaf.png"><span class="tooltiptext">Sapphire (May)/Leaf (Blue) (ScientificShipping)</span></a>
            </td>

            <td>
                <a class="tooltip"><img src="ships/cynthia-ow.png"><img src="ships/heart.png"><img src="ships/caitlin.png"><span class="tooltiptext">Cynthia/Caitlin (AccessoryShipping)</span></a>
            </td>

            <td>
                <a class="tooltip"><img src="ships/blanche.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/candela.png" class="favtrainer"><span class="tooltiptext">Blanche/Candela (MollifyShipping)</span></a>
            </td>

            
        </tr>
        
        <tr>
            <td>
                <a class="tooltip"><img src="ships/volo.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/giratina.png" class="favtrainer"> <span class="tooltiptext">Volo/Giratina</span></a></td>

            <td>
                <a class="tooltip"><img src="ships/adaman.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/irida.png" class="favtrainer"><span class="tooltiptext">Adaman/Irida (ClanLeaderShipping)</span></a>
            </td>

            <td>
                <a class="tooltip"><img src="ships/nemona.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/juliana.png" class="favtrainer"><span class="tooltiptext">Nemona/Juliana</span></a>
            </td>
            
            <td>
                <a class="tooltip"><img src="ships/kieran.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/florian.png" class="favtrainer"><span class="tooltiptext">Kieran/Florian</span></a>
            </td>

            
        </tr>


    </table>

    <h3>Ships</h3>

    <table align="center" width="100%" class="ships">

                    <tr>
            <td>
                <a class="tooltip"><img src="ships/red.png"><img src="ships/heart.png"><img src="ships/green.png"> <span class="tooltiptext">Red/Green (Original[Begins][Nameless]Shipping)</span></a></td>
            <td>
                <a class="tooltip"><img src="ships/red.png"><img src="ships/heart.png"><img src="ships/green.png"><img src="ships/heart.png"><img src="ships/leaf.png"> <span class="tooltiptext">Red/Green/Leaf[Blue] (HistoryShipping)</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/ariana.png"><img src="ships/heart.png"><img src="ships/archer.png"> <span class="tooltiptext">Ariana/Archer (ClonegeuseShipping)</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/silver.png"><img src="ships/heart.png"><img src="ships/ethan.png"> <span class="tooltiptext">Silver/Gold (PreciousMetal[Hunter]Shipping)</span></a></td>
            </tr>

            <tr>
            <td>
                <a class="tooltip"><img src="ships/ethan.png"><img src="ships/heart.png"><img src="ships/silver.png"><img src="ships/heart.png"><img src="ships/crystal.png"> <span class="tooltiptext">Gold/Silver/Crystal [Pok&eacute;mon Adventures specifically] (JohtoShipping)</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/morty.png"><img src="ships/heart.png"><img src="ships/eusine.png"> <span class="tooltiptext">Morty/Eusine (SacredShipping)</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/brendan.png"><img src="ships/heart.png"><img src="ships/may-small.png"> <span class="tooltiptext">Ruby (Brendan)/Sapphire (May) (Hoenn[Frantic]Shipping)</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/steven.png"><img src="ships/heart.png"><img src="ships/brawly.png"> <span class="tooltiptext">Steven/Brawly (StrengthShipping)</span></a></td>
            </tr>

            <tr>
            <td>
                <a class="tooltip"><img src="ships/mrbriney.png"><img src="ships/heart.png"><img src="ships/mrstone.png"> <span class="tooltiptext">Mr. Briney/Mr. Stone</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/archie.png"><img src="ships/heart.png"><img src="ships/maxie.png"><span class="tooltiptext">Archie/Maxie (HardenShipping)</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/courtney.png"><img src="ships/heart.png"><img src="ships/shelly.png"> <span class="tooltiptext">Courtney/Shelly (AlphaFemaleShipping)</span></a></td>
            <td>
                <a class="tooltip"><img src="ships/tabitha.png"><img src="ships/heart.png"><img src="ships/matt.png"> <span class="tooltiptext">Tabitha/Matt (GaslightShipping)</span></a>
            </td>
            </tr>
                
            <tr>
            <td>
                <a class="tooltip"><img src="ships/flint.png"><img src="ships/heart.png"><img src="ships/volkner.png"> <span class="tooltiptext">Flint/Volkner (IgnitionShipping)</span></a>
            </td>

            <td>
                <a class="tooltip"><img src="ships/black.png"><img src="ships/heart.png"><img src="ships/white.png"><img src="ships/heart.png"><img src="ships/n.png"><span class="tooltiptext">Black/White/N (MonochromeShipping)</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/juniper.png"><img src="ships/heart.png"><img src="ships/fennel.png"><span class="tooltiptext">Professor Juniper/Professor Fennel (ScientificShipping)</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/hugh.png"><img src="ships/heart.png"><img src="ships/nate.png"> <span class="tooltiptext">Hugh/Nate (GreySkyShipping)</span></a>
            </td>
            </tr>

            <tr>
                <td>
                    <a class="tooltip"><img src="ships/green.png"><img src="ships/heart.png"><img src="ships/silver.png"> <span class="tooltiptext">Green/Silver (Secondary[Bruise]Shipping)</span></a></td>
                <td>
                    <a class="tooltip"><img src="ships/yellowow.png"><img src="ships/heart.png"><img src="ships/iris.png"> <span class="tooltiptext">Yellow/Iris (PaintedDragonShipping)</span></a></td>
                <td>
                    <a class="tooltip"><img src="ships/bebe.png"><img src="ships/heart.png"><img src="ships/lanette.png"><span class="tooltiptext">Bebe/Lanette (WANshipping)</span></a>
                </td>
                <td>
                    <a class="tooltip"><img src="ships/steven.png"><img src="ships/heart.png"><img src="ships/cynthia-ow.png"> <span class="tooltiptext">Steven/Cynthia</span></a>
                </td>
            </tr>

            <tr>
            <td>
                <a class="tooltip"><img src="ships/rocketshipping.png" class="favtrainer"> <span class="tooltiptext">James/Jessie (RocketShipping)</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/mayor.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/zinnia.png" class="favtrainer"><span class="tooltiptext">May/Zinnia (AlphaIdealsShipping)</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/ilima.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/kiawe.png" class="favtrainer"><span class="tooltiptext">Ilima/Kiawe (YellowFlowerShipping)</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/kukui.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/burnet.png" class="favtrainer"> <span class="tooltiptext">Kukui/Burnet (EternalHoneymoonShipping)</span></a>
            </td>
        </tr>

        <tr>
            <td>
                <a class="tooltip"><img src="ships/kukui.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/burnet.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/olivia.png" class="favtrainer"> <span class="tooltiptext">Kukui/Burnet/Olivia</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/mina.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/mallow.png" class="favtrainer"> <span class="tooltiptext">Mina/Mallow (CrushedberryShipping)</span></a></td>
            <td>
                <a class="tooltip"><img src="ships/acerola.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/lana.png" class="favtrainer"> <span class="tooltiptext">Acerola/Lana (MysticBubbleShipping)</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/lusamine.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/wicke.png" class="favtrainer"> <span class="tooltiptext">Lusamine/Wicke (HeavenlyShipping)</span></a>
            </td>
        </tr>

        <tr>
            <td>
                <a class="tooltip"><img src="ships/cynthia.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/diantha.png" class="favtrainer"> <span class="tooltiptext">Cynthia/Diantha (PhaesporiaShipping)</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/nanu.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/looker.png" class="favtrainer"> <span class="tooltiptext">Nanu/Looker (PoliceShipping)</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/accelgor.png"><img src="ships/heart.png"><img src="ships/escavalier.png"><span class="tooltiptext">Accelgor/Escavalier (IWantMyHelmetBackShipping)</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/pikachu.png"><img src="ships/heart.png"><img src="ships/meowth.png"> <span class="tooltiptext">Ash's Pikachu/Team Rocket's Meowth (Kat&MouseShipping)</span></a></td>

        </tr>
        
        <tr>
            <td>
                <a class="tooltip"><img src="ships/emma.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/serena.png" class="favtrainer"> <span class="tooltiptext">Emma/Serena</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/gloria.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/marnie.png" class="favtrainer"> <span class="tooltiptext">Gloria/Marnie</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/hop.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/victor.png" class="favtrainer"><span class="tooltiptext">Hop/Victor</span></a>
            </td>
            <td>
                <a class="tooltip"><img src="ships/carmine.png" class="favtrainer"><img src="ships/heart.png"><img src="ships/nemona-s.png" class="favtrainer"> <span class="tooltiptext">Carmine/Nemona</span></a></td>

        </tr>

    </table>
    
    
</div>

</div>

<?php include('../footer.php');?>
