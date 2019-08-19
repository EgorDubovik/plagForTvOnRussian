<?php
		
	if(isset($_POST['event'])){
		if(!empty($_POST['link'])){
			$erro = $db->query("INSERT INTO links (links) VALUE('".$_POST['link']."')");
		} 
	}


	$query = $db->query("SELECT * FROM links ORDER BY id DESC");
	$results = $query->fetchAll();

