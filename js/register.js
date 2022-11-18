$(document).ready(() => {

    let form = $('form');
    let id = $('#id');
    let pw = $('#pw');
    let pwc = $('#pwc');
    let name = $('#name');
    let sex = $('input[name="sex"]');
    let birth = $('#birth');
    let agree = $('#agree');

    $('#register_btn').click(() => { 

        if(id.val() == "") {
            alert('id를 입력하세요');
            id.focus();
            return;
        }

        if(pw.val() == "") {
            alert('pw를 입력하세요');
            pw.focus();
            return;
        }

        if(pw.val() != pwc.val()) {
            alert('비밀번호 확인이 다릅니다');
            pwc.focus();
            return;
        }

        if(name.val() == "") {
            alert('이름을 입력하세요');
            name.focus();
            return;
        }

        if(!sex.is(":checked")) {
            alert('성별을 선택해주세요');    
            return; 
        }

        if(birth.val() == "") {
            alert('생일을 선택해주세요');
            return;
        }

        if(!agree.is(':checked')) {
            alert("약관 동의를 체크해주세요");
            return;
        }

        form.submit();

    })
})