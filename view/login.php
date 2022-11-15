<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body{
            margin:0;
            padding:0;
        }
        .wrap{
            margin:0;
            padding:0;
            width:100%;
            height:100%;
        }
        .contents{
            margin: 0;
            padding: 0;
            width: 100%;
            height: 971px;
            background-color: #FFFDF5;

        }
        .login{
            position: absolute;
            left: 43.43%;
            top: 258px;
            padding: auto;
            margin: auto;

            font-family: 'Inter';
            font-style: normal;
            font-weight: 800;
            font-size: 48px;
            line-height: 58px;
            display: flex;
            align-items: center;
            text-align: center;

            color: #000000;
        }
        .input_id{
            position: absolute;
            width: 444px;
            left: 33%;;
            top: 403px;
        }
        .input_pw{
            position: absolute;
            width: 444px;
            left: 33%;
            top: 490px;
        }
        input{
            height: 40px;
            border: 0;
            background-color: #FFFDF5;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-size: 25px;
            line-height: 30px;
        }
        .button{
            position: absolute;
            width: 394px;
            height: 76px;
            left: 35%;
            top: 633px;

            color: #ffffff;
            background: #000000;

            font-family: 'Inter';
            font-style: normal;
            font-weight: 800;
            font-size: 24px;
            line-height: 29px;
        }
        .line{
            position: absolute;
            width: 444px;
            height: 0px;
            left: 33%;

            border: 1px solid #000000;
            background:#000000;
        }

    </style>
</head>
<body>
<div class = "wrap">
    <div class = "contents">
        <div class = 'login'>LOGIN</div>
        <form>
            <input type = "text" placeholder = "ID" class = "input_id" name = "id" id = "id"></input>
            <hr class = "line" style = "top: 455px;">
            <input type = "password" placeholder = "PASSWORD" class = "input_pw" name = "pw" id = "pw"></input>
            <hr class = "line" style = "top: 544px;">
        </form>
            <button class = "button" id = "login_btn">로그인</button>
    </div>
</div>
    
</body>
</html>
<?php

?>