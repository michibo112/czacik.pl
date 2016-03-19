<?php
if($user['staff'] < 30)
	die("Masz niewystarczające uprawnienia");
if(!$wyraz[1])
	die("Nie podałeś nicku użytkownika");
$kick_db = $db->query("SELECT * FROM `users` WHERE `nick` LIKE '{$wyraz[1]}'");
if($kick_db->num_rows == 0)
	die("Nie ma takiego użytkownika");
$kick = $kick_db->fetch_assoc();
if($kick['staff'] >= $user['staff'])
	die("Ten użytkownik ma większe lub równe Twoim uprawnienia");
if($kick['online'] == 0)
	die("Ten użytkownik nie jest zalogowany");
$db->query("UPDATE `users` SET `online` = 0 WHERE `id` = {$kick['id']} LIMIT 1");
$m->addBBCode("[b]{$kick['nick']}[/b] zostal wyrzucony przez [b]{$user['nick']}[/b]")->setRecipients(get_users());
$p->push($m);
$m->clear();
$m->addBBCode("Zostałeś wyrzucony z czatu przez [b]{$user['nick']}[/b]")->setRecipients($kick['nr']);
$p->push($m);
$m->clear();
?>