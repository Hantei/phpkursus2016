<?php

//$surnames = "kala 123
//koer 2121";

function getname($name)
{
    global $names;
    
$names = "koer    123
kass    423434
kukk    332
kana    234234";
    
$rows = explode("\n", $names);
    //print_r($rows);
    
    foreach($rows as $key => $val)
    {
        $temp = explode("    ", $val);
        $surename[$temp[0]] = $temp[1];
    }
    
    print_r($surename);
    
    return $count;
}

getname("koer");

?>