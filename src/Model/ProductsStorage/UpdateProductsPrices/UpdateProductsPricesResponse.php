<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\UpdateProductsPrices;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

/**
 * Class UpdateProductsPricesResponse
 * @package Imper86\PhpBaselinkerApi\Model\ProductsStorage\UpdateProductsPrices
 */
class UpdateProductsPricesResponse extends AbstractResponse
{
    /**
     * @var int|null
     */
    private ?int $counter;
    /**
     * @var mixed[]|null
     */
    private ?array $warnings;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        $this->counter = $this->body['counter'] ?? null;
        $this->warnings = $this->body['warnings'] ?? null;
    }

    /**
     * @return int|null
     */
    public function getCounter(): ?int
    {
        return $this->counter;
    }

    /**
     * @return mixed[]|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }
}
