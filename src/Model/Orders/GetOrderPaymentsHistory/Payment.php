<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrderPaymentsHistory;

class Payment
{
    private float $paidBefore;
    private float $paidAfter;
    private float $totalPrice;
    private string $currency;
    private string $externalPaymentId;
    private int $date;

    public function __construct(
        float $paidBefore,
        float $paidAfter,
        float $totalPrice,
        string $currency,
        string $externalPaymentId,
        int $date
    ) {
        $this->paidBefore = $paidBefore;
        $this->paidAfter = $paidAfter;
        $this->totalPrice = $totalPrice;
        $this->currency = $currency;
        $this->externalPaymentId = $externalPaymentId;
        $this->date = $date;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['paid_before'],
            $data['paid_after'],
            $data['total_price'],
            $data['currency'],
            $data['external_payment_id'],
            $data['date'],
        );
    }

    /**
     * @return float
     */
    public function getPaidBefore(): float
    {
        return $this->paidBefore;
    }

    /**
     * @return float
     */
    public function getPaidAfter(): float
    {
        return $this->paidAfter;
    }

    /**
     * @return float
     */
    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return string
     */
    public function getExternalPaymentId(): string
    {
        return $this->externalPaymentId;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }
}
