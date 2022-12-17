<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .con {
            width: 100%;
            height: 100vh;
            background-color: #fffdf5;

            padding-top: 274px;
        }

        .wrap {
            width: 1256px;
            height: 400px;

            margin: auto;
        }

        .item_box {
            height: 423px;
            width: 300px;

            float: left;
            margin: 0 178px 0 0;
        }

        .item_img {
            width: 242px;
            height: 242px;
            background-image: url("../../img/item/lucky_item.png");

            margin: auto;
            margin-bottom: 30px;
        }

        .item_text {
            width: 290px;
            height: 150px;

            font-weight: 700;
            font-size: 43px;
            line-height: 52px;
            text-align: center;
            letter-spacing: 0.05em;

            color: #AB6700;
        }

        .color_box {
            height: 400px;
            width: 300px;

            float: left;
            margin: 0 178px 0 0;
        }

        .color_img {
            width: 242px;
            height: 242px;
            background-image: url("../../img/item/lucky_color.png");

            margin: auto;
            margin-bottom: 30px;
        }

        .color_text {
            width: 290px;
            height: 150px;

            font-weight: 700;
            font-size: 43px;
            line-height: 52px;
            text-align: center;
            letter-spacing: 0.05em;

            color: #AB6700;
        }

        .num_box {
            height: 400px;
            width: 300px;

            float: left;
            margin: auto;
        }

        .num_img {
            width: 242px;
            height: 242px;
            background-image: url("../../img/item/lucky_num.png");

            margin: auto;
            margin-bottom: 30px;
        }

        .num_text {
            width: 290px;
            height: 150px;

            font-weight: 700;
            font-size: 43px;
            line-height: 52px;
            text-align: center;
            letter-spacing: 0.05em;

            color: #AB6700;
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
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/nav/nav_item.php";
        ?>
    </nav>
    <div class="con">
        <div class="wrap">
            <div class="item_box">
                <div class="item_img"></div>
                <div class="item_text">
                    당신의 행운의 아이템은 <span>000</span>입니다
                </div>
            </div>

            <div class="color_box">
                <div class="color_img"></div>
                <div class="color_text">
                    당신의 행운의 색은 <span>000</span>입니다
                </div>
            </div>

            <div class="num_box">
                <div class="num_img"></div>
                <div class="num_text">
                    당신의 행운의 숫자는 <span>000</span>입니다
                </div>
            </div>
        </div>

    </div>

</body>

</html>