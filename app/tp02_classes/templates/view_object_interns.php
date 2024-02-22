<?php
declare(strict_types=1);

/**
 * Prints all array's object item.
  */
foreach ($interns as $intern) {
    ?>
    <p><?=$intern->greetings()?></p>
    <?php
}
?>