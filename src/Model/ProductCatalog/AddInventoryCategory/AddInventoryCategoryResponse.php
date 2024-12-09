<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\AddInventoryCategory;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class AddInventoryCategoryResponse extends AbstractResponse
{
    private ?int $categoryId;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        $this->categoryId = $this->body['category_id'] ?? null;
    }

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }
}