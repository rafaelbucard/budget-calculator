<?php

namespace Budget\DesignPattern;

class TaxCalculator
{
    public function calc(Budget $budget): float
    {
        return $budget->value * 0.1;
    }
}