<?php
    $user = 'root';
    $password = ''  ;
    $database = 'aaa-cleaning-admin';

    $pdo = new PDO('mysql:host=localhost;dbname=' . $database, $user, $password, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
?>