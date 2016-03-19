<?php
$m->addBBCode("Lista aliasów:[br]");
$aliases = $db->query("SELECT * FROM `alias`");
while($alias = $aliases->fetch_assoc()){
	$m->addBBCode("[b]{$alias['alias']}[/b] to alias  komendy [b]{$alias['full']}[/b][br]");
}
$m->reply();
?>