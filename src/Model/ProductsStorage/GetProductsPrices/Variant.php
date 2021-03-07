<?php


namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsPrices;


/**
 * Class Variant
 * @package Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsPrices
 */
class Variant
{
    /**
     * @var string
     */
    private string $variantId;
    /**
     * @var float
     */
    private float $price;

    /**
     * Variant constructor.
     * @param string $variantId
     * @param float $price
     */
    public function __construct(string $variantId, float $price)
    {
        $this->variantId = $variantId;
        $this->price = $price;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self($data['variant_id'], $data['price']);
    }

    /**
     * @return string
     */
    public function getVariantId(): string
    {
        return $this->variantId;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}
