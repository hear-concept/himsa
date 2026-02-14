<?php

namespace HearConcept\HIMSA\Exceptions;

use Exception;
use Throwable;

class HIMSAException extends Exception
{
    public function __construct(string $message = "", int $code = 500, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}