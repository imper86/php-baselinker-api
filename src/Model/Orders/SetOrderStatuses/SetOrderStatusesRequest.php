<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\SetOrderStatuses;

use Imper86\PhpBaselinkerApi\Model\AbstractRequest;

class SetOrderStatusesRequest extends AbstractRequest
{
    protected array $orderIds;
    protected int $statusId;

    public function __construct(array $orderIds, int $statusId)
    {
        $this->orderIds = $orderIds;
        $this->statusId = $statusId;
    }
}
