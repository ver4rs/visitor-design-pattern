<?php

namespace App\Http\Controllers;

use App\Exceptions\OrderNotFoundException;
use App\Http\Handlers\Action\ShowOrderHandler;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class OrderController extends Controller
{
    /** @var ShowOrderHandler */
    private $showOrderHandler;

    /**
     * @param ShowOrderHandler $showOrderHandler
     */
    public function __construct(ShowOrderHandler $showOrderHandler)
    {
        $this->showOrderHandler = $showOrderHandler;
    }

    /**
     * @param int $id
     *
     * @return Factory|View
     * @throws OrderNotFoundException
     */
    public function show(int $id)
    {
        $showOrderView = $this->showOrderHandler->viewOrderDetails($id);

        return view($showOrderView->getTemplateName(), $showOrderView->getViewData());
    }
}
