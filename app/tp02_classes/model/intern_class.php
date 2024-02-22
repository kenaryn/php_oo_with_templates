<?php
declare(strict_types=1);

class Intern {
  public string $fname;
  public string $lname;

  public function __toString(): string {
    return json_encode($this);
  }

  public function greetings(): string {
    return "Hi! I am $this->fname $this->lname.";
  }
}
?>