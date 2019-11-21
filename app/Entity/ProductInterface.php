<?php

namespace App\Entity;

use App\Visitor\Entity;

interface ProductInterface extends Entity
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getCode(): string;

    /**
     * @return int
     */
    public function getPrice(): int;
}
