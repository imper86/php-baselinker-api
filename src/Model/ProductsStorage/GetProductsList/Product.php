<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsList;

class Product
{
    private string $productId;
    private string $ean;
    private string $sku;
    private string $name;
    private int $quantity;
    private float $priceBrutto;

    public function __construct(
        string $productId,
        string $ean,
        string $sku,
        string $name,
        int $quantity,
        float $priceBrutto
    ) {
        $this->productId = $productId;
        $this->ean = $ean;
        $this->sku = $sku;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->priceBrutto = $priceBrutto;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['product_id'],
            $data['ean'],
            $data['sku'],
            $data['name'],
            $data['quantity'],
            $data['price_brutto'],
        );
    }

    /**
     * @return string
     */
    public function getProductId(): string
    {
        return $this->productId;
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
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return float
     */
    public function getPriceBrutto(): float
    {
        return $this->priceBrutto;
    }
}
