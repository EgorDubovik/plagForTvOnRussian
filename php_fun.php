<?php

	if(isset($_POST['event'])){
		if(!empty($_POST['link'])){
			$title = get_title($_POST['link']);
			$title_utf8 = mb_convert_encoding($title, "utf-8", "windows-1251");
			$erro = $db->query("INSERT INTO links (links,title) VALUE('".$_POST['link']."','".$title_utf8."')");
		} 
	}

	if(isset($_GET['remove'])){
		if(is_numeric($_GET['remove']))
			$db->query("DELETE FROM links WHERE id = ".$_GET['remove']." LIMIT 1");
	}

	$query = $db->query("SELECT * FROM links ORDER BY id DESC");
	$results = $query->fetchAll();

	function get_title($url){
		$str = file_get_contents($url);
		if(strlen($str)>0){
			$str = trim(preg_replace('/\s+/', ' ', $str)); // supports line breaks inside <title>
			preg_match("/\<title\>(.*)\<\/title\>/i",$str,$title); // ignore case
			return $title[1];
		} else {
			return $url;
		}
	}