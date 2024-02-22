<?php
declare(strict_types=1);

/**
 * Prints all array's object item's greeting() method.
  */
foreach ($interns as $intern) {
    ?>
    <p><?=$intern->greetings()?></p>
    <?php
}
?>

