<form action="service/createBoard.php" method="post">
    <input type="text" name="title" placeholder="제목">
    <br>
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="test">
</form>

<button>조회</button>

<script>
    let btn = document.querySelector('button');
    btn.addEventListener('click', () => {
        location.href = "service/findAll.php";
    })
</script>
