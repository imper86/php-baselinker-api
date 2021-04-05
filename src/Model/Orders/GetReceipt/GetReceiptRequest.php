<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetReceipt;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class GetReceiptRequest implements RequestInterface
{
    private ?int $receiptId;
    private ?int $orderId;

    public function __construct(?int $receiptId = null, ?int $orderId = null)
    {
        $this->receiptId = $receiptId;
        $this->orderId = $orderId;

        if (!$receiptId && !$orderId) {
            throw new \InvalidArgumentException('You must provide at least one argument');
        }
    }

    public function toArray(): array
    {
        return [
            'receipt_id' => $this->receiptId,
            'order_id' => $this->orderId,
        ];
    }
}
