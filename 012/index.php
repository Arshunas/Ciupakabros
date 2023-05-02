<?php

$animal = 'Bebras';

$animal2 = 'Barsukas';


function go(&$a)
{
    global $animal; //BLOGAI

    $hello = 'LABUKAS';
    // echo $animal;

    $a = 'Dramblys';

    echo $a;
}

go($animal2);

echo $animal2;

////////////////////////////////////////////

function fun($vienas, $du = 7) 
{
    return $vienas * $du;
}
function fun2($a, ...$all) 
{
    $count = 1;
    foreach($all as $value) {
        $count = $count * $value;
    }
    return $count;
}

$result = fun(11, 2);
$result = fun2(11);

$arg = [14, 22];

$result = fun(...$arg);

echo "<h1>$result</h1>";