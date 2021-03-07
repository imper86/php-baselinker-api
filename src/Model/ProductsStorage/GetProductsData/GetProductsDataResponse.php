<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsData;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class GetProductsDataResponse extends AbstractResponse
{
    /**
     * @var string|null
     */
    private ?string $storageId;
    /**
     * @var ProductData[]|null
     */
    private ?array $products = null;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        $this->storageId = $this->body['storage_id'] ?? null;

        if (isset($this->body['products']) && is_array($this->body['products'])) {
            $this->products = array_map(
                fn(array $productData) => ProductData::fromPrimitives($productData),
                $this->body['products'],
            );
        }
    }

    /**
     * @return string|null
     */
    public function getStorageId(): ?string
    {
        return $this->storageId;
    }

    /**
     * @return ProductData[]|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }
}
