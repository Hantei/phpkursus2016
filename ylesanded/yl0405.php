<?php

header('Content-Type: text/html; charset=utf-8');

//Hantei, phpkursus2016, 22.05.2016
//Ylesanne 0405

/*

Genereeri kahe FOR tsükkliga 10x10 korrutustabel.
Korrutustabel peab olema HTML tabeli sees.
Korrutustabelis peab olema esimesel real ja veerul numbrid 1-10. 
Teisel real esimese rea ja veeru korrustis jne.

Näidet otsi PHP süntaksi materjalist: http://students.tmk.edu.ee/php/materjal/php_syntax.php

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

echo "<br><strong>Ylesanne 0405</strong>";

?>
