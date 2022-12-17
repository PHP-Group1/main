<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listen navbar</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .navbar{
            margin: 0;
            padding: 0;
            position: absolute;

            width: 100%;
            height: 70px;

            background-color: #FFFDF5;
        }
        .todayLuck{
            margin: 0;
            padding: 0;
            position: absolute;
            top : 16px;
            left: 2%;

            font-weight: 400;
            font-size: 28px;
            line-height: 34px;
            text-align: center;
        }
        .animal{
            margin: 0;
            padding: 0;
            position: absolute;
            top : 16px;
            left: 19%;

            font-weight: 400;
            font-size: 28px;
            line-height: 34px;
            text-align: center;

        }
        .star{
            margin: 0;
            padding: 0;
            position: absolute;
            top : 16px;
            left: 35%;

            font-weight: 400;
            font-size: 28px;
            line-height: 34px;
            text-align: center;

        }
        .listen{
            margin: 0;
            padding: 0;
            position: absolute;
            top : 16px;
            left: 53%;

            font-weight: 400;
            font-size: 28px;
            line-height: 34px;
            text-align: center;

            border-bottom: 2px solid #000000;

        }
        .fortune{
            margin: 0;
            padding: 0;
            position: absolute;
            top : 16px;
            left: 72%;

            font-weight: 400;
            font-size: 28px;
            line-height: 34px;
            text-align: center;

        }
        .item{
            margin: 0;
            padding: 0;
            position: absolute;
            top : 16px;
            left: 87%;

            font-weight: 400;
            font-size: 28px;
            line-height: 34px;
            text-align: center;

        }
        .navbar > div {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class = "navbar">
        <div class = "todayLuck" id = "todayluck">오늘의 운세</div>
        <div class = "animal" id = "animal">띠 운세</div>
        <div class = "star" id = "star">별자리 운세</div>
        <div class = "listen" id = "listen">듣고싶은 말</div>
        <div class = "fortune" id = "fortune_cookie_nav">포춘쿠키</div>
        <div class = "item" id = "item">행운의 아이템</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src=http://localhost:80/main/js/nav.js></script>
    <script>
        $('#fortune_cookie_nav').click(() => {
            $(location).attr("href","http://localhost:80/main/view/fortune/fortune_content.php")
        })
    </script>
</body>
</html>