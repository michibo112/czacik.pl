<?php
$admins_db = $db->query("SELECT * FROM `users` WHERE `staff` > 0 ORDER BY `staff` DESC");
$m->addBBCode("Oto obs³uga Czaciek:[br]");
$znaczek[10] = "*";
$znaczek[20] = "!";
$znaczek[30] = "?";
$znaczek[40] = "€";
$znaczek[50] = "€#€";
$znaczek[60] = "#";
$znaczek[70] = "##";
$znaczek[80] = "###";
$znaczek[90] = "?###?";
$znaczek[100] = "!###!";
$znaczek[101] = "$###$";
$nazwa[101] = "Skrypter";
$nazwa[100] = "Wlasciciel";
$nazwa[90] = "Zastepca wlasciciela";
$nazwa[80] = "Global Admin";
$nazwa[70] = "Admin-A";
$nazwa[60] = "Admin-B";
$nazwa[50] = "Admin-C";
$nazwa[40] = "Supporter";
$nazwa[30] = "Starszy pomocnik";
$nazwa[20] = "Pomocnik";
$nazwa[10] = "Student";
while($admins = $admins_db->fetch_assoc()){
	$znacz = $znaczek[$admins['staff']];
	$naz = $nazwa[$admins['staff']];
	$m->addBBCode("[b][color=ff0000][{$znacz}][/color]{$admins['nick']}[/b] [color=00ff00]{$naz}[/color] gg:{$admins['nr']}[br]");
}
$m->reply();
$m->clear();
?>