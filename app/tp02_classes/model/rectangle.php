<?php
declare(strict_types=1);

class Rectangle {
  public float $width;
  public float $length;

  public function __construct(float $width, float $length)
  {
    $this->width = $width;
    $this->length = $length;
  }

  public function calc_perimeter(): float {
    return $this->width * 2 + $this->length * 2;
  }
  
  public function calc_surface_area(): float {
    return $this->width * $this->length;
  }

  public function is_lozenge(): bool {
    return $this->width == $this->length;
  }
}
?>