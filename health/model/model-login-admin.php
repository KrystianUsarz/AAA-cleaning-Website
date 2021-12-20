<?php 
include './model/model-database-connection-admin.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->query('SELECT * FROM `login`');
    foreach($stmt->fetchAll() as $Login) {

        if($Login['Benutzername'] == $_POST['username'] && $Login['Passwort'] == $_POST['password']){
            require './view/view-homepage.php';
            $LoginSucces = true;
        }
        else{
            $LoginSucces = false;
        }
    }

    if($LoginSucces === false){?>
        <p>Ihr Benutzername oder Passwort passt nicht</p>
<?php }
    else{?>
        <p>alles ok</p>
<?php }

}
?>