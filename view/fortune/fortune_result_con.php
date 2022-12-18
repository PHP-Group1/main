<?php require_once "fortuneService.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fortune cookie result page</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .f_result_con{
            width: 100vw;
            height:100vh;
            background-color: #FFFDF5;
            margin: 0;
            padding-top: 50px;
        }
        .cookie_img{
            margin: auto;
            margin-bottom: 50px;

            background-image: url('../../img/cookie/result_cookie.png');
            background-repeat: no-repeat;
            background-size:cover;
            width:800px;
            height:292px;
        }
        .fortune_text{
            width: 80%;
            height: 454px;

            margin: auto;
            background-color: white;
            border: 5px solid #A55E0B;
        }
    </style>
</head>
<body>
    <header>
        <?php
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/header/header.php";
        ?>
    </header>
    <nav>
        <?php
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/nav/nav_fortune.php";
        ?>
    </nav>
    <div class = "f_result_con">
        <div class = "cookie_img"></div>
        <div class = "fortune_text">
            <span>
                <?php print($fortune); ?>
            </span>
        </div>
    </div>
</body>
</html>