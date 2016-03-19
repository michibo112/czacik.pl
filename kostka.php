<?php
$kostka = rand(1,6);
$api->send($nick." rzuca kostka...");
    sleep(2);
if($kostka == 1) $api->send("Kostka wylosowala 1 oczek");
if($kostka == 2) $api->send("Kostka wylosowala 2 oczka");
if($kostka == 3) $api->send("Kostka wylosowala 3 oczka");
if($kostka == 4) $api->send("Kostka wylosowala 4 oczek");
if($kostka == 5) $api->send("Kostka wylosowala 5 oczek");
if($kostka == 6) $api->send("Kostka wylosowala 6 oczek");
?>