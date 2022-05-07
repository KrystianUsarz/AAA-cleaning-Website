<?php 
    // abfragen, was der benutzer sehen möchte
    $page = $_GET['page'] ?? '';

    switch($page){

        case '':
            require 'view/view-homepage.php';
        break;
        case 'home':  
            require 'view/view-homepage.php';
        break;
        case 'putzterminbuchen':
            require 'view/view-putztermin-buchen.php';
        break;
        case 'angebote':
            require 'view/view-angebote.php';
        break;
        case 'uberuns':
            require 'view/view-uber-uns.php';
        break;
        case 'adminbereich':
            require 'view/view-admin-login.php';
        break;
        case 'adminhome':
            require 'view/view-admin-homepage.php';
        break;
        case 'managehomepage':
            require 'view/view-admin-manage-homepage.php';
        break;
        case 'manageangebote':
            require 'view/view-admin-manage-angebote.php';
        break;
        case 'manageuberuns':
            require 'view/view-admin-manage-uber-uns.php';
        break;
        case 'calender':
            require 'view/view-admin-calender.php';
        break;
        case 'clients':
            require 'view/view-admin-clientss.php';
        break;
        default:
            echo '404 page not found';
        break;
    }

?>