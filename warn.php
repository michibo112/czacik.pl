<?php
if($user['staff'] < 2)
	die("Niewystarczające uprawnienia");
if(!$wyraz[1])
	die("Nie podałeś nicku użytkownika");
$warn_db = $db->query("SELECT * FROM `users` WHERE `nick` LIKE '{$wyraz[1]}'");
if($warn_db->num_rows == 0)
	die("Nie ma takiego użytkownika");
$warn = $warn_db->fetch_assoc();
if($warn['staff'] >= $user['staff'])
	die("Ten użytkownik ma większe lub równe Twoim uprawnienia");
$m->addBBCode("Dostałeś ostrzeżenie od [b]{$user['nick']}[/b]. Popraw swoje zachowanie.")->setRecipients($warn['nr']);
$p->push($m);
$m->clear();
echo "Ostrzeżenie wysłane";
?>