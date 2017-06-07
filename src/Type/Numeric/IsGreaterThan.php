<?php

namespace Logitick\Contract\Type\Numeric;

use Logitick\Contract\DecoratorContract;
use Logitick\Contract\ComparisonContractDecorator;
use Logitick\Contract\ContractInterface;
use Logitick\Contract\ContractNotMetException;


/**
 * IsGreaterThan(5, 9) reads is 5 GreaterThan 9
 */
class IsGreaterThan extends ComparisonContractDecorator {

    /**
     * determines if the value meets the contract requirement
     *
     * @return boolean
     */
    public function meetsContract() {
        if (!$this->check()) {
            throw new ContractNotMetException($this->baseContract->getMessage());
        }
        return true;
    }


    /**
     * Checks if the contract has been met. Will throw an exception if otherwise.
     *
     * @return void
     * @throws \Logitick\Contract\ContractNotMetException
     */
    public function check() {
        return $this->baseContract->check() && $this->value > $this->value2;
    }
    
    public function getMessage() {
        return $this->message;
    }

    public function withMessage($message) {
        $this->baseContract->withMessage($message);
        return $this;
    }
}