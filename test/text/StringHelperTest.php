<?php

namespace src\text;

use OutOfRangeException;
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
     * @throws OutOfRangeException
     */
    public function testSuccessGetMiddleCharacter(): void
    {
        $this->assertEquals('es', $this->classTest->getMiddleCharacter('test'));
        $this->assertEquals('t', $this->classTest->getMiddleCharacter('testing'));
        $this->assertEquals('dd', $this->classTest->getMiddleCharacter('middle'));
        $this->assertEquals('ий', $this->classTest->getMiddleCharacter('Русский язык'));
        $this->assertEquals('A', $this->classTest->getMiddleCharacter('A'));
        $this->assertEquals('gf', $this->classTest->getMiddleCharacter('gf'));
        $this->assertEquals('', $this->classTest->getMiddleCharacter(''));
    }

    /**
     * @expectedException \OutOfRangeException
     */
    public function testFailGetMiddleCharacter(): void
    {
        $this->classTest->getMiddleCharacter(str_repeat('A', 1001));
    }
}