<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\AddInvoice;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class AddInvoiceResponse extends AbstractResponse
{
    private ?int $invoiceId = null;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        $this->invoiceId = $this->body['invoice_id'] ?? null;
    }

    /**
     * @return int|null
     */
    public function getInvoiceId(): ?int
    {
        return $this->invoiceId;
    }
}
