<?php


namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\DeleteProduct;


use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class DeleteProductRequest implements RequestInterface
{
    private string $storageId;
    private string $productId;

    public function __construct(string $storageId, string $productId)
    {
        $this->storageId = $storageId;
        $this->productId = $productId;
    }

    public function toArray(): array
    {
        return [
            'storage_id' => $this->storageId,
            'product_id' => $this->productId,
        ];
    }
}
