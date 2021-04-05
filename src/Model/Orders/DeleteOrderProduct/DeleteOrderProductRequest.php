<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\DeleteOrderProduct;

use Imper86\PhpBaselinkerApi\Model\AbstractRequest;

class DeleteOrderProductRequest extends AbstractRequest
{
    protected int $orderId;
    protected int $orderProductId;

    public function __construct(int $orderId, int $orderProductId)
    {
        $this->orderId = $orderId;
        $this->orderProductId = $orderProductId;
    }
}
