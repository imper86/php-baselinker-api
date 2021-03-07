<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\UpdateProductsQuantity;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

/**
 * Class UpdateProductsQuantityRequest
 * @package Imper86\PhpBaselinkerApi\Model\ProductsStorage\UpdateProductsQuantity
 */
class UpdateProductsQuantityRequest implements RequestInterface
{
    /**
     * @var string
     */
    private string $storageId;
    /**
     * @var Product[]
     */
    private array $products;

    /**
     * UpdateProductsQuantityRequest constructor.
     * @param string $storageId
     * @param Product ...$products
     */
    public function __construct(string $storageId, Product ...$products)
    {
        $this->storageId = $storageId;
        $this->products = $products;
    }

    /**
     * @return mixed[]
     */
    public function toArray(): array
    {
        return [
            'storage_id' => $this->storageId,
            'products' => array_map(fn(Product $product) => $product->toArray(), $this->products),
        ];
    }
}
