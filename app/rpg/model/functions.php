<?php declare(strict_types=1);

function foo(\Adventures\Character $character): void
{
  echo 'foo' . PHP_EOL;
  $character->greet('hi');
  $thales = new \Adventures\Character(fname: 'thales', lname: 'millet');
  $thales->greet('guten morgen');
}
?>