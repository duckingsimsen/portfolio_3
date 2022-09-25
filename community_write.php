<?php
    require_once __DIR__ . './db.php';
    define('db', true);

    //각 변수에 write.php에서 input name값들을 저장한다
    $title = $_POST['title'];
    $username = $_POST['name'];
    $content = $_POST['content'];
    $pw_ = $_POST['pw'];
    $userpw = password_hash($pw_, PASSWORD_DEFAULT);
    $date = date('Y-m-d');

    if(isset($_POST['lockpost']))
    {
        $lo_post = '1';
    }
    else
    {
        $lo_post = '0';
    }

    $tmpfile =  $_FILES['b_file']['tmp_name'];
    $o_name = $_FILES['b_file']['name'];
    $filename = iconv("UTF-8", "EUC-KR",$_FILES['b_file']['name']);
    $folder = "./upload/".$filename;
    move_uploaded_file($tmpfile,$folder);

    if($username && $userpw && $title && $content)
    {
        $sql_1 = "INSERT INTO club_table (name, pw, title, content, date, hit, thumbup, lock_post, file) VALUES ('".$username."', '".$userpw."', '".$title."', '".$content."', '".$date."', '0', '0', '".$lo_post."', '".$o_name."');";
        $sql_2 = mysqli_query($db, $sql_1);
        echo "query success";
        if($sql_2)
        {
            echo '<script> alert("글쓰기 완료되었습니다.") </script>';
            echo "<script> location.href = './community_4_1.html'</script>";
        }
        else
        {
            echo '<script> alert("글쓰기 실패했습니다") </script>';
            echo "<script> history.back(); </script>";
        }
    }
    else
    {
        echo '<script> alert("빈공간이 있습니다 빈공간을 채워주세요.") </script>';
        echo "<script> history.back(); </script>";
    }
?>