<?php 
    include 'model-database-connection.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if(isset($_POST['uberunstitel']))
        {
            $Titel = $_POST['uberunstitel'];
            $Text = $_POST['uberunstext'];

            $stmt = $pdo->prepare('INSERT INTO uber_uns (uberunsTitel, uberunsText)
            VALUES (:uberunsTitel, :uberunsText)');

            $stmt->execute([':uberunsTitel' => $Titel, ':uberunsText' => $Text]);

        }

        if(isset($_POST['deleteuberuns']))
        {
            $uberunsID = $_POST['deleteuberuns'];

            $stmt = $pdo->prepare('DELETE FROM uber_uns WHERE ID = ?');
            $stmt->execute(array($uberunsID));
        }
    }

?>