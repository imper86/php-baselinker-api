<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\DeleteInventoryManufacturer;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class DeleteInventoryManufacturerRequest implements RequestInterface
{
    private int $manufacturerId;

    public function __construct(
        int $manufacturerId
    ) {
        $this->manufacturerId = $manufacturerId;
    }

    public function toArray(): array
    {
        return [
            'manufacturer_id' => $this->manufacturerId,
        ];
    }
}