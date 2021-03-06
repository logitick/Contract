<?php

namespace Logitick\Contract;

interface ContractInterface {

    /**
     * determines if the value meets the contract requirement
     *
     * @return boolean
     */
    public function meetsContract();
    
    /**
     * Checks if the contract has been met. Will throw an exception if otherwise.
     *
     * @return void
     * @throws \Logitick\Contract\ContractNotMetException
     */
    public function check();
    
    public function getMessage();

    /**
     * Set the exception message on fail
     *
     * @param string $message
     * @return \Logitick\Contract\ContractInterface returns the current object to allow chaining
     */
    public function withMessage($message);
}