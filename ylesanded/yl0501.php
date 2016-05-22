<?php

header('Content-Type: text/html; charset=utf-8');

//Hantei, phpkursus2016, 22.05.2016
//Ylesanne 0501

/*

Teha funktsioon nimega get_brithday. Mille sisendiks oleks isikukood ja väljundiks sünniaeg. Isikukoodis näitab esimene nr. sugu, 2 ja 3 sünniaastat, 4 ja 5 sünnikuud, 6 ja 7 sünnipäeva ja ülejäänud numbrid 3 on suvalised ja lõpuks kontrollsumma.
Nt. kui $ik="37903250678"; siis aasta leiaks $y = "19".$ik[1].$ik[2]; 
Sinu isikukood on: 37903250678
Sinu sünnipäev on: 25.03.1979
Peale aastat 2000 on isikukoodi esimesed numbrid 5 ja 6.

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

echo "<br><strong>Ylesanne 0501</strong>";

?>
