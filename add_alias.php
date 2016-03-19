<?php
if($user['staff'] < 9)
	die("Niewystarczające uprawnienia");
if(!$wyraz[1])
	die("Nie podałeś komendy");
if(!$wyraz[2])
	die("Nie podaleś aliasu");
$db->query("INSERT INTO `alias` (`full`, `alias`) VALUES ('{$wyraz[1]}', '{$wyraz[2]}')");
echo "Dodano alias komendy {$wyraz[1]}";
?>