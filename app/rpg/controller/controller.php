<?php
declare(strict_types=1);

require_once './model/monster.php';
require_once './model/character.php';
include_once './model/functions.php';
?>

<?php
$goblin = new \Adventures\Monster(1, 1, 2);
$princess = new \Adventures\Character(fname: 'Eleanor', lname: 'of Aquitain');

ob_start();
include_once './templates/view_character.php';
$contents = ob_get_contents();
ob_end_clean();
include_once './templates/base.php';
?>