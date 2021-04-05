<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\AddInvoice;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class AddInvoiceRequest implements RequestInterface
{
    private int $orderId;
    private int $seriesId;

    public function __construct(int $orderId, int $seriesId)
    {
        $this->orderId = $orderId;
        $this->seriesId = $seriesId;
    }

    public function toArray(): array
    {
        return [
            'order_id' => $this->orderId,
            'series_id' => $this->seriesId,
        ];
    }
}
