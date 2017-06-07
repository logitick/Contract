<?php

namespace Logitick\Contract;

abstract class ComparisonContractDecorator extends DecoratorContract{

    protected $value2;

    public function __construct($val, $val2, ContractInterface $contract) {
        $this->value = $val;
        $this->value2 = $val2;
        $this->baseContract = $contract;
    }
}