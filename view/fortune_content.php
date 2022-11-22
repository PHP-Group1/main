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
            width: 100%;
            height: 901px;
            background-color: #FFFDF5;
            padding-top: 50px;
            
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

            width: 841px;
            height: 134px;

            -webkit-text-stroke: 6px #AB6700;
        }
        .cookie_box>div{
            background-color: aqua;
            width: 340px;
            height: 340px;
            float: left;
        }
        .cookie1{
            margin-right: 30px;
            margin-bottom: 14px;
        }
        .cookie2{
            margin-right: 30px;
        }
        .cookie4{
            margin-right: 30px;
        }
        .cookie5{
            margin-right: 30px;
        }
        .cookie_box > div:nth-child(4){
            clear: both;
        }
    </style>
</head>
<body>
    <div class = "fortune_content">
        <div class = "cookie_box">
            <div class = "cookie1"></div>
            <div class = "cookie2"></div>
            <div class = "cookie3"></div>
            <div class = "cookie4"></div>
            <div class = "cookie5"></div>
            <div class = "cookie6"></div>
        </div>
         <div class = "select_cookie_text">쿠키를 골라주세요</div>
        
    </div>
</body>
</html>