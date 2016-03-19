<?php
extract($GLOBALS);
if($user['staff'] <101])
	die("Brak uprawnien! Postara sie bardzie zeby dostac wyzszy staff :D");
if(!$parts[2]){
  die(" Aby zawrzec zwiazek malzenski nalezy wpisac /slub swoj_nick nick_malzonka ");}
$mazz = $parts[1];
$zonaa = $parts[2];
$q = $db->query("SELECT * FROM `cau` WHERE `nick` = '{$mazz}' and `kanal` = '{$kanal}'");
if($q->num_rows == 0){ die("".$main->diee(" [b]<".$mazz.">[/b] nie istnieje!").""); }
while($aa = $q->fetch_assoc()){
$maz = $aa['numer'];
}
	  $qa = $db->query("select * from `nicki` where `numer` = '{$maz}' and slub = '1'");
   if($qa->num_rows == 1){
die("".$main->diee(" Uzytkownik <$mazz> jest juz w zwiazku!")."");}
$q = $db->query("SELECT * FROM `cau` WHERE `nick` = '{$zonaa}' and `kanal` = '{$kanal}'");
if($q->num_rows == 0){ die("".$main->diee(" [b]<".$mazz.">[/b] nie istnieje!").""); }
while($ae = $q->fetch_assoc()){
$zona = $ae['numer'];
}
if($maz == $zona){
die(" Skrypt blokuje taka opcje slubu");}
	  $q = $db->query("select * from `nicki` where `numer` = '{$zona}' and slub = '1'");
   if($q->num_rows == 1){
die("".$main->diee(" Uzytkownik $zonaa jest juz w zwiazku!")."");}
$q = $db->query("UPDATE `nicki` SET `slub` = '1'  WHERE `numer` = '{$maz}'");
$q = $db->query("UPDATE `nicki` SET `slub` = '1' WHERE `numer` = '{$zona}'");
 $db->query("update `sms` set `wykorzystany` = '1' where `code` = '{$parts[3]}' and wykorzystany = '0'");
$main->echoo(" Slub zostal zawarty ");
$czas = time();
$db->query("insert into `pary` ( `nr1`, `nr2`, `czas`) values ('$zona', '$maz', '$czas')");
?>
