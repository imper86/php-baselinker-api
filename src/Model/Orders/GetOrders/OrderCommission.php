<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrders;

class OrderCommission
{
    private float $net;
    private float $gross;
    private string $currency;

    public function __construct(
        float $net,
        float $gross,
        string $currency
    ) {
        $this->net = $net;
        $this->gross = $gross;
        $this->currency = $currency;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['net'],
            $data['gross'],
            $data['currency'],
        );
    }

    /**
     * @return float
     */
    public function getNet(): float
    {
        return $this->net;
    }

    /**
     * @return float
     */
    public function getGross(): float
    {
        return $this->gross;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
}
