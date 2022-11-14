<?php

    require 'config/conn.php';

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

?>