<?php
declare(strict_types=1);
?>

<main>
<form id="feed-custom" method="post" action="">
  <fieldset>
    <legend>How many news do you want to display?</legend>
    <select name="feed-amount">
      <option value="5" <?=$amount == 5 ? 'selected': ''?>>5</option>
      <option value="6" <?=$amount == 6 ? 'selected': ''?>>6</option>
      <option value="7" <?=$amount == 7 ? 'selected': ''?>>7</option>
      <option value="8" <?=$amount == 8 ? 'selected': ''?>>8</option>
      <option value="9" <?=$amount == 9 ? 'selected': ''?>>9</option>
      <option value="10" <?=$amount == 10 ? 'selected': ''?>>10</option>
    </select>
    <button type="submit" id="confirm">Confirm</button>
  </fieldset>
</form>

<article class="feed">
  <?php
  // print_custom_news($news, $feed_amount);
  print_news();
  ?>
</article>
</main>

<?php
include_once './footer.php';
?>