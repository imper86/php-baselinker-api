<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventoryCategories;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class GetInventoryCategoriesRequest implements RequestInterface
{
    private int $inventoryId;

    public function __construct(
        int $inventoryId
    ) {
        $this->inventoryId = $inventoryId;
    }

    public function toArray(): array
    {
        return [
            'inventory_id' => $this->inventoryId,
        ];
    }
}