<?php

namespace Logitick\Contract\Type\Numeric;

use Logitick\Contract\DecoratorContract;
use Logitick\Contract\ContractInterface;

class IsGreaterThan implements ContractInterface {

    use DecoratorContract;
    /**
     * determines if the value meets the contract requirement
     *
     * @return boolean
     */
    public function meetsContract() {
        return false;
    }
    
    /**
     * Checks if the contract has been met. Will throw an exception if otherwise.
     *
     * @return void
     * @throws \Logitick\Contract\ContractNotMetException
     */
    public function check() {
    }
    
    public function getIdentifier() {

    }
    public function getMessage() {

    }
}