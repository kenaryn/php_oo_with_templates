<?php declare(strict_types=1);
namespace Adventures;

class Character {
  private string $_fname;
  private string $_lname;

  public function __construct(string $fname, string $lname) {
    $this->_fname = $fname;
    $this->_lname = $lname;
  }

  public function getFname(): string {
    return $this->_fname;
  }

  public function getLname(): string {
    return $this->_lname;
  }

  public function greet(string $greetings): string {
    return "$greetings $this->_fname $this->_lname" . PHP_EOL;
  }
} ?>