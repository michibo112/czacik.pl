<?php
$staff = $user['rank'];
$q = $db->query("SELECT * FROM `ggczat_cmd` WHERE `komenda` !='addcmd' AND `staff`<=".$staff." ORDER BY `staff` ASC");
$t = '';
while($r = $q->fetch_assoc())
{
$txt = substr($r['slowa'], 0, 200).'';
$t .= "/".$r['komenda']." (/".$r['alias'].") - ".$r['opis']." | Ranga:".$r['staff']." \r\n";
}
    $api->reply("Komendy:\r\n\r\n".$t, 0, 3, 1);
?>