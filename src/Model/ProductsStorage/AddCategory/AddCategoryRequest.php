<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddCategory;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class AddCategoryRequest implements RequestInterface
{
    private string $storageId;
    private ?int $categoryId;
    private string $name;
    private int $parentId;

    public function __construct(
        string $storageId,
        ?int $categoryId,
        string $name,
        int $parentId = 0
    ) {
        $this->storageId = $storageId;
        $this->categoryId = $categoryId;
        $this->name = $name;
        $this->parentId = $parentId;
    }

    public function toArray(): array
    {
        return [
            'storage_id' => $this->storageId,
            'category_id' => $this->categoryId,
            'name' => $this->name,
            'parent_id' => $this->parentId,
        ];
    }
}
