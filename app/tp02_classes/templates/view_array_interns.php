<?php
  /**
   * Prints all array's item.
   */
  foreach ($interns as $key => $value) {
    foreach ($value as $k => $v) {?>
      <p><?=$k?>: <?=$v?></p>
    <?php
    }
  }?>