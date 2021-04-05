<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\SetOrderStatus;

use Imper86\PhpBaselinkerApi\Model\AbstractRequest;

class SetOrderStatusRequest extends AbstractRequest
{
    protected int $orderId;
    protected int $statusId;

    public function __construct(int $orderId, int $statusId)
    {
        $this->orderId = $orderId;
        $this->statusId = $statusId;
    }
}
