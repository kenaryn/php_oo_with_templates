<?php declare(strict_types=1);
namespace Adventures;

class Monster {
  private int $_attack;
  private int $_defense;
  private int $_HP;

  public function __construct(int $attack, int $defense, int $HP) {
    $this->_attack = $attack;
    $this->_defense = $defense;
    $this->_HP = $HP;
  }

  public function getAttack(): int {
    return $this->_attack;
  }

  public function getDefense(): int {
    return $this->_defense;
  }

  public function setAttack(int $attack): void {
    $this->_attack = $attack;
  }

  public function setDefense(int $defense): void {
    $this->_defense = $defense;
  }

  public function getHP(): int {
    return $this->_HP;
  }
  
  public function setHP(int $HP): void {
    $this->_HP = $HP;
  }

} ?>