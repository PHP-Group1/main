<?php
    date_default_timezone_set('Asia/Seoul');
    $now = strtotime("now");
    $end = strtotime("today"."23:59:59");

    $available = $end - $now;

    function cookie($cookieName, $value) {
        global $available;
        setcookie($cookieName, $value, time() + $available);
    }
