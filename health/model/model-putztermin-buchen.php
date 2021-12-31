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
        $errors[] = 'Geben sie bitte ihren Namen an.'; 
    }
    else if(preg_match('~[0-9]+~', $Vorname)){
        $errors[] = 'Geben sie bitte einen gültigen Voramen ohne Zahlen an.';
    }

    if($Nachname === ''){
        $errors[] = 'Geben sie bitte ihren Nachnamen an.'; 
    }
    else if(preg_match('~[0-9]+~', $Nachname)){
        $errors[] = 'Geben sie bitte einen gültigen Nachnamen ohne Zahlen an.';
    }

    if($Email === ''){
        $errors[] = 'Geben sie bitte ihre Emailadresse an.'; 
    }

    if($Telefonummer === ''){
        $errors[] = 'Geben sie bitte ihre Telefonummer an.'; 
    }
    else if(is_numeric($Telefonummer) == false){
        $errors[] = 'Geben sie bitte eine gültie Telefonummer an.';
    }
    else if (strlen($Telefonummer) !== 12 && strlen($Telefonummer) !== 10){
        $errors[] = 'Geben sie bitte eine gültige Telefonummer an.';
    }

    if($Strasse === ''){
        $errors[] = 'Geben sie bitte ihre Strasse an.'; 
    }
    else if (preg_match('~[0-9]+~', $Strasse) == false) {
        $errors[] = 'Geben sie bitte ihre Hausnummer bei der Strasse an.';
    }
    else if(is_numeric($Strasse)){
        $errors[] = 'Geben sie bitte einen gültigen Strassennamen mit der Hausnummer an';
    }

    if($PLZ === ''){
        $errors[] = 'Geben sie bitte ihre Postleitzahl an.'; 
    }
    else if(is_numeric($PLZ) == false){
        $errors[] = 'Geben sie bitte eine gültige Postleitzahl an.';
    }
    else if (strlen($PLZ) !== 4){
        $errors[] = 'Geben sie bitte eine gültige Postleitzahl an.';
    }

    if($Ort === ''){
        $errors[] = 'Geben sie bitte ihren Wohnort an.'; 
    }
    else if(preg_match('~[0-9]+~', $Ort)){
        $errors[] = 'Geben sie bitte einen gültigen Ort ohne Zahlen an.';
    }

    if($Putzstunden === ''){
        $errors[] = 'Geben sie bitte die Putzstunden an.'; 
    }
    else if(is_numeric($Putzstunden) == false){
        $errors[] = 'Geben sie bitte eine gültige anzahl Putzstunden an.';
    }
    
    if (count($errors) == 0) {
        $stmt = $pdo->prepare('INSERT INTO termin_buchen (Vorname, Nachname, Email, Telefonummer, Strasse, PLZ, Ort, Putzstunden, Bemerkungen)
        VALUES (:Vorname, :Nachname, :Email, :Telefonummer, :Strasse, :PLZ, :Ort, :Putzstunden, :Bemerkungen )');

        $stmt->execute([':Vorname' => $Vorname, ':Nachname' => $Nachname, ':Email'=> $Email, ':Telefonummer' => $Telefonummer, ':Strasse' => $Strasse, ':PLZ' => $PLZ, ':Ort' => $Ort, ':Putzstunden' => $Putzstunden, ':Bemerkungen' => $Bemerkungen]);

        if(isset($_POST['halbtage']))
        {
            $Halbtage = $_POST['halbtage'];
            $fk_Kunde = $_POST['kundenID'];
        
            foreach($Halbtage as $Halbtag){
                if($Halbtag === '1'):
                    $favHalbtag = 'Mittwoch Morgen';
                elseif($Halbtag === '2'):
                    $favHalbtag = 'Mittwoch Nachmittag';
                elseif($Halbtag === '3'):
                    $favHalbtag = 'Donnrstag Morgen';
                elseif($Halbtag === '4'):
                    $favHalbtag = 'Donnrstag Nachmittag';
                elseif($Halbtag === '5'):
                    $favHalbtag = 'Freitag Morgen';
                elseif($Halbtag === '6'):
                    $favHalbtag = 'Freitag Nachmittag';
                endif;
                
                $stmt = $pdo->prepare('INSERT INTO favorit_halbtage (fk_Kunde, Halbtag)
                VALUES (:fk_Kunde, :Halbtag )');
                $stmt->execute([':fk_Kunde' => $fk_Kunde, ':Halbtag' => $favHalbtag]);
            }
        
        }
        else{
            
        }
    }
}
?>