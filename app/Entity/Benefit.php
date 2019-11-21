<?php

namespace App\Entity;

/**
 * Class Benefit
 */
class Benefit implements BenefitInterface
{
    /** @var string $name */
    private $name;

    /** @var string $code */
    private $code;

    /** @var string $description */
    private $description;

    /**
     * @param string $name
     * @param string $code
     * @param string $description
     */
    public function __construct(string $name, string $code, string $description)
    {
        $this->name        = $name;
        $this->code        = $code;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
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
    public function getDescription(): string
    {
        return $this->description;
    }
}
