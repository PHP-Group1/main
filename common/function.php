<?php

    require 'config/conn.php';
    require '../../auth/service/cookie.php';

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

?>