<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class DuplicateOrderIdException extends Exception
{
    /**
     * @param string         $id
     * @param int            $code
     * @param Throwable|null $previous
     */
    public function __construct(string $id = "", $code = 0, Throwable $previous = null)
    {
        $message = 'Order ID ' . $id . ' already exists.';

        parent::__construct($message, $code, $previous);
    }
}
