<?php

declare(strict_types=1);

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventoryProductsStock;

use Imper86\PhpBaselinkerApi\Model\AbstractRequest;

class GetInventoryProductsStockRequest extends AbstractRequest
{
    private int $inventoryId;
    private ?int $page;

    public function __construct(
        int $inventoryId,
        ?int $page = null
    ) {
        $this->inventoryId = $inventoryId;
        $this->page = $page;
    }

    public function toArray(): array
    {
        return [
            'inventory_id' => $this->inventoryId,
            'page' => $this->page,
        ];
    }
}
