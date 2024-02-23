<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require_once './model/monster.php';
final class MonsterTest extends TestCase {

  public function testNotNull(): void {
    $this->expectException(ArgumentCountError::class);
    $monster = new Adventures\Monster();
  }
  

  public function testDefaultValues(): void {
    // $monster = new Adventures\Monster(5,6,6);
    
    // ;
    $monster = new Adventures\Monster(1,1,1);
    $this->assertNotNull($monster);
     $this->assertEquals(1, $monster->getDefense());
    $this->assertEquals(1, $monster->getDefense());
    $this->assertEquals(1, $monster->getHP());

  }

  
  public function testAttrAttack(): void {
    $monster = new Adventures\Monster(1,1,1);
    $this->assertObjectHasProperty('_attack', $monster);
  }

  public function testAttrDefense(): void {
    $monster = new Adventures\Monster(1, 1, 2);
    $this->assertObjectHasProperty('_defense', $monster);
  }

  public function testAttrHP(): void {
    $monster = new Adventures\Monster(1, 1, 1);
    $this->assertObjectHasProperty('_HP', $monster);
  }
  
  public function testAttrIsInt(): void {
    $monster = new Adventures\Monster(1, 1, 2);
    $this->assertIsInt($monster->getAttack());
  }
  
  public function testAttrDefenseIsInt(): void {
    $monster = new Adventures\Monster(1, 1, 2);
    $this->assertIsInt($monster->getHP());
  }
  
  public function testAttrHPIsInt(): void {
    $monster = new \Adventures\Monster(1, 1, 2);
    $this->assertIsInt($monster->getHP());
  }
  
  public function testCalcDefense(): void {
    $monster = new Adventures\Monster(5, 9, 3);
    $this->assertEquals(9, $monster->getDefense());
  }

  public function testCalcAttack(): void {
    $monster = new Adventures\Monster(15, 3, 3);
    $this->assertEquals(15, $monster->getAttack());
  }
} ?>