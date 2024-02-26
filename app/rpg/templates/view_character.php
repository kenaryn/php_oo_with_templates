<?php declare(strict_types=1); ?>

<article id="news">
  <p><?=$princess->greet("Greetings!")?></p>
  <p><?php print_r($princess); ?></p>
  <p><?php var_dump($princess); ?></p>
  <p><?php foo($philosopher); ?></p>
</article>