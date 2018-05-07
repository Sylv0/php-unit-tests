<?php

declare(strict_types=1);

namespace Yrgo\Tests\Weapons;

use PHPUnit\Framework\TestCase;
use Yrgo\Tornado;
use Yrgo\Shark;
use Yrgo\Weapons\Laser;

class TornadoTest extends TestCase
{
  public function test_GetSharks_ReturnsSharks() : void
  {
    $sharks = [new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser()), new Shark(new Laser())];
    // var_dump(count($sharks));
    $tornado = new Tornado($sharks);

    $this->assertSame($sharks, $tornado->getSharks());
  }
}
