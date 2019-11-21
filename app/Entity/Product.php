<?php

namespace App\Entity;

use App\Visitor\Visitor;

class Product implements ProductInterface
{
    /** @var string */
    private $name;

    /** @var string */
    private $code;

    /** @var int */
    private $price;

    /**
     * @param string $name
     * @param string $code
     * @param int    $price
     */
    public function __construct(string $name, string $code, int $price)
    {
        $this->name  = $name;
        $this->code  = $code;
        $this->price = $price;
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
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    public function accept(Visitor $visitor): array
    {
        return $visitor->visitProduct($this);
    }
}
