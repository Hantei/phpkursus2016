<?php

header('Content-Type: text/html; charset=utf-8');

//Hantei, phpkursus2016, 30.04.2016
//Ylesanne 0105

/*

Kuvada kahe FOR tsükkliga välja järgmine arvude jada järgmisel kujul:

10,-10
10,-9
10,-8
10,-7
10,-6
10,-5
10,-4
10,-3
10,-2
10,-1
10,0
10,1
10,2
10,3
10,4
10,5
10,6
10,7
10,8
10,9
10,10
9,-10
9,-9
... jne. kuni
-10,10

*/

for ($i=10; $i>=-10; $i--) {
	for ($j=-10; $j<=10; $j++) {
		echo "$i,$j<br>";
	}
}

echo "<br><strong>Ylesanne 0105</strong>";


?>
