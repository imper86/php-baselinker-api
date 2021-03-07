<?php

namespace Imper86\PhpBaselinkerApi\Resource;

use Imper86\PhpBaselinkerApi\Model\AbstractResource;
use Imper86\PhpBaselinkerApi\Model\EmptyResponse;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddCategory\AddCategoryRequest;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddCategory\AddCategoryResponse;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddProduct\AddProductRequest;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddProduct\AddProductResponse;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddProductVariant\AddProductVariantRequest;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddProductVariant\AddProductVariantResponse;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\DeleteCategory\DeleteCategoryRequest;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\DeleteProduct\DeleteProductRequest;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\DeleteProductVariant\DeleteProductVariantRequest;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetCategories\GetCategoriesRequest;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetCategories\GetCategoriesResponse;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsData\GetProductsDataRequest;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsData\GetProductsDataResponse;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsList\GetProductsListRequest;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsList\GetProductsListResponse;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsPrices\GetProductsPricesRequest;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsPrices\GetProductsPricesResponse;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsQuantity\GetProductsQuantityRequest;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsQuantity\GetProductsQuantityResponse;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetStoragesList\GetStoragesListResponse;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\UpdateProductsPrices\UpdateProductsPricesRequest;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\UpdateProductsPrices\UpdateProductsPricesResponse;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\UpdateProductsQuantity\UpdateProductsQuantityRequest;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\UpdateProductsQuantity\UpdateProductsQuantityResponse;

class ProductsStorage extends AbstractResource
{
    //    public function test(string $method, ?array $request = null): array
    //    {
    //        $response = $this->sendRequest($method, $request);
    //
    //        return json_decode($response->getBody()->__toString(), true);
    //    }

    public function getStoragesList(): GetStoragesListResponse
    {
        return new GetStoragesListResponse($this->sendRequest(__FUNCTION__));
    }

    public function addCategory(AddCategoryRequest $request): AddCategoryResponse
    {
        return new AddCategoryResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function addProduct(AddProductRequest $request): AddProductResponse
    {
        return new AddProductResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function addProductVariant(AddProductVariantRequest $request): AddProductVariantResponse
    {
        return new AddProductVariantResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function deleteCategory(DeleteCategoryRequest $request): EmptyResponse
    {
        return new EmptyResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function deleteProduct(DeleteProductRequest $request): EmptyResponse
    {
        return new EmptyResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function deleteProductVariant(DeleteProductVariantRequest $request): EmptyResponse
    {
        return new EmptyResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function getCategories(GetCategoriesRequest $request): GetCategoriesResponse
    {
        return new GetCategoriesResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function getProductsData(GetProductsDataRequest $request): GetProductsDataResponse
    {
        return new GetProductsDataResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function getProductsList(GetProductsListRequest $request): GetProductsListResponse
    {
        return new GetProductsListResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function getProductsQuantity(
        GetProductsQuantityRequest $request
    ): GetProductsQuantityResponse {
        return new GetProductsQuantityResponse(
            $this->sendRequest(__FUNCTION__, $request->toArray()),
        );
    }

    public function getProductsPrices(GetProductsPricesRequest $request): GetProductsPricesResponse
    {
        return new GetProductsPricesResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function updateProductsQuantity(
        UpdateProductsQuantityRequest $request
    ): UpdateProductsQuantityResponse {
        return new UpdateProductsQuantityResponse(
            $this->sendRequest(__FUNCTION__, $request->toArray()),
        );
    }

    public function updateProductsPrices(
        UpdateProductsPricesRequest $request
    ): UpdateProductsPricesResponse {
        return new UpdateProductsPricesResponse(
            $this->sendRequest(__FUNCTION__, $request->toArray()),
        );
    }
}
