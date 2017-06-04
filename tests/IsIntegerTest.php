<?php
namespace Logitick\Contract\Tests;

use \Logitick\Contract\Contract;

class IsIntegerTest extends \PHPUnit_Framework_TestCase {

    public function testContractIsIntReturnsIsInteger() {
        $contract = Contract::isInt(12);
        $this->assertInstanceOf('\\Logitick\\Contract\\Type\\IsInteger', $contract);
    }
}