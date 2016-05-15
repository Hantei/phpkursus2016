<?php

header('Content-Type: text/html; charset=utf-8');

//Hantei, phpkursus2016, 08.05.2016
//Ylesanne 0202

/*

Lisa käsitsi massiivi 10 looma nime kasutades massiivi kohanäitu. Nt. $animals[0]="karu" jne.
Väljasta see "foreach" tsükkliga.

*/

$animals[0]="kass";
$animals[1]="koer";
$animals[2]="lammas";
$animals[3]="orav";
$animals[4]="lehm";
$animals[5]="hamster";
$animals[6]="liivahiir";
$animals[7]="kilpkonn";
$animals[8]="kits";
$animals[9]="gorilla";

foreach ($animals as $key => $val) {
	echo "Mul on kodus $val, tema kohanäit on $key<br>"; }

echo "<br><strong>Ylesanne 0202</strong>";

?>
