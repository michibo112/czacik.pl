<?php
   extract($GLOBALS);
$q = $db->query("select * from `pary`");
$a = 1;
if($q->num_rows == 0){
die("".$main->diee("Brak par!")."");}
while($aav = $q->fetch_assoc())
  {
$notateczkiaaaaz .=''.$a.')-->'.$aav['nr1']." i ".$aav['nr2']."\r\n";
$a++;
 }
$main->echoo(" Pary:\r\n {$notateczkiaaaaz}\r\n");
