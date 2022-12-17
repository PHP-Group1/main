<?php
    session_start();

    if (!isset($_SESSION['user_id'])) {
        include "header.php";
    } else {
            include "login_header.php";
    }