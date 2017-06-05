<?php

namespace Logitick\Contract\Type;

use Logitick\Contract\ContractInterface;
use Logitick\Contract\ContractNotMetException;
use Webmozart\Assert\Assert;

class IsInteger implements ContractInterface {

    private $value;

    private $message = "Invalid value";

    function __construct($val) {
        $this->value = $val;
    }

    /**
     * determines if the value meets the contract requirement
     *
     * @return boolean
     */
    public function meetsContract() {
        if (!$this->check()) {
            throw new ContractNotMetException();
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
        return is_int($this->value);
    }
    
    public function getIdentifier() {

    }
    public function getMessage() {
        return $this->message;
    }

    public function withMessage($message) {
        $this->message = $message;
    }
}