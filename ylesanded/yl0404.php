<?php

header('Content-Type: text/html; charset=utf-8');

//Hantei, phpkursus2016, 22.05.2016
//Ylesanne 0404

/*

Tee vorm <form> tagiga kangelase andmete sisestamiseks. Pange kogu vorm ka tabelisse. Paigutage lahtrite kirjelduse esimesse veergu ja lahtrid teise veergu. Nagu on näidatud siin. http://students.tmk.edu.ee/php/materjal/php_database.php#Sisestusvorm
Nimi (<input type=text>)
Klass (<select>, <options>)
Rass (<select>, <options>)
Sugu (<input type=radio>)
Lemmikloom kaasas (<input type=checkbox>)
Kirjeldus (<textarea></textarea>)
Submit nupp <input type=submit>
Vorm kinni.

*/

echo '
<html> 
<head> 
<title>Kangelase andmed</title> 
</head> 
<body>

<form method="post"> 
<table border="1" cellpadding="5px"> 
	<tr> 
  		<td>Nimi:</td> 
  		<td><input type="text" name="name" style="width:150px"></td> 
	</tr> 
	<tr> 
  		<td>Klass:</td> 
 		<td><select name="class" style="width:150px"> 
  			<option></option> 
 			<option>Maag</option> 
  			<option>Ravitseja</option> 
  			<option>Shamaan</option> 
  			<option>Sõdalane</option> 
 			</select></td> 
	</tr> 
	<tr> 
  		<td>Rass:</td> 
  		<td><select name="race" style="width:150px"> 
  			<option></option> 
 			<option>Inimene</option> 
  			<option>Haldjas</option> 
			<option>Poolhaldjas</option>
  			<option>Ork</option> 
  			<option>Kääbik</option> 
 			</select></td>
	</tr> 
	<tr> 
  		<td>Sugu:</td> 
  		<td><input type="radio" name="gender" value="female">Naine
			<input type="radio" name="gender" value="male">Mees</td> 
	</tr> 
	<tr> 
  		<td>Lemmikloom kaasas:</td> 
  		<td><input type=checkbox name="cat">Kass<br />
			<input type=checkbox name="dog">Koer<br />
			<input type=checkbox name="horse">Hobune<br />
			<input type=checkbox name="eagle">Kotkas<br />
			<input type=checkbox name="rat">Rott</td> 
	</tr> 
	<tr> 
  		<td>Kirjeldus:</td> 
 		<td><textarea name="description" cols="25" rows="7">Kirjelda oma tegelast</textarea></td> 
	</tr> 
</table> 
<input type="submit" name="submit" value="Loo tegelane"> 
</form> 
<br />
<strong>Ylesanne 0401</strong>
</body> 
</html>
';

?>
