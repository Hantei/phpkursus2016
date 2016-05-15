<?php

header('Content-Type: text/html; charset=utf-8');

//Hantei, phpkursus2016, 08.05.2016
//Ylesanne 0201

/*

Genereeri tsükliga 100 täisarvust koosnev massiiv.
Väljasta see "print_r" funktsiooniga.

*/

$arv = array();
for($i = 1; $i < 101; $i++) {
    $arv[] = $i;
}

print_r($arv);

echo "<br><strong>Ylesanne 0201</strong>";

?>
