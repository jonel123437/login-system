<?php
    include_once "Controller/PagesController.php";

    $pagesController = new PagesController();

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'login':
                            $pagesController->login();
                            break;
            case 'register':   
                                $pagesController->register();
                                break;
            case 'dashboard':
                                $pagesController->dashboard();
                                break;

            default:    
                        $pagesController->error();
                        break;
        }
    } else {
        include "View/login.php";
    }
?>