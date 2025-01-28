<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventoryPriceGroups;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class GetInventoryPriceGroupsResponse extends AbstractResponse
{
    private array $priceGroups;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        $this->priceGroups = $this->body['price_groups'] ?? [];
    }

    public function getPriceGroups(): array
    {
        return $this->priceGroups;
    }
}