<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\SetOrderPayment;

use Imper86\PhpBaselinkerApi\Model\AbstractRequest;

class SetOrderPaymentRequest extends AbstractRequest
{
    protected int $orderId;
    protected float $paymentDone;
    protected int $paymentDate;
    protected string $paymentComment;

    public function __construct(
        int $orderId,
        float $paymentDone,
        int $paymentDate,
        string $paymentComment
    ) {
        $this->orderId = $orderId;
        $this->paymentDone = $paymentDone;
        $this->paymentDate = $paymentDate;
        $this->paymentComment = $paymentComment;
    }
}
