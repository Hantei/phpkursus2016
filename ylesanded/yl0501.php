<?php

header('Content-Type: text/html; charset=utf-8');

//Hantei, phpkursus2016, 26.05.2016
//Ylesanne 0501

/*

Teha funktsioon nimega get_brithday. Mille sisendiks oleks isikukood ja väljundiks sünniaeg. Isikukoodis näitab esimene nr. sugu, 2 ja 3 sünniaastat, 4 ja 5 sünnikuud, 6 ja 7 sünnipäeva ja ülejäänud numbrid 3 on suvalised ja lõpuks kontrollsumma.
Nt. kui $ik="37903250678"; siis aasta leiaks $y = "19".$ik[1].$ik[2]; 
Sinu isikukood on: 37903250678
Sinu sünnipäev on: 25.03.1979
Peale aastat 2000 on isikukoodi esimesed numbrid 5 ja 6.

*/
echo '<form action="yl0501.php" method="post">';
echo 'Sisesta oma isikukood: <input type="text" name="ID" value="">';
echo '<input type="submit" name="Send" value="Saada"><br /><br />';
echo '</form>';

if(isset($_POST['ID'])) {
	get_birthday($_POST['ID']);
}

function get_birthday ($ID) {
	echo 'Sinu isikukood on: ' . $ID . '<br />';
	$error='Vigane isikukood!';

	if(strlen($ID)==11 && ctype_digit($ID)) {
		if ($ID[0]==1 || $ID[0]==2) {
			$year='18' . $ID[1] . $ID[2];
		}
		elseif ($ID[0]==3 || $ID[0]==4) {
			$year='19' . $ID[1] . $ID[2];
		}
		elseif ($ID[0]==5 || $ID[0]==6) {
			$year='20' . $ID[1] . $ID[2];
		}
		else {
			$ID[0]=0;
		}

		$month=$ID[3] . $ID[4];
		$day=$ID[5] . $ID[6];

		if ($ID[0]==!0 && checkdate($month, $day, $year)==true) {
			echo 'Sinu sünnipäev on: ' . $day . '.' . $month . '.' . $year;
		}
		else {
			echo $error;
		}
	}
	else {
		echo $error;
	}
}

echo "<br /><br /><strong>Ylesanne 0501</strong>";

?>
