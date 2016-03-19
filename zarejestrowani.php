<?php
$registered = $db->query("SELECT * FROM `users`");
$count = $registered->num_rows-1;
$m->addBBCode("Liczba zarejestrowanych użytkowników: [b]{$count}[/b]");
$m->reply();
?>