<?php
declare(strict_types=1);

class Person {
  private string $_fname;
  private string $_lname;

  public function getFname(): string {
    return $this->_fname;
  }

  public function setFname(string $_fname): void {
    $this->_fname = $_fname;
  }

  public function getLname(): string {
    return $this->_lname;
  }

  public function setLname($_lname) {
    $this->_lname = $_lname;
  }

  public function __toString(): string {
    // return json_encode([$this->_lname, $this->_fname]);
    return json_encode($this->_fname);
  }
}
?>