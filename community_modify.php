<?php
    require_once __DIR__ . '/db.php';
    define('db', true);

    $bno = $_GET['idx'];
    $username = $_POST['name'];
    $userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql_1 = "UPDATE club_table SET name = '".$username."', pw = '".$username."', title = '".$title."', content = '".$content."' WHERE idx = '".$bno."'";
    $sql_2 = mysqli_query($db, $sql_1);
?>

<script type="text/javascript">alert("수정되었습니다."); </script>
<meta http-equiv="refresh" content="0 url=community_read.html?idx=<?php echo $bno; ?>">