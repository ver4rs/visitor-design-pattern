<?php

namespace App\Collection;

use App\Entity\OrderInterface;
use App\Exceptions\DuplicateOrderIdException;

class OrderCollection
{
    /** @var array */
    private $items = [];

    /**
     * @param OrderInterface $order
     *
     * @throws DuplicateOrderIdException
     */
    public function add(OrderInterface $order)
    {
        if (!empty($this->items[$order->getId()])) {
            throw new DuplicateOrderIdException($order->getId());
        }

        $this->items[$order->getId()] = $order;
    }

    /**
     * @param int $orderId
     *
     * @return OrderInterface|null
     */
    public function find(int $orderId): ?OrderInterface
    {
        if (empty($this->items[$orderId])) {
            return null;
        }

        return $this->items[$orderId];
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function count(): int
    {
        return count($this->items);
    }
}
