<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\AddInventoryManufacturer;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class AddInventoryManufacturerRequest implements RequestInterface
{
    private ?int $manufacturerId;
    private string $name;

    public function __construct(
        ?int $manufacturerId,
        string $name
    ) {
        $this->manufacturerId = $manufacturerId;
        $this->name = $name;
    }

    public function toArray(): array
    {
        return [
            'manufacturer_id' => $this->manufacturerId,
            'name' => $this->name,
        ];
    }
}