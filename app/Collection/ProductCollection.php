<?php

namespace App\Collection;

use App\Entity\ProductInterface;

class ProductCollection
{
    /** @var array */
    private $items;

    /**
     * @param array $items
     */
    public function __construct(array $items = [])
    {
        foreach ($items as $item) {
            if ($item instanceof ProductInterface) {
                $this->add($item);
            }
        }
    }

    /**
     * @param ProductInterface $product
     */
    public function add(ProductInterface $product)
    {
        $this->items[] = $product;
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
