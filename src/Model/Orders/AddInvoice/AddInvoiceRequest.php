<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\AddInvoice;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class AddInvoiceRequest implements RequestInterface
{
    private int $orderId;
    private int $seriesId;

    private mixed $vatRate;

    public function __construct(int $orderId, int $seriesId, mixed $vatRate = 'DEFAULT')
    {
        $this->orderId = $orderId;
        $this->seriesId = $seriesId;
        $this->vatRate = $vatRate;
    }

    public function toArray(): array
    {
        return [
            'order_id' => $this->orderId,
            'series_id' => $this->seriesId,
            'vat_rate' => $this->vatRate,
        ];
    }
}
