<?php
    date_default_timezone_set('Asia/Seoul');
    $now = strtotime("now");
    $end = strtotime("+1 day"."00:00:00");

    $available = $end - $now;

    function cookie($cookieName, $value) {
        global $available;
        setcookie($cookieName, $value, time() + $available);
    }
