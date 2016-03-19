<?php
$users_db = $db->query("SELECT * FROM `users` WHERE `online` = 1");
$m->addBBCode("Aktywni użytkownicy:[br]")->setRecipients($from);
while($users = $users_db->fetch_assoc()){
	$m->addBBCode("<[b]{$users['nick']}[/b]> ");
}
$m->reply();
?>