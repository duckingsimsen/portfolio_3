<?php
    header('Content-Type: text/html; charset=utf-8');

	$db = new mysqli("211.42.158.40","clubdb","tlatms2033!","club_db"); 
	$db -> set_charset("utf8");

	function db($cdb)
	{
		global $db;
		return $db -> query($cdb);
	}
?>