<?php 
include './model/model-database-connection-admin.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->query('SELECT * FROM `user`');
    foreach($stmt->fetchAll() as $Login) {

        if($Login['username'] === 'username' && $Login['password'] === 'password'){

        }
    }

}
?>