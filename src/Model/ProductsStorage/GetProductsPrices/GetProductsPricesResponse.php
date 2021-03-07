<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsPrices;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

/**
 * Class GetProductsPricesResponse
 * @package Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsPrices
 */
class GetProductsPricesResponse extends AbstractResponse
{
    /**
     * @var string|null
     */
    private ?string $storageId;
    /**
     * @var Product[]|null
     */
    private ?array $products = null;

    /**
     * GetProductsPricesResponse constructor.
     * @param HttpResponseInterface $httpResponse
     */
    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        $this->storageId = $this->body['storage_id'] ?? null;

        if (isset($this->body['products']) && is_array($this->body['products'])) {
            $this->products = array_map(
                fn(array $data) => Product::fromPrimitives($data),
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
     * @return Product[]|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }
}
