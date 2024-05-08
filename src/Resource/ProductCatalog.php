<?php

declare(strict_types=1);

namespace Imper86\PhpBaselinkerApi\Resource;

use Imper86\PhpBaselinkerApi\Model\AbstractResource;
use Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventories\GetInventoriesResponse;
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

    public function updateInventoryProductsStock(
        UpdateInventoryProductsStockRequest $request
    ): UpdateInventoryProductsStockResponse {
        return new UpdateInventoryProductsStockResponse(
            $this->sendRequest(__FUNCTION__, $request->toArray()),
        );
    }
}
