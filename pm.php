<?php
if(!$wyraz[1])
	die("Nie podałeś nicku użytkownika");
if(!$wyraz[2])
	die("Nie podałeś wiadomości do wysłania");
$pm_db = $db->query("SELECT * FROM `users` WHERE `nick` LIKE '{$wyraz[1]}'");
if($pm_db->num_rows == 0)
	die("Nie ma takiego użytkownika");
$pmu = $pm_db->fetch_assoc();
$pm = $wyraz;
$pm[0] = '';
$pm[1] = '';
$pm = implode(" ", $pm);
$m->addBBCode("<Prywatna wiadomość od [b]{$user['nick']}[/b]>[br][color=0000ff]{$pm}[/color]")->setRecipients($pmu['nr']);
$p->push($m);
$m->clear();
?>