<?php

namespace Logitick\Contract;

abstract class DecoratorContract {

    /**
     * @var ContractInterface
     */
    protected $baseContract;

    protected $value;

    public function __construct($val, ContractInterface $contract) {
        $this->value = $val;
        $this->baseContract = $contract;
    }
}