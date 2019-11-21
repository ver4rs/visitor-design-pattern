<?php

namespace App\Repository;

use App\Entity\OrderInterface;
use App\Exceptions\OrderNotFoundException;

interface OrderRepository
{
    /**
     * @param int $id
     *
     * @return OrderInterface|null
     */
    public function findOrderById(int $id): ?OrderInterface;

    /**
     * @param int $id
     *
     * @return OrderInterface
     * @throws OrderNotFoundException
     */
    public function getOrderById(int $id): OrderInterface;
}
