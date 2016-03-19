<?php
if($user['staff'] < 60)
	die("Niewystarczające uprawnienia");
if(!$wyraz[1])
	die("Nie podałeś treści wiadomości");
$send_all = $wyraz;
$send_all[0] = '';
$send_all = implode(" ", $send_all);
$m->addBBCode("[b][color=ff0000]Wiadomość do wszystkich użytkowników czatu:[/color][/b][br][br][i][color=0000ff]{$send_all}[/color][/i][br][u]~~~~~{$user['nick']}~~~~~[/u]")->setRecipients(get_users('all'));
$p->push($m);
$m->clear();
?>