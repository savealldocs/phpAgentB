<?php
ini_set('include_path', '/files'); //can be removed if root folder is not <files>
require 'src/stringDuplicate.php';
use PHPUnit\Framework\TestCase;

class stringDuplicateTest extends TestCase
{
    private $stringDuplicate;

    protected function setUp(): void
    {
        $this->stringDuplicate = new StringDuplicate();
    }
    protected function tearDown(): void
    {
        $this->stringDuplicate = null;
    }

    public function addDataProvider()
    {
        return array(
            array('documentarily', true),
            array('aftershock', true),
            array('countryside', true),
            array('six-year-old', true),
            array('Double-down', false),
            array('Euclidean', false),
            array('epidemic', false),

        );
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testStringDuplicate($a, $expected)
    {
        $result = $this->stringDuplicate->checkDuplicate($a);
        $this->assertEquals($expected, $result);
    }
}
