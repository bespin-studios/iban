<?php

namespace Bespin\DataValidation\Iban\Data;

class SubString
{
    public function __construct(public readonly int $offset, public readonly int $length, public readonly string $pattern)
    {
    }
}