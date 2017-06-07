<?php
namespace Logitick\Contract\Tests;

use \Logitick\Contract\Contract;
use \Logitick\Contract\Type\IsInteger;

class ContractTest extends \PHPUnit_Framework_TestCase {

    public function testContractIsIntReturnsIsInteger() {
        $contract = Contract::isInt(12);
        $this->assertInstanceOf('\\Logitick\\Contract\\Type\\IsInteger', $contract);
    }

    /**
     * @expectedException \Logitick\Contract\ContractNotMetException
     * @expectedExceptionMessage Must be an integer
     */
    public function testContractIsIntExceptionMessage() {
        $contract = Contract::isInt('12')
            ->withMessage('Must be an integer')->meetsContract();
    }

    public function testContractChainable() {
        $this->assertTrue(
            Contract::isInt(65)
                ->greaterThan(3)
                ->check()
        );
    }

    /**
     * @expectedException \Logitick\Contract\ContractNotMetException
     * @expectedExceptionMessage 2 must be greater than 3
     */
    public function testContractWithMessageChainable() {
        $this->assertTrue(
            Contract::isInt(2)
                ->greaterThan(3)
                ->withMessage('2 must be greater than 3')
                ->meetsContract()
        );
    }

    /**
     * @expectedException \Logitick\Contract\ContractNotMetException
     * @expectedExceptionMessage 2 must be greater than 3
     */
    public function testContractChainedIsIntContractWithDouble() {
        $this->assertFalse(
            Contract::isInt(95.71)
                ->greaterThan(3)
                ->withMessage('2 must be greater than 3')
                ->meetsContract()
        );
    }

}
