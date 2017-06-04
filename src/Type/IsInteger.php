<?php

namespace Logitick\Contract\Type;

use Logitick\Contract\ContractInterface;

class IsInteger implements ContractInterface {

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