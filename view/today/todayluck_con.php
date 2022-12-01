<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todayluck</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .todayluck{
            width: 100%;
            height: 1681px;
            padding-top: 90px;

            background-color: #fffdf5;
        }
        .todayluck_box{
            margin: auto;
            margin-top: 45px;
        }
        .datebox{
            width: 324px;
            height: 72px;
            margin-left: 10%;

            background: #FFF1A5;
            border: 4px solid #C98724;
            border-radius: 20px;
            font-weight: 700;
            font-size: 35px;
            line-height: 72px;
            text-align: center;
            letter-spacing: 0.3em;

            color:white;

            -webkit-text-stroke: 2px #AB6700;
        }
        
        .title{
            width: 205px;
            height: 69px;
            margin-left: 300px;
            
            background: #FFF9D9;
            border: 3px solid #C98724;
            border-radius: 20px;

            font-weight: 700;
            font-size: 35px;
            line-height: 69px;
            text-align: center;
            letter-spacing: 0.3em;

            color:white;

            -webkit-text-stroke: 2px #AB6700;
        }
        .img{
            width: 236px;
            height: 236px;
            margin-bottom: 20px;
        }
        .todayluck_box > div {
            width: 1360px;
            border-bottom: 2px solid #B37C3A;
            margin: 46px auto;
        }
        img{
            width: 236px;
            height: 236px;
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
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/nav/nav_today.php";
        ?>
    </nav>
    <div class = "todayluck">
        <div class = "datebox">오늘 날짜</div>
        <div class = "todayluck_box">
            <!--금전운 내용-->
            <div class = "riches">
                <div class = "title">금전운</div>
                <div class = "img">
                    <img src = "../../img/today/money.png">
                </div>
                <div class = "riches_contents"></div>
            </div>
            <!--학업운 내용-->
            <div class = "study">
                <div class = "title">학업운</div>
                <div class = "img">
                    <img src = "../../img/today/study.png">
                </div>
                <div class = "contents"></div>
            </div>
            <!--직업운 내용-->
            <div class = "job">
                <div class = "title">직업운</div>
                <div class = "img">
                    <img src = "../../img/today/job.png">
                </div>
                <div class = "contents"></div>
            </div>
            <!--연애운 내용-->
            <div class = "love">
                <div class = "title">연애운</div>
                <div class = "img">
                    <img src = "../../img/today/love.png">
                </div>
                <div class = "contents"></div>
            </div>
        </div>
    </div>
    
</body>
</html>