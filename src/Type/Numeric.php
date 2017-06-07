<?php

namespace Logitick\Contract\Type;

use Logitick\Contract\ContractInterface;
use Logitick\Contract\Type\Numeric\IsGreaterThan;

trait Numeric {

    public function greaterThan($val) {
        return new IsGreaterThan($this->value, $val, $this);
    }
}