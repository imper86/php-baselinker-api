<?php


namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetCategories;


use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class GetCategoriesRequest implements RequestInterface
{
    private string $storageId;

    public function __construct(string $storageId)
    {
        $this->storageId = $storageId;
    }

    public function toArray(): array
    {
        return ['storage_id' => $this->storageId];
    }
}
