<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
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

            display: flex;
            justify-content : center;

        }
        .signup{
            position: absolute;
            top: 98px;
            font-weight: 700;
            font-size: 24px;
            line-height: 29px;

            font-weight: 700;
        }
        .line{
            position: absolute;
            width: 605.79px;
            top: 181px;
            margin: 0;

            border: 2px solid #442C2C;
            background: #442c2c;
        }
        .id_box{
            position: absolute;
            top: 265.41px;
        }
        .pw_box{
            position: absolute;
            top: 371.15px;
        }
        .pwc_box{
            position: absolute;
            top: 476.89px;
        }
        .name_box{
            position: absolute;
            top: 582.63px;
        }
        .sex_birth{
            position: absolute;
            top: 688.37px;
            width:664px;
            text-align:center;
            padding: auto;
        }
          .sex_box{
            float: left;
            margin: 0 36.51px 0 70px;
        }

        .sex_box > label{
            margin: 0 20px;
            font-weight: 400;
            font-size: 21px;
            line-height: 25px;
        }
        
        .birth_box{
            float: left;
        }
        .agree{
            position: absolute;
            top: 785.04px;
        }
        .button{
            position: absolute;
            width: 605.79px;
            height: 109.45px;
            top: 868.32px;

            background: #442C2C;
            font-size: 24px;
            line-height: 29px;
        }
        
        form{
            display: flex;
            justify-content : center;
            font-weight: 700;
            font-size: 24px;
            line-height: 29px;
        }
        input[type=text]{
            height: 32.46px;
            width: 409.45px;
            border: none;
            background-color:#FFFDF5;
        }
        input[type=password]{
            height: 32.46px;
            width: 409.45px;
            border: none;
            background-color:#FFFDF5;
        }
        input[type = date]{
            width: 133.19px;
            height: 29.68px;
        }
        input[type = radio]{
            width: 21.71px;
            height: 20.41px;
        }
        input[type = checkbox]{
            width: 29.6px;
            height: 27.83px;
        }
    </style>
</head>
<body>
    <header>
        <?php
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/header/header.php"
        ?>
    </header>
    <div class = "contents">
        <div class = 'signup'>회원가입</div><hr class = "line">
        <form id="register" action="service/register.php" method="POST">
            <div class = "id_box">
                아이디 &nbsp;&nbsp; 
                <input type = "text" class = "input_id" name = "id" id = "id">
            </div>

            <div class = "pw_box">
                비밀번호 &nbsp;&nbsp;  
                <input type = "password" class = "input_pw" name = "pw" id = "pw">
            </div>
            
            <div class = "pwc_box">
                비밀번호 확인 &nbsp;&nbsp;  
                <input type = "password"  class = "input_pwc" id = "pwc">
            </div>
            
            <div class = "name_box">
                이름 &nbsp;&nbsp; 
                <input type = "text"  class = "input_name" name = "name" id = "name">
            </div>

            <div class = "sex_birth">
                <div class = "sex_box">
                    성별 &nbsp;
                    <label class = "female"><input type="radio" name="sex" value="w">여성</label>
                    <label class = "male"><input type="radio" name="sex" value="m">남성</label>
                </div>
            
                <div class = "birth_box">
                    생년월일 &nbsp;&nbsp;&nbsp;
                    <input type = "date" class = "birth" name="birth" id="birth">
                </div>
            </div>
            
            <label class = "agree">
                <input type = "checkbox" name = "agree" value = "1" id="agree"> &nbsp; 이용약관 및 개인정보수집 및 이용, 정보 수신에 동의합니다.
            </label>
        
        </form>
        <button class = "button" id = "register_btn">회원가입</button>
    </div>   
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="../js/register.js"></script>
</body>
</html>
