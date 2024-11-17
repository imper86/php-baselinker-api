<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventoryProductsData;

use Imper86\PhpBaselinkerApi\Model\AbstractRequest;

class GetInventoryProductsDataRequest extends AbstractRequest
{
    private int $inventoryId;
    private array $products;
    private ?bool $includeErpUnits;

    public function __construct(
        int $inventoryId,
        array $products,
        ?bool $includeErpUnits = null
    ) {
        $this->inventoryId = $inventoryId;
        $this->products = $products;
        $this->includeErpUnits = $includeErpUnits;
    }

    public function toArray(): array
    {
        return [
            'inventory_id' => $this->inventoryId,
            'products' => $this->products,
            'include_erp_units' => $this->includeErpUnits,
        ];
    }
}