<?php
ini_set('include_path', '/files'); //can be removed if root folder is not <files>
require 'src/createXML.php';
use PHPUnit\Framework\TestCase;

class createXMLTest extends TestCase
{
    private $createXML;

    protected function setUp(): void
    {
        $this->createXML = new readXML();
    }
    protected function tearDown(): void
    {
        $this->createXML = null;
    }

    public function testCreateXML()
    {
        $result = $this->createXML->readXMLFile();
        $this->assertEqualsCanonicalizing(array(
            array('1P3115' => 'commercial'),
            array('1P0116' => 'commercial'),
            array('1P0117' => 'commercial'),
            array('1P0006' => 'commercial'),
            array('1P0118' => 'rental'),
            array("1P0119" => "rural"),
            array('1P0120' => 'business'),
            array('1P0121' => 'business'),
            array('1P0122' => 'business'),
            array('1P0123' => 'holidayRental'),
            array('2631096' => 'holidayRental'),
            array('1P0036' => 'residential')), $result);
    }

}
