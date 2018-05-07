<?php

/*
 * This file is part of Yrgo.
 *
 * (c) Yrgo, högre yrkesutbildning.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Yrgo\Tests\Weapons;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Yrgo\Weapons\Laser;

/**
 * This is the laser weapon test class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class LaserTest extends TestCase
{
    public function testGetName()
    {
        $laszzzoor = new Laser();

        $this->assertSame('laser', $laszzzoor->getName());
    }

    public function testGetColor()
    {
        $laszzzoor = new Laser();

        $this->assertSame(null, $laszzzoor->getColor());
    }

    public function testSetColor()
    {
        $laszzzoor = new Laser();

        $laszzzoor->setColor('tomato');

        $this->assertSame('tomato', $laszzzoor->getColor());
    }

    public function testSetInvalidColor()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid laser color [wah]');

        $laszzzoor = new Laser();
        $laszzzoor->setColor('wah');
    }
}
