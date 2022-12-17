$(document).ready(() => {

    let id = $('#id');
    let pw = $('#pw');

    $('#login_btn').click(() => {
        
        if(id.val() == "") {
            alert('id를 입력하세요')
            id.focus();
            return;
        }

        if(pw.val() == "") {
            alert('pw를 입력하세요')
            pw.focus();
            return;
        }

        $('.contents').submit();
        
    })
    
})