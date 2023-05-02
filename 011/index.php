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