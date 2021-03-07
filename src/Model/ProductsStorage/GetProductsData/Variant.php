<?php


namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsData;


class Variant
{
    private string $variantId;
    private string $ean;
    private string $sku;
    private string $name;
    private float $price;
    private int $quantity;

    public function __construct(string $variantId, string $ean, string $sku, string $name, float $price, int $quantity)
    {
        $this->variantId = $variantId;
        $this->ean = $ean;
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getVariantId(): string
    {
        return $this->variantId;
    }

    /**
     * @return string
     */
    public function getEan(): string
    {
        return $this->ean;
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
}
