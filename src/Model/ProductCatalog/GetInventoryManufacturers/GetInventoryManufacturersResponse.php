<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventoryManufacturers;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class GetInventoryManufacturersResponse extends AbstractResponse
{
    private ?array $manufacturers;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        $this->manufacturers = $this->body['manufacturers'] ?? [];
    }

    public function getManufacturers(): ?array
    {
        return $this->manufacturers;
    }
}