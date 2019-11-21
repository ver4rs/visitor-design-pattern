<?php

namespace App\Entity;

use App\Collection\ProductCollection;
use DateTime;

class Order implements OrderInterface
{
    /** @var UserInterface */
    private $user;

    /** @var int */
    private $id;

    /** @var DateTime */
    private $createdAt;

    /** @var ProductCollection */
    private $items;

    /** @var int */
    private $price;

    /**
     * @param UserInterface $user
     * @param int           $id
     * @param DateTime      $createdAt
     * @param ProductCollection         $items
     */
    public function __construct(UserInterface $user, int $id, DateTime $createdAt, ProductCollection $items)
    {
        $this->user      = $user;
        $this->id        = $id;
        $this->createdAt = $createdAt;
        $this->items     = $items;
    }

    /**
     * @return UserInterface
     */
    public function getUser(): UserInterface
    {
        return $this->user;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
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
    public function getFormattedDate(): string
    {
        return $this->getCreatedAt()->format('Y-m-d H:i');
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        if ($this->items->count() === 0) {
            return 0;
        }

        $total = 0;

        foreach ($this->getItems() as $product) {
            $total = $total + $product->getPrice();
        }

        return $total;
    }
}
