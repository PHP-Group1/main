<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fortune cookie</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .fortune_content{
            width: 100vw;
            height:100vh;
            background-color: #FFFDF5;
            padding-top: 100px;
        }
        .cookie_box{
            width: 1081px;
            height: 693px;
            border-radius: 20px;
            background-color: #DEDAD3;
            border: 35px solid #BDBAB3;
            margin: auto;
            margin-bottom: 30px;
        }
        .select_cookie_text{
            font-weight: 900;
            font-size: 110px;
            line-height: 139px;
            color:#ffffff;
            margin: auto;

            width: 800px;
            height: 134px;

            -webkit-text-stroke: 6px #AB6700;
        }
        .cookie_box>div{
            background-image: url('../../img/cookie/single_cookie.png');
            background-repeat: no-repeat;
            background-size:cover;
            width: 340px;
            height: 340px;
            float: left;
        }
        .cookie1{
            margin-right: 20px;
            margin-bottom: 14px;
        }
        .cookie2{
            margin-right: 20px;
        }
        .cookie4{
            margin-right: 20px;
        }
        .cookie5{
            margin-right: 20px;
        }
        .cookie_box > div:nth-child(4){
            clear: both;
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
    <div class = "fortune_content">
        <div class = "cookie_box">
            <div class = "cookie1" id = "fortune1"></div>
            <div class = "cookie2" id = "fortune2"></div>
            <div class = "cookie3" id = "fortune3"></div>
            <div class = "cookie4" id = "fortune4"></div>
            <div class = "cookie5" id = "fortune5"></div>
            <div class = "cookie6" id = "fortune6"></div>
        </div>
         <div class = "select_cookie_text">쿠키를 골라주세요</div>
    </div>

    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(() => {
            $('#fortune1').click(() => {
                $(location).attr("href","http://localhost:80/main/view/fortune/fortune_result_con.php")
            })
            $('#fortune2').click(() => {
                $(location).attr("href","http://localhost:80/main/view/fortune/fortune_result_con.php")
            })
            $('#fortune3').click(() => {
                $(location).attr("href","http://localhost:80/main/view/fortune/fortune_result_con.php")
            })
            $('#fortune4').click(() => {
                $(location).attr("href","http://localhost:80/main/view/fortune/fortune_result_con.php")
            })
            $('#fortune5').click(() => {
                $(location).attr("href","http://localhost:80/main/view/fortune/fortune_result_con.php")
            })
            $('#fortune6').click(() => {
                $(location).attr("href","http://localhost:80/main/view/fortune/fortune_result_con.php")
            })

        })
    </script>
</body>
</html>