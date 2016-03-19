<?php
if($user['online'] == 0)
	die("Jesteś wylogowany.");
$db->query("UPDATE `users` SET `online` = 0 WHERE `nr` = {$from}");
$m->addBBCode("[b]{$user['nick']}[/b] wylogował się z czatu.")->setRecipients(get_users());
$p->push($m);
$m->clear();
echo "Wylogowałeś się";
?>