<?php

const DSN = 'mysql:host=81361c767c38;dbname=common;charset=utf8';
const USERNAME = 'yasaka';
const PASSWORD = '19841984';

$pdo = new PDO(DSN, USERNAME, PASSWORD);
$stmh = $pdo->query('SELECT * FROM common.todos');


$todo_list = $stmh->fetchAll(PDO::FETCH_ASSOC);
var_dump($todo_list);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO リスト</title>
</head>

<body>
    <ul>
        <?php foreach ($todo_list as $todo) : ?>
            <li><?php echo $todo['title']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>