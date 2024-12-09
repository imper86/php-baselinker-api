<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventoryCategories;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class GetInventoryCategoriesResponse extends AbstractResponse
{
    private ?array $categories;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        $this->categories = $this->body['categories'] ?? [];
    }

    public function getCategories(): ?array
    {
        return $this->categories;
    }
}