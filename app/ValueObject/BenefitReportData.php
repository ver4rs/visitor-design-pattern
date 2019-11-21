<?php

namespace App\ValueObject;

/**
 * Class BenefitReportData
 */
class BenefitReportData
{
    /** @var string */
    private $code;

    /** @var string */
    private $message;

    /**
     * @param string $code
     * @param string $message
     */
    public function __construct(string $code, string $message)
    {
        $this->code    = $code;
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
