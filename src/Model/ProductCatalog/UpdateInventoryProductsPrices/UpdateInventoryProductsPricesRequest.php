<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\UpdateInventoryProductsPrices;

use Imper86\PhpBaselinkerApi\Model\AbstractRequest;

class UpdateInventoryProductsPricesRequest extends AbstractRequest
{
    private int $inventoryId;
    private array $products;

    public function __construct(
        int $inventoryId,
        array $products,
    ) {
        $this->inventoryId = $inventoryId;
        $this->products = $products;
    }

    public function toArray(): array
    {
        return [
            'inventory_id' => $this->inventoryId,
            'products' => $this->products,
        ];
    }
}