<?php

declare(strict_types=1);

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\UpdateInventoryProductsStock;

use Imper86\PhpBaselinkerApi\Model\AbstractRequest;

class UpdateInventoryProductsStockRequest extends AbstractRequest
{
    private int $inventoryId;
    private array $products;

    public function __construct(
        int $inventoryId,
        array $products
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
