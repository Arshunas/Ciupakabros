<?php

$a = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . '- A New Hope';

echo $a;

$a ='gffggfgfgfgf 5 gfggfg 88 fgf 1156156165 gfgfg 45464546 fgfggfgf 77 ffgfg';

preg_match_all('/(\d)(\d+)/', $a, $result);

echo '<pre>';

// print_r($result);

$p1 = "Don`t Be a Menace to South Central while Drinking Your Juice in the Hood";

$p2 = "Tik neriekia gasdinti PIetu Centro, geriant sultis pas save kvartale";

$rez = str_word_count($p2, 1);

print_r($rez);
$count = 0;

foreach($rez as $word) {
    if (strlen($word) <= 5) {
        $count++;
    }
}

echo "<h2>$count<h2>";

$vakaras='Vakaras';
$tekstas='Labas $vakaras';
echo "$tekstas";

for ($i = 1;; $i++){
    if ($i > 10) {
    break;
    }
    echo $i;
    }

$a = 10;
$b = $a++;
$c = --$b;
echo $c;

$a=5;
$b='5';
if ($a===$b){
echo "Kintamieji lygūs";
}else{
echo "Kintamieji nelygūs";
}


$hours = 13;
switch ($hours) {
case ($hours < 12):
echo "Good Morning";break;
case ($hours < 18):
echo "Good Afternoon"; break;
case ($hours < 22):
echo "Good evening"; break;
}

$array = [2 => 0, 4 => 1, 1 => 2, 5 => 3];
$newArray = [];
foreach($array as $key => $element) {
$newArray[$element] = $key;
}

echo $key;

$a = array();
if ($a[1]) null;
echo count($a);

function fillArray() {
    $array = [];
    $i = 0;
    while ($i > 0) {
    $array[] = $i;
    }
    return $i;
    }

echo $i;

$let = "false";    
if ($let) {
echo "true";
} else {
echo "false";
}

echo something(2);
echo something(3);
function something($number = 1) {
if (1 >= $number) {
return 1;
}
return $number * something($number - 1);
}

if (null == false) {
    echo 'true';
    } else {
    echo 'false';
    }