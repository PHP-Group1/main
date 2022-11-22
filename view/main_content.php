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
            width: 100%;
            height: 901px;
            background-color: #FFFDF5;
            padding-top: 50px;
        }
        .contents_box{
            height: 837px;
            width: 1364px;
            margin: auto;

        }
        .contents_box>div{
            float:left;
        }
        .contents_box>div:nth-child(3){
            clear:both;
        }
        .content1{
            width: 970px;
            height: 496px;
            background-color: #FFF9C0;
            margin:0 31px 20px 0;
        }
        .content2{
            width: 363px;
            height: 498px;
            background-color: #E8FFDD;
        }
        .content3{
            width: 788px;
            height: 321px;
            background-color: #DFF5FF;
            margin-right: 25px;
        }
        .content4{
            width: 551px;
            height: 321px;
            background-color: #FFEFF7;
        }

    </style>
</head>
<body>
    <div class = "main_page">
        <div class = "contents_box">
            <div class = "content1"></div>
            <div class = "content2"></div>
            <div class = "content3" ></div>
            <div class = "content4"></div>
        </div>
    </div>
</body>
</html>