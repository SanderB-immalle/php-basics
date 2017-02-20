<?php

// gegeven: een dictionary AKA associative array AKA key-value-datastructuur


$scrabble = array(
    "A" => 1,
    "B" => 3,
    "C" => 5,
    "D" => 2,
    "E" => 1,
    "F" => 4,
    "G" => 3,
    "H" => 4,
    "I" => 1,
    "J" => 4,
    "K" => 3,
    "L" => 3,
    "M" => 3,
    "N" => 1,
    "O" => 1,
    "P" => 3,
    "Q" => 10,
    "R" => 2,
    "S" => 2,
    "T" => 2,
    "U" => 4,
    "V" => 4,
    "W" => 5,
    "X" => 8,
    "Y" => 8,
    "Z" => 4
);

// gevraagd: Zorg dat de functie show alle keys en values afdrukt. Maak gebruik van een foreach-loop. Extra: zorg dat de volgorde oplopend is naar aantal punten per letter.

function show($assray) {
	asort($assray);
	foreach($assray as $key => $value){
		echo"$key => $value";
		echo "<br>";
	}

}
show($scrabble);

// gevraagd: Vul de functie verder aan zodat ze het totaal behaalde punten returnt. De code kan sterk vereenvoudigd (i.v.m. switch/case) door op de gepaste manier gebruik de maken van bovenstaande associatieve array.

function punten($woord){

$woord = strtoupper($woord);

for($i = 0; $i < strlen($woord); $i++){
	echo $woord[$i];							
	}

}


punten("hey");
// gevraagd: Print van enkele woorden de punten af met bovenstaande functie.
// Zorg dat er woorden met zowel kleine als hoofdletters tussen zitten.

?>
