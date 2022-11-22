<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>request</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .req_con{
            margin: 0;
            padding: 0;
            width: 100%;
            height: 971px;

            background: #FFFDF5;
            
            display: flex;
            justify-content : center;
        }
        
        .text{
            position:absolute;
            top:190px;
            padding: 0;
            margin: 0;

            font-weight: 700;
            font-size: 40px;
            line-height: 48px;
        }

        .input_box{
            position: absolute;
            top: 260px;
            width: 937px;
            height: 455px;
            resize: none;
        }
        .submit{
            position: absolute;
            margin:0;
            padding:0;
            top: 737px;
            left: 76%;
            width: 109px;
            height: 48px;

            font-weight: 700;
            font-size: 32px;
            line-height: 39px;
            background-color: #FFFDF5;
        }
    </style>
</head>
<body>
    <div class = "req_con">
        <div class = "text">요구사항 및 개선사항을 입력해주세요</div>
            <textarea class = "input_box" name = "request"></textarea>
        <button class = "submit">보내기</button>
    </div>
    
</body>
</html>