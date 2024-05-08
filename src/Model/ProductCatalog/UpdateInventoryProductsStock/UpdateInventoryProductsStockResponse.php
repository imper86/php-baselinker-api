<?php

declare(strict_types=1);

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\UpdateInventoryProductsStock;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class UpdateInventoryProductsStockResponse extends AbstractResponse
{
    private ?int $counter = 0;

    private ?array $warnings = null;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        $this->counter = $this->body['counter'] ?? 0;
        $this->warnings = $this->body['warnings'] ?? [];
    }

    public function getCounter(): ?int
    {
        return $this->counter;
    }

    public function getWarnings(): ?array
    {
        return $this->warnings;
    }
}
