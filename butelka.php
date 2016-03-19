<?php
$sel = $db->query("SELECT `nick`, `rank` FROM `users` WHERE `online`='1' and `nr` !='".$from."' ORDER BY RAND() LIMIT 1");
    while($row = $sel->fetch_assoc())
    $wylosowany .= $main->nick($row['nick'], $row['rank']);
    $api->send($nick." kreci butelka");
    sleep(3);
$api->send("Wypadlo na  ".$wylosowany."
".$nick." Szykuj sie na zadanie albo pytanie ;>");
$api->BUILDER->clear();
?>