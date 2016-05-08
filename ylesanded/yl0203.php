<?php
//Hantei, phpkursus2016, 08.05.2016
//Ylesanne 0203

/*

Lisa käsitsi massiivi kümne näitleja nime kasutades massiivi loomiseks array funktsiooni 
$stars = array('Clint', 'Bruce'); 
Väljasta see "for" tsükliga.

*/

$GOT = array('Emilia Clarke', 'Kit Harington', 'Lena Headey', 'Maisie Williams', 'Peter Dinklage', 'Sophie Turner', 'Nikolaj Coster-Waldau', 'Alfie Allen', 'John Bradley-West', 'Natalie Dormer');

for ($i=0; $i<=sizeof($GOT)-1; $i++) {
	echo "$GOT[$i] <br>"; }


?>
