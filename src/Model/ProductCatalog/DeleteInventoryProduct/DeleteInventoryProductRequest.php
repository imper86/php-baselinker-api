<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\DeleteInventoryProduct;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class DeleteInventoryProductRequest implements RequestInterface
{
    private int $productId;

    public function __construct(
        int $productId
    ) {
        $this->productId = $productId;
    }

    public function toArray(): array
    {
        return ['product_id' => $this->productId];
    }
}