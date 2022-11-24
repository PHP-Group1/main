<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .c1 {
            color: #AB6700;
            ;
            position: relative;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #FFFDF5;
        }

        .box1 {
            width: 100%;
            height: 971px;
            background-color: #FFFDF5;
            background: linear-gradient(180deg, #FFEDDD 0%, rgba(255, 255, 255, 0) 2%);
        }

        .box2 {
            position: absolute;
            left: 42%;
            top: 50%;
            margin: 0;
            padding: 0;
        }

        .box3 {
            width: 100%;
            height: 70px;
            background-color: #FFFDF5;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <?php
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/header/header.php";
        ?>
    </header>
    <nav>
        <?php
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/nav/nav_listen.php";
        ?>
    </nav>
    <div class="box3"></div>
    <div class="box1">
        <div class="box2">
            <h3 class="c1">로그인이 필요한 서비스입니다.</h3>
        </div>
    </div>

</body>

</html>