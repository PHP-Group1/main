<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Original navbar</title>
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
            left: 10%;

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
            left: 25%;

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
            left: 36%;

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
            left: 50%;

            font-weight: 400;
            font-size: 28px;
            line-height: 34px;
            text-align: center;

        }
        .fortune{
            margin: 0;
            padding: 0;
            position: absolute;
            top : 16px;
            left: 66%;

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
            left: 80%;

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
        <div class = "fortune" id = "fortune">포춘쿠키</div>
        <div class = "item" id = "item">행운의 아이템</div>
    </div>
    <script>
        let todayluck = document.querySelector("#todayluck");

        todayluck.addEventListener("click", () => {
            location.href = `${root}view/today/need_today.php`;
        })
        let animal = document.querySelector('#animal');

        animal.addEventListener('click', () => {
            location.href = `${root}view/animal/need_animal.php`;
        })
        let star = document.querySelector('#star');

        star.addEventListener('click', () => {
            location.href = `${root}view/star/need_star.php`;
        })

        let listen = document.querySelector('#listen');

        listen.addEventListener('click', () => {
            location.href = `${root}view/listen/listen_con.php`;
        })

        let forTune = document.querySelector("#fortune");

        forTune.addEventListener("click", () => {
            location.href = `${root}/view/fortune/fortune_content.php`
        })

        let item = document.querySelector('#item');

        item.addEventListener('click', () => {
            location.href = `${root}/view/item/need_item.php`
        })
    </script>
</body>
</html>