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
            position:relative;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 971px;
            background-color: #FFFDF5;

        }
        .signup{
            position: absolute;
            left: 45%;
            top: 98px;

            font-weight: 700;
            font-size: 24px;
            display: flex;
            align-items: center;

            color: #442C2C;
        }
        .line{
            position: absolute;
            width: 605.79px;
            left: 27.5%;
            top: 181px;
            margin: 0;

            border: 2px solid #442C2C;
            background: #442c2c;
        }
        p{
            margin: 0;
            padding: 0;
            position: absolute;
            left: 28%;

            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            line-height: 29px;
            display: flex;
            align-items: center;
            text-align: center;

            color: #442C2C;
        }
        .input_id{
            position: absolute;
            left: 40%;
            top: 265.41px;
        }
        .input_pw{
            position: absolute;
            left: 40%;
            top: 371.15px;
        }
        .input_pwc{
            position: absolute;
            left: 40%;
            top: 476.89px;
        }
        .input_name{
            position: absolute;
            left: 40%;
            top: 582.63px;
        }
        .text_s{
            position: absolute;
            left: 26.5%;
            top: 688.37px;
        }
        .text_b{
            position: absolute;
            left: 50%;
            top: 688.37px;
        }
        .female{
            position: absolute;
            width: 61.17px;
            height: 24.12px;
            left: 32%;
            top: 691px;

            font-weight: 400;
            font-size: 19px;
            line-height: 25px;
        }
        .male{
            position: absolute;
            width: 61.17px;
            height: 24.12px;
            left: 38%;
            top: 691px;

            font-weight: 400;
            font-size: 19px;
            line-height: 25px;
        }
        .birth{
            position: absolute;
            left: 60%;
            top: 691px;
        }
        .agree{
            position: absolute;
            left: 35%;
            top: 795.04px;
        }
        .button{
            position: absolute;
            width: 605.79px;
            height: 109.45px;
            left: 28%;
            top: 868.32px;

            background: #442C2C;
            color:#ffffff;
            font-weight: 700;
            font-size: 24px;
            line-height: 29px;
        }
        
    </style>
</head>
<body>
    <div class = "wrap">
    <div class = "contents">
        <div class = 'signup'>회원가입</div><hr class = "line">
        <form action="../auth/register.php" method="post" id="register">
            <p style = "top: 265.41px;">아이디</p>
            <input type = "text" class = "input_id" name = "id" id = "id">
            <p style = "top: 371.15px;">비밀번호</p>
            <input type = "password" class = "input_pw" name = "pw" id = "pw">
            <p style = "top: 476.89px;">비밀번호 확인</p>
            <input type = "password"  class = "input_pwc" id = "pwc">
            <p style = "top: 582.63px;">이름</p>
            <input type = "text"  class = "input_name" name = "name" id = "name">
            <p class = "text_s">성별</p>
            <label class = "female"><input type = "radio" name = "sex" value = "w">여성</label>
            <label class = "male"><input type = "radio" name = "sex"  value = "m">남성</label>
            <p class = "text_b">생년월일</p>
            <input type = "date" class = "birth" name="birth"></input>
            <label class = "agree"><input type = "checkbox" name = "agree" value = "1">이용약관 및 개인정보수집 및 이용, 정보 수신에 동의합니다.</label>
        </form>
        <button class = "button" id = "register_btn">회원가입</button>
    </div>   
    </div>

    <script>
    const registerBtn = document.querySelector('#register_btn');
    const registerSubmit = document.querySelector('#register');

    registerBtn.addEventListener('click', () => {
        registerSubmit.submit();
    })

</script>
</body>
</html>