<?php 
include 'model/model-database-connection-admin.php';
$LoginSucces = '0';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->query('SELECT * FROM `login`');
    foreach($stmt->fetchAll() as $Login) {

        if($Login['Benutzername'] == $_POST['username'] && $Login['Passwort'] == $_POST['password']){
            $LoginSucces = '1';
            break;
        }
        else{
            $LoginSucces = '0';
        }
    }
}
?>