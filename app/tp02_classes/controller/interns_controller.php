<?php
declare(strict_types=1);
require_once './model/intern_class.php';

function print_array_interns()
{
  $interns = [];
  $aurele = ['fname' => 'aurele', 'lname' => 'plazz'];
  $kena = ['fname' => 'kena', 'lname' => 'aerynth'];
  array_push($interns, $aurele);
  array_push($interns, $kena);

  $eleanor = new Intern();
  $eleanor->fname = 'Eleanor';
  $eleanor->lname = 'of Aquitain';

  $seneca = new Intern();
  $seneca->fname = 'Lucius Anaeus';
  $seneca->lname = 'seneca';
  $interns =  new ArrayObject([$seneca,$eleanor]);

  ob_start();
  include './templates/view_array_interns.php';
  include './templates/view_object_interns.php';
  $content = ob_get_contents();
  ob_end_clean();
  include_once 'templates/base.php';
}

function print_object_interns() {
  
}