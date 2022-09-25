<?php
    require_once __DIR__ . '/db.php';
    define('db', true);
    $rno = $_POST['rno'];
    $sql_1 = "SELECT * FROM reply_table WHERE idx = '".$rno."';";//reply테이블에서 idx가 rno변수에 저장된 값을 찾음
    $sql_2 = mysqli_query($db, $sql_1);
    $reply = $sql_2 -> fetch_array();

    $bno = $_POST['b_no'];
    $sql_3 = "SELECT * FROM club_table WHERE idx = '".$bno."';";//board테이블에서 idx가 bno변수에 저장된 값을 찾음
    $sql_4 = mysqli_query($db, $sql_3);
    $board = $sql_4 -> fetch_array();

    $pwk = $_POST['pw'];
    $bpw = $reply['pw'];

    if(password_verify($pwk, $bpw)) 
    {
        $sql_5 = "DELETE FROM reply_table WHERE idx = '".$rno."';";
        $sql_6 = mysqli_query($db, $sql_5);
?>
        <script type="text/javascript">alert('댓글이 삭제되었습니다.'); location.replace("community_read.html?idx=<?php echo $board["idx"]; ?>");</script>
<?php 
	}
    else
    { 
?>
		<script type="text/javascript">alert('비밀번호가 틀립니다');history.back();</script>
<?php } ?>