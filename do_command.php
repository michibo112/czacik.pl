<?php
if(file_exists("commands/{$cmd}.php")){
	include("commands/{$cmd}.php");
}else{
	$alias_db = $db->query("SELECT * FROM `alias` WHERE `alias` LIKE '{$cmd}' LIMIT 1");
	if($alias_db->num_rows != 0){
		$alias = $alias_db->fetch_assoc();
		include("commands/{$alias['full']}.php");
	}else{
	die("Komenda {$cmd} nie istnieje :-(");
	}
}
?>
