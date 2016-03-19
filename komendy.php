<?php
$m->addBBCode("Witaj, komendy obsługi zaczynają się od :: czyli dwóch dwukropków. Np. ::kick Ktośtam[br]");
if($user['staff'] > 0){
	$m->addBBCode("Komendy [b]Student[/b][br]");
	$m->addBBCode("[b]::nick[/b] - zmiana nicku[br]");
	$m->addBBCode("[br][br]");
}
if($user['staff'] > 10){
	$m->addBBCode("Komendy [b]Pomocnik[/b][br]");
	$m->addBBCode("[b]::warn[/b] - wysłanie ostrzeżenia do użytkownika");
	$m->addBBCode("[br][br]");
}
if($user['staff'] > 20){
	$m->addBBCode("Komendy [b]Starszy pomocnik[/b][br]");
	$m->addBBCode("[b]::kick[/b] - wyrzucanie z czatu[br]");
	$m->addBBCode("[br][br]");
}
if($user['staff'] > 30){
	$m->addBBCode("Komendy [b]Supporter[/b][br]");
	$m->addBBCode("[b]::ban[/b] - banowanie na czacie[br]");
	$m->addBBCode("[br][br]");
}
if($user['staff'] > 40){
	$m->addBBCode("Komendy [b]Admin-C[/b][br]");
	$m->addBBCode();
	$m->addBBCode("[br][br]");
}
if($user['staff'] > 50){
	$m->addBBCode("Komendy [b]Admin-B/b][br]");
	$m->addBBCode("[b]::yell[/b] - wysłanie wiadomości globalnej[br][b]::zdegraduj[/b] - usunięcie uprawnień użytkownikowi");
	$m->addBBCode("[br][br]");
}
if($user['staff'] > 60){
	$m->addBBCode("Komendy [b]Admin-A[/b][br]");
	$m->addBBCode("[b]::motd[/b] - zmiana wiadomości dnia[br]");
	$m->addBBCode("[br][br]");
}
if($user['staff'] > 70){
	$m->addBBCode("Komendy [b]Global Admin[/b][br]");
	$m->addBBCode();
	$m->addBBCode("[br][br]");
}
if($user['staff'] > 80){
	$m->addBBCode("Komendy [b]Zastepca wlasciciela[/b][br]");
	$m->addBBCode("[b]::status[/b] - zmiana statusu czatu[br][b]::add_alias[/b] - dodawanie aliasu komendy");
	$m->addBBCode("[br][br]");
}
if($user['staff'] > 90){
	$m->addBBCode("Komendy [b]Wlasciciel[/b][br]");
	$m->addBBCode();

}
if($user['staff'] > 100){
	$m->addBBCode("Komendy [b]Supporter[/b][br]");
	$m->addBBCode();
}
$m->reply();
$m->clear();
?>