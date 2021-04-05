<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetReceipt;

/**
 * Class ReceiptItem
 * @package Imper86\PhpBaselinkerApi\Model\Orders\GetReceipt
 */
class ReceiptItem
{
    /**
     * @var string
     */
    private string $name;
    /**
     * @var string
     */
    private string $sku;
    /**
     * @var string
     */
    private string $ean;
    /**
     * @var float
     */
    private float $priceBrutto;
    /**
     * @var int
     */
    private int $taxRate;
    /**
     * @var int
     */
    private int $quantity;

    /**
     * ReceiptItem constructor.
     * @param string $name
     * @param string $sku
     * @param string $ean
     * @param float $priceBrutto
     * @param int $taxRate
     * @param int $quantity
     */
    public function __construct(
        string $name,
        string $sku,
        string $ean,
        float $priceBrutto,
        int $taxRate,
        int $quantity
    ) {
        $this->name = $name;
        $this->sku = $sku;
        $this->ean = $ean;
        $this->priceBrutto = $priceBrutto;
        $this->taxRate = $taxRate;
        $this->quantity = $quantity;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['name'],
            $data['sku'],
            $data['ean'],
            $data['price_brutto'],
            $data['tax_rate'],
            $data['quantity'],
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
}
