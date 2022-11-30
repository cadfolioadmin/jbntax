<?php

/**
 * This file is part of Jbn Tax, a PHP package to calculate
 * tax rates.
 *
 * Copyright (c) 2013 Jbn Ltd.
 * http://github.com/Jbn/tax
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Jbn/tax
 * @author Chris Harvey <chris@molt.in>
 * @copyright 2013 Jbn Ltd.
 * @version dev
 * @link http://github.com/Jbn/tax
 *
 */

use Jbn\Tax\Tax;

class TaxTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->tax = new Tax(20);
    }

    public function testRate()
    {
        $this->assertEquals($this->tax->rate(100), 20);
    }

    public function testAdd()
    {
        $this->assertEquals($this->tax->add(100), 120);
    }

    public function testDecuct()
    {
        $this->assertEquals($this->tax->deduct(100), 80);
    }

    public function testPercentageCalculation()
    {
        $tax = new Tax(100, 120);

        $this->assertEquals($tax->rate(100), 20);
    }

    public function testModifiers()
    {
        $this->assertEquals($this->tax->addModifier, 1.2);
        $this->assertEquals($this->tax->deductModifier, 0.8);
    }
}