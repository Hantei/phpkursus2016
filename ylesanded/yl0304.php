<?php
//Hantei, phpkursus2016, 08.05.2016/15.05.2016
//Ylesanne 0304

/*

Kasutades arikmeetilist tehet moodul teha funktsioon nimega "number_info", mille sisendargumendiks on täisarv ja mis: 

1. Teatab kasutajale kas tegu on paaris või paaritu arvuga.
	Mooduli näide:
	12%2=0
	13%2=1
	14%2=0
2. Teatab kasutajale kas arv on suurem või väiksem kui 10.
3. Teatab kasutajale kas arv on suurem või väiksem kui 100.
4. Näitab kasutajale arvu ruudus.
5. Näitab kasutajale arvust ruutjuurt.

Käivita funktsioon 5 korda sisestades arvudeks: 1, 8, 9, 15, 200

*/

function number_info($i) {
	if ($i % 2) {
		echo "$i on paaritu arv";
	}
	else {
		echo "$i on paarisarv";
	}
	if ($i > 10) {
		echo ", suurem kui 10";
	}
	elseif ($i == 10) {
		echo ", võrdne 10-ga";
	}
	else {
		echo ", väiksem kui 10";
	}
	if ($i > 100) {
		echo " ja suurem kui 100. ";
	}
	elseif ($i == 100) {
		echo " ja võrdne 100-ga. ";
	}
	else {
		echo " ja väiksem kui 100. ";
	}
	echo "$i ruudus on: 2^$i = " . pow(2,$i);
	echo " ja ruutjuur $i-st on " . pow($i, 1/2);
}

number_info(1);
echo "<br>";
number_info(8);
echo "<br>";
number_info(9);
echo "<br>";
number_info(15);
echo "<br>";
number_info(200);
echo "<br>";

?>
