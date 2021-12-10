<?php
    $user = 'root';
    $password = ''  ;
    $database = 'aaa-cleaning';

    $pdo = new PDO('mysql:host=localhost;dbname=' . $database, $user, $password, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
?>

<!--$user = 'd041e_krusarz';
    $password = '54321_Db!!!'  ;
    $database = 'd041e_krusarz';

    $pdo = new PDO('mysql:host=mysql2.webland.ch;dbname=' . $database, $user, $password, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);-->