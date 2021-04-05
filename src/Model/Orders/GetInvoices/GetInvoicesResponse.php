<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetInvoices;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class GetInvoicesResponse extends AbstractResponse
{
    /**
     * @var Invoice[]|null
     */
    private ?array $invoices = null;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        if (isset($this->body['invoices']) && is_array($this->body['invoices'])) {
            foreach ($this->body['invoices'] as $invoiceData) {
                $this->invoices[] = Invoice::fromPrimitives($invoiceData);
            }
        }
    }

    /**
     * @return Invoice[]|null
     */
    public function getInvoices(): ?array
    {
        return $this->invoices;
    }
}
