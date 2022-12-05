<?php
    require '../../common/common.php';

    $idx = $_GET['idx'];

    $conn = mysqli_connect("210.223.18.224", "pino", "qwer1595", "php");
    $sql = "SELECT user_id, title, content
            FROM tbl_board
            WHERE idx = $idx";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_assoc($result);
?>
<p><a href="index_tbl.php">뒤로가기</a></p>
<table border="1" class="read_tabel"  align="left">
    <tr>
        <td width="500">
            <?php echo $rows['title']?>
        </td>
    </tr>
    <tr>
        <td height="500" valign="top" style="position: relative;">
            <?php echo $rows['content']?>
            <div style="position: absolute; right:20; bottom: 20;">
            ID : <?php echo preg_replace('/(?<=.{4})./u','*',$rows['user_id']);?>
            </div>
        </td>
    </tr>
</table>