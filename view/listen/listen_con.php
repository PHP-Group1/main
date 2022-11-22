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
            width: 100%;
            height: 901px;

            padding-top: 96px;
            background-color: #FFFDF5;
        }
        .select_listen{
            margin: auto;
            padding: auto;
            width: 1396px;
            height: 491px;
        }
        .select_listen > div{
            width: 331px;
            height: 491px;

            background: #E4FFDD;
            border-radius: 20px;
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
        .comfort{
            
        }
        .listen_text{
            font-weight: 700;
            font-size: 60px;
            width: 752px;
            height: 73px;

            margin: auto;
            margin-top: 111px;

            color: #AB6700;
        }
    </style>
</head>
<body>
    <div class = "listen_con">
        <div class = "select_listen">
            <!--응원의 말-->
            <div class = "cheer">
                <div class = "cheer_img"></div>
                <di class = "cheer_text"></di>
            </div>
            <!--칭찬의 말-->
            <div class = "comple">
                <div class = "comple_img"></div>
                <div class = "comple_text"></div>
            </div>
            <!--잔소리의 말-->
            <div class = "nag">
                <div class = "nag_img"></div>
                <div class = "nag_text"></div>
            </div>
            <!--위로의 말-->
            <div class = "comfort">
                <div class = "comfort_img"></div>
                <div class = "comfort_text"></div>
            </div>
            
        </div>
        <div class = "listen_text">오늘은 어떤말이 듣고싶나요?</div>
    </div>
    
</body>
</html>