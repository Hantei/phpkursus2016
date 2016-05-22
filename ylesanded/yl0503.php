<?php

header('Content-Type: text/html; charset=utf-8');

//Hantei, phpkursus2016, 22.05.2016
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

echo '<table border="1" cellpadding="5px">'; 

for ($i=1; $i <= 10; $i++) { 
	echo '<tr>'; 
		for($j=1; $j <= 10; $j++) { 
		echo '<td align="center"><b>' . $i*$j . '</b></td>'; 
        } 
	echo '</tr>'; 
} 
echo '</table>'; 

echo "<br><strong>Ylesanne 0503</strong>";

?>
