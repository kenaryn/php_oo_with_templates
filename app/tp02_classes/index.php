<?php
declare(strict_types=1);
require_once 'controller/interns_controller.php';

if (!isset($_GET['page'])) {
  print_array_interns();
  print_object_interns();
}


?>

