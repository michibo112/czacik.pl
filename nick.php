<?php
if($user['staff'] < 50)
	die("Zbyt niskie uprawnienia");
if(!$wyraz[1])
	die("Nie podałeś nicku użytkownika");
if(!$wyraz[2])
	die("Nie podałeś nowego nicku użytkownika");
$wyraz[2] = str_replace(array("!", "@", "#", "*", "$", "<"), "", $wyraz[2]);
$zmiana_db = $db->query("SELECT * FROM `users` WHERE `nick` LIKE '{$wyraz[1]}' LIMIT 1");
if($zmiana_db->num_rows == 0)
	die("Nie ma takiego użytkownika");
$zmiana = $zmiana_db->fetch_assoc();
if($zmiana['staff'] >= $user['staff'])
	die("Ten użytkownik ma większe lub równe Twoim uprawnienia");
$db->query("UPDATE `users` SET `nick` = '{$wyraz[2]}' WHERE `nr` = {$zmiana['nr']} LIMIT 1");
$m->addBBCode("[b]{$wyraz[1]}[/b] jest od teraz znany jako [b]{$wyraz[2]}[/b] Zmiana dokonana przez: [b][u]{$user['nick']}[/u][/b]")->setRecipients(get_users());
$p->push($m);
$m->clear();
?>