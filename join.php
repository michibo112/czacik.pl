<?php
if($user['online'] == 1)
	die("Jesteś już zalogowany ;-)");
$m->addBBCode("[b]{$user['nick']}[/b] zalogował się na czat.[br]Opis: [b]{$user['opis']}[/b]")->setRecipients(get_users());
$p->push($m);
$m->clear();
$motd_db = $db->query("SELECT * FROM `motd` ORDER BY `id` DESC LIMIT 1");
$motd = $motd_db->fetch_assoc();
$m->addBBCode("Zalogowałeś się na czat![br][b]Wiadomość dnia:[/b] {$motd['content']} [b]~{$motd['user']}[/b][br]Twój opis: [b]{$user['opis']}[/b]")->reply();
$db->query("UPDATE `users` SET `online` = 1 WHERE `nr` = {$from}");
?>