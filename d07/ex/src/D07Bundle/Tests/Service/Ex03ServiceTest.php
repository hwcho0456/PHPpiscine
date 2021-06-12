<?php
// src/E07Bundle/Tests/Service/Ex03ServiceTest.php
namespace D07Bundle\Tests\Service;

use D07Bundle\Service\Ex03Service;
use PHPUnit\Framework\TestCase;

class Ex03ServiceTest extends TestCase
{
    public function testuppercaseWords()
    {
        $tester = new Ex03Service();
        $result1 = $tester->uppercaseWords("abc");
        $result2 = $tester->uppercaseWords("dsffgdhfg");
        $result3 = $tester->uppercaseWords("fucK");
        

        // assert that your calculator added the numbers correctly!
        $this->assertEquals("Abc", $result1);
        $this->assertEquals("Dsffgdhfg", $result2);
        $this->assertEquals("FucK", $result3);
    }

    public function testcountNumbers()
    {
        $tester = new Ex03Service();
        $result1 = $tester->countNumbers("ab34635u746c");
        $result2 = $tester->countNumbers("dfgf345ffgdhfg745");
        $result3 = $tester->countNumbers("fucK");
        

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(8, $result1);
        $this->assertEquals(6, $result2);
        $this->assertEquals(0, $result3);
    }
}