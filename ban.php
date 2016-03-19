<?php
if($user['staff'] < 4)
	die("Brak odpowiednich uprawnień");
if(!$wyraz[1])
	die("Nie podałeś nicku użytkownika");
if(!$wyraz[2])
	die("Nie podałeś przyczyny zbanowania");
$ban_db = $db->query("SELECT * FROM `users` WHERE `nick` LIKE '{$wyraz[1]}'");
if($ban_db->num_rows == 0)
	die("Nie ma użytkownika o takim nicku");
$ban = $ban_db->fetch_assoc();
if($ban['staff'] >= $user['staff'])
	die("Ten użytkownik ma większe lub równe Twoim uprawnienia");
if($ban['banned'] == 1)
	die("Ten użytkownik już jest zbanowany.");
$db->query("UPDATE `users` SET `banned` = 1, `online` = 0 WHERE `id` = {$ban['id']} LIMIT 1");
$ban_reason = $wyraz;
$ban_reason[0] = '';
$ban_reason[1] = '';
$ban_reason = implode(" ", $ban_reason);
$db->query("UPDATE `users` SET `ban_reason` = '{$ban_reason}' WHERE `id` = {$ban['id']} LIMIT 1");
$m->addBBCode("[b]{$ban['nick']}[/b] został zbanowany przez [b]{$user['nick']}[/b][br]Powód: {$ban_reason}")->setRecipients(get_users());
$p->push($m);
$m->clear();
$m->addBBCode("Zostałeś zbanowany przez [b]{$user['nick']}[/b][br]Powód: {$ban_reason}[br]Możesz odwołać się pisząc do gg 34655403")->setRecipients($ban['nr']);
$m->clear();
?>