<form action="register.php" method="post" id="register">
    <p>
        <label for="name">이름: </label>
        <input type="text" name="name" id="name">

    </p>
    <p>
        <label for="id">id: </label>
        <input type="text" name="id" id="id">
    </p>
        
    <p>
        <label for="pw">pw: </label>
        <input type="password" name="pw" id="pw">
    </p>

    <p>
        성별: 
        <label for="m">남</label>
        <input type="radio" name="sex" id="m" value="m">

        <label for="w">여</label>
        <input type="radio" name="sex" id="w" value="w">
    </p>
        
    <p>
        <label for="birth">생일 </label>
        <br>
        <input type="date" name="birth", id="birth">
    </p>

    <p>
        <label for="agree">개인정보 이용 동의 </label>
        <br>
        <input type="checkbox" name="agree" id="agree" value="1">
    </p>

</form>

<button id="registerBtn">register</button>

<form action="login.php" method="post">
    
    <p>
        <label for="id">id: </label>
        <input type="text" name="id" id="id">
    </p>
        
    <p>
        <label for="pw">pw: </label>
        <input type="password" name="pw" id="pw">
    </p>

    <input type="submit" value="login">
</form>

<script>

    const agreeCheck = () => {
        let checkbox = document.querySelector('#agree');
        let agree = checkbox.checked;
        return agree;
    } 

    const submit = () => {
        let submit = document.querySelector(`#register`);
        submit.submit();
    }

    let name = document.querySelector('#name').value;
    let id = document.querySelector('#id').value;
    let pw = document.querySelector('#pw').value;
    let radioM = document.querySelector('#m').checked;
    let radioW = document.querySelector('#w').checked;
    let birth = document.querySelector('#birth').value;

    const register = document.querySelector('#registerBtn');

    register.addEventListener('click', () => {
        let agree = agreeCheck();

        if (agree == false) {
            window.alert('개인정보 이용동의 체크 해주세요');
            return;
        }
        
        submit(register);


    })
</script>
