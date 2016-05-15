<?php

header('Content-Type: text/html; charset=utf-8');

//Hantei, phpkursus2016, 08.05.2016
//Ylesanne 0204

/*

Lisa massiivi inimese isikuandmed (nimi, vanus jne.) min 5 elementi.
Väljasta need mõnes lauses, sellesama inimese kohta.
Nt. "Kodanik [nimi] on [vanus] aastane"

*/

$andmed[nimi]="Jaanus";
$andmed[vanus]="21";
$andmed[sugu]="mees";
$andmed[rahvus]="eestlane";
$andmed[keel]="eesti";

echo "$andmed[nimi] on $andmed[vanus] aastane $andmed[sugu]. $andmed[nimi] on $andmed[rahvus] ning tema emakeel on $andmed[keel] keel. <br>";

echo "<br><strong>Ylesanne 0204</strong>";

?>
