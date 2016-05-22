<?php

header('Content-Type: text/html; charset=utf-8');

//Hantei, phpkursus2016, 22.05.2016
//Ylesanne 0401

/*

Tee massiiv kuhu lisada järgmised andmed:
Nimi, aadress, pildi nimi (nt. vello.jpg), kodulehekülg (nt. www.onu.ee)
Pilt salvesta ülesande kataloogi.
Luua HTML lehekülg kuhu kuvda massiivist välja eelpool kirjeldatud andmed.
Nime kuvamiseks kasuta <b> tagi.
Aadressi kuvamiseks kasuta <i> tagi.
Pildi kuvamiseks kasuta <img src=> tagi.
Kodulehe lingi kuvamiseks kasuta <a href=> tagi.

*/

$meowl['name']="Meowl";
$meowl['address']="The Internet, <br />Imagination Street";
$meowl['pic_name']="meowls.jpeg";
$meowl['www']="http://www.mymodernmet.com/profiles/blogs/meowls/";

echo '
<html>
<body>
	<table border="1" cellpadding="5px">
		<tr>
			<td>NAME:</td>
			<td>ADDRESS:</td>
			<td>PICTURE:</td>
			<td>WEBSITE:</td>
		</tr>
		<tr>
			<td><b>' . $meowl['name'] . '</b></td>
			<td><i>' . $meowl['address'] . '</i></td>
			<td><img src="' . $meowl['pic_name'] . '" alt="Meowls" height="150px" width="220px"></td>
			<td><a href="' . $meowl['www'] . '">Meowl page</a></td>
		</tr>
	</table>

<br />
<strong>Ylesanne 0401</strong>

</body>
</html>
';

?>
