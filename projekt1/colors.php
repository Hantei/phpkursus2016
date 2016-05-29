<?php
//phpkursus2016
//Mirjam Petti
//29.05.2016
//Kogu kood on ise kirjutatud. Olemasolevat ei kasutanud.

if((!isset($_POST['mode_1']))&&(!isset($_POST['mode_2']))) {
	$_POST['mode_1']='mode_1';
}

echo '
<html><head><title>Color Recognizing Game</title></head><body><form action="colors.php" method="post">
';

//Mode 1
echo '
<button type="submit" name="mode_1" value="mode_1">Mode 1</button>
';

//Mode 2
echo '
<button type="submit" name="mode_2" value="mode_2">Mode 2</button><br /></form>
';

//size of the "box"
$size = ' width="50px" height="50px"';

//Base colors for Mode 1
$color['red'] = '#FF0000';
$color['blue'] = '#0000FF';
$color['green'] = '#00FF00';
$color['yellow'] = '#FFFF00';

//Correct colors for Mode 1
$color_dif['red'] = '#e60000';
$color_dif['blue'] = '#0000e6';
$color_dif['green'] = '#00e600';
$color_dif['yellow'] = '#ffff99';

//Base colors for Mode 2
$color_array_m2['red'] = array ('#ff0000', '#e60000', '#cc0000', '#b30000', '#990000', '#800000');
$color_array_m2['blue'] = array ('#0000ff', '#0000e6', '#0000cc', '#0000b3', '#000099', '#000080');
$color_array_m2['green'] = array ('#00ff00', '#00e600', '#00cc00', '#00b300', '#009900', '#008000');
$color_array_m2['yellow'] = array ('#ffff00', '#e6e600', '#cccc00', '#b3b300', '#999900', '#808000');

//Correct colors for Mode 2
$m2_color_dif['red'] = '#660000';
$m2_color_dif['blue'] = '#000066';
$m2_color_dif['green'] = '#006600';
$m2_color_dif['yellow'] = '#666600';

$static_number = rand (1,6);

$color_array = array ('red', 'blue', 'green', 'yellow');
$select = $color_array[array_rand($color_array)];

$select_e = $color_dif[$select];
$select_m2 = $m2_color_dif[$select];

echo '
<form action="colors.php" method="post">
';

//Mode 1 colors displayed
if (isset($_POST['mode_1'])) {
	echo '
	<table border="1"><tr><input type="hidden" name="mode_1" value="mode_1" /><p><strong>Select which color is different than the rest:</strong></p>
	';
	for ($i = 1; $i <= 6; $i++) {

		if ($color[$select]) {
			echo '<td bgcolor="' . $color[$select] . '"' . $size . '> </td>';
			if ($i == $static_number) {
				echo '<td bgcolor="' . $select_e . '"' . $size . '> </td>';
			}
		}
	}
}

//Mode 2 colors displayed
elseif (isset($_POST['mode_2'])) {
		echo '
		<table border="1"><tr><input type="hidden" name="mode_2" value="mode_2" /><p><strong>Select the darkest color:</strong></p>
		';
	for ($i = 1; $i <= 6; $i++) {

		if ($color_array_m2[$select]) {
			shuffle($color_array_m2[$select]);
			echo '<td bgcolor="' . $color_array_m2[$select][$i-1] . '"' . $size . '> </td>';
			if ($i == $static_number) {
				echo '<td bgcolor="' . $select_m2 . '"' . $size . '> </td>';
			}
		}
	}
}

echo '</tr><tr>';

//Radiobuttons for selection
for ($i = 1; $i <= 6; $i++) {
	echo '
	<td' . $size . ' style="text-align: center"><input type="radio" name="color" value="wrong"></td>
	';
	if ($i == $static_number) {
		echo '
		<td' . $size . ' style="text-align: center"><input type="radio" name="color" value="correct"></td>
		';
	}
}

//Submit
echo '
</tr></table><p><input type="submit" name="submit" value="Check my answer"></p></from></body></html>
';

//Error message, correct & false messages
if (isset($_POST['submit'])) {
	if (!empty($_POST['color'])) {
		if ($_POST['color']=="correct") { 
			echo '
			<br /><span style="color:green"><strong>You found the correct color!</strong></span> 
			'; 
		}
		else { 
			echo '
			<br /><span style="color:red"><strong>Sorry, wrong color.</strong></span>
			'; 
		}
	} 
	else { 
		echo '
		<br /><span style="color:red"><strong>You did not choose an answer.</strong></span>
		'; 
	}
} 

?>
