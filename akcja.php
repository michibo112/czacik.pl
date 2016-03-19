<?php
$dir = "akcje/"; //katalog
$files = scandir($dir);
foreach($files as $key => $value)
{
if(($value!=".")&&($value!=".."))
$file = substr($value, 0, -4);
$i++;
$names .="\n".$i.") ".$file."\r\n";
}
if(!$parts[1]) $api->reply("".$text->dialog('action_1')."\n$names", 0, 1, 1);
if(!$parts[2]) $api->reply($text->dialog('action_2') ,  0, 1, 1);
if(!file_exists("akcje/".$parts[1].".php") == true) $api->reply($text->dialog('action_3'), 0, 1, 1);
$akcja = file_get_contents("akcje/".$parts[1].".php");
$select = $db->query("SELECT `nick`, `rank` FROM `users` WHERE `nick` LIKE '".$parts[2]."'");
if($select->num_rows == 0) $api->reply($text->dialog('action_4'), 0, 1, 1);
while($row = $select->fetch_assoc()) {
$oldnick .= $main->nick($row['nick'], $row['rank']);
}
$api->send("".$nick." ".$akcja." ".$oldnick."");
$api->BUILDER->clear();
?>