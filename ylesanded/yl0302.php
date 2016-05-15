<?php
//Hantei, phpkursus2016, 08.05.2016/15.05.2016
//Ylesanne 0302

/*

Jätkata eelmist ülesannet. 

Tee funktsioon nimega "vaheta_elemendid". Funktsiooni sisendargumendiks olgu kaks massiivi elemendi numbrit, mille kohtasid massiivis soovime vahetada ja massiiv ise. Vahetamiseks tuleb kasutada funktsioonisisest lisamuutujat. Vahetada elementide "3. Rebane" ja "7. Ahv" massiivi kohad. Tagasta massiiv põhiprogrammile. Kuvada "kuva_massiiv" funktsiooniga massiiv välja.

Näide: 
Rebane jääb nr. 7-ks
Ahv jääb nr. 3-ks

function vaheta_elemendid($e1, $e2, $mas)  {

	$ajutine = $mas[$e1];
	$mas[$e1] = $mas[$e2];
	$mas[$e2] = $ajutine;

	return $mas;

}

$loomad = vaheta_elemendid(3, 7, $loomad);

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

function vaheta_elemendid($i1, $i2, $mas)  {

	$temp = $mas[$i1];
	$mas[$i1] = $mas[$i2];
	$mas[$i2] = $temp;

	return $mas;

}

$mas = vaheta_elemendid(3, 7, $mas);

kuva_massiiv($mas);

?>
