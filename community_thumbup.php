<?php
	require_once __DIR__ . '/db.php';
    define('db', true);
   
	$bno = $_GET['idx'];

    $sql_1 = "SELECT thumbup FROM club_table WHERE idx ='".$bno."';";
    $sql_2 = mysqli_query($db, $sql_1);
    $tu = $sql_2 -> fetch_array();
    $tu['thumbup'] = $tu['thumbup'] + 1;

    $sql_3 = "UPDATE club_table SET thumbup ='".$tu['thumbup']."' WHERE idx = '".$bno."';";
    echo $sql_3;
    $sql_4 = mysqli_query($db, $sql_3);
?>
<script type="text/javascript">alert("추천되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=community_4_1.html">