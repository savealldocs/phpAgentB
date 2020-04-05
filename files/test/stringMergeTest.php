<?php
ini_set('include_path', '/files'); //can be removed if root folder is not <files>
require 'src/stringMerge.php';
use PHPUnit\Framework\TestCase;

class stringMergeTest extends TestCase
{
    private $mergeString;

    protected function setUp(): void
    {
        $this->mergeString = new StringMerge();
    }
    protected function tearDown(): void
    {
        $this->mergeString = null;
    }

    public function addDataProvider()
    {
        return array(
            array('MICHAEL', 'JORDAN', 'MJIOCRHDAAENL'),
        );
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testStringMerge($a, $b, $expected)
    {
        $result = $this->mergeString->mergeBetween($a, $b);
        $this->assertEquals($expected, $result);
    }
}
