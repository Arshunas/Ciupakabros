<?php

function getUnique($to)
{
    static $ids = [];
    do {
        $id = rand(1, $to);
    } while(in_array($id, $ids));
    $ids[] = $id;
    return $id;
}

$users = array_map(fn($_) => ['user_id' => getUnique(100), 'place_in_row'=> rand(1, 100)], range(1, 30));

echo '<pre>';
print_r($users);

