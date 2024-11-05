<?php

echo "Hello World!";
echo "<br/>";

$db_host = 'mysql_p1';
$db_name = 'information_schema';
$db_user = 'mysql';
$db_pass = '12345678';

$dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8';
$pdo = new PDO($dsn, $db_user, $db_pass);

$stmt = $pdo->query('select * from tables');
$row = $stmt->fetch();

print_r($row);
