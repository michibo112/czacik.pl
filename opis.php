<?php
$opis = str_replace(array("/opis", ".opis"), "", $msg);
$db->query("UPDATE `users` SET `opis` = '{$opis}' WHERE `nr` = {$from} LIMIT 1");
$m->addBBCode("[b]{$user['nick']}[/b] zmienia swój opis na [b]{$opis}[/b]")->setRecipients(get_users());
$p->push($m);
$m->clear();
?>