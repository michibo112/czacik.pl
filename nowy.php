<?php
if(substr($user['nick'], 0, 3) != "GG_")
	die("Nie możesz już zmienić nicku");
if(!$wyraz[1])
	die("Nie podałeś nowego nicku.
	Przykład: /nowy Andrzej");
$wyraz[1] = str_replace(array("!", "@", "#", "*", "$", "<"), "", $wyraz[1]);
$sprawdz = $db->query("SELECT * FROM `users` WHERE `nick` LIKE '{$wyraz[1]}'");
if($sprawdz->num_rows != 0)
	die("Użytkownik o takim nicku już tutaj jest. Wybierz inny.");
$db->query("UPDATE `users` SET `nick` = '{$wyraz[1]}' WHERE `nr` = {$from}");
$m->addBBCode("[b]{$user['nick']}[/b] jest od teraz znany jako [b]{$wyraz[1]}[/b]")->setRecipients(get_users());
$p->push($m);
$m->clear();
?>