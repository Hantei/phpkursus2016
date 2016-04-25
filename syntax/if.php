<?php  
/*
$line = "lause";
$line = "lause1
lause2
";

if ($line == "lause1\nlause2\n")
{
    echo "OKAY!";
}  


*/

$a = 12; 
$b = 12; 

if ($a > $b) 
{ 
    echo "A $a on suurem kui B $b<br>"; 
} 
elseif ($b > $a) 
{ 
    echo "B $b on suurem kui A $a<br>"; 
} 
else 
{ 
    echo "A $a on võrdne B $b-ga<br>"; 
} 

$money = 10000; 

if ($money > 10000) 
{ 
  echo "Raha üle 10k. Olen rahul. Raha $money.<br>"; 
} 
elseif ($money < 10000) 
{ 
  echo "Raha alla 10k. Vaja juurde. Raha $money.<br>"; 
} 
elseif ($money == 10000) 
{ 
  echo "Taha on täpselt 10k. Raha $money<br>"; 
} 

?>
