<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\DeleteInventoryCategory;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class DeleteInventoryCategoryRequest implements RequestInterface
{
    private int $categoryId;

    public function __construct(
        int $categoryId
    ) {
        $this->categoryId = $categoryId;
    }

    public function toArray(): array
    {
        return [
            'category_id' => $this->categoryId,
        ];
    }
}