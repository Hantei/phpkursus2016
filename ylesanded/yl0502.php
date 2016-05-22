<?php

header('Content-Type: text/html; charset=utf-8');

//Hantei, phpkursus2016, 22.05.2016
//Ylesanne 0502

/*

Teha funktsioon nimega "est_day". Selle sisendiks olgu date funktsiooniga saadud nädalapäev. Väljundiks aga eesti keelne nädalapäev. 
* Leida kuidas date funktsioon leiab nädalapäeva (http://ee.php.net/manual/en/function.date.php)
* Sisestada see funktsiooni
* Luua massiiv nt. ja leida päeva vastavus massiivi elemendile
$mas[1]="Esmaspäev"; 
$mas[2]="Teisipäev";
* Tagastada peaprogrammile (return) ja seal väljastada eesti keelne nädalapäeva nimetus

*/
$today = date("N");

function est_day($today) {
$mas[1]="Esmaspäev"; 
$mas[2]="Teisipäev";
$mas[3]="Kolmapäev"; 
$mas[4]="Neljapäev";
$mas[5]="Reede"; 
$mas[6]="Laupäev";
$mas[7]="Pühapäev";

return $mas[$today];
}

echo 'Nädalapäev on: '.est_day($today).'<br>';

echo "<br><strong>Ylesanne 0502</strong>";

?>
