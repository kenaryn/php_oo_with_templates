<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require_once './model/character.php';

final class CharacterTest extends TestCase {
  public function testNotNull(): void {
    $character = new \Adventures\Character();
    $this->assertNotNull($character);
  }
} ?>