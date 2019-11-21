<?php

namespace App\Repository\DummyORM;

use App\Collection\BenefitCollection;
use App\Entity\BenefitInterface;

/**
 * Class DummyBenefitRepository
 */
class DummyBenefitRepository
{
    /** @var array $items */
    private $items = [];

    /** @var BenefitCollection $collection */
    private $collection;

    /**
     * @param BenefitCollection $collection
     */
    public function __construct(BenefitCollection $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @param string $code
     *
     * @return BenefitInterface|null
     */
    public function findBenefitByProductCode(string $code): ?BenefitInterface
    {
        /** @var BenefitInterface[] $data */
        $data = $this->collection->getItems();
        foreach ($data as $item) {
            if ($item->getCode() == $code) {
                return $item;
            }
        }
        return null;
    }
}
