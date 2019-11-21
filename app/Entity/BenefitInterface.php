<?php

namespace App\Entity;

/**
 * Class Benefit
 */
interface BenefitInterface
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
     * @return string
     */
    public function getDescription(): string;
}
