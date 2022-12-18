<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    echo "<script>location.href='need_today.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todayluck</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background-color: #fffdf5;
        }
        .todayluck{
            width: 100%;
            height: 100%;
            padding-top: 90px;

        }
        .todayluck_box{
            margin: auto;
            margin-top: 45px;
        }
        .datebox{
            width: 324px;
            height: 72px;
            margin-left: 10%;

            background: #FFF1A5;
            border: 4px solid #C98724;
            border-radius: 20px;
            font-weight: 700;
            font-size: 30px;
            line-height: 72px;
            text-align: center;
            letter-spacing: 0.3em;

            color:white;

            -webkit-text-stroke: 2px #AB6700;
        }
        
        .title{
            width: 205px;
            height: 69px;
            margin-left: 300px;
            
            background: #FFF9D9;
            border: 3px solid #C98724;
            border-radius: 20px;

            font-weight: 700;
            font-size: 35px;
            line-height: 69px;
            text-align: center;
            letter-spacing: 0.3em;

            color:white;

            -webkit-text-stroke: 2px #AB6700;
        }
        .img{
            width: 236px;
            height: 236px;
            margin-bottom: 20px;
            float: left;
        }
        .todayluck_box > div {
            width: 1360px;
            height: 370px;
            border-bottom: 2px solid #B37C3A;
            margin: 46px auto;

        }
        img{
            width: 236px;
            height: 236px;
        }

        .box{
            width: 1300px;
            height: 236px;
            position: relative;

            display: table-cell;
            vertical-align: middle;
        }

        .contents{
            font-weight: bold;
            line-height: 180%;
            position: absolute;
            left: 21%;
        }

    </style>
</head>

<?php
    // 오늘날짜 출력
    date_default_timezone_set('Asia/Seoul');
    $today = date("Y/m/d");
?>

<body>
    <header>
        <?php
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/header/login_header.php";
        ?>
    </header>
    <nav>
        <?php
            include $_SERVER["DOCUMENT_ROOT"]."/main/view/nav/nav_today.php";
        ?>
    </nav>
    <div class = "todayluck">
        <div class = "datebox"><?php echo $today;?></div>
        <div class = "todayluck_box">
            <!--금전운 내용-->
            <div class = "riches">
                <div class = "title">금전운</div>
                <div class = "img">
                    <img src = "../../img/today/money.png">
                </div>
                <div class="box">
                <div class = "contents" id="luck01"></div>
                </div>
            </div>
            <!--학업운 내용-->
            <div class = "study">
                <div class = "title">학업운</div>
                <div class = "img">
                    <img src = "../../img/today/study.png">
                </div>
                <div class="box">
                <div class = "contents" id="luck02"></div>
                </div>
            </div>
            <!--직업운 내용-->
            <div class = "job">
                <div class = "title">직업운</div>
                <div class = "img">
                    <img src = "../../img/today/job.png">
                </div>
                <div class="box">
                <div class = "contents" id="luck03"></div>
                </div>
            </div>
            <!--연애운 내용-->
            <div class = "love">
                <div class = "title">연애운</div>
                <div class = "img">
                    <img src = "../../img/today/love.png">
                </div>
                <div class="box">
                <div class = "contents" id="luck04"></div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

<!-- 생년월일정보 (세션에서 가져오기) -->
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

//생년월일 세션을 가져옴
@$birth = $_SESSION['birth'];

//생년월일에서 하이푼을 삭제함
@$birth_rep = str_replace("-", "", $birth);

//값이 만약 비어있다면 기본값 출력
if(empty($birth_rep)){
    $birth_rep = "19970506";
}
?>
<!-- 생년월일을 입력하여 운세를 가져오게 함 value 값에 생년월일을 넣어줌 -->
<input type="hidden" id="birth" value="<?php echo $birth_rep ?>"/>
<!-- Jquery 플러그인 -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
//문서 로드 후 함수 호출
$(document).ready(function(){
	//생년월일 정보 가져오기
	var birth = $("#birth").val();
	//ajax 통신 - url로 호출해서 데이터 불러오기
	$.ajax({
		url:'https://m.search.naver.com/p/csearch/dcontent/external_api/json_todayunse_v2.naver?_callback=window.__jindo2_callback._fortune_my_0&gender=m&birth='+birth+'&solarCal=solar&time='
	}).done(function(json){
		console.log('성공');
		//console.log(json);
		//text로 받은 정보를 json 형식으로 변경하기
		json = json.replace("window.__jindo2_callback._fortune_my_0(","");
		json = json.replace(");","");
		// json 의 속성은 "(쌍따옴표)로 묶어주어야 함
		json = json.replace("result","\"result\"");
		json = json.replaceAll("day","\"day\"");
		json = json.replaceAll("title","\"title\"");
		json = json.replaceAll("date","\"date\"");
		json = json.replaceAll("content","\"content\"");
		json = json.replaceAll("tomorrow","\"tomorrow\"");
		json = json.replaceAll("month","\"month\"");
		json = json.replaceAll("userData","\"userData\"");
		json = json.replaceAll("year","\"year\"");
		json = json.replaceAll("constellation","\"constellation\"");
		json = json.replaceAll("resultMSG","\"resultMSG\"");
		
		//console.log(json);
		
		//텍스트를 Json 객체로 변환
		var data = JSON.parse(json);
		console.log(data.result.day.content);
		//2 금전운 ,4 학업운 ,3 직업운 ,1 연애운
		//console.log(data.result.day.content[2].desc);
		//console.log(data.result.day.content[4].desc);
		//console.log(data.result.day.content[3].desc);
		//console.log(data.result.day.content[1].desc);
		
		//document.getElementById("luck01").innerText=data.result.day.content[2].desc;
		// $("#name") = document.getElementById("name")
		// $(".name") = document.querySeletor(".name")
		$("#luck01").text(data.result.day.content[2].desc);
		$("#luck02").text(data.result.day.content[4].desc);
		$("#luck03").text(data.result.day.content[3].desc);
		$("#luck04").text(data.result.day.content[1].desc);
	}).fail(function(xhr,status,err){
		console.log('실패');
	});

});

</script>