<?php

namespace src\text;

use PHPUnit\Framework\TestCase;

class StringHelperTest extends TestCase
{
    /**
     * @var
     */
    protected $tester;

    /**
     * @var StringHelper
     */
    private $classTest;

    /**
     * Инициализация
     */
    protected function setUp()
    {
        $this->classTest = new StringHelper();
    }

    /**
     * @throws \OutOfRangeException
     * @throws \Exception
     */
    public function testGetMiddleCharacter(): void
    {
        $this->assertEquals('es', $this->classTest->getMiddleCharacter('test'));
        $this->assertEquals('t', $this->classTest->getMiddleCharacter('testing'));
        $this->assertEquals('dd', $this->classTest->getMiddleCharacter('middle'));
        $this->assertEquals('A', $this->classTest->getMiddleCharacter('A'));
        $this->assertEquals('gf', $this->classTest->getMiddleCharacter('gf'));
    }
}