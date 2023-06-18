<?php
$users = unserialize(file_get_contents(__DIR__ . '/users.ser'));

$page = max (1, (int) ($_GET['page'] ?? 1));

echo '<h1>'. $page .'</h1>';

// $users = array_slice($users, ($page - 1) * 10, 10);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="http://localhost/ciupakabros/014/users.php?page=1">PAGE 1</a>
    <a href="http://localhost/ciupakabros/014/users.php?page=2">PAGE 2</a>
    <a href="http://localhost/ciupakabros/014/users.php?page=3">PAGE 3</a>
    <form action="" method="get">
        <fieldset>
            <legend>SORT:</legend>
            <select name="sort">
                <option value="name_asc">Name A-Z</option>
                <option value="name_asc">Name Z-A</option>
                <option value="id_asc">ID 1-9</option>
                <option value="id_asc">ID 9-1</option>
            </select>
            <button type="submit">sort</button>
        </fieldset>

    </form>
<ul>
<?php foreach($users as $user) : ?>
<li>
    <b>ID:</b> <?= $user['user_id'] ?> <i><?= $user['name'] ?> <?= $user['surname'] ?>  </i>
</li>
<?php endforeach ?>
</ul>
    
</body>
</html>