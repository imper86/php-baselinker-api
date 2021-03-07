<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsList;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class GetProductsListRequest implements RequestInterface
{
    private string $storageId;
    private ?int $page;
    private ?string $filterCategoryId;
    private ?string $filterLimit;
    private ?string $filterSort;
    private ?string $filterId;
    private ?string $filterEan;
    private ?string $filterSku;
    private ?string $filterName;
    private ?float $filterPriceFrom;
    private ?float $filterPriceTo;
    private ?int $filterQuantityFrom;
    private ?int $filterQuantityTo;
    private ?int $filterAvailable;

    public function __construct(
        string $storageId,
        ?int $page = null,
        ?string $filterCategoryId = null,
        ?string $filterLimit = null,
        ?string $filterSort = null,
        ?string $filterId = null,
        ?string $filterEan = null,
        ?string $filterSku = null,
        ?string $filterName = null,
        ?float $filterPriceFrom = null,
        ?float $filterPriceTo = null,
        ?int $filterQuantityFrom = null,
        ?int $filterQuantityTo = null,
        ?int $filterAvailable = null
    ) {
        $this->storageId = $storageId;
        $this->page = $page;
        $this->filterCategoryId = $filterCategoryId;
        $this->filterLimit = $filterLimit;
        $this->filterSort = $filterSort;
        $this->filterId = $filterId;
        $this->filterEan = $filterEan;
        $this->filterSku = $filterSku;
        $this->filterName = $filterName;
        $this->filterPriceFrom = $filterPriceFrom;
        $this->filterPriceTo = $filterPriceTo;
        $this->filterQuantityFrom = $filterQuantityFrom;
        $this->filterQuantityTo = $filterQuantityTo;
        $this->filterAvailable = $filterAvailable;
    }

    public function toArray(): array
    {
        return [
            'storage_id' => $this->storageId,
            'page' => $this->page,
            'filter_category_id' => $this->filterCategoryId,
            'filter_limit' => $this->filterLimit,
            'filter_sort' => $this->filterSort,
            'filter_id' => $this->filterId,
            'filter_ean' => $this->filterEan,
            'filter_sku' => $this->filterSku,
            'filter_name' => $this->filterName,
            'filter_price_from' => $this->filterPriceFrom,
            'filter_price_to' => $this->filterPriceTo,
            'filter_quantity_from' => $this->filterQuantityFrom,
            'filter_quantity_to' => $this->filterQuantityTo,
            'filter_available' => $this->filterAvailable,
        ];
    }
}
