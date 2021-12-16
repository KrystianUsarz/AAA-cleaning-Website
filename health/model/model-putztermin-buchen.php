<?php 
    include 'model-db-Verbindung.php';
$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $Username = htmlspecialchars(trim($_POST['name'] ?? ''));
    $PostTitle = htmlspecialchars(trim($_POST['title'] ?? ''));
    $Context = htmlspecialchars(trim($_POST['text'] ?? ''));
    $PostImageUrl = htmlspecialchars(trim($_POST['url_link'] ?? ''));

    $needle = " ";

    if(strpos( $Context, $needle, $offset = 1) === false && strlen($Context) > 30){
        $errors[] = 'Bitte schreiben sie einen Sinnvollen Blog';
    }
    else{

    }

    if ($Username === '') {
        $errors[] = 'Bitte geben Sie einen Benutzernamen ein.';
    }

    if ($PostTitle === '') {
        $errors[] = 'Bitte geben Sie einen Titel ein.';
    }

    if ($Context === '') {
        $errors[] = 'Bitte geben Sie ihren Text ein.';
    }

    if (count($errors) === 0) {
        $stmt = $pdo->prepare('INSERT INTO blog (creator, title, url, context, create_date, likes, dislikes)
        VALUES (:Username, :Title, :Url, :Context, now(), 0, 0)');

        $stmt->execute([':Username' => $Username, ':Title' => $PostTitle,':Url'=> $PostImageUrl, ':Context' => $Context]);

    }
}
?>