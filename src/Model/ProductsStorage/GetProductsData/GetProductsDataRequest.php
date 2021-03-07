<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsData;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

/**
 * Class GetProductsDataRequest
 * @package Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsData
 */
class GetProductsDataRequest implements RequestInterface
{
    /**
     * @var string
     */
    private string $storageId;
    /**
     * @var string[]
     */
    private array $products;

    /**
     * GetProductsDataRequest constructor.
     * @param string $storageId
     * @param string[] $products
     */
    public function __construct(string $storageId, array $products)
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
            'products' => $this->products,
        ];
    }
}
