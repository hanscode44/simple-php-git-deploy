<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

/**
 * @package Tests
 * @author Hans Loos <hansloos.g1@gmail.com>
 */
class ReturnValuesTest extends TestCase
{
    public function testEmptyVariable()
    {
        $variable = '';
        $this->assertEmpty($variable);
    }

}
 