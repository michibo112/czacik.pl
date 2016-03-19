<?
if($user['echo'] == 1){
	$db->query("UPDATE `users` SET `echo` = 0 WHERE `nr` = {$from}");
	echo "Wyłączono echo";
}else{
	$db->query("UPDATE `users` SET `echo` = 1 WHERE `nr` = {$from}");
	echo "Włączono echo";
}
?>