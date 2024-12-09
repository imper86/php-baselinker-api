<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\AddInventoryCategory;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class AddInventoryCategoryRequest implements RequestInterface
{
    private int $inventoryId;
    private ?int $categoryId;
    private string $name;
    private int $parentId;

    public function __construct(
        int $inventoryId,
        ?int $categoryId,
        string $name,
        int $parentId
    ) {
        $this->inventoryId = $inventoryId;
        $this->categoryId = $categoryId;
        $this->name = $name;
        $this->parentId = $parentId;
    }

    public function toArray(): array
    {
        return [
            'inventory_id' => $this->inventoryId,
            'category_id' => $this->categoryId,
            'name' => $this->name,
            'parent_id' => $this->parentId,
        ];
    }
}