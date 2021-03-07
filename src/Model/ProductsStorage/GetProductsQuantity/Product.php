<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsQuantity;

/**
 * Class Product
 * @package Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsQuantity
 */
class Product
{
    /**
     * @var string
     */
    private string $productId;
    /**
     * @var int
     */
    private int $quantity;
    /**
     * @var Variant[]
     */
    private array $variants;

    /**
     * Product constructor.
     * @param string $productId
     * @param int $quantity
     * @param Variant[] $variants
     */
    public function __construct(string $productId, int $quantity, array $variants)
    {
        $this->productId = $productId;
        $this->quantity = $quantity;
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
            $data['quantity'],
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
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return Variant[]
     */
    public function getVariants(): array
    {
        return $this->variants;
    }
}
