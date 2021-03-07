<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsPrices;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class GetProductsPricesRequest implements RequestInterface
{
    private string $storageId;
    private ?int $page;

    public function __construct(string $storageId, ?int $page = null)
    {
        $this->storageId = $storageId;
        $this->page = $page;
    }

    public function toArray(): array
    {
        return [
            'storage_id' => $this->storageId,
            'page' => $this->page,
        ];
    }
}
