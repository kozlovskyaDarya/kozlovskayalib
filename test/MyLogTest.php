<?php
use kozlovskaya\MyLog;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class MyLogTest extends TestCase
{
    /**
     * @dataProvider providerEquation
     */
    public function testLog($str)
    {
        $this->assertEquals('',  \kozlovskaya\MyLog::log($str));
    }
    public function providerEquation ()
    {
        return array (
            array ("something"),
            array ("some things"),
            array (001001101),
            array (false)
        );
    }
    public function testLogEx()
    {
        $this->expectException(TypeError::class);
        $this->assertEquals('',  \kozlovskaya\MyLog::log(null));
        $this->assertEquals('',  \kozlovskaya\MyLog::log());
    }
    public function testWrite()
    {
        $this->assertEquals('',   \kozlovskaya\MyLog::write(123));
        $this->assertEquals('',   \kozlovskaya\MyLog::write("test"));
        $this->assertEquals('',   \kozlovskaya\MyLog::write());
    }
}
?> 