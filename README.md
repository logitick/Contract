[![Build Status](https://travis-ci.org/logitick/Contract.svg?branch=master)](https://travis-ci.org/logitick/Contract)
# Contract

A library to assist with Design By Contract.


## Usage
```php
public function setName($name) {
    Contract::isString($name)->isNotEmpty();
}
```

### Method Chaining
```php
public function intDivision($a, $b) {
    Contract::isInt($a);
    Contract::isInt($b)
        ->greaterThan(0)
        ->withMessage('Cannot divide by zero');
    ...
}

```