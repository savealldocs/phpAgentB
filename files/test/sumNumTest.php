<?php
ini_set('include_path', '/files'); //can be removed if root folder is not <files>
require 'src/sumNum.php';
use PHPUnit\Framework\TestCase;

class sumNumTest extends TestCase
{
    private $sumNum;

    protected function setUp(): void
    {
        $this->sumNum = new SumNum();
    }
    protected function tearDown(): void
    {
        $this->sumNum = null;
    }
    public function addDataProvider()
    {
        return array(
            array(4, 4),
            array(18, 9),
            array(258, 6),
        );
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testSumNum($a, $expected)
    {
        $result = $this->sumNum->sumNumber($a);
        $this->assertEquals($expected, $result);
    }

}
