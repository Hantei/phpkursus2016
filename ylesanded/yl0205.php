<?php
//Hantei, phpkursus2016, 08.05.2016
//Ylesanne 0205

/*

Sisesta käsitsi 3x3 kahemõõtmeline massiiv. Massiivi elementideks sisesta filmide nimed.
Nt.
$movies[1][1] = 'Matrix';
$movies[1][2] = 'Titanic';
jne.
Väljasta see massiiv tsüklitega.

*/

$movies[1][1] = 'Matrix';
$movies[1][2] = 'Titanic';
$movies[1][3] = 'Gladiator';
$movies[2][1] = 'Frozen';
$movies[2][2] = 'Antichrist';
$movies[2][3] = 'Batman';
$movies[3][1] = 'Avengers';
$movies[3][2] = 'Ice Age';
$movies[3][3] = 'Fifth Element';

for ($i = 1; $i < 4; $i++) {
  for ($j = 1; $j < 4; $j++) {
    echo $movies[$i][$j] . "<br>";
  }
}



?>
