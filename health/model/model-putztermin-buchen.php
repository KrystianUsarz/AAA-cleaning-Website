<?php 
    include 'model-database-connection.php';
$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $Vorname = htmlspecialchars(trim($_POST['vorname'] ?? ''));
    $Nachname = htmlspecialchars(trim($_POST['nachname'] ?? ''));
    $Email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $Telefonummer = htmlspecialchars(trim($_POST['telefonummer'] ?? ''));
    $Strasse = htmlspecialchars(trim($_POST['strasse'] ?? ''));
    $PLZ = htmlspecialchars(trim($_POST['plz'] ?? ''));
    $Ort = htmlspecialchars(trim($_POST['ort'] ?? ''));
    $Putzstunden = htmlspecialchars(trim($_POST['putzstunden'] ?? ''));
    $Bemerkungen = htmlspecialchars(trim($_POST['bemerkungen'] ?? ''));

    if($Vorname === ''){
        $errors[] = 'Geben sie bitte ihren Namen an'; 
    }

    if($Nachname === ''){
        $errors[] = 'Geben sie bitte ihren Nachnamen an'; 
    }

    if($Email === ''){
        $errors[] = 'Geben sie bitte ihre Emailadresse an'; 
    }

    if($Telefonummer === ''){
        $errors[] = 'Geben sie bitte ihre Telefonummer an'; 
    }

    if($Strasse === ''){
        $errors[] = 'Geben sie bitte ihre Strasse an'; 
    }

    if($PLZ === ''){
        $errors[] = 'Geben sie bitte ihre Postleitzahl an'; 
    }

    if($Ort === ''){
        $errors[] = 'Geben sie bitte ihren Wohnort an'; 
    }

    if($Putzstunden === ''){
        $errors[] = 'Geben sie bitte die Putzstunden an'; 
    }
    
    if (count($errors) === 0) {
        $stmt = $pdo->prepare('INSERT INTO termin_buchen (Vorname, Nachname, Email, Telefonummer, Strasse, PLZ, Ort, Putzstunden, Bemerkungen)
        VALUES (:Vorname, :Nachname, :Email, :Telefonummer, :Strasse, :PLZ, :Ort, :Putzstunden, :Bemerkungen )');

        $stmt->execute([':Vorname' => $Vorname, ':Nachname' => $Nachname, ':Email'=> $Email, ':Telefonummer' => $Telefonummer, ':Strasse' => $Strasse, ':PLZ' => $PLZ, ':Ort' => $Ort, ':Putzstunden' => $Putzstunden, ':Bemerkungen' => $Bemerkungen]);

    }
}
?>