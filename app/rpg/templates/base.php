<?php declare(strict_types=1);

include_once './templates/header.php';
?>

<nav>
  <a href="./index.php">Home</a>
</nav>

<main>
  <?=$contents?>
</main>

<?php
include_once './templates/footer.php';
?>