<?php
namespace Logitick\Contract\Tests;

use \Logitick\Contract\Contract;
use \Logitick\Contract\Type\IsInteger;

class IsIntegerTest extends \PHPUnit_Framework_TestCase {

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
        $this->assertFalse($contract->check());
    }

    public function testIsIntegerMeetsContract() {
        $contract = new IsInteger(12);
        $this->assertTrue($contract->meetsContract());
    }

    /**
     * @expectedException \Logitick\Contract\ContractNotMetException
     */
    public function testIsIntegerFailsOnString() {
        $contract = new IsInteger('123');
        $this->assertfalse($contract->meetsContract());
    }

    /**
     * @expectedException \Logitick\Contract\ContractNotMetException
     */
    public function testIsIntegerFailsOnDouble() {
        $contract = new IsInteger(1.2);
        $this->assertFalse($contract->meetsContract());
    }

    /**
     * @expectedException \Logitick\Contract\ContractNotMetException
     * @expectedExceptionMessage Invalid parameter. Must be an integer
     */
    public function testIsIntegerFailsWithMessage() {
        $contract = new IsInteger(1.2);
        $contract->withMessage("Invalid parameter. Must be an integer");
        $this->assertFalse($contract->meetsContract());
    }

}
