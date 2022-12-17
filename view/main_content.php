<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main-page</title>
    <style>
        body{
            padding: 0;
            margin: 0;
        }
        .main_page{
            padding: 0;
            margin: 0;
            width: 100vw;
            height: 971px;
            background-color: #FFFDF5;
            padding-top: 50px;
        }
        .contents_box{
            height: 837px;
            width: 1364px;
            margin: auto;
            margin-top: 50px;
        }
        .content1{
            width: 970px;
            height: 496px;
            margin:0 31px 20px 0;
            background-image: url('../img/content/content1.png');
            background-color: #E8FFDD;
            float:left;
        }
        .content2{
            width: 363px;
            height: 498px;
            background-image: url('../img/content/content2.png');
            background-color: #E8FFDD;
            float:left;
        }
        .content3{
            width: 788px;
            height: 321px;
            background-image: url('../img/content/content3.png');
            background-color: #DFF5FF;
            margin-right: 25px;
            float:left;
            clear:both;
        }
        .content4{
            width: 551px;
            height: 321px;
            background-image: url('../img/content/content4.png');
            background-color: #FFEFF7;
            float:left;
        }

    </style>
</head>
<body>
    <header>
        <?php
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/header/header_check.php";
        ?>
    </header>
    <nav>
        <?php
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/nav/nav.php";
        ?>
    </nav>
    <div class = "main_page">
        <div class = "contents_box">
            <!--포춘쿠키-->
                <div class = "content1" id = "fortune_cookie"></div>
            <!--오늘의 운세-->
                <div class = "content2" id = "todayLuck_con"></div>
            <!--듣고싶은 말-->
                <div class = "content3" id = "listen_con"></div>
            <!--행운의 아이템-->
                <div class = "content4" id = "luckyItem_con"></div>
        </div>
    </div>
    <div style = "background-color: blue; width:100%; height:115px;">
        <?php
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/address.php";
        ?>
    </div>
   
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
       $(document).ready (() => {
            $('#fortune_cookie').click(() => {
                $(location).attr("href","http://localhost:80/main/view/fortune/fortune_content.php")
            })

            $('#todayLuck_con').click(() => {
                $(location).attr("href","http://localhost:80/main/view/today/need_today.php")
            })

            $('#listen_con').click(() => {
                $(location).attr("href","http://localhost:80/main/view/listen/listen_con.php")
            })

            $('#luckyItem_con').click(() => {
                $(location).attr("href","http://localhost:80/main/view/item/need_item.php")
            })
            
        })
    </script>
</body>
</html>