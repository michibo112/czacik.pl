<?php
if($user['staff'] < 70)
	die("Twoje uprawnienia są zbyt niskie");
if(!$wyraz[1])
	die("Nie podałeś nowe wiadomości dnia");
$motd = $wyraz;
$motd[0] = '';
$motd = implode(" ", $motd);
$db->query("INSERT INTO `motd` (`content`, `user`) VALUES ('{$motd}', '{$user['nick']}')");
echo "Zmieniono wiadomość dnia";
$m->addBBCode("Nowa wiadomość dnia:[br][b]{$motd}[/b]")->setRecipients(get_users());
$p->push($m);
$m->clear();
?>