<?php

namespace App\Repository\DummyORM;

use App\Collection\OrderCollection;
use App\Entity\OrderInterface;
use App\Exceptions\OrderNotFoundException;
use App\Repository\OrderRepository;

class DummyOrderRepository implements OrderRepository
{
    /** @var OrderCollection */
    private $orderCollection;

    /**
     * @param OrderCollection $orderCollection
     */
    public function __construct(OrderCollection $orderCollection)
    {
        $this->orderCollection = $orderCollection;
    }

    /**
     * @param int $id
     *
     * @return OrderInterface|null
     */
    public function findOrderById(int $id): ?OrderInterface
    {
        return $this->orderCollection->find($id);
    }

    /**
     * @param int $id
     *
     * @return OrderInterface
     * @throws OrderNotFoundException
     */
    public function getOrderById(int $id): OrderInterface
    {
        $order = $this->findOrderById($id);

        if ($order === null) {
            throw new OrderNotFoundException($id);
        }

        return $order;
    }
}
