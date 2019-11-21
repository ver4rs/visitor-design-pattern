<?php

namespace App\Http\Handlers\Action;

use App\Exceptions\OrderNotFoundException;
use App\Repository\OrderRepository;
use App\ValueObject\ViewData;
use App\Visitor\BenefitReport;

/**
 * Class ShowOrderHandler
 */
class ShowOrderHandler
{
    /** @var OrderRepository */
    private $orderRepository;

    /** @var BenefitReport $benefitReport */
    private $benefitReport;

    /**
     * @param OrderRepository $orderRepository
     */
    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    /**
     * @param int $orderId
     *
     * @return ViewData
     * @throws OrderNotFoundException
     */
    public function viewOrderDetails(int $orderId): ViewData
    {
        $order = $this->orderRepository->getOrderById($orderId);

        $viewParams = [
            'order' => $order,
            'benefitReport' => [], //$benefitReport->getReport(),
        ];

        return new ViewData('order.show', $viewParams);
    }
}
