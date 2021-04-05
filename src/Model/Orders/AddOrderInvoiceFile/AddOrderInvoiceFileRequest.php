<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\AddOrderInvoiceFile;

use Imper86\PhpBaselinkerApi\Model\AbstractRequest;

class AddOrderInvoiceFileRequest extends AbstractRequest
{
    protected int $invoiceId;
    protected string $file;
    protected string $externalInvoiceNumber;

    public function __construct(int $invoiceId, string $file, string $externalInvoiceNumber)
    {
        $this->invoiceId = $invoiceId;
        $this->file = $file;
        $this->externalInvoiceNumber = $externalInvoiceNumber;
    }
}
