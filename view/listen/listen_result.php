<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cheer result</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .listen_r {
            width: 100%;
            height: 901px;
            padding-top: 65px;

            background-color: #fffdf5;
        }

        .listen_box {
            height: 811px;
            width: 1342px;
            margin: auto;
            margin-top: 50px;
        }

        .listen_title {
            width: 324px;
            height: 72px;
            margin-bottom: 31px;
            text-align: center;

            background: #FFF1A5;
            border: 4px solid #C98724;
            border-radius: 20px;
        }

        .listen_contents {
            width: 1334px;
            height: 545px;

            background: #FFFFFF;
            border: 5px solid #A55E0B;
            border-radius: 20px;
        }

        .another {
            width: 499px;
            height: 72px;
            float: right;
            margin-top: 31px;
            
            background: #FFF1A5;
            border: 4px solid #C98724;
            border-radius: 20px;

            -webkit-text-stroke: 2px #AB6700;
            font-weight: 400;
            font-size: 43px;
            line-height: 72px;
            text-align: center;
            letter-spacing: 0.05em;
            color: #FFFFFF;
        }
        .listen_title > span{
            -webkit-text-stroke: 2px #AB6700;
            font-weight: 400;
            font-size: 43px;
            line-height: 72px;
            letter-spacing: 0.05em;
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <header>
        <?php
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/header/login_header.php";
        ?>
    </header>
    <nav>
        <?php
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/nav/nav_listen.php";
        ?>
    </nav>
    <div class="listen_r">
        <div class="listen_box">
            <div class="listen_title"><span id="listen_title">하하</span></div>
            <div class="listen_contents"></div>
            <div class="another">다른말도 듣고 싶어요!</div>
        </div>
    </div>
</body>

</html>