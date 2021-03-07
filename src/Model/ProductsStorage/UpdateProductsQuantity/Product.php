<?php


namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\UpdateProductsQuantity;


/**
 * Class Product
 * @package Imper86\PhpBaselinkerApi\Model\ProductsStorage\UpdateProductsQuantity
 */
class Product
{
    /**
     * @var string
     */
    private string $productId;
    /**
     * @var string
     */
    private string $variantId;
    /**
     * @var int
     */
    private int $quantity;

    /**
     * Product constructor.
     * @param string $productId
     * @param string $variantId
     * @param int $quantity
     */
    public function __construct(string $productId, string $variantId, int $quantity)
    {
        $this->productId = $productId;
        $this->variantId = $variantId;
        $this->quantity = $quantity;
    }

    /**
     * @return mixed[]
     */
    public function toArray(): array
    {
        return [$this->productId, $this->variantId, $this->quantity];
    }
}
