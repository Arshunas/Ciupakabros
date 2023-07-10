<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST' ) {

    $id = json_decode(file_get_contents(__DIR__ . '/id.json'));
    $id++;
    file_put_contents(__DIR__ . '/id.json', json_encode($id));

    $user = [
        'user_id' => $id,
        'place_in_row'=> (int) $_POST['place_in_row'],
        'name' => $_POST['name'],
        'surname' => $_POST['surname']
    ];

    $users = unserialize(file_get_contents(__DIR__ . '/users.ser'));

    $users[] = $user;

    $users = serialize($users);
    file_put_contents(__DIR__ . '/users.ser', $users);

    header('Location: http://localhost/ciupakabros/014/users.php');
    die;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require __DIR__ . '/menu.php' ?>

    <form action="" method="post">
        <fieldset>
            <legend>ADD NEW:</legend>
            <label>name: </label>
            <input type="text" name="name"> 
            <label>name: </label>
            <input type="text" name="name"> 
            <label>row: </label>
            <input type="text" name="place_in_row"> 
            <button type="submit">ADD</button>
        </fieldset>

    </form>


</body>

</html>

