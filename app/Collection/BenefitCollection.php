<?php
namespace App\Collection;

use App\Entity\BenefitInterface;
use App\Entity\ProductInterface;

class BenefitCollection
{
    /** @var array */
    private $items;

    /**
     * @param array $items
     */
    public function __construct(array $items = [])
    {
        foreach ($items as $item) {
            $this->add($item);
        }
    }

    /**
     * @param BenefitInterface $benefit
     */
    public function add(BenefitInterface $benefit)
    {
        $this->items[] = $benefit;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->items);
    }
}
