<?php 
    include 'model-database-connection.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if(isset($_POST['angebot']))
        {
            $Angebot = $_POST['angebot'];
            $Beschreibung = $_POST['beschreibung'];
            $Preis = $_POST['preis'];

            $stmt = $pdo->prepare('INSERT INTO angebote (angebotName, angebotBeschreibung, angebotPreis)
            VALUES (:angebotName , :Beschreibung, :Preis)');

            $stmt->execute([':angebotName' => $Angebot, ':Beschreibung' => $Beschreibung, ':Preis'=> $Preis]);

        }

        if(isset($_POST['delete']))
        {
            $ID = $_POST['delete'];

            $stmt = $pdo->prepare('DELETE FROM angebote WHERE ID = ?');
            $stmt->execute(array($ID));
        }
    }

?>