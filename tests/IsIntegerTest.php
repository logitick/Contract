<?php
namespace Logitick\Contract\Tests;

use \Logitick\Contract\Contract;
use \Logitick\Contract\Type\IsInteger;

class IsIntegerTest extends \PHPUnit_Framework_TestCase {

    public function testContractIsIntReturnsIsInteger() {
        $contract = Contract::isInt(12);
        $this->assertInstanceOf('\\Logitick\\Contract\\Type\\IsInteger', $contract);
    }

    public function testIsIntegerCheck() {
        $contract = new IsInteger(12);
	$this->assertTrue($contract->check());
    }

    public function testIsIntegerCheckOnString() {
        $contract = new IsInteger('123');
	$this->assertfalse($contract->check());
    }

    public function testIsIntegerCheckOnDouble() {
        $contract = new IsInteger(1.2);
	$this->assertFalse($contract->meetsContract());
    }

}
