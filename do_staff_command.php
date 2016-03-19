<?php
if($user['staff'] == 0)
	die();
if(file_exists("commands/staff/{$staff_cmd_cor}.php")){
	include("commands/staff/{$staff_cmd_cor}.php");
}else{
	die("Brak komendy {$staff_cmd_cor} ;c");
}
?>