<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

/**
 * @package VATChecker\Tests
 * @author Wim Griffioen <wgriffioen@gmail.com>
 */
class ReturnValuesTest extends TestCase
{
    public function testEmptyVariable()
    {

        $variable = '';

        $this->assertEmpty($variable);
    }

}
 