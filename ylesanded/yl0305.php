<?php
//Hantei, phpkursus2016, 08.05.2016/15.05.2016
//Ylesanne 0305

/*

Teha funktsioon nimega "string_info". Funktsiooni sisendargumendiks olgu teksti string ($string). Funktsioon üleb:

1. Mis on selle stringi esimene täht ja viimane täht. Funktsioon "strlen" leiab stringi pikkuse ja "echo $string[0]" kuvab esimese tähe.
2. Mitu tähte stringis on (strlen).
3. Kogu string tehaks läbiva väiketähega (strtolower) ja väljastatakse.
4. Kogu string tehaks läbiva suurtähega (strtoupper) ja väljastatakse.
5. Tsükliga loetakse kokku ja kuvatakse ekraanile mitu "a" tähte stringis esineb.

*/


function string_info($string) {
	$strlen = strlen($string);
	$firstletter = $string[0];
	$lastletter = substr($string, -1);
	$lowercase = strtolower($string);
	$uppercase = strtoupper($string);
		echo 'String: <strong>' . $string . '</strong>';
		echo '<br>';
		echo 'Stringi pikkus on <strong>' . $strlen . ' </strong>tähemärki';
		echo '<br>';
	
		echo 'Esimene tähemärk on: <strong>' . $firstletter . '</strong>';
		echo '<br>';
		echo 'Viimane tähemärk on: <strong>' . $lastletter . '</strong>';
		echo '<br>';
		echo 'Ainult väikesed tähed: <strong>' . $lowercase . '</strong>';
		echo '<br>';
		echo 'Ainult suured tähed: <strong>' . $uppercase . '</strong>';
		echo '<br>';
		echo '"A" tähti on stringis kokku <strong>' . substr_count($lowercase, 'a') . '</strong> tükki';

}

$string1 = 'AbCdeFghijklmNopqrsTuvwxyza2A3a4a5';
$string2 = '1dsdAbCdeFghijkl3456234aaagetsdAAaa';
echo '<p>';
string_info($string1);
echo '</p><p>';
string_info($string2);
echo '</p><p>';
string_info('iAyde873AaddTty');
echo '</p>';
?>
