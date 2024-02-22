<?php
declare(strict_types=1);

function print_login() {
  // if (isset($_POST['lname']) && isset($_POST['user-password']) && $_POST['lname'] == 'admin'))
  ob_start();
  include './templates/view_login.php';
  $content = ob_get_content();
  ob_end_clean();
  include_once './templates/base.php';
}

function logout() {
  session_unset($_SESSION['is_connected']);
  session_destroy();
  header('Location: ./index.php?page=login');
}
?>