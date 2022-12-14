<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .header{
            position: relative;
            width: 100%;;
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
        .header > p{
            cursor: pointer;
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
    </style>
</head>
<body>
        <div class = "header">
            <a href = "http://localhost:80/main/view/main_content.php"><h3 class = "logo"> 당신의 운세</h3></a>
            <p style = "left:95%;" id = "qna">QnA</p>
            <p style = "left:85%;" id="logout">로그아웃</p>
        </div>
        <script>
            let logout = document.querySelector('#logout');

            logout.addEventListener('click', () => {
                location.href = "http://localhost:80/main/auth/service/logout.php";
            })

            let qna = document.querySelector('#qna');


            qna.addEventListener('click', () => {
                location.href = "http://localhost:80/main/view/Qna/req_content.php";
            })

        </script>
</body>
</html>

