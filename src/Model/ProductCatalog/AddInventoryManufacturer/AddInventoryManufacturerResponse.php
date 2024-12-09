<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\AddInventoryManufacturer;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class AddInventoryManufacturerResponse extends AbstractResponse
{
    private ?int $manufacturerId = null;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        $this->manufacturerId = $this->body['manufacturer_id'] ?? null;
    }

    public function getManufacturerId(): ?int
    {
        return $this->manufacturerId;
    }
}