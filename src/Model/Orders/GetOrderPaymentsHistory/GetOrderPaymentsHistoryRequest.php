<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrderPaymentsHistory;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class GetOrderPaymentsHistoryRequest implements RequestInterface
{
    private int $orderId;
    private ?bool $showFullHistory;

    public function __construct(int $orderId, ?bool $showFullHistory = null)
    {
        $this->orderId = $orderId;
        $this->showFullHistory = $showFullHistory;
    }

    public function toArray(): array
    {
        return [
            'order_id' => $this->orderId,
            'show_full_history' => $this->showFullHistory,
        ];
    }
}
