<?php

header('Content-Type: text/html; charset=utf-8');

//Hantei, phpkursus2016, 26.05.2016
//Ylesanne 0503

/*

Teha üks funktsioon nimega "fun_math". Funktsiooni sisend argumentideks on kolm arvu $a, $b, $c. Väljastada funktsiooni resultaat kõigi kirjeldatud situatsioonide puhul, kõigil puhkudel peaksid erinevad arvud olema. Väljastada ka sisendarvud.
* kui $a on väiksem kui $b siis lahutada $b-st $a ja liita $c pöördväärtus (teispidine märk)
* Kui $a on suurem kui $b siis ja kumbki pole 0 siis võtta $a astmesse $b
* Kui $a on võrdne $b-ga siis liita $a-le juurde $c ja lahutada $b-st $c ja saadud arvud omavahel kokku liita
* Kui $a korrutis $b-ga on võrdne $c-ga siis lahutada $c-st kahekordne $a ja $b korrutis
* Kui $a on suurem kui $b ja kui $b on suurem kui $c ja ükski nendest ei võrdu nulli ega negatiivse arvuga, siis liita kaks suuremat arvu ja jagada väikseima arvuga.

Proovida funktsiooni 10 erineva sisendarvudega.

*/

function fun_math($a, $b, $c) {
	$error='Tingimused ei sobi tehte sooritamiseks <br />';
	echo '<u>Sisendarvud: a=' . $a . ', b=' . $b .' ja c=' . $c . '</u><br />';

	if ($a<$b) {
		echo '<strong>Kui a < b: </strong>';
		echo $b . '-' . $a . '+(-' . $c . ')=';
		echo $b-$a+(-$c) . '<br />';
	}
	else {
		echo '<strong>Kui a < b: </strong>';
		echo $error;
	}

	if ($a>$b && $a==!0 && $b==!0) {
		echo '<strong>Kui a > b ning kumbki ei ole 0: </strong>';
		echo 'a^b=';
		echo pow($a, $b) . '<br />';
	}
	else {
		echo '<strong>Kui a > b ning kumbki ei ole 0: </strong>';
		echo $error;
	}

	if ($a==$b) {
		echo '<strong>Kui a = b: </strong>';
		echo '(' . $a . '+' . $c . ')+(' . $b . '-' . $c . ')='; 
		echo ($a+$c)+($b-$c) . '<br />';
	}
	else {
		echo '<strong>Kui a = b: </strong>';
		echo $error;
	}

	if ($a*$b=$c) {
		echo '<strong>Kui a * b = c: </strong>';
		echo $c . '-(2*(' . $a . '*' . $b . '))=';
		echo $c-(2*($a*$b)) . '<br />';
	}
	else {
		echo '<strong>Kui a * b = c: </strong>';
		echo $error;
	}

	if ($a>=1 && $b>=1 && $c>=1 && $a>$b && $b>$c) {
		echo '<strong>Kui a > b ja b > c ja arvud ei ole null ega negatiivsed: </strong>';
		echo (max($a, $b, $c)+max($a, $b, $c))/min($a, $b, $c) . '<br />';
	}
	else {
		echo '<strong>Kui a > b ja b > c ja arvud ei ole null ega negatiivsed: </strong>';
		echo $error;
	}
}

fun_math (1,2,3);
echo '<br />';
echo '<br />';
fun_math (6,5,3);
echo '<br />';
echo '<br />';
fun_math (11,8,3);
echo '<br />';
echo '<br />';
fun_math (2,2,1);
echo '<br />';
echo '<br />';
fun_math (6,3,2);

echo "<br /><strong>Ylesanne 0503</strong>";

?>
