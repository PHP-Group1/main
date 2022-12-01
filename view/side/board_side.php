<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side</title>
    <style>
        body{
            margin:0;
            padding: 0;
        }
    
        .Qna_content{
            margin: 0;
            padding: 0;
            
        }
        .side{
            position: absolute;
            width: 20%;
            height: 971px;
            margin:0;
            padding: 0;

            background: #CFCCC9;
        }
        .QnA{
            position: relative;
            top: 140px;
            left: 5%;

            font-weight: 400;
            font-size: 18px;
            line-height: 22px;
            color:black;
        }
        .req{
            position: relative;
            top: 170px;
            left: 5%;

            margin: 0;
            padding: 0;
            font-weight: 400; 
            font-size: 18px;
            line-height: 22px;
            color:black;
        }
        .employ{
            position: relative;
            top: 200px;
            left: 5%;

            margin: 0;
            padding: 0;
            font-weight: 400;
            font-size: 18px;
            line-height: 22px;
            color:black;
        }
        .board{
            position: relative;
            top: 230px;
            left: 5%;
            
            margin: 0;
            padding: 0;
            font-weight: 700;
            font-size: 18px;
            line-height: 22px;
            color:black;
        }
        
    </style>
</head>
<body>
    <div class = "Qna_content">
        <div class = "side">
            <h3 class = "QnA">QnA</h3>
            <p class = "req" id = "req">요구사항 및 개선사항</p>
            <p class = "employ" id = "employ">채용문의</p>
            <p class = "board" id = "board">게시판 문의</p>
        </div>
    </div>
    <script>
        let req = document.querySelector('#req');

        req.addEventListener('click', () => {
            location.href = "http://localhost:80/main/view/Qna/req_content.php";
        })

        let employ = document.querySelector('#employ');
        employ.addEventListener('click', () => {
            location.href = "http://localhost:80/main/view/Qna/employ_content.php";
        })

        let board = document.querySelector('#board');
        board.addEventListener('click', () => {
            location.href = "http://localhost:80/main/view/Qna/board_content.php";
        })
    </script>
</body>
</html>