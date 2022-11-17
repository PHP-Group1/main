<?php
    session_start();

    if (!$_SESSION) {
        include "header.php";
    } else {

        if ($_SESSION['user_id']) {
            include "login_header.php";
        } else {
            include "header.php";
        }
        
    }