<?php
    require_once __DIR__ . '/db.php';
    define('db', true);
    
    $rno = $_POST['rno'];//댓글번호
    $sql_1 = "SELECT * FROM reply_table WHERE idx = '".$rno."';";//reply테이블에서 idx가 rno변수에 저장된 값을 찾음
    $sql_2 = mysqli_query($db, $sql_1);
    $reply = $sql_2 -> fetch_array();

    $bno = $_POST['b_no']; //게시글 번호
    $sql_3 = "SELECT * FROM club_table WHERE idx = '".$bno."';";//board테이블에서 idx가 bno변수에 저장된 값을 찾음
    $sql_4 = mysqli_query($db, $sql_3);
    $board = $sql_4 -> fetch_array();

    $sql_5 = "UPDATE reply_table SET content = '".$_POST['content']."' WHERE idx = '".$rno."';";//reply테이블의 idx가 rno변수에 저장된 값의 content를 선택해서 값 저장
    $sql_6 = mysqli_query($db, $sql_5);
?> 
<script type="text/javascript">alert('수정되었습니다.'); location.replace("community_read.html?idx=<?php echo $bno; ?>");</script>