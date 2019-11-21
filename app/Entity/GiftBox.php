<?php

namespace App\Entity;

use App\Collection\ProductCollection;
use App\Visitor\Entity;
use App\Visitor\Visitor;

class GiftBox implements ProductInterface
{
    /** @var ProductCollection */
    private $items;

    /** @var string */
    private $name;

    /** @var string */
    private $code;

    /** @var int */
    private $price;

    /**
     * @param ProductCollection $items
     * @param string            $name
     * @param string            $code
     * @param int|null          $price
     */
    public function __construct(ProductCollection $items, string $name, string $code, int $price = null)
    {
        $this->items = $items;
        $this->name  = $name;
        $this->price = $price;
        $this->code = $code;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items->getItems();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        if ($this->price !== null) {
            return $this->price;
        }

        $total = 0;

        foreach ($this->getItems() as $product) {
            $total = $total + $product->getPrice();
        }

        return $total;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    public function accept(Visitor $visitor): array
    {
        return $visitor->visitGiftBox($this);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        // TODO: Implement getId() method.
    }
}
