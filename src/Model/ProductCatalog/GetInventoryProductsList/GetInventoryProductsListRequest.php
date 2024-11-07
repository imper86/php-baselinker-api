<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventoryProductsList;

use Imper86\PhpBaselinkerApi\Model\AbstractRequest;

class GetInventoryProductsListRequest extends AbstractRequest
{
    private int $inventoryId;
    private ?int $page;
    private ?string $filterSort;
    private ?int $filterId;
    private ?int $filterCategoryId;
    private ?string $filterEan;
    private ?string $filterSku;
    private ?string $filterName;
    private ?float $filterPriceFrom;
    private ?float $filterPriceTo;
    private ?int $filterStockFrom;
    private ?int $filterStockTo;

    public function __construct(
        int $inventoryId,
        ?int $page = null,
        ?string $filterSort = null,
        ?int $filterId = null,
        ?int $filterCategoryId = null,
        ?string $filterEan = null,
        ?string $filterSku = null,
        ?string $filterName = null,
        ?float $filterPriceFrom = null,
        ?float $filterPriceTo = null,
        ?int $filterStockFrom = null,
        ?int $filterStockTo = null
    ) {
        $this->inventoryId = $inventoryId;
        $this->page = $page;
        $this->filterSort = $filterSort;
        $this->filterId = $filterId;
        $this->filterCategoryId = $filterCategoryId;
        $this->filterEan = $filterEan;
        $this->filterSku = $filterSku;
        $this->filterName = $filterName;
        $this->filterPriceFrom = $filterPriceFrom;
        $this->filterPriceTo = $filterPriceTo;
        $this->filterStockFrom = $filterStockFrom;
        $this->filterStockTo = $filterStockTo;
    }

    public function toArray(): array
    {
        return [
            'inventory_id' => $this->inventoryId,
            'filter_id' => $this->filterId,
            'filter_category_id' => $this->filterCategoryId,
            'filter_ean' => $this->filterEan,
            'filter_sku' => $this->filterSku,
            'filter_name' => $this->filterName,
            'filter_price_from' => $this->filterPriceFrom,
            'filter_price_to' => $this->filterPriceTo,
            'filter_stock_from' => $this->filterStockFrom,
            'filter_stock_to' => $this->filterStockTo,
            'page' => $this->page,
            'filter_sort' => $this->filterSort,
        ];
    }
}