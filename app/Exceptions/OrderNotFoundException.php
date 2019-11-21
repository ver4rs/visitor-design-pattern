<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class OrderNotFoundException extends Exception
{
    /**
     * @param string         $id
     * @param int            $code
     * @param Throwable|null $previous
     */
    public function __construct(string $id = "", $code = 0, Throwable $previous = null)
    {
        $message = 'Order ID ' . $id . ' could not be found.';

        parent::__construct($message, $code, $previous);
    }
}
