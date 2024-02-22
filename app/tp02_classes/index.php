<?php
declare(strict_types=1);
require_once 'controller/interns_controller.php';

if (!isset($_GET['page'])) {
  switch ($_GET['page']) {
    case 'intern':
      print_array_interns();
      break;
    case 'obj':
      print_object_interns();
      break;
    case 'rect':
      $rec1->calc_perimeter();
      $rec1->calc_surface_area();
      $rec1->is_lozenge();
      break;
    default:
      print_array_interns();
  }
}
?>
