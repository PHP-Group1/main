<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listen</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .listen_con{
            width: 100vw;
            height:100vh;

            padding-top: 96px;
            background-color: #FFFDF5;
        }
        .select_listen{
            margin: auto;
            padding: auto;
            width: 1396px;
            height: 491px;
            margin-top: 50px;
        }
        .select_listen > div{
            width: 331px;
            height: 491px;
            float: left;
        }
        .cheer{
            margin-right: 24px;
        }
        .comple{
            margin-right: 24px;
        }
        .nag{
            margin-right: 24px;
        }
        .listen_text{
            font-weight: 700;
            font-size: 60px;
            width: 690px;
            height: 73px;

            margin: auto;
            margin-top: 111px;

            color: #AB6700;
        }
        .cheer_img{
            background: #E4FFDD;
            border-radius: 20px;
            background-image: url('../../img/listen/cheer.png');
            width: 331px;
            height: 491px;
        }
        .comple_img{
            width: 331px;
            height: 491px;
            background: #FFF4D9;
            border-radius: 20px;
            background-image: url('../../img/listen/com.png');
        }
        .nag_img{
            width: 331px;
            height: 491px;
            background: #FFDDDD;
            border-radius: 20px;
            background-image: url('../../img/listen/nag.png');
        }
        .comfort_img{
            width: 331px;
            height: 491px;
            background: #DDEFFF;
            border-radius: 20px;
            background-image: url('../../img/listen/comfort.png');
        }
    </style>
</head>
<body>
    <header>
        <?php
            include_once $_SERVER["DOCUMENT_ROOT"]."/main/view/header/header_check.php";
        ?>
    </header>
    <nav>
        <?php
            include_once $_SERVER["DOCUMENT_ROOT"]."/main/view/nav/nav_listen.php";
        ?>
    </nav>
    <div class = "listen_con">
        <div class = "select_listen">
            <!--????????? ???-->
            <div class = "cheer">
                <div class = "cheer_img" id = "cheer"></div>
            </div>
            <!--????????? ???-->
            <div class = "comple">
                <div class = "comple_img" id = "compliment"></div>
            </div>
            <!--???????????? ???-->
            <div class = "nag">
                <div class = "nag_img" id = "nag"></div>
            </div>
            <!--????????? ???-->
            <div class = "comfort">
                <div class = "comfort_img" id = "comfort"></div>
            </div>
            
        </div>
        <div class = "listen_text">????????? ???????????? ????????????????</div>
    </div>
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(() => {
            $('#cheer').click(() => {
                $(location).attr('href', 'http://localhost:80/main/view/listen/listen_result.php?listen_title=cheer'); 
            })
           $('#compliment').click(() => {
                $(location).attr('href', 'http://localhost:80/main/view/listen/listen_result.php?listen_title=compliment');
            })
            $('#nag').click(() => {
                $(location).attr('href', 'http://localhost:80/main/view/listen/listen_result.php?listen_title=nag');
            })
            $('#comfort').click(() => {
                $(location).attr('href', 'http://localhost:80/main/view/listen/listen_result.php?listen_title=comfort');
            })
            
        })

    </script>
</body>
</html>