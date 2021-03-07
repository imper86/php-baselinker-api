<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\DeleteCategory;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class DeleteCategoryRequest implements RequestInterface
{
    private string $storageId;
    private int $categoryId;

    public function __construct(string $storageId, int $categoryId)
    {
        $this->storageId = $storageId;
        $this->categoryId = $categoryId;
    }

    public function toArray(): array
    {
        return [
            'storage_id' => $this->storageId,
            'category_id' => $this->categoryId,
        ];
    }
}
