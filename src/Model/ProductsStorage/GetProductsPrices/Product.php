<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsPrices;

/**
 * Class Product
 * @package Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsPrices
 */
class Product
{
    /**
     * @var string
     */
    private string $productId;
    /**
     * @var float
     */
    private float $price;
    /**
     * @var Variant[]
     */
    private array $variants;

    /**
     * Product constructor.
     * @param string $productId
     * @param float $price
     * @param Variant[] $variants
     */
    public function __construct(string $productId, float $price, array $variants)
    {
        $this->productId = $productId;
        $this->price = $price;
        $this->variants = $variants;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['product_id'],
            $data['price'],
            array_map(
                fn(array $variantData) => Variant::fromPrimitives($variantData),
                $data['variants'],
            ),
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
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return Variant[]
     */
    public function getVariants(): array
    {
        return $this->variants;
    }
}
