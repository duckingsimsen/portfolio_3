<?php
	require_once __DIR__ . '/db.php';
    define('db', true);
    $db->set_charset("utf8");

    $bno = $_GET['idx'];
    $userpw = password_hash($_POST['dat_pw'], PASSWORD_DEFAULT);
    $date = date("Y/m/d/h/m/s");
    
    if($bno && $_POST['dat_user'] && $userpw && $_POST['content'])
    {
        $sql = "INSERT INTO reply_table (con_num, name, pw, content, date) VALUES('".$bno."', '".$_POST['dat_user']."', '".$userpw."', '".$_POST['content']."', '".$date."');";
        $result = mysqli_query($db, $sql);

        if($result)
        {
            echo "<script> alert('댓글이 작성되었습니다.');
            location.href='community_read.html?idx=$bno';</script>";
        }
        else
        {
            echo '<script> alert("댓글쓰기에 실패했습니다") </script>';
            echo "<script> history.back(); </script>";
        }
    }
    else
    {
        echo '<script> alert("빈공간이 있습니다 빈공간을 채워주세요.") </script>';
        echo "<script> history.back(); </script>";
    }
?>
