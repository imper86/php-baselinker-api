<?php

declare(strict_types=1);

namespace Imper86\PhpBaselinkerApi\Resource;

use Imper86\PhpBaselinkerApi\Model\AbstractResource;
use Imper86\PhpBaselinkerApi\Model\ProductCatalog\AddInventoryProduct\AddInventoryProductRequest;
use Imper86\PhpBaselinkerApi\Model\ProductCatalog\AddInventoryProduct\AddInventoryProductResponse;
use Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventories\GetInventoriesResponse;
use Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventoryProductsData\GetInventoryProductsDataRequest;
use Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventoryProductsData\GetInventoryProductsDataResponse;
use Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventoryProductsList\GetInventoryProductsListRequest;
use Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventoryProductsList\GetInventoryProductsListResponse;
use Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventoryProductsStock\GetInventoryProductsStockRequest;
use Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventoryProductsStock\GetInventoryProductsStockResponse;
use Imper86\PhpBaselinkerApi\Model\ProductCatalog\UpdateInventoryProductsStock\UpdateInventoryProductsStockRequest;
use Imper86\PhpBaselinkerApi\Model\ProductCatalog\UpdateInventoryProductsStock\UpdateInventoryProductsStockResponse;

class ProductCatalog extends AbstractResource
{
    public function getInventories(): GetInventoriesResponse
    {
        return new GetInventoriesResponse($this->sendRequest(__FUNCTION__));
    }

    public function getInventoryProductsStock(
        GetInventoryProductsStockRequest $request
    ): GetInventoryProductsStockResponse {
        return new GetInventoryProductsStockResponse(
            $this->sendRequest(__FUNCTION__, $request->toArray()),
        );
    }

    public function getInventoryProductsList(
        GetInventoryProductsListRequest $request
    ): GetInventoryProductsListResponse {
        return new GetInventoryProductsListResponse(
            $this->sendRequest(__FUNCTION__, $request->toArray()),
        );
    }

    public function addInventoryProduct(AddInventoryProductRequest $request): AddInventoryProductResponse
    {
        return new AddInventoryProductResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function getInventoryProductsData(GetInventoryProductsDataRequest $request): GetInventoryProductsDataResponse
    {
        return new GetInventoryProductsDataResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function updateInventoryProductsStock(
        UpdateInventoryProductsStockRequest $request
    ): UpdateInventoryProductsStockResponse {
        return new UpdateInventoryProductsStockResponse(
            $this->sendRequest(__FUNCTION__, $request->toArray()),
        );
    }
}
