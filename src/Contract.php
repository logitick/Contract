<?php

namespace Logitick\Contract;

class Contract {
    public static function isInt($intVal) {
        return new Type\IsInteger($intVal);
    }
}