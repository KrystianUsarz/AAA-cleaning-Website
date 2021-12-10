<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAA-Cleaning</title>
</head>
<body>
    
    <?php 
        // abfragen, was der benutzer sehen möchte
        $page = $_GET['page'] ?? '';

        if ($page === '' || $page === 'home') {
            require 'view/view-homepage.php';
        }
        else if ($page === 'putzterminbuchen') {
            require 'view/view-putztermin-buchen.php';
        }
        else if ($page === 'angebote') {
            require 'view/view-angebote.php';
        }
        else if ($page === 'uberuns') {
            require 'view/view-uber-uns.php';
        }
        else if ($page === 'adminbereich') {
            require '';
        }
        else {
            echo '404 page not found';
        }
    ?>
  </body>
</html>