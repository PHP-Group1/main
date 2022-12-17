$(document).ready (() => {
    $('#todayluck').click(() => {
        $(location).attr("href","http://localhost:80/main/view/today/todayluck_con.php")
    })

    $('#animal').click(() => {
        $(location).attr("href","http://localhost:80/main/view/animal/animal_content.php")
    })

    $('#star').click(() => {
        $(location).attr("href","http://localhost:80/main/view/star/star_content.php")
    })

    $('#listen').click(() => {
        $(location).attr("href","http://localhost:80/main/view/listen/listen_con.php")
    })

    $('#fortune_cookie').click(() => {
        $(location).attr("href","http://localhost:80/main/view/fortune/fortune_content.php")
    })

    $('#item').click(() => {
        $(location).attr("href","http://localhost:80/main/view/item/luckyitem.php")
    })
})