<?php

declare(strict_types=1);

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventoryProductsStock;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

use function array_map;

class GetInventoryProductsStockResponse extends AbstractResponse
{
    /**
     * @var array<string, Product>|null
     */
    private ?array $products;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        if (isset($this->body['products'])) {
            $this->products = array_map(
                fn (array $data): Product => Product::fromPrimitives($data),
                $this->body['products'] ?? [],
            );
        }
    }

    public function getProducts(): ?array
    {
        return $this->products;
    }
}
