<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventoryProductsData;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

use function array_map;

class GetInventoryProductsDataResponse extends AbstractResponse
{
    /**
     * @var Product[]|null
     */
    private ?array $products = null;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        if (isset($this->body['products'])) {
            $this->products = array_map(
                static fn(array $data): Product => Product::fromPrimitives($data),
                $this->body['products'] ?? [],
            );
        }
    }

    public function getProducts(): ?array
    {
        return $this->products;
    }
}