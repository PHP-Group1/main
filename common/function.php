<?php

    require_once 'config/conn.php';
    require_once $_SERVER["DOCUMENT_ROOT"]."/main/auth/service/cookie.php";

    function sqlResult($sql) {
        global $conn;
        $result = mysqli_query($conn, $sql);
        if($result === false) {
            echo "result: false\n";
            error_log(mysqli_error($conn));
        } else {
            return $result;
        }
    }

    function cookie($cookieName, $value) {
        global $available;
        setcookie($cookieName, $value, time() + $available);
    }

    function loginCheck($logined, $not) {
        session_start();

        if (!isset($_SESSION)) {
            include $not;
        } else {
    
            if ($_SESSION['user_id']) {
                include $logined;
            } else {
                include $not;
            }
    
        }
    }

    function header_check() {
        
        session_start();

        if (!isset($_SESSION['user_id'])) {
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/header/header.php";
        } else {
            
                include $_SERVER["DOCUMENT_ROOT"]."/main/view/header/login_header.php";
            
        }
    }
?>