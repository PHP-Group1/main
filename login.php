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
            width:1440px;
            height:1024px;
        }
        .header{
            width: 100%;
            height: 53px;
            background-color : #393939;
            margin: 0;
            padding: 0;
        }
        .logo{
            float:left;
            margin-top: 14px;
            margin-left: 28px;
            padding : 0;
            color: #ffffff;

            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;  
        }
        p{
            color: #ffffff;
            position: absolute;
            height: 24px;
            top: 14px;
            margin: 0;
            padding: 0;

            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;
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
            width: 266px;
            height: 91px;
            left: 44.5%;
            top: 258px;

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
            left: 500px;
            top: 403px;
        }
        .input_pw{
            position: absolute;
            width: 444px;
            left: 500px;
            top: 490px;
        }
        .button{
            position: absolute;
            width: 394px;
            height: 76px;
            left: 520px;
            top: 633px;

            color: #ffffff;
            background: #000000;
        }

        
        
    </style>
</head>
<body>
<div class = "wrap">
    <div class = "header">
        <h3 class = "logo"> 당신의 운세</h3>
        <p style = "left: 1367px; width: 42px; ">QnA</p>
        <p style = "left: 1215px; width: 74px; ">회원가입</p>
        <p style = "left: 1079px; width: 56px;">로그인</p>
    </div>
    <div class = "contents">
        <div class = 'login'>LOGIN</div>
            <input type = "text" placeholder = "ID" class = "input_id" name = "id" id = "id"></input>
            <input type = "password" placeholder = "PW" class = "input_pw" name = "pw" id = "pw"></input>
            <input type = "submit" class = "button" value = "로그인"></input>
    </div>
</div>
    
</body>
</html>
<?php

?>