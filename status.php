<?php
if($user['staff'] < 90)
	die("Brak odpowiednio wysokich uprawnień");
if(!$wyraz[1])
	die("Nie podałeś statusu. Poprawnie: ::status invisible/dnd/back/ffc/away opis");
if(!$wyraz[2])
	die("Nie podałeś opisu. Poprawnie: ::status invisible/dnd/back/ffc/away opis");
$opis = $wyraz;
$opis[0] = '';
$opis[1] = '';
$opis = implode(" ", $opis);
$p->setStatus($opis, $wyraz[1]);
echo "Gotowe.";
?>