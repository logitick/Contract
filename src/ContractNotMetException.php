<?php

namespace Logitick\Contract;


class ContractNotMetException extends \InvalidArgumentException {
    function __construct($message) {
    }
}