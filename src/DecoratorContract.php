<?php

namespace Logitick\Contract;

trait DecoratorContract {

    /**
     * @var ContractInterface
     */
    private $baseContract;

    public function __construct(ContractInterface $contract) {
        $this->baseContract = $contract;
    }
}