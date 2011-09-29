<?php
/*
Plugin Name: Watskeburt
Plugin URI: https://github.com/stronk/wordpress-plugin-watskeburt
Description: Elke keer een andere frase uit deze frisse zomerhit, een fr&ecirc;le bloempje uit het frisse boeket dat het rijke &oelig;uvre van de Jeugd van Tegenwoordig vormt
Version: 1.03
Author: Stronk
Author URI: http://stronk.net/
License: GPL2



    Copyright 2011  Stronk  (email : koen@stronk.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/





function watskeburt_get_lyric() {
	/** These are lyrics bij the Dutch poets savants ensembled in the fierce formation The Youth of Nowadays */
	$rijms = 
"Props voor de Heist Rocker en de watskebuuurt
Watskebizzy bizzle rob robber
Mensen praten serieus maar ze weten van geen ene keeenkermoer watskeburt
Maar d'r gebeurt veel serieus
Komen die vocalen nog of moet ik beginnen
Je bent een sjembek dat zeurt maar je weet niet watskeburt
Je bent een MC dat front maar je komt niet tot de grond
Je bent een MC met crown maar je weet niet wat is njou
Je bent een sjembek zonder klauw en je bent niet 'bout it 'bout
OK Vieze Freddy is aandeburt
Vieze Freddy, alsof je dat niet wist en ik drink tot de motherfokking fles leeg is
Heb pas doekoe als ik bierflesjes inwissel dan ben ik pas stang yo uhh, fo' shizzle
Je lacht maar ik maak hier geen motherfokking grappen
Pus uit m'n pik je kan een lauw biertje tappen
Staat te spacen, maar ik ben niet van Star Trek
Ook geen busta bust maar ik breek wel je nek *ehehehehehe*
Komt alleen uit m'n achterste
Moeders met dochters ze verachten me
Ben van baksteen, alsof je dat niet ruikt
Want de een is dik en de ander gebruikt
Ik ben tuig, van de eerste klasse
Je wast je handen al tijdens het plassen
Kijk me aan, je weet precies hoe laat het is
Baksteen, de rest is geschiedenis
Wat is niau krauw?
Watskeburt in de schuur
Is bij jouw alles rustig of gezeur met de buur?
Zijn het biertjes voor gratis of gewoon pleurisduur
Ben je 'bout it bout it of een treurig figuur
Voor alle vrouwen en chickies, van Joure tot Maastrikkie
Heb die vrouwen in m'n dickies yo we houden het jiggy
'Bout it bout it net als een gek met al dat goud in m'n mikkie
Tw&eacute;&eacute; gezichten een formule als Lauda en Niki
Watser, watser, watser, watser, watser met jouw ouwe?
Keeenker keeeenker je staat te spacen
Serieus gek wat praat je met mij man keeeeenker
Je praat maar je weet niet eens watser met jou
Je weet niet eens watser met mij maar watser met jou ouwe
Keenker keenker
mensen zijn aan de crack tegenwoordig, serieus
Ik liep laatst door het Centraal
komt er een junkie naar me toe voor een euro
*euro, keeenker een euro?*
Ik zeg hier heb je twintig cent, zegt-ie nee hoef je niet
Dus ik zeg ja ja is goed ik ken jou ik ken jou, je komt uit Noord
- uhh ja ik kom uit Noord hoe weet je dat hoe weet je dat
Zeg ik ja ik ken je moeder ik heb m'n krantenwijk voor d'r bezorgd
- Uhh m'n moeder m'n moeder? Ik heb haar al 25 jaar niet gezien
Dus ik zeg fok jou man ik verkoop 'r crack stomme slet
Keenker keenker keenker junkies op het Centraal
Serieus, enigste vette plek van Centraal is de fucking Pizzahut
En uhh en en en en en de Meeting Point maar keenker die is dicht
In ieder geval Centraal is een baas, vieze Freddy is een baas
Baksteen is een baas, Heist Rocker is een baas";

	// verdeel in regels
	$rijms = explode( "\n", $rijms );

	// kies er zomaar een voor de vuist weg
	return wptexturize( $rijms[ mt_rand( 0, count( $rijms ) - 1 ) ] );
}

// zing mee uit volle borst
function watskeburt() {
	$uitverkoren = watskeburt_get_lyric();
	echo "<p id='watskeburt'>$uitverkoren</p>";
}

// frisse stijlen om te spitten
function watskeburt_css() {
	echo "
	<style type='text/css'>
	#watskeburt {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_notices', 'watskeburt' );
add_action( 'admin_head', 'watskeburt_css' );

?>