<?php
declare(strict_types=1);

function print_all_array_item(array $arr): void {
  /**
   * Prints all array's item.
   */
  foreach ($arr as $key => $value) {
    foreach ($value as $k => $v) {
    ?>
      <p><?=$k?>: <?=$v?></p>
    <?php
    }
  }
}

function print_all_object_arr(ArrayObject $collection): void {
  /**
 * Prints all array's object item.
 */
  foreach ($collection as $val) {
    ?>
    <p><?=$val?></p>
    <?php
  }
}
?>