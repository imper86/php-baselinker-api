<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\DeleteProductVariant;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class DeleteProductVariantRequest implements RequestInterface
{
    private string $storageId;
    private string $productId;
    private string $variantId;

    public function __construct(string $storageId, string $productId, string $variantId)
    {
        $this->storageId = $storageId;
        $this->productId = $productId;
        $this->variantId = $variantId;
    }

    public function toArray(): array
    {
        return [
            'storage_id' => $this->storageId,
            'product_id' => $this->productId,
            'variant_id' => $this->variantId,
        ];
    }
}
