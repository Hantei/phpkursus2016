<?php   


function numtostr($num){ 
    $big = array(    '',  
                    'tuhat',  
                    'miljon',  
                    'miljard',  
                    'triljon',  
                    'quadrillion',  
                    'quintillion',  
                    'sextillion',  
                    'septillion'); 
    $small = array(    '',  
                    'üks',  
                    'kaks',  
                    'kolm',  
                    'neli',  
                    'viis',  
                    'kuus',  
                    'seitse',  
                    'kaheksa',  
                    'üheksa',  
                    'kümme',  
                    'üksteist',  
                    'kaksteist',  
                    'kolmtesist',  
                    'neliteist',  
                    'viistesit',  
                    'kuusteist',  
                    'seitseteist',  
                    'kaheksatesist',  
                    'üheksateist'); 
    $other = array(    '', 
                    '', 
                    'kakskümmend',  
                    'kolmkümmend',  
                    'nelikümmend',  
                    'viiskümmend',  
                    'kuuskümmend',  
                    'seitsekümmend',  
                    'keheksakümmend',  
                    'üheksakümmend'); 
    $hun = 'sada'; 
    $end = array(); 
    $num = strrev($num); 
    $final = array(); 
    for($i=0; $i<strlen($num); $i+=3){ 
        $end[$i] = strrev(substr($num, $i, 3)); 
    } 
    $end = array_reverse($end); 
    for($i=0; $i<sizeof($end); $i++){ 
        $len = strlen($end[$i]); 
        $temp = $end[$i]; 
        if($len == 3){ 
            $final[] = $temp{0} != '0' ? $small[$end[$i]{0}] . ' ' . $hun : $small[$end[$i]{0}]; 
            $end[$i] = substr($end[$i], 1, 2); 
        } 
        if($len > 1){ 
            $final[] = array_key_exists($end[$i], $small) ? $small[$end[$i]] : $other[$end[$i]{0}] . ' ' . $small[$end[$i]{1}]; 
        }else{ 
            $final[] = $small[$end[$i]{0}]; 
        } 
        $final[] = $temp != '000' ? $big[sizeof($end) - $i - 1] : ''; 
    } 
    return str_replace(array('  ', '  ', '  ', '  ', '  ', '  ', '  '), ' ', implode(' ',$final)); 
} 


$file = "cert.rtf"; 
//$file = "/var/www/html/generate_doc/cert.rtf"; 

$source = fopen($file, "r"); 
$text = fread($source, filesize($file)); 
fclose($source); 


function fillin($tag, $value, $text) 
{ 
  return preg_replace("!([/?)(\w+)([^>]$tag?])!e", $value, $text); 
  //return str_replace($value, $tag, $text); 
} 


$text = fillin("[NIMI]", "TIMO", $text); 
$text = fillin("[KUUPAEV]", date("d.m.Y"), $text); 
//$text = fillin("[MYYJA]", "Uugu Puravik", $text); 
//$text = fillin("[REGKOOD]", rand(10000000, 100000000), $text); 
//$text = fillin("[AADRESS]", "Metsiku Jänese tn. 7, Tihemetsa 12415", $text); 
//$text = fillin("[KONTO]", rand(10000000, 100000000), $text); 
//$text = fillin("[TEL]", rand(1000000, 10000000), $text); 


header("HTTP/1.1 200 OK"); 
header("Content-type: application/rtf"); 

$today = date("ymd_Gis"); 
$output_filename = "cert_$today.rtf"; 

header("Content-type: application/force-download"); 
header("Content-Disposition: attachment; filename=$output_filename"); 
header("Content-lenght: " . strlen($text)); 

echo $text; 

?>
