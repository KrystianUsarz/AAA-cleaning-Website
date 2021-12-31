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
        require 'view/view-login-admin.php';
    }
    else if ($page === 'adminhome') {
        require 'view/view-admin-homepage.php';
    }
    else {
        echo '404 page not found';
    }
?>