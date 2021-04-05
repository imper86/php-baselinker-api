<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetNewReceipts;

class Product
{
    private string $name;
    private float $priceBrutto;
    private int $taxRate;
    private int $quantity;
    private string $sku;
    private string $ean;

    public function __construct(
        string $name,
        float $priceBrutto,
        int $taxRate,
        int $quantity,
        string $sku,
        string $ean
    ) {
        $this->name = $name;
        $this->priceBrutto = $priceBrutto;
        $this->taxRate = $taxRate;
        $this->quantity = $quantity;
        $this->sku = $sku;
        $this->ean = $ean;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['name'],
            $data['price_brutto'],
            $data['tax_rate'],
            $data['quantity'],
            $data['sku'],
            $data['ean'],
        );
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPriceBrutto(): float
    {
        return $this->priceBrutto;
    }

    /**
     * @return int
     */
    public function getTaxRate(): int
    {
        return $this->taxRate;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * @return string
     */
    public function getEan(): string
    {
        return $this->ean;
    }
}
