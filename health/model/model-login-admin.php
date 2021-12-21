<?php 
include 'model/model-database-connection-admin.php';
$LoginSucces = '0';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->query('SELECT * FROM `login`');
    foreach($stmt->fetchAll() as $Login) {

        if($Login['Benutzername'] == $_POST['username'] && $Login['Passwort'] == $_POST['password']){
            echo('<h1>halllllo</h1>');
            $LoginSucces = '1';
            break;
        }
        else{
            echo('<h1>byebye</h1>');
            $LoginSucces = '0';
        }
    }
}
?>