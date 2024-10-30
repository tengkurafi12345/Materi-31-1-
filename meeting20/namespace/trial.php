<?php

require_once 'core.php';

use function \Player\User\salam as greeting;
use const \Player\NPC\AUTHOR as author;
use \Player\User\Character as character;
use \Player\NPC\Character as npc;

$Heroku=new character();
$Enemy=new npc();

echo author;
greeting();

echo $Heroku->name.PHP_EOL;
echo "<br>";
echo $Enemy->name.PHP_EOL;

?>