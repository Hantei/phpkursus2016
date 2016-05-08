<?php
//Hantei, phpkursus2016, 08.05.2016
//Ylesanne 0301

/*

Luua massiivi nimega "$mas" elementidega Karu, Jänes, Hunt, Rebane, Hirv, Hiir, Põder, Ahv, Mäger, Mutt.
Karu massiivi elemendi indeks olgu 0, Jänesel 1 jne.

Teha funktsioon nimega "kuva_massiiv". Funktsiooni sisendargumendiks olgu massiiv mida soovime välja kuvada. Funktsiooni sees lugeda funktsiooniga "sizeof" elemendid kokku ja väljastada tsükliga kõik masiivi elemendid üksteise alla. Kuvatud elemendi ette panna ka massiivi elemendi number. Kuvamisel panna kõige lõppu panna paragrafi tag "<p>".

Näide:
0. Karu
1. Jänes
2. Hunt
jne.

Lisainfoks , et peale 0301-0303 ülesannet peab tulema umbes säärane programm:

funktsioon kuva_massiiv
funktsioon vaheta_elemendid
funktsioon kustuta_element

tee massiiv
kuva_massiiv
vaheta_elemendid
kuva_massiiv
kustuta_element
kuva_massiiv

*/

$mas[0] = 'Karu';
$mas[1] = 'Jänes';
$mas[2] = 'Hunt';
$mas[3] = 'Rebane';
$mas[4] = 'Hirv';
$mas[5] = 'Hiir';
$mas[6] = 'Põder';
$mas[7] = 'Ahv';
$mas[8] = 'Mäger';
$mas[9] = 'Mutt';

function kuva_massiiv($mas) {
	for ($i=0; $i<sizeof($mas); $i++) {
		echo "$i. $mas[$i]<br>";
		echo "<p>";
	}
}

echo kuva_massiiv($mas);

?>
