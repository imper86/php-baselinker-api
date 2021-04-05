<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetReceipt;

class ReceiptExchange
{
    private ?string $currency;
    private ?float $rate;
    private ?string $date;
    private ?string $info;

    public function __construct(?string $currency, ?float $rate, ?string $date, ?string $info)
    {
        $this->currency = $currency;
        $this->rate = $rate;
        $this->date = $date;
        $this->info = $info;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['exchange_currency'],
            $data['exchange_rate'],
            $data['exchange_date'],
            $data['exchange_info'],
        );
    }

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @return float|null
     */
    public function getRate(): ?float
    {
        return $this->rate;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @return string|null
     */
    public function getInfo(): ?string
    {
        return $this->info;
    }
}
