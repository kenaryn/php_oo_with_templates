<?php
declare(strict_types=1);
?>

<article id="rec1-results">
  <h4>Rectangle 1</h4>
  <p>Perimeter: <?=$rec1->calc_perimeter()?>cm</p>
  <p>Surface area: <?=$rec1->calc_surface_area()?>cm²</p>
  <p><?=$rec1->is_lozenge()?></p>
</article>

<article id="rec2-results">
  <h4>Rectangle 2</h4>
  <p>Perimeter: <?=$rec2->calc_perimeter()?>cm</p>
  <p>Surface area: <?=$rec2->calc_surface_area()?>cm²</p>
  <p><?=$rec2->is_lozenge()?></p>
</article>