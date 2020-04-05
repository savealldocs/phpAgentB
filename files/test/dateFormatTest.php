<?php
ini_set('include_path', '/files'); //can be removed if root folder is not <files>
require 'src/dateFormat.php';
use PHPUnit\Framework\TestCase;

class dateFormatTest extends TestCase
{
    private $dateString;

    protected function setUp(): void
    {
        $this->dateString = new DateFormat();
    }
    protected function tearDown(): void
    {
        $this->dateString = null;
    }
    public function addDataProvider()
    {
        return array(
            array('The First Monday of October 2019', '2019-10-07'),
            array('The Second Monday of October 2019', '2019-10-14'),
            array('The Third Tuesday of October 2019', '2019-10-15'),
            array('The Fourth Tuesday of October 2019', '2019-10-22'),
            array('The Fifth Tuesday of October 2019', '2019-10-29'),
            array('The Last Wednesday of October 2019', '2019-10-30'),
        );
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testDateFormation($a, $expected)
    {
        $result = $this->dateString->dateFormation($a);
        $this->assertEquals($expected, $result);
    }

}
