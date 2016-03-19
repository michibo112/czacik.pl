<?php
if($user['staff'] < 100);
if(!$parts[1]) $api->reply("A gdzie nick usera? ;)", 0, 1, 1);
$q = $db->query("SELECT * FROM `users` WHERE `nick` LIKE '".$parts[1]."%' or `id`='$parts[1]'");
while($r = $q->fetch_assoc())
{
$moj['last'] = time()-$r['last'];
if($r['banned'] == 1) $ban = 'tak';
if($r['banned'] == 0) $ban = 'nie';
if($r['zgoda'] == 1) $r['zgoda'] = 'wylaczona';
if($r['zgoda'] == 0) $r['zgoda'] = 'wlaczona';
if($r['spy'] == 0) $spy = 'nie';
if($r['spy'] == 1) $spy = 'tak';
if($r['online'] == 0) $online = 'nie';
if($r['online'] == 1) $online = 'tak';
$r['last'] = time()-$r['last'];
if($r['last'] >= 3599) $r['last'] = '1 godzine temu';
if($r['last'] >= 7199) $r['last'] = '2 godziny temu';
if($r['last'] >= 10799) $r['last'] = '3 godziny temu';
if($r['last'] >= 14399) $r['last'] = '4 godziny temu';
if($r['last'] >= 18000) $r['last'] = 'ponad 5 godzin temu';
@ $exp_user = $main->level("exp", $r['nr'], "1");
$gg = $r['nr'];
if($user['rank'] < 10) $gg = $main->filtruj($gg);
if($r['rank'] >= 25 && $from != $GG_SUPER_ADMINS) $gg = 'WLASCICIEL';
$select = $db->query("select * from `top` where `id`='".$r['id']."'");
@ $top = $select->fetch_assoc();
$ui .= "".$main->nick($r['nick'], $r['rank'])." || Numer GG: ".$gg." || Ranga: ".$r['rank']." || Nr ID: ".$r['id']." || Ostatnio aktywny/a: ".$r['last']." || Zbanowany/a: ".$ban." ||Online: ".$online." || Ukryty/a: ".$spy." || EXP: [".$exp_user."] || Zgoda: ".$r['zgoda']." || Opis: ".$r['adn']."";
}
$api->reply("Info o uzytkowniku ".$ui, 0, 1, 1);
?>