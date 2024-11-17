<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\AddInventoryProduct;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class AddInventoryProductResponse extends AbstractResponse
{
    private ?string $productId;
    private ?array $warnings;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        $this->productId = $this->body['product_id'] ?? null;
        $this->warnings = $this->body['warnings'] ?? null;
    }

    public function getProductId(): ?string
    {
        return $this->productId;
    }

    public function getWarnings(): ?array
    {
        return $this->warnings;
    }
}