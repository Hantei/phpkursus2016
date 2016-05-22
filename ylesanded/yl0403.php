<?php

header('Content-Type: text/html; charset=utf-8');

//Hantei, phpkursus2016, 22.05.2016
//Ylesanne 0403

/*

Lisa massiivi 15 HTML erinevat värvi.
Leia ilusaid värvi nimed siit: http://www.w3schools.com/colors/colors_names.asp
Kuva tsükliga välja värvuste nimed ja värvi need sama värvi nt. 
<span style='color: cyan'>cyan - sinine taevas</span>

*/

$colours[1]="Aqua";
$colours[2]="Crimson";
$colours[3]="DarkBlue";
$colours[4]="DarkGreen";
$colours[5]="DarkMagenta";
$colours[6]="DeepPink";
$colours[7]="DodgerBlue";
$colours[8]="GoldenRod";
$colours[9]="GreenYellow";
$colours[10]="IndianRed";
$colours[11]="Indigo";
$colours[12]="LightCoral";
$colours[13]="Maroon";
$colours[14]="Salmon";
$colours[15]="Teal";

echo '<table border="1" cellpadding="5px"><tr><td>';

foreach ($colours as $key => $val) {
  	echo $key . '. <span style="color:' . $val . '">' . $val . '</span><br />'; 
} 
echo '</td></tr></table>';

echo "<br><strong>Ylesanne 0403</strong>";

?>
