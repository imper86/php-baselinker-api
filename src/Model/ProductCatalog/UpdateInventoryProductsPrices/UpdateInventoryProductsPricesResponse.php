<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\UpdateInventoryProductsPrices;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class UpdateInventoryProductsPricesResponse extends AbstractResponse
{
    private ?int $counter;

    private ?array $warnings;

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