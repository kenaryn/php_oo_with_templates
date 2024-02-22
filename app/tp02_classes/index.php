<?php
declare(strict_types=1);
require_once 'controller/interns_controller.php';

if (isset($_GET['page'])) {
  switch ($_GET['page']) {
    case 'intern':
      print_array_interns();
      break;
    case 'obj':
      print_object_interns();
      break;
    case 'rect':
      print_rect_calculations();
      break;
    default:
      print_array_interns();
    }
} else {
  print_array_interns();
}
?>
