<?php
    require_once $_SERVER["DOCUMENT_ROOT"]."/main/common/common.php";

    if (isset($_COOKIE['item']) && isset($_COOKIE['color']) && isset($_COOKIE['number'])) {
        $item = $_COOKIE['item'];
        $color = $_COOKIE['color'];
        $number = $_COOKIE['number'];
    } else {

        if (!isset($_COOKIE['item'])) {
            $sql = "select content from listen where type = 'item';";
            $result = sqlResult($sql);
            $row = mysqli_fetch_all($result);
            $num = mt_rand(0, count($row)-1);

            $item = $row[$num][0];
            cookie("item", $item);
        } else {
            $item = $_COOKIE['item'];
        }
        
        if (!isset($_COOKIE['color'])) {
            $sql = "select content from listen where type = 'color';";
            $result = sqlResult($sql);
            $row = mysqli_fetch_all($result);
            $num = mt_rand(0, count($row)-1);

            $color = $row[$num][0];

            cookie("color", $color);
        } else {
            $color = $_COOKIE['color'];
        }

        if (!isset($_COOKIE['number'])) {
            $number = mt_rand(0, 100);
            cookie("number", $number);
        } else {
            $number = $_COOKIE['number'];
        }
        
    }
        