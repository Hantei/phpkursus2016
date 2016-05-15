<?php

header('Content-Type: text/html; charset=utf-8');

//Hantei, phpkursus2016, 30.04.2016
//Ylesanne 0103

/*

Järgnevas ülesandes tohib kasutada vaid IF tingimust, mooduli võtmist (mod %) ja FOR tsükklit. Kuvada ühe FOR tsükkliga välja järgmine arvude jada järgmisel kujul: 

100
200
300
400
500
600
700
800
900
1000

*/

for ($i=100; $i<=1000; $i++) {
	if ($i % 100 == 0) {
		echo "$i <br>";
	}
}

echo "<br><strong>Ylesanne 0103</strong>";


?>
